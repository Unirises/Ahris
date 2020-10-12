<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function contacts(){
        return $this->hasMany('App\Contacts');
    }
}
