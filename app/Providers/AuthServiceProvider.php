<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Noticia;
use App\User;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{


    protected $policies = [
    /*'App\Model' => 'App\Policies\ModelPolicy',*/
    ];


    public function boot()
    {
        $this->registerPolicies();


        $permission = Permission::with('roles')->get();

        foreach ($permission as  $perm) {

            Gate::define($perm->name, function(User $user) use ($perm){
                return $user->hasPermission($perm);
            });
        }


/*
        Gate::define('create_notice', function(User $user){

            $teste = User::PermissionUser($user->id);


            $i = 0;

            foreach ($teste as $key => $value) {

                if( $value->label == 'Gerenciar Noticia' ){
                    $i++;
                }
            }

            if($i > 0){
                return true;

            }else{
                return false;
            }


        });*/


    }
}
