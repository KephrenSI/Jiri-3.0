<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MailResetPasswordToken extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
            ->subject('Réinitialisation du mot de passe Jiri')
            ->line('Hé, tu as oublié ton mot de passe? Clique sur le bouton pour le réinitialiser.')
            ->action('Réinitialiser le mot de passe', url('password/reset', $this->token))
            ->line('Si tu n\'as pas demandé la réinitialisation de ton mot de passe, tu peux ignorer cet e-mail.');

//            ->subject(Lang::getFromJson('Réinitialiser la notification du mot de passe'))
//            ->line(Lang::getFromJson('Vous recevez cet email car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.'))
//            ->action(Lang::getFromJson('Réinitialiser le mot de passe'), url(config('app.url').route('password.reset', ['token' => $this->token], false)))
//            ->line(getFromJson('Ce lien de réinitialisation de mot de passe expirera dans :count minutes.', ['count' => config('auth.passwords.users.expire')]))
//            ->line(Lang::getFromJson('Si vous n\'avez pas demandé de réinitialisation de mot de passe, aucune autre action n\'est requise.'));
    }

}