<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRestaurantFeedback extends Notification
{
    use Queueable;

    public $users_feedback;

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
        return  [
            'name' => $this->users_feedback->username,
            'feedback' => $this->users_feedback->feedback,
            'restaurant' => $this->users_feedback->restaurant_name,
            'title' => ucwords("feedback deleted"),
            'message' => ucfirst("you'r feedback (".$this->users_feedback->feedback.") has been deleted from restaurant (".$this->users_feedback->restaurant_name.") due to some major reason.")
        ];
    }
}
