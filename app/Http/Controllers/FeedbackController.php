<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function feedbackSend(FeedbackRequest $request)
    {
        if (Feedback::addNewMessage($request->input())) {
            return redirect()->route('/')->with('success', 'Сообщение отправленно');
        }
        return redirect()->route('/')->with('error', 'Сообщение не удалось отправить');
    }
}
