<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\req;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; // استخدام الـ Auth

class ChatComponent extends Component
{
    public $messages = [];
    public $newMessage;

    public function mount()
    {
        $this->messages = Message::where('located','=',Auth::user()->located)->where("received_id",'=',null)->get();
    }
    public function acceptRequest($id)
    {
        // تحقق مما إذا كان هناك سجل موجود مسبقًا لتجنب إنشاء مزيد من السجلات
        $existingRequest = Req::where('user_id', auth()->user()->id)
            ->where('id_driver', $id)
            ->first();

        if (!$existingRequest) {
            // لا يوجد سجل موجود بالفعل، لذا قم بإنشاء سجل جديد
            Req::create([
                'user_id' => auth()->user()->id,
                'id_driver' => $id,
                'accept' => null,
            ]);

            // القيام بأي شيء آخر بعد النقر على زر "ارسال طلب"
        } else {
            // يوجد سجل بالفعل، يمكنك أداء إجراء معين أو عرض رسالة للمستخدم
            // لإعلامه أن الطلب تم إرساله مسبقًا
            // على سبيل المثال، يمكنك استخدام الفلاش سيشن لعرض رسالة
            session()->flash('message', 'لقد تم إرسال الطلب بالفعل.');
        }

        // قم بتحديث أي جزء من الواجهة إذا لزم الأمر
        $this->mount();
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
