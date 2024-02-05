<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('الاسم') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('البريد الإلكتروني') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

{{--            <div class="mt-4">--}}
{{--                <x-label for="phone" value="{{ __('رقم الهاتف') }}" />--}}
{{--                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required />--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <hr>--}}
            @if(Session::has('role'))
            <input type="hidden" value="{{Session::get('role')}}">
                @if(Session::get('role') == "user")
{{--                    <br>--}}
{{--                    <h3 dir="rtl">الايام :--}}
{{--                    </h3>--}}
{{--                    <br>--}}
{{--                    <div dir="rtl" class="flex  space-y-2">--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedDays[]" value="sunday"   id="sunday" />--}}
{{--                            <label for="sunday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                الأحد--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedDays[]" value="monday"  id="monday" />--}}
{{--                            <label for="monday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                الاثنين--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedDays[]" value="tuesday"  id="tuesday" />--}}
{{--                            <label for="tuesday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                الثلاثاء--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedDays[]" value="wednesday"  id="wednesday" />--}}
{{--                            <label for="wednesday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                الأربعاء--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedDays[]" value="thursday"  id="thursday" />--}}
{{--                            <label for="thursday" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                الخميس--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <h3 dir="rtl">الساعات :--}}
{{--                    </h3>                    <br>--}}

{{--                    <div class="flex space-y-2" dir="rtl">--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedHours[]" id="hour8-9" value="8-9" />--}}
{{--                            <label for="hour8-9" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                8-9--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedHours[]" id="hour9-10" value="9-10" />--}}
{{--                            <label for="hour9-10" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                9-10--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedHours[]" id="hour10-11" value="10-11" />--}}
{{--                            <label for="hour10-11" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                10-11--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedHours[]" id="hour11-12" value="11-12" />--}}
{{--                            <label for="hour11-12" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                11-12--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedHours[]" id="hour12-1" value="12-1" />--}}
{{--                            <label for="hour12-1" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                12-1--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                        <label class="flex items-center space-x-2">--}}
{{--                            <input type="checkbox" class="hidden" name="selectedHours[]" id="hour1-2" value="1-2" />--}}
{{--                            <label for="hour1-2" class="border border-gray-400 rounded-lg py-2 px-4 cursor-pointer select-none">--}}
{{--                                1-2--}}
{{--                            </label>--}}
{{--                        </label>--}}
{{--                    </div>--}}
                    <style>
                        input[type="checkbox"]:checked + label {
                            background-color: #4299e1; /* تغيير لون الخلفية عند التحقق من الخانة */
                            color: white;
                        }
                    </style>
                @endif
            @else
            <div class="mt-4">
                <x-label for="role" value="{{ __('نوع التسجيل') }}" />
                <select id="role" name="role" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="user">{{ __('مستخدم') }}</option>
                    <option value="driver">{{ __('سائق') }}</option>
                </select>
            </div>
            @endif

            <div class="mt-4">
                <x-label for="password" value="{{ __('كلمة المرور') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('تأكيد كلمة المرور') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ms-2">
                                {!! __('أوافق على :terms_of_service و :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('شروط الخدمة').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('سياسة الخصوصية').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('هل لديك حساب بالفعل؟') }}
                </a>

                <x-button class="ms-4">
                    {{ __('تسجيل') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
