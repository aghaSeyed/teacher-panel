<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'email', 'password' , 'family' ,'stdNo', 'role','attemps',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
//    public function role()
//    {
//        return $this->belongsTo(Role::class, 'role_id');
//    }
//
//    public function setRoleIdAttribute($input)
//    {
//        $this->attributes['role_id'] = $input ? $input : null;
//    }
public  function admin(){
    if($this->attributes['role']=='admin'){
        return true;
    }
    else return false;
}
}