<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    
    public function contact_companies(){
        return $this->belongsTo('App\Company');
    }
}
