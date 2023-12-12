<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('رافقني') }}
        </h2>
    </x-slot>







    <div class="min-h-screen flex items-center justify-center">

        <div class=" flex items-center ">
            <div class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                <input type="text" placeholder="ابحث عن الموقع" class=" text-center w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   ">
                <br>
                <img src="https://cdn.discordapp.com/attachments/1177370777956405350/1184216342627352646/Screenshot_1445-05-28_at_10.32.14_PM.png?ex=658b2a69&is=6578b569&hm=7a29c0068239e68806d27243b61c994f4c835a439b8da25c4d35baab8c1c521d&" alt="">                <hr class="my-4">
                <center>
                    <p class="mb-4 text-lg leading-relaxed" dir="rtl">اليك خطوات إعداد حسابك :</p>

                    <div class="list-disc list-inside mb-6 space-y-4">
                        <div>
                            <label for="file-id-1"  class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
                                قروب رفيقات الحي
                            </label>
                        </div>
                        <br>
                        <div>
                            <label for="file-id-2" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
الرفيقات                            </label>
                        </div>
                        <br>
                        <div>
                            <label for="file-id-3" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm   text-white bg-blue-500 hover:bg-blue-600 cursor-pointer">
السائقين                            </label>
                        </div>
                        <br>
                    </div>
                    <hr>
                    <br>
                </center>

            </div>
        </div>
    </div>
</x-app-layout>
