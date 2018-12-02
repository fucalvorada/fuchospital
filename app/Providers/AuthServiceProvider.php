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



        Gate::define('create_notice', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Noticia'; 
            }
        });

        Gate::define('create_aviso', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Aviso'; 
            }
        });

        Gate::define('create_arquivo', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Arquivos'; 
            }
        });
        
        Gate::define('create_evento', function(User $user){

            $teste = User::PermissionUser($user->id);

            $i = 0;

            foreach ($teste as $key => $value) {

                if( $value->label == 'Gerenciar Eventos' ){
                    $i++;
                }
            }

            if($i > 0){
                return true;

            }else{
                return false;
            }

        });

        Gate::define('create_cardapio', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Cardápio'; 
            }
        });
        
        Gate::define('create_chamado', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Abrir Chamado'; 
            }
        });

        Gate::define('create_user', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Usuários'; 
            }
        });

        Gate::define('create_user', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Usuários'; 
            }
        });

        Gate::define('create_suporte', function(User $user){

            $teste = User::PermissionUser($user->id);

            foreach ($teste as $key => $value) {

                return $value->label == 'Gerenciar Suporte'; 
            }
        });
    }
}
