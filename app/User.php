<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;
use App\Role_user;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function roles(){

     return  $this->belongsToMany(\App\Role::class);
 }

 static public function findDataNasci( $date) {

    return \DB::table('users')->whereMonth('nascimento', $date)
    ->orderBy('nascimento')->get();
}

public function hasPermission(Permission $permission){

   return $this->hasAnyRoles($permission->roles);

}

public function hasAnyRoles($roles){

    if(is_array($roles)  || is_object($roles)){

        foreach ($roles as $rol) {

            return $this->roles->contains('name', $rol->name);
        }
    }

    return $this->roles->contains('name', $roles);
}

public static function PermissionUser($id){


 return \DB::table('users as u')
 ->join('permission_role as pr', 'u.id', '=', 'pr.role_id')
 ->join('permissions as p', 'pr.permission_id', '=', 'p.id')
 ->where('u.id', '=', $id)
 ->select('p.label')
 ->get();

}

public static function insert_adm($user){

   \DB::table('role_user')->insert([

    ['role_id' => 7,'user_id' => $user->id ],
    ['role_id' => 1,'user_id' => $user->id ]

    ]);
}

public static function insert_dir($user){

   \DB::table('role_user')->insert([

    ['role_id' => 2,'user_id' => $user->id ],
    ['role_id' => 6,'user_id' => $user->id ],
    ['role_id' => 1,'user_id' => $user->id ]

    ]);
}

public static function insert_pad($user){

   \DB::table('role_user')->insert([

    ['role_id' => 2,'user_id' => $user->id ],
    ['role_id' => 3,'user_id' => $user->id ]

    ]);
}

public static function delete_role($id){

    if(!is_null($id)){
       \DB::table('role_user')->where('user_id', $id)->delete();
   }
   
}



}
