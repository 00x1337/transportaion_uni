<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; // استخدام الـ Auth

class ChatComponent extends Component
{
    public $messages = [];
    public $newMessage;

    public function mount()
    {
        $this->messages = Message::where('located','=',Auth::user()->located)->get();
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
        ]);

        $this->newMessage = '';
        $this->mount();
//        $this->emit('messageAdded');

    }
}
