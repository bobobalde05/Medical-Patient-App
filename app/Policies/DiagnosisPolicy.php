<?php

namespace App\Policies;

use App\Helpers\Roles;
use App\Models\Diagnosis;
use App\Models\PatientAppointment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiagnosisPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasRole(Roles::DOCTOR);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Diagnosis $diagnosis)
    {

    }

}
