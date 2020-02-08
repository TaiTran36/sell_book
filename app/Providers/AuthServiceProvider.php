<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            foreach($user->roles as $role){
                $per = $role->name;
            }
            if(preg_match('/^admin/',$per)){
                return true;
            }
        });
        Gate::define('admin_sp', function ($user) {
            foreach($user->roles as $role){
                $per = $role->name;
            }
            return $per === 'admin_sp';
        });
    }
}
