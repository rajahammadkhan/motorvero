<?php

namespace App\Http\Livewire;
use \App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SingleChat extends Component
{

    public $messageText;


    public function render()
    {
        $messages = [];
        if(Auth::check()){
            $messages = Message::
            where('user_id',auth()->user()->id)
                ->latest()->take(10)->get()->sortBy('id');
        }

        return view('livewire.single-chat', compact('messages'));
    }
    public function sendMessage()
    {
        if (Auth::check()){
            $new_message = new \App\Models\Message();

            $new_message->message = $this->messageText;
            $new_message->user_id = auth()->id();
            $new_message->receiver = 3;
            $new_message->save();
            $this->reset('messageText');
        }





    }

}
