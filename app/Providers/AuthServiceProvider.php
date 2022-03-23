<?php

namespace App\Providers;

use App\Helpers\Roles;
use App\Models\Diagnosis;
use App\Models\PatientAppointment;
use App\Policies\DiagnosisPolicy;
use App\Policies\PatientAppointmentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        PatientAppointment::class => PatientAppointmentPolicy::class,
        Diagnosis::class => DiagnosisPolicy::class,
        PatientAppointment::class => PatientAppointmentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define("isAdmin", function ($user) {
            return $user->hasRole(Roles::ADMIN);
        });

        Gate::define("isDoctor", function ($user) {
            return $user->hasRole(Roles::DOCTOR);
        });

        Gate::define("isPatient", function ($user) {
            return $user->hasRole(Roles::PATIENT);
        });
    }
}
