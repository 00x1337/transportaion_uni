<?php

namespace App\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatComponenUser extends Component
{
    public $id;
    public $messages = [];
    public $newMessage;

    public function mount($id)
    {
        $this->id = $id;
//dd($id);
        $this->messages = Message::where('located', Auth::user()->located)
            ->where(function ($query) {
                $query->where('received_id', Auth::user()->id)
                    ->where('user_id', $this->id)
                    ->orWhere(function ($query) {
                        $query->where('received_id', $this->id)
                            ->where('user_id', Auth::user()->id);
                    });
            })
            ->get();


//        dd($this->messages);
    }

    public function sendMessage()
    {
        $userId = Auth::id(); // الحصول على معرف المستخدم الحالي
        $located = Auth::user()->located; // الحصول على القيمة المطلوبة من معلومات المستخدم

        Message::create([
            'content' => $this->newMessage,
            'received' => false,
            'located' => $located, // إضافة القيمة إلى حقل located
            'user_id' => $userId, // يفترض وجود حقل user_id في جدول الرسائل لربطه بالمستخدم
            'received_id' => $this->id
        ]);

        $this->newMessage = '';
        $this->mount($this->id);
//        $this->emit('messageAdded');

    }

    public function render()
    {
        return view('livewire.chat-componen-user');
    }
}
