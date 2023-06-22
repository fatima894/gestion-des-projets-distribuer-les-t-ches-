<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use  app\Models\Task;
class NewTaskNotification extends Notification
{
    use Queueable;
   
    public $task_id;
  
    

    public function __construct($task_id)
    {
     $task = Task::findOrFail($task_id);
    $this->task_id = $task_id;
    $this->project_name = $task->projet->title;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage);
        // ->subject('New Task Created')
        // ->line('A new task has been created:')
        // ->line($this->task->name)
        // ->action('View Task', url('/admin'))
        // ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {

        return [
            'task_id' => $this->task_id,
            'project_name'=>$this->project_name,
            'message' => 'you have a new task',
            'link' => route('tasks.show', $this->task_id),
        ];
    }
    
}