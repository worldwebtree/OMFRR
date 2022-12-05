<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use function PHPSTORM_META\map;

class UserFeedbackNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->users_feedback = $user->users_feedback;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $check = $this->users_feedback->map(function ($value) {
            return  [
                'name' => $value->username,
                'feedback' => $value->feedback,
                'restaurant' => $value->restaurant_name,
                'title' => ucwords("feedback deleted"),
                'message' => ucfirst("you'r feedback (".$value->feedback.") has been deleted from restaurant (".$value->restaurant_name.") due to some major reason.")
            ];
        });

        return $check[0];
    }
}
