<x-app-layout>
    <x-slot name="header">

    </x-slot>







    <div class="min-h-screen flex items-center justify-center">

    <div class=" bg-white p-8 rounded shadow-lg  w-full ">
        <div class="bg-white p-8 rounded shadow-lg  w-full">
            <h1 class="text-2xl font-semibold mb-4 text-center" dir="rtl">مرحبًا بك، {{\Auth::user()->name}}</h1>
            <hr class="my-4">
            <center>
                @if(\Auth::user()->role != "user")

                @if(\App\Models\user_info::where("id_user",'=',\Auth::user()->id)->count() == 0)
                        <p class="mb-4 text-lg leading-relaxed" dir="rtl">اليك خطوات إعداد حسابك :</p>

                        <livewire:file-uploader />

                @else
                        <br>
                        <a href="/req"  class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm  text-white bg-gray-500 hover:bg-gray-600 cursor-pointer">
                            الطلبات
                        </a>
                        <br><br><br>
                        <hr>
<p dir="rtl">
    الطلاب :
</p>                        <br>

                        @foreach(\App\Models\req::where("id_driver",'=',\Auth::user()->id)->where("accept",'=',true)->get() as $o)
                            @if(\Auth::user()->id != $o->id)
                                <a href="{{\App\Models\User::find($o->user_id)->google_map}}" class="flex items-center border rounded-lg p-3">
                                    <img src="{{\App\Models\User::find($o->user_id)->profile_photo_url}}" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                    <div class="ml-4">
                                        <p class="font-semibold">{{\App\Models\User::find($o->user_id)->name}}</p>
                                    </div>
                                </a>
                            @endif

                        @endforeach
                        @if(\App\Models\req::where("id_driver",'=',\Auth::user()->id)->where("accept",'=',true)->count() == 0)
                            <p class="text-sm text-gray-600 text-center mt-4">                                    لايوجد احد للان ...
                                .</p>

                        @endif
                @endif
        @else
    @if(\Auth::user()->google_map ==null && \Auth::user()->located ==null)
            <div class="list-disc list-inside mb-6 space-y-4">
                <div>
                    @livewire('start-user')
                </div>


            </div>
            <hr>
            <br>
            <br><br>
            </center>

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

        @endif
    </div>
    </div>
</x-app-layout>
