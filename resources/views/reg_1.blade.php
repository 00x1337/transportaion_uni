<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('رافقني') }}
        </h2>
    </x-slot>







    <div class="min-h-screen flex items-center justify-center">

    <div class=" flex items-center ">
        <div class="bg-white p-8 rounded shadow-lg max-w-md w-full">
            <h1 class="text-2xl font-semibold mb-4 text-center" dir="rtl">مرحبًا بك، {{\Auth::user()->name}}</h1>
            <hr class="my-4">
            <center>
                <p class="mb-4 text-lg leading-relaxed" dir="rtl">اليك خطوات إعداد حسابك :</p>

            <div class="list-disc list-inside mb-6 space-y-4">
                <div>
                    <label for="file-id-1" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
                        رفع ملف ارفاق الهوية أو الإقامة
                        <input id="file-id-1" type="file" class="hidden">
                    </label>
                </div>
                <br>
                <div>
                    <label for="file-id-2" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
                        رفع الصورة الشخصية
                        <input id="file-id-2" type="file" class="hidden">
                    </label>
                </div>
                <br>
                <div>
                    <label for="file-id-3" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm   text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
                        رفع ملف رخصة القيادة
                        <input id="file-id-3" type="file" class="hidden">
                    </label>
                </div>
                <br>
                <div>
                    <label for="file-id-4" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
                        رفع ملف نوع السيارة
                        <input id="file-id-4" type="file" class="hidden">
                    </label>
                </div>
            </div>
                <hr>
                <br>
                <a href="/home" for="file-id-4" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
                    رفع المستندات
                </a>
                <br><br>
            </center>

            <p class="text-sm text-gray-600 text-center">إذا كانت لديك أي استفسارات، لا تتردد في الاتصال بنا.</p>
        </div>
    </div>
    </div>
</x-app-layout>
