@component('mail::message')
## WELCOME ONBOARD
<p>Hello {{ ucwords($user->name) }}, this is to inform you that an account has been created for you on {{ config('app.name') }}
    by Dr. {{ $doctorName }}.</p>
<p>Kindly find your login details below to access your dashboard.</p>
<ul style="list-style: none;">
    <li>
        Username: {{ $user->email }}
    </li>
    <li>
        Password: {{ $password }}
    </li>
</ul>

<p>You are advice to update your login details.</p>


@component('mail::button', ['url' => route('home')])
    Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
