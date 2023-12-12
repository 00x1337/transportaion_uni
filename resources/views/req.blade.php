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
                    <h1 class="text-2xl font-semibold mb-4 text-center">الطلبات</h1>
                    <p class="mb-4 text-lg leading-relaxed">هنا يمكنك الوصول إلى الطلبات الخاصة بك.</p>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                            <span>اسم الشخص 1</span>
                            <div class="flex">
                                <button class="bg-green-500 hover:bg-green-600 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">قبول</button>
                                <button class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>
                            </div>



                        </li>
                        <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                            <span>اسم الشخص 2</span>
                            <div class="flex">
                                <button class="bg-green-500 hover:bg-green-600 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">قبول</button>
                                <button class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>
                            </div>



                        </li>
                        <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                            <span>اسم الشخص 3</span>
                            <div class="flex">
                                <button class="bg-green-500 hover:bg-green-600 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">قبول</button>
                                <button class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>
                            </div>



                        </li>
                        <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                            <span>اسم الشخص 4</span>
                            <div class="flex">
                                <button class="bg-green-500 hover:bg-green-600 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">قبول</button>
                                <button class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>
                            </div>



                        </li>
                        <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                            <span>اسم الشخص 5</span>
                            <div class="flex">
                                <button class="bg-green-500 hover:bg-green-600 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">قبول</button>
                                <button class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>
                            </div>



                        </li>
                    </ul>
                </center>
            </div>
        </div>
    </div>
</x-app-layout>
