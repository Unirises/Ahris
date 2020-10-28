<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\User;
use App\Company;
use App\Contacts;
use App\CurrentCompanyLog;
use App\Accounts;
use DB;
use App\TaxRate;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Session;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','role:user','verified']);
    }

    public function exportTest(Request $req)
    {
       $companyID = $req->session()->get('company_id');
       $contactExport = new ContactsExport($companyID);
    //    $cc = Contacts::select('displayname', 'company_name',  'firstname','lastname', 'contact_type', 'type','email','phone_number','mobile_number','fax','other','website','street','barangay','city','province','zipcode')->where('company_id', $companyID)->get();
    //    return $cc; 
       return Excel::download($contactExport, 'contacts.csv');
  
    }
    public function exportSupplier(Request $req)
    {
       $companyID = $req->session()->get('company_id');
       $contactExport = new ContactsExport($companyID);
       $contactExport->setType('supplier');
       //    $cc = Contacts::select('displayname', 'company_name',  'firstname','lastname', 'contact_type', 'type','email','phone_number','mobile_number','fax','other','website','street','barangay','city','province','zipcode')->where('company_id', $companyID)->get();
    //    return $cc; 
       return Excel::download($contactExport, 'contacts.csv');
  
    }
    public function exportCustomer(Request $req)
    {
       $companyID = $req->session()->get('company_id');
       $contactExport = new ContactsExport($companyID);
       $contactExport->setType('customer');
    //    $cc = Contacts::select('displayname', 'company_name',  'firstname','lastname', 'contact_type', 'type','email','phone_number','mobile_number','fax','other','website','street','barangay','city','province','zipcode')->where('company_id', $companyID)->get();
    //    return $cc; 
       return Excel::download($contactExport, 'contacts.csv');
  
    }

    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $checkUserHasCompany = Company::where('user_id',$user_id)->get()->toArray();
        if (!$checkUserHasCompany) {
            return redirect(route('company-create-form'));
        }
        else{
         
            $companyLog  = CurrentCompanyLog::where('user_id',$user_id)->get()->toArray();
            $company = Company::where('id',$companyLog[0]['company_id'])->get()->toArray();
            $companyDetails = array(
                'companyName' => $company[0]['company_name'],
                'company_id' => $companyLog[0]['company_id'],
                'user_id' => $user_id
            );
            $mySession = session($companyDetails);
            return view('user.index', compact('user'));
        }

    }

  
    public function testEdit($contactID)
    {   $decrypted = Crypt::decryptString($contactID);
        $contacts = Contacts::where('id',$decrypted)->get()->toArray();
        $contact_person = DB::table('contact_person_address')->where('contact_id',$decrypted)->get()->toArray();
        $contact_tax = DB::table('contact_tax_details')->where('contact_id',$decrypted)->get()->toArray();
        // return $contacts;
        return view('dashboard.edit-contacts', compact('contacts'))->with('contact',array('person' => $contact_person[0],'tax' => $contact_tax[0], 'id'=>$contactID));
    }
    public function updateContacts(Request $req)
    {
        $decrypted = Crypt::decryptString($req->input('contact_id'));
        $contacts = Contacts::find($decrypted);
        if (isset($req->firstname) && isset($req->lastname)) {
            $contacts->firstname = $req->input('firstname');
            $contacts->lastname = $req->input('lastname');
            $contacts->company_name = null;
        }
        else{
            $contacts->company_name = $req->input('company_name');
            $contacts->firstname = null;
            $contacts->lastname = null;
        }
        $contacts->displayname = $req->input('displayname');
        $contacts->email = $req->input('email');
        $contacts->phone_number = $req->input('phone');
        $contacts->mobile_number = $req->input('mobile');
        $contacts->fax = $req->input('fax');
        $contacts->other = $req->input('other');
        $contacts->website = $req->input('website');
        $contacts->street = $req->input('address');
        $contacts->barangay = $req->input('barangay');
        $contacts->city = $req->input('city');
        $contacts->province = $req->input('province');
        $contacts->zipcode = $req->input('zip_code');
        $contacts->save();
        $contact_person_address = array(
            // 'contact_id' => $contacts->id,
             'title' =>  $req->input('title'),
             'firstname' => $req->input('first_name'),
             'middlename' => $req->input('middle_name'),
             'lastname' =>  $req->input('last_name'),
             'suffix' =>  $req->input('suffix'),
             'email' =>  $req->input('email_add_person')
        );
        DB::table('contact_person_address')->where('contact_id',$decrypted)->update($contact_person_address);
        $contact_tax_details = array(
            // 'contact_id' => $contacts->id,
            'sales_settings' => $req->input('sales_settings'),
            'sales_settings_account' => $req->input('sales_settings_account'),
            'tin_1' => $req->input('tax_1'),
            'tin_2' => $req->input('tax_2'),
            'credit_limit_account' => $req->input('credit_limit'),
            'credit_limit_block' =>  $req->input('credit_block')
        );
        DB::table('contact_tax_details')->where('contact_id',$decrypted)->update($contact_tax_details);
        return redirect('/contacts');
    }

    public function logout(Request $req) {
        $req->session()->flush();
        Auth::logout();
        return redirect('/');
    }


    public function update(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->facebook = $request->input('facebook');
        $user->linkedin = $request->input('linkedin');
        $user->twitter = $request->input('twitter');
        $user->city = $request->input('city');
        $user->address = $request->input('address');
        $user->province = $request->input('province');
        $user->zip_code = $request->input('zip_code');
        $user->phonenumber = $request->input('phonenumber');
        $user->birthday = $request->input('birthday');
        $user->job_title = $request->input('jobtitle');
        $user->about_me = $request->input('about_me');
        $user->save();

      
       
        return redirect('/user');
    }

    public function companyCreateForm()
    {
            return view('user.create-company');
    }

    public function createCompany(Request $req)
    {
     
        $user = Auth::user();
        $company = new Company();
        $company->company_name = $req->company_name;
        $company->user_id =  $user->id;
        $saveCheck = $company->save();

        $checkCompanyLog = CurrentCompanyLog::where('user_id',$user->id)->get()->toArray();
        if (!$checkCompanyLog) {
            $companyLog = new CurrentCompanyLog();
            $companyLog->user_id = $user->id;
            $companyLog->company_id = $company->id;
            $companyLog->save();

            $companyDetails = array(
                'companyName' => $company->company_name,
                'company_id' =>$company->id,
                'user_id' => $user->id
            );
            $mySession = session($companyDetails);
            return redirect('/contacts');
        }
        else{
            $companyLog = CurrentCompanyLog::where('user_id',$user->id)->update(['company_id' => $company->id]);
            $companyDetails = array(
                'companyName' => $company->company_name,
                'company_id' =>$company->id,
                'user_id' => $user->id
            );
            $mySession = session($companyDetails);
            // return $companyLog;
            return redirect('/contacts');
        }
  
   
    }

    public function userContacts(Request $req) {
      
        $user = Auth::user()->id;
        $companyID = $req->session()->get('company_id');
        $company = Company::where('user_id',$user)->Where('id',$companyID)->get();
        
        // return $company[0]->id;
        if (count($company) == 0) {
            return redirect(route('company-create-form'));
        }
        else{
             $contacts = Contacts::where('company_id',$company[0]->id)->get();
             $customer_count = count(Contacts::where('company_id',$company[0]->id)->where('contact_type','customer')->get());
             $supplier_count = count(Contacts::where('company_id',$company[0]->id)->where('contact_type','supplier')->get());
             $contact_count = array(
                 'customer_count' => $customer_count,
                 'supplier_count' => $supplier_count
             );
             return view('dashboard.contacts')->with('company',$company)->with('contacts',$contacts)->with('contact_count',$contact_count);
        }

    }

    public function insertContacts(Request $req)
    {
        // $user = Auth::user()->id;
        $rules = [
            'sales_settings' => 'required',
            'sales_settings_account'  => 'required',
            'tax_1'  => 'required',
            'tax_2'  => 'required',
            'credit_limit_account'  => 'required',
            'credit_limit_block'  => 'required',
        ];
        $this->validate($req, $rules);

        $contacts = new Contacts();
        if (isset($req->firstname) && isset($req->lastname)) {
            $contacts->firstname = $req->input('firstname');
            $contacts->lastname = $req->input('lastname');
        }
        else{
            $contacts->company_name = $req->input('company_name');
        }
        $contacts->company_id = $req->input('company_id');
        $contacts->displayname = $req->input('displayname');
        $contacts->email = $req->input('email');
        $contacts->phone_number = $req->input('phone');
        $contacts->mobile_number = $req->input('mobile');
        $contacts->fax = $req->input('fax');
        $contacts->other = $req->input('other');
        $contacts->website = $req->input('website');
        $contacts->contact_type = $req->input('contact_type');
        $contacts->type = $req->input('type');
        $contacts->street = $req->input('address');
        $contacts->barangay = $req->input('barangay');
        $contacts->city = $req->input('city');
        $contacts->province = $req->input('province');
        $contacts->zipcode = $req->input('zip_code');
        
        $contact_person_address = array(
            'contact_id' => $contacts->id,
             'title' =>  $req->input('title'),
             'firstname' => $req->input('first_name'),
             'middlename' => $req->input('middle_name'),
             'lastname' =>  $req->input('last_name'),
             'suffix' =>  $req->input('suffix'),
             'email' =>  $req->input('email_add_person')
        );
   
        $contact_tax_details = array(
            'contact_id' => $contacts->id,
            'sales_settings' => $req->input('sales_settings'),
            'sales_settings_account' => $req->input('sales_settings_account'),
            'tin_1' => $req->input('tax_1'),
            'tin_2' => $req->input('tax_2'),
            'credit_limit_account' => $req->input('credit_limit'),
            'credit_limit_block' =>  $req->input('credit_block')
        );
      
        $contacts->save();
        DB::table('contact_person_address')->insert($contact_person_address);
        DB::table('contact_tax_details')->insert($contact_tax_details);
        // DB::table('contact_tax_details')->insert($contact_tax_details);
        return redirect('/contacts');
        // return $contacts;

    }

    public function logCompany(Request $request, $companyID){
        $user_id = Auth::user()->id;
        $company = Company::where('user_id',$user_id)->where('id',$companyID)->get();
        $companyLog = CurrentCompanyLog::where('user_id',$user_id);
        $companyLog->update(['company_id' => $companyID]);
    
        $companyDetails = array(
            'companyName' => $company[0]->company_name,
            'company_id' => $companyID,
            'user_id' => $user_id
        );
        $mySession = session($companyDetails);
        return redirect(URL::previous()); 
    }

    
    public function userPersonalSettings() {
        return view('dashboard.personal-settings');
    }


    public function modalUsername() {
        return view('dashboard.modal');
    }

    public function userSales() {
        return view('dashboard.sales');
    }

    public function userPurchases() {
        return view('dashboard.purchases');
    }

    public function userAccounting() {
        $user_id = Auth::user()->id;
        $tax_rates = TaxRate::where('user_id',$user_id)->orderBy('tax_rate', 'desc')->get();
        $accounts = Accounts::where('user_id',$user_id)->orderBy('id', 'desc')->get();
        return view('dashboard.accounting')->with('tax_rates',$tax_rates)->with('accounts',$accounts);
    }
    public function addAccount(Request $req) {

        $rules = [
            'account_type' => 'required',
            'code'  => 'required|numeric',
            'name'  => 'required',
            'description'  => 'required',
            'tax'  => 'required',
        ];
        $this->validate($req, $rules);

        $tax = explode(',', $req->input('tax'));
        $newAccount = new Accounts();
        $newAccount->code = $req->input('code');
        $newAccount->name = $req->input('name');
        $newAccount->description = $req->input('description');
        $newAccount->type = $req->input('account_type');
        $newAccount->tax_id = $tax[0];
        $newAccount->tax = $tax[1];
        $newAccount->user_id = Auth::user()->id;
        $checkAccount = Accounts::where('code', $newAccount->code)->where('user_id',Auth::user()->id)->get()->toArray();
        $checkInsert = 0;
        if (!$checkAccount) {
            $checkInsert = $newAccount->save();
        }
        else{
            // $v = Validator::make([], []);
            // $v->errors()->add('code_unique', 'Code is exists in the database');
            return redirect(route('user-accounting'));
            // return "same";
        }

        $tax_rate = TaxRate::find($tax[0]);
        $tax_rate->number_of_accounts_using+=1;
        $tax_rate->save();
   
        if ( $checkInsert ) {
            return redirect(route('user-accounting'));
        }
          
    }

    

    public function userReports() {
        return view('dashboard.reports');
    }

 
    public function userTaxes() {
        $user_id = Auth::user()->id;
        $userTaxRate = TaxRate::where('user_id', $user_id)->get();
        return view('dashboard.taxes')->with('tax_rate',$userTaxRate);
    }
    public function addTaxRate(Request $req)
    {

        $rules = [
            'name' => 'required',
            'tax_rate'  => 'required|numeric',
        ];
        $this->validate($req, $rules);
        $newTaxRate = new TaxRate();
        $newTaxRate->user_id = Auth::user()->id;
        $newTaxRate->name = $req->input('name');
        $newTaxRate->tax_rate = $req->input('tax_rate');
        $newTaxRate->number_of_accounts_using = 0;
        $newTaxRate->save();
        return redirect(route('user-taxes'));
    }
    public function deleteTaxRate(Request $req)
    {
         $user_id = Auth::user()->id;
         $data = json_decode($req->id);
         $result = 0;
         foreach ($data as $id) {
            //  $tax_rate = TaxRate::where('id',$id);
             $tax_rate = TaxRate::find($id);
             $result = $tax_rate->delete();
         }

       return $result;
       
    }
    
    public function userSettings() {
        return view('dashboard.settings');
    }

    //  END OF USER ROUTING FUNCTIONS


    // COMPANY ROUTING FUNCTIONS

    public function companyDashboard() {
        return view('company.dashboard');
    }

    //  END OF COMPANY ROUTING FUNCTIONS

    // COMPANY-RECORDS ROUTING FUNCTIONS

    public function companyOrganizationSettings() {
        return view('company.records.organization-settings');
    }

    public function companyChartsOfAccounts() {
        return view('company.records.records-charts-of-accounts');
    }

    public function companyRecordCustomer() {
        return view('company.records.records-customer');
    }

    public function companyRecordProductServices() {
        return view('company.records.records-products-services');
    }

    public function companyRecordSuppliers() {
        return view('company.records.records-suppliers');
    }

    public function companyTaxRate() {
        return view('company.records.records-tax-rate');
    }

    public function companyRecordUsers() {
        return view('company.records.records-users');
    }


}
