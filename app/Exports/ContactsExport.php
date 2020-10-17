<?php

namespace App\Exports;

use App\Contacts;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $id,$type;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function setType($type)
    {

        $this->type = $type;
    }

    public function collection()
    {
        // return Contacts::all();
        $type = $this->type;
        if ($type == 'supplier') {
            return Contacts::select('displayname', 'company_name',  'firstname','lastname', 'contact_type', 'type','email','phone_number','mobile_number','fax','other','website','street','barangay','city','province','zipcode')->where('company_id', $this->id)->where('contact_type',$type)->get();
        }
        else if($type == 'customer'){
            return Contacts::select('displayname', 'company_name',  'firstname','lastname', 'contact_type', 'type','email','phone_number','mobile_number','fax','other','website','street','barangay','city','province','zipcode')->where('company_id', $this->id)->where('contact_type',$type)->get();
        }
        else{
            return Contacts::select('displayname', 'company_name',  'firstname','lastname', 'contact_type', 'type','email','phone_number','mobile_number','fax','other','website','street','barangay','city','province','zipcode')->where('company_id', $this->id)->get();
        }
    }
    public function headings(): array
    {
        return [
            'Display Name',
            'Company Name',
            'First Name',
            'Last Name',
            'Contact Type',
            'Type',
            'Email',
            'Phone Number',
            'Mobile Number',
            'Fax',
            'Other',
            'Website',
            'Street',
            'Barangay',
            'City',
            'Province',
            'Zip Code',
        ];
    }
}
