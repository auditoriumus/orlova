<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendEmailByPaymentEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;
    public int $courseId;

    public function __construct(array $info)
    {
        $this->user = $info['user'];
        $this->courseId = $info['courseId'];
    }

}
