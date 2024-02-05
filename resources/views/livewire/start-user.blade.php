<div>
    <style>
        input[type="checkbox"]:checked + label {
            background-color: #4299e1; /* تغيير لون الخلفية عند التحقق من الخانة */
            color: white;
        }
    </style>
    @if(\Auth::user()->google_map ==null && \Auth::user()->located ==null)

    <div class="col-span-6 sm:col-span-4">
        <div class="flex">
            <a href="" class="" style="color: red">*</a>
            <x-label for="name"  value="{{ __('الحي') }}" />
        </div>

        <select id="name" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" wire:model="state.located" name="located" required>
            <option value="">اختر الحي</option>
            <option value="العليا">العليا</option>
            <option value="الملقا">الملقا</option>
            <option value="النسيم">النسيم</option>
            <option value="العزيزية">العزيزية</option>
            <option value="الروضة">الروضة</option>
            <option value="الصحافة">الصحافة</option>
            <option value="السويدي">السويدي</option>
            <option value="الربيع">الربيع</option>
            <option value="النخيل">النخيل</option>
            <option value="النظيم">النظيم</option>
            <option value="العتيبية">العتيبية</option>
            <option value="الشفا">الشفا</option>
            <option value="المرقب">المرقب</option>
            <option value="الصالحية">الصالحية</option>
            <option value="الفيحاء">الفيحاء</option>
            <option value="الرمال">الرمال</option>
            <option value="المروج">المروج</option>
            <option value="العقيق">العقيق</option>
            <option value="الغدير">الغدير</option>
            <option value="الخليج">الخليج</option>
            <option value="الندى">الندى</option>
            <option value="الجرادية">الجرادية</option>
            <option value="النسيم الشرقي">النسيم الشرقي</option>
            <option value="النسيم الغربي">النسيم الغربي</option>
            <option value="النفل">النفل</option>
            <option value="الملك فهد">الملك فهد</option>
            <option value="المرسلات">المرسلات</option>
            <option value="النزهة">النزهة</option>
            <option value="العودة">العودة</option>
            <option value="الدرعية">الدرعية</option>
            <option value="الشميسي">الشميسي</option>
            <option value="الوادي">الوادي</option>
            <option value="الحائر">الحائر</option>
            <option value="السويدي الجديد">السويدي الجديد</option>
            <option value="التخصصي">التخصصي</option>
            <option value="الصحة">الصحة</option>
            <option value="الغرابي">الغرابي</option>
            <option value="الواحة">الواحة</option>
            <option value="الرميزان">الرميزان</option>
            <option value="الفاخرية">الفاخرية</option>
            <option value="الفيصلية">الفيصلية</option>
            <option value="المونسية">المونسية</option>
            <option value="الشرق">الشرق</option>
            <option value="الصحافة الشمالية">الصحافة الشمالية</option>
            <option value="الصحافة الجنوبية">الصحافة الجنوبية</option>
            <option value="الجنادرية">الجنادرية</option>
            <option value="السويدي الغربي">السويدي الغربي</option>
            <option value="العليا الغربية">العليا الغربية</option>
            <option value="الملك سلمان">الملك سلمان</option>
            <option value="العليا الشرقية">العليا الشرقية</option>
            <option value="العليا الجنوبية">العليا الجنوبية</option>
            <option value="العليا الشمالية">العليا الشمالية</option>
            <option value="النزهة الغربية">النزهة الغربية</option>
            <option value="النزهة الشرقية">النزهة الشرقية</option>
            <!-- يمكنك استكمال الأحياء الأخرى هنا -->
        </select>

        <x-input-error for="name" class="mt-2" />
    </div>
        <br>

        <hr>
        <br>
        <div class="col-span-6 sm:col-span-4">
            <div class="flex">
                <a href="" class="" style="color: red">*</a>
                <x-label for="google_map" value="{{ __('الموقع (رابط قوقل ماب)') }}" />
            </div>
            <x-input id="google_map" type="text" class="mt-1 block w-full" wire:model="state.google_map" required autocomplete="google_map" />
            <x-input-error for="google_map" class="mt-2" />
        </div>
        <hr>
    <br>
    <form wire:submit.prevent="update">

    <hr>
    <br>
    {{-- <h3 dir="rtl">الايام :
    </h3>
    <br>
    <div dir="rtl" class="flex  space-y-2">
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedDays" name="selectedDays[]" value="sunday"   id="sunday" />
            <label for="sunday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                الأحد
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedDays" name="selectedDays[]" value="monday"  id="monday" />
            <label for="monday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                الاثنين
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedDays" name="selectedDays[]" value="tuesday"  id="tuesday" />
            <label for="tuesday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                الثلاثاء
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedDays" name="selectedDays[]" value="wednesday"  id="wednesday" />
            <label for="wednesday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                الأربعاء
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedDays" name="selectedDays[]" value="thursday"  id="thursday" />
            <label for="thursday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                الخميس
            </label>
        </label>
    </div>
    <br>
    <h3 dir="rtl">الساعات :
    </h3>                    <br>

    <div class="flex space-y-2" dir="rtl">
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedHours" name="selectedHours[]" id="hour8-9" value="8-9" />
            <label for="hour8-9" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                8-9
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedHours" name="selectedHours[]" id="hour9-10" value="9-10" />
            <label for="hour9-10" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                9-10
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedHours" name="selectedHours[]" id="hour10-11" value="10-11" />
            <label for="hour10-11" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                10-11
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedHours" name="selectedHours[]" id="hour11-12" value="11-12" />
            <label for="hour11-12" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                11-12
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedHours" name="selectedHours[]" id="hour12-1" value="12-1" />
            <label for="hour12-1" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                12-1
            </label>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" class="hidden" wire:model="state.selectedHours" name="selectedHours[]" id="hour1-2" value="1-2" />
            <label for="hour1-2" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">
                1-2
            </label>
        </label>
    </div> --}}
    <div class="container" dir="rtl">
        {{-- <div class="days">
            <h3>الأيام:</h3>
            @foreach(['sunday' => 'الأحد', 'monday' => 'الاثنين', 'tuesday' => 'الثلاثاء', 'wednesday' => 'الأربعاء', 'thursday' => 'الخميس'] as $dayKey => $dayName)
            <label class="day-label">
                <input type="checkbox" wire:model="selectedDays"  value="{{ $dayName }}">
                    <span class="day-button {{ in_array($dayName, $selectedDays) ? 'day-label-selected' : '' }}">{{ $dayName }}</span>
                </label>
            @endforeach
        </div> --}}
        <div class="container" dir="rtl">
            @foreach(['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس'] as $day)
            <div class="day-row">
                <div class="day">
                    <h3>{{ $day }}</h3>
                </div>
                <div class="hours">
                    @foreach($hoursForDays[$day] as $hour)
                    <label class="hour-label">
                        <input type="checkbox" wire:model="selectedHours.{{ $day }}.{{ $hour }}" value="{{ $hour }}" name="{{$day}}[]">
                        {{ $hour }}
                    </label>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <style>
        .container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.day-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.day {
    flex: 1;
}

