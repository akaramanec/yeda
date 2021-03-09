<?php

namespace App\Models;

use App\Jobs\FeedbackMessage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'subject',
        'message'
    ];

    /**
     * @param array $attributes
     * @return bool
     */
    public static function addNewMessage(array $attributes): bool
    {
        $new = new self($attributes);
        if ($new->save()) {
//            FeedbackMessage::dispatch($attributes)->delay(now()->addMinutes('15'));
            FeedbackMessage::dispatch($attributes);
            return true;
        }
        return false;
    }
}
