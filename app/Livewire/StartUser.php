<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class StartUser extends Component
{
    public $user;

    public $state = [];
    public $selectedHours = [];
    public $selectedHour = [];
    public $selectedDays = [];
    public $selectedDaysWithHours = [];

    public function updatedSelectedHour()
    {
        $this->selectedDaysWithHours = [];
        foreach ($this->selectedHour as $day => $hour) {
            if (in_array($day, $this->selectedDays)) {
                $this->selectedDaysWithHours[] = ['day' => $day, 'hour' => $hour];
            }
        }
    }

    public $hoursForDays = [
        'الأحد' => ['8-9', '9-10', '10-11', '11-12', '12-1', '1-2'],
        'الاثنين' => ['8-9', '9-10', '10-11', '11-12', '12-1', '1-2'],
        'الثلاثاء' => ['8-9', '9-10', '10-11', '11-12', '12-1', '1-2'],
        'الأربعاء' => ['8-9', '9-10', '10-11', '11-12', '12-1', '1-2'],
        'الخميس' => ['8-9', '9-10', '10-11', '11-12', '12-1', '1-2'],    // ... تعريف الساعات لبقية الأيام
    ];

    public function showHours($day)
    {
        $this->selectedHours = $this->hoursForDays[$day] ?? [];
    }

    public function mount(User $user)
    {
        $this->user = $user;
        $this->state = [
            'located' => $user->located, // استخدم الحقل الذي تريد تحديثه هنا
            'selectedDays' => explode(',', $user->selectedDays), // تحويل السلسلة إلى مصفوفة إذا كانت مفصولة بفواصل
            'selectedHours' => explode(',', $user->selectedHours),
        ];
        $this->selectedDays = ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس']; // تحديد جميع الأيام


    }
    public function updatedSelectedDays()
    {
        // تحديث الساعات بناءً على اليوم المختار
        $this->selectedHours = [];
        foreach ($this->selectedDays as $day) {
            if (isset($this->hoursForDays[$day])) {
                $this->selectedHours[$day] = $this->hoursForDays[$day];
            }
        }
    }
    public function update()
    {
        $this->updatedSelectedHour();
        // قم بتحديث اليوزر باستخدام القيم من $this->state
    //    dd(
    //     (($this->selectedHours))
    //    );

        $this->validate([
            'state.located' => 'required',
            // 'state.selectedDays' => 'required',
            // 'state.selectedHours' => 'required',
            'state.google_map' => 'required',
        ]);
// dd(0);
        // استخراج القيم المحدثة من $state
        $located = $this->state['located'];
        $selectedDays = implode(',', $this->state['selectedDays']);
        $selectedHours = implode(',', $this->state['selectedHours']);
        $google_map = $this->state['google_map'];

        // تحديث السجل مباشرة
        $rr = User::where('id', Auth::user()->id)->update([
            'located' => $located,
            'selectedDays' => json_encode($this->selectedHours),
            'google_map' => $google_map,
        ]);

        session()->flash('message', 'تم تحديث البيانات بنجاح!');
    }
    public function render()
    {
        return view('livewire.start-user');
    }
}
