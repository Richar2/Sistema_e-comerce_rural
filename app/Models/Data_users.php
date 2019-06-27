<?php

namespace App\Models;
use App\Models\Users;
use Illuminate\Database\Eloquent\Model;

class Data_users extends Model
{
    
    protected $fillable= [
                            'name_user',
                            'mobile_phone_user',
                            'rg_user',
                            'cpf_user',
                            'nationalite_user', 
                            'creci',
                            'state_civil_user',
                            'profition_user'
                        ];
                    
   
    public function users(){
        return $this->hasOne(Users::class);
    }           
}
