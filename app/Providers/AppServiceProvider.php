<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Roles;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Definisikan gates
        Gate::define('null', function (User $user) {
            return $user->roles()->doesntExist();
        });
        Gate::define('adm', function (User $user) {
            return $user->roles()->where('role_name', 'Pegawai PMI')->exists();
        });

        Gate::define('skr', function (User $user) {
            return $user->roles()->where('role_name', 'Sukarelawan')->exists();
        });

        Gate::define('hrd', function (User $user) {
            return $user->roles()->where('role_name', 'HRD')->exists();
        });

        Gate::define('exc', function (User $user) {
            return $user->roles()->where('role_name', 'Executive')->exists();
        });

        Gate::define('multiple-roles', function ($user, $roles) {
            return $user->hasAllRoles($roles);
        });
    }
}
