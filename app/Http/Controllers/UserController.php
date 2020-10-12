<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Contacts;
use App\CurrentCompanyLog;
use DB;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:user','verified']);
    }

    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $checkUserHasCompany = Company::where('user_id',$user_id)->get()->toArray();
        
        if (!$checkUserHasCompany) {
            return redirect('/test');
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
       
        // $company = Company::all();
        // return view('user.index', compact('user'));
        // return view('user.index', compact('user'));
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

    public function companyTest()
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
           return redirect('/test');
        }
        else{
             $contacts = Contacts::where('company_id',$company[0]->id)->get();
            return view('dashboard.contacts')->with('company',$company)->with('contacts',$contacts);
        }
        // return $company;
        // print_r($company);
  
    }

    public function insertContacts(Request $req)
    {
        // $user = Auth::user()->id;
       
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
        $contacts->save();

        $contact_person_address = array(
            'contact_id' => $contacts->id,
             'title' =>  $req->input('title'),
             'firstname' => $req->input('first_name'),
             'middlename' => $req->input('middle_name'),
             'lastname' =>  $req->input('last_name'),
             'suffix' =>  $req->input('suffix'),
             'email' =>  $req->input('email_add_person')
        );
        DB::table('contact_person_address')->insert($contact_person_address);
        $contact_tax_details = array(
            'contact_id' => $contacts->id,
            'sales_settings' => $req->input('sales_settings'),
            'sales_settings_account' => $req->input('sales_settings_account'),
            'tin_1' => $req->input('tax_1'),
            'tin_2' => $req->input('tax_2'),
            'credit_limit_account' => $req->input('credit_limit'),
            'credit_limit_block' =>  $req->input('credit_block')
        );

        DB::table('contact_tax_details')->insert($contact_tax_details);
        // DB::table('contact_tax_details')->insert($contact_tax_details);
        return $req;
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
        return redirect('/contacts'); 
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
        return view('dashboard.accounting');
    }

    public function userReports() {
        return view('dashboard.reports');
    }

 



    public function userTaxes() {
        return view('dashboard.taxes');
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