<?php

namespace App\Http\Controllers\Sisten_site;
use App\Models\Data_users;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Validators\UsersValidator;

class UsersController extends Controller
{
    
    protected $service;

    public function __construct( UserService $service )
    {
        
        $this->service = $service;
    }
   
    
    public function create_user()
    {
        return view ("public_template.objects.new_user");  
    }
    public function save_user(Request $request)
    {
       
       $request= $this->service->store($request->all());
       
       
        //$this->validate($request, only(['email_user'=>'required|email_user|unique:users ',
                                        //'password_user',
                                       // 'name_user'
                                      //  ]));
      //if (Data_users::where('id', 1)->count() == 1){
       
      //  return "econtrado";
      //}
       //$veri=Users::firstOrCreate(['email_user' => 'cdscds555v']);
      // $datacad= $request;
      
      //$data_user=Data_users::Create($datacad);
      //$user=Users::Create($datacad);
      //$user->data_user()->associate($data_user);
      //$user->save();
       
     

       // dd($veri);

      


    }
    
}
