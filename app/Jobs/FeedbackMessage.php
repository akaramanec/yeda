<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class FeedbackMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $admin;

    /**
     * Create a new job instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->admin = [
            'mail' => config('mail.admin_mail'),
            'sender' => config('mail.sender')
        ];

//        Mail::send('mail', ['name' => $this->admin['sender']], function ($message) {
//            $message->to($this->admin['mail'], $this->admin['sender'])
//                ->subject('Laravel Test Mail');
//            $message->from($this->data->email, $this->data->name . " " . $this->data->last_name);
//        });

        $message = 'Mail send to ' . $this->admin['mail'];
        $message .= ' from ' . $this->data['name'] . " " . $this->data['last_name'];
        $message .= ' with subject ' . $this->data['subject'];
        $message .= ' and message ' . $this->data['message'];
        info($message);
    }
}
