<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class PatientLoginDetail extends Notification
{
    use Queueable;

    /**
     * @var string $password
     */
    private $password;
    /**
     * @var string $doctorName
     */
    private $doctorName;
    /**
     * Create a new notification instance.
     *
     * @var string $password
     * @var string $doctorName
     * @return void
     */
    public function __construct(string $password, string  $doctorName)
    {
        $this->password = $password;
        $this->doctorName = $doctorName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $appName = config('app.name', 'Patient Management App');

        return (new MailMessage)
            ->subject( "Login Details from " . "(". Str::ucfirst($appName) .")")
            ->markdown('email.patient.login-detail', [
                'doctorName' => $this->doctorName,
                'user' => $notifiable,
                'password' => $this->password
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
