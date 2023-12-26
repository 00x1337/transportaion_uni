<?php

namespace App\Livewire;

use App\Models\req;
use App\Models\User;
use Livewire\Component;

class ReqDriver extends Component
{
    public $requests;
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
    public function mount(){
        $this->requests = User::where('role', '!=','user')->where('located','=',\Auth::user()->located)->get();

    }
    public function render()
    {

        return view('livewire.req-driver');
    }
}