.hours {
    flex: 2;
    display: flex;
    flex-wrap: wrap;
}

.hour-label {
    margin: 5px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f8f8;
    cursor: pointer;
}

        .container {
            display: flex;
            align-items: flex-start;
        }
        .day-label-selected {
        /* تنسيقات الأيام المحددة */
        background-color: #243b53;
        color: #ffff;
        /* أي تنسيقات إضافية ترغب بها */
    }
        .days, .hours {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .days {
            flex: 1;
        }

        .day-label, .hour-label {
            display: block;
            margin: 5px 0;
        }

        .day-button, .hour-label {
            display: inline-block;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .day-label input[type="checkbox"] {
            display: none;
        }

        .hour-label input[type="radio"] {
            margin-right: 5px;
        }
    </style>

      <style>
        .container {
    display: flex;
    align-items: start;
}

.days {
    flex-basis: 50%;
}

.days button {
    display: block;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f8f8;
    cursor: pointer;
}

.hours {
    flex-basis: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f8f8;
}

.hour-button {
    display: block;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f8f8;
    cursor: pointer;
}

.hidden {
    display: none;
}

    </style>



    <br>
    <hr>
    <br>
    <button type="submit" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-500 hover:bg-green-500 cursor-pointer">حفظ</button>
    </form>
    <div wire:poll>
        <!-- قم بعرض أي رسائل نجاح أو أي شيء آخر هنا -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    @else
        <br>
        <div class="list-disc list-inside mb-6 space-y-4">


            <div>
                <a for="file-id-2" href="/req_driver" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-gray-500 hover:bg-gray-600 cursor-pointer">
                    اختيار السائق
                </a>
            </div>
        </div>
    @endif
</div>
