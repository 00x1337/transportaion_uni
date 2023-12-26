<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('معلومات الملف الشخصي') }}
    </x-slot>

    <x-slot name="description">
        {{ __('قم بتحديث معلومات حسابك الشخصية وعنوان البريد الإلكتروني.') }}
    </x-slot>

    <x-slot name="form">
        <!-- الصورة الشخصية -->
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- إدخال ملف الصورة الشخصية -->
                <input type="file" id="photo" class="hidden"
                            wire:model.live="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('الصورة') }}" />

                <!-- الصورة الحالية للملف الشخصي -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- معاينة الصورة الشخصية الجديدة -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('اختر صورة جديدة') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('إزالة الصورة') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>

        <!-- الاسم -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('الاسم') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- البريد الإلكتروني -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('البريد الإلكتروني') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('عنوان بريدك الإلكتروني غير موثّق.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('انقر هنا لإعادة إرسال رابط التحقق.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('تم إرسال رابط التحقق الجديد إلى بريدك الإلكتروني.') }}
                    </p>
                @endif
            @endif
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="flex">
                <a href="" class="" style="color: red">*</a>
            <x-label for="name"  value="{{ __('المنطقة') }}" />
            </div>

            <select id="name"  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" wire:model="state.located" name="located" required >
                <option value="">اختر المنطقة</option>
                <option value="مكة">مكة</option>
                <option value="الرياض">الرياض</option>
                <option value="المدينة المنورة">المدينة المنورة</option>
                <!-- أضف المناطق الأخرى هنا -->
            </select>
            <x-input-error for="name" class="mt-2" />
        </div>
        @if(auth()->user()->role == "user")
        <div class="col-span-6 sm:col-span-4">
            <div class="flex">
                <a href="" class="" style="color: red">*</a>
            <x-label for="google_map" value="{{ __('الموقع (رابط قوقل ماب)') }}" />
            </div>
            <x-input id="google_map" type="text" class="mt-1 block w-full" wire:model="state.google_map" required autocomplete="google_map" />
            <x-input-error for="google_map" class="mt-2" />
        </div>
        @endif
        @if(auth()->user()->role == "driver")
            <div class="col-span-6 sm:col-span-4">
                <div class="flex">
                    <a href="" class="" style="color: red">*</a>
                    <x-label for="price" value="{{ __('السعر') }}" />
                </div>
                <x-input id="price" type="text" class="mt-1 block w-full" wire:model="state.price" required autocomplete="price" />
                <x-input-error for="price" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <div class="flex">
                    <a href="" class="" style="color: red">*</a>
                    <x-label for="where" value="{{ __('الجنسية') }}" />
                </div>
                <x-input id="where" type="text" class="mt-1 block w-full" wire:model="state.where" required autocomplete="where" />
                <x-input-error for="where" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <div class="flex">
                    <a href="" class="" style="color: red">*</a>
                    <x-label for="type_car" value="{{ __('نوع السيارة') }}" />
                </div>
                <x-input id="type_car" type="text" class="mt-1 block w-full" wire:model="state.type_car" required autocomplete="type_car" />
                <x-input-error for="type_car" class="mt-2" />
            </div>
        @endif
        <div class="col-span-6 sm:col-span-4">
            <div class="flex">
                <a href="" class="" style="color: red">*</a>
                <x-label for="phone" value="{{ __('رقم الجوال') }}" />
            </div>
            <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="state.phone" required autocomplete="phone" />
            <x-input-error for="phone" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('تم الحفظ.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('حفظ') }}
        </x-button>
    </x-slot>
</x-form-section>
