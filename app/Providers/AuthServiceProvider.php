<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Modules;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        $modules = Modules::all();

        if ($modules->count()>0){
            foreach ($modules as $module){

                $actionsArr = [];

                if (!empty($module->actions)){
                    $actionsJson = $module->actions;
                    $actionsArr = json_decode($actionsJson, true);

                }

                if (!empty($actionsArr)){
                    foreach ($actionsArr as $role => $value){

                      //ten_module.ten_role
                      $gateName = $module->name.'.'.$role;
                      Gate::define($gateName, function (User $user) use ($module, $role) {
                          //Biến $user chứa đối tượng của user đang đăng nhập
                          $groupId = $user->group_id;

                          return hasPermission($groupId, $module->name, $role);
                      });
                    }
                }
            }
        }


    }
}
