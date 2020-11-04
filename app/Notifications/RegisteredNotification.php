<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisteredNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        return (new MailMessage)
                    // ->line("Bienvenue sur I GWE. Vos identifiants initiaux <br>Nom d'utilisateur: $_SESSION['login'] <br> Mot de passe: $_SESSION['pass']")
                    // echo "Login : <strong> $_SESSION['login'] </strong> <br>  Mot de pass : <strong> $_SESSION['pass'] </strong>"; 
                    ->line(' connectez-vous et modifier les à votre guise. A très bientôt!')
                    ->from('desse.maryvonne@gmail.com','Félicité DESSE')
                    ->action('Se connecter', url('/login'));
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
