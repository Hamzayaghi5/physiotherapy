<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','type',
    ];

    public static function get_all()
    {
        $users=User::all();
        return $users;
    }

     public static function get($id)
    {
        $user=User::find($id);
        return $user;
    }




       public function is_admin()
     {
       if($this->type=='admin')
       {
         return true;
       }
       else {
         // code...
         return false;
       }
     }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
