<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('رافقني') }}
        </h2>
    </x-slot>

    <div class="py-12">

            <div class="min-h-screen flex items-center justify-center">
                <div class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                    <center class="p-6">
                        <h1 class="text-2xl font-semibold mb-4 text-center">المحادثات</h1>
                        <p class="mb-4 text-lg leading-relaxed">هنا يمكنك الوصول إلى المحادثات الخاصة بك.</p>
                        <div class="flex flex-col space-y-4">
                            <!-- مثال لمحادثة مستخدم 1 -->
                            <a href="#1" class="flex items-center border rounded-lg p-3">
                                <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                <div class="ml-4">
                                    <p class="font-semibold">اسم المستخدم 1</p>
                                </div>
                            </a>

                            <!-- مثال لمحادثة مستخدم 2 -->
                            <a href="#2" class="flex items-center border rounded-lg p-3">
                                <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                <div class="ml-4">
                                    <p class="font-semibold">اسم المستخدم 2</p>
                                </div>
                            </a>

                            <!-- مثال لمحادثة مستخدم 3 -->
                            <a href="#3" class="flex items-center border rounded-lg p-3">
                                <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                <div class="ml-4">
                                    <p class="font-semibold">اسم المستخدم 3</p>
                                </div>
                            </a>

                            <!-- مثال لمحادثة مستخدم 4 -->
                            <a href="#4" class="flex items-center border rounded-lg p-3">
                                <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                <div class="ml-4">
                                    <p class="font-semibold">اسم المستخدم 4</p>
                                </div>
                            </a>

                            <!-- مثال لمحادثة مستخدم 5 -->
                            <a href="#5" class="flex items-center border rounded-lg p-3">
                                <img src="https://via.placeholder.com/50" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                <div class="ml-4">
                                    <p class="font-semibold">اسم المستخدم 5</p>
                                </div>
                            </a>
                        </div>
                        <p class="text-sm text-gray-600 text-center mt-4">معلومات وهمية للتصميم فقط.</p>
                    </center>
                </div>
            </div>
    </div>
</x-app-layout>
