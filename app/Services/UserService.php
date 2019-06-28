<?php

namespace app\Services;


use App\Models\Data_users;
use App\Models\Users;





class UserService
{

    public function store($data)
    {
         
        
        //$datacad= $data;
      
      //$data_user=Data_users::Create($datacad);
      //$user=Users::Create($datacad);
      //$user->data_user()->associate($data_user);
      //$user->save();
        
        
        
        
        dd($data); 
    }


}