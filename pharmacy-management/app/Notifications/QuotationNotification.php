<?php

namespace App\Notifications;

use App\Models\Quaotation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QuotationNotification extends Notification
{
    use Queueable;

    protected $admin;
    protected $user;
    protected $quotation;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $admin, User $user, $quotations)
    {
        $this->admin = $admin;
        $this->user = $user;
        $this->quotations = collect($quotations)->toArray();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        $mailMessage = (new MailMessage)
            ->subject('Quotation Notification')
            ->line('Hello ' . $notifiable->name . ',')
            ->line('Your quotation details:');

        foreach ($this->quotations as $quotation) {

            if (is_array($quotation)) {

                $mailMessage->line('Drug: ' . $quotation['drugs'])
                    ->line('Quantity: ' . $quotation['quanity'])
                    ->line('Total Amount: ' . $quotation['total'])
                    ->line('------------------');
            } else {

                $mailMessage->line('Drug: ' . $quotation->drugs)
                    ->line('Quantity: ' . $quotation->quanity)
                    ->line('Total Amount: ' . $quotation->total)
                    ->line('------------------');
            }
        }

        $mailMessage->action('View Quotation', url(''))
            ->line('Thank you for using our application!');

        return $mailMessage;
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
