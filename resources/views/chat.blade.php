<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('رافقني') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-lg w-full">
                <h1 class="text-2xl font-semibold mb-4 text-center">الشات</h1>
                <div class="border rounded-lg p-4 mb-4 space-y-4">
                    <!-- محادثة مستلمة -->
                    <div class="flex items-start mb-2">
                        <img src="https://via.placeholder.com/50" alt="صورة المستلم" class="rounded-full w-8 h-8">
                        <div class="bg-gray-200 rounded-lg p-2 ml-2">
                            <p>رسالة مستلمة 1</p>
                        </div>
                    </div>

                    <div class="flex items-start mb-2">
                        <img src="https://via.placeholder.com/50" alt="صورة المستلم" class="rounded-full w-8 h-8">
                        <div class="bg-gray-200 rounded-lg p-2 ml-2">
                            <p>رسالة مستلمة 2</p>
                        </div>
                    </div>

                    <!-- محادثة مرسلة -->
                    <div class="flex justify-end mb-2">
                        <div class="bg-blue-500 rounded-lg p-2 mr-2">
                            <p class="text-white">رسالة مرسلة 1</p>
                        </div>
                        <img src="https://via.placeholder.com/50" alt="صورة المرسل" class="rounded-full w-8 h-8">
                    </div>

                    <div class="flex justify-end mb-2">
                        <div class="bg-blue-500 rounded-lg p-2 mr-2">
                            <p class="text-white">رسالة مرسلة 2</p>
                        </div>
                        <img src="https://via.placeholder.com/50" alt="صورة المرسل" class="rounded-full w-8 h-8">
                    </div>
                </div>
                <p class="text-sm text-gray-600 text-center mt-4">معلومات وهمية للتصميم فقط.</p>
            </div>
        </div>
    </div>
</x-app-layout>
