<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Data_users;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;

class Users extends Model
{
    protected $primaryKey = 'id'; 
    protected $fillable=[
                            
                            'email_user',
                            'password_user',
                            'id_data'
                        ];

    public function data_user(){
        return $this->belongsTo(Data_users::class);
    }
}
