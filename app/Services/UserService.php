<?php

namespace app\Services;


use App\Models\Data_users;
use App\Models\Users;
use App\Validators\UsersValidator;
use Prettus\Validator\Contracts\ValidatorInterface;


class UserService
{

    protected $validator;
    
    public function __construct(UsersValidator $validator)
    {
        $this->validator = $validator;
    }
    
    
    public function store($data)
    {
         
      $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

    
      
      
    
      
      
      
      
      $datacad= $data;
      
      $data_user=Data_users::Create($datacad);
      $user=Users::Create($datacad);
      $user->data_user()->associate($data_user);
      $user->save();
        
        
        
        
        //dd($data); 
    }


}