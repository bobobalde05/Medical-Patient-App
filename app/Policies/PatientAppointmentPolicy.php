<?php

namespace App\Policies;

use App\Helpers\Roles;
use App\Models\PatientAppointment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientAppointmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasRole(Roles::DOCTOR);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PatientAppointment $patientAppointment)
    {
        return $user->hasRole(Roles::DOCTOR) && $user->is($patientAppointment->doctor);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasRole(Roles::PATIENT);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PatientAppointment $patientAppointment)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PatientAppointment $patientAppointment)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PatientAppointment $patientAppointment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PatientAppointment $patientAppointment)
    {
        //
    }
}
