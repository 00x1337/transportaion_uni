<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('رافقني') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-lg w-full">
                <center class="p-6">
                    <h1 class="text-2xl font-semibold mb-4 text-center">السائقين</h1>
                    <p class="mb-4 text-lg leading-relaxed">هنا يمكنك الوصول إلى المحادثات الخاصة بك.</p>
                    <div class="flex flex-col space-y-4">
                        <!-- مثال لمحادثة مستخدم 1 -->
                        @foreach(\App\Models\User::where("located",'=',\Auth::user()->located)->where("role",'=','driver')->get() as $o)
                            @if(\Auth::user()->id != $o->id)
                                <div class="flex items-center border rounded-lg p-3">

                                <a href="/chats/user/{{$o->id}}"  class="flex items-center ">
                                    <img src="https://ui-avatars.com/api/?name={{$o->id}}&color=7F9CF5&background=EBF4FF" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                    <div class="ml-4">
                                        <p class="font-semibold">{{$o->name}}</p>
                                    </div>
                                </a>
                                    <div style="margin-left: auto; text-align: right;"> <!-- Apply alignment styles here -->
{{--                                        @if(\App\Models\req::where("user_id",'=',\Auth::id())->where("id_driver",'=',$o->id)->count() != 1)--}}
{{--                                            <button wire:click="acceptRequest({{$o->id}})" style="background-color: green;" class="bg-green-600 hover:bg-green-700 items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2 text-center">ارسال طلب</button>--}}
{{--                                            --}}{{-- <button wire:click="rejectRequest({{$request->id}})" class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button> --}}
{{--                                        @else--}}
{{--                                            تم ارسال طلب--}}
{{--                                        @endif--}}
                                    </div>
                                    <div>
                                        @if(\App\Models\req::where("user_id",'=',\Auth::id())->where("id_driver",'=',$o->id)->count() != 1)
                                            <button wire:click="acceptRequest({{$o->id}})" style="background-color: green;" class="bg-green-600 hover:bg-green-700 items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2 text-center">ارسال طلب</button>
                                            {{-- <button wire:click="rejectRequest({{$request->id}})" class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button> --}}
                                        @else
                                            تم ارسال طلب
                                        @endif                                    </div>
                                    <div>
                                        <a href="/profile/{{$o->id}}" style="color: #1f2937" class="text-black items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2 text-center">الانتقال للملف الشخصي</a>
                                    </div>
                                </div>
                    </div>

                    @endif


                        @endforeach
                        @if(\App\Models\User::where("located",'=',\Auth::user()->located)->where("role",'=','driver')->count() == 0)
                            <p class="text-sm text-gray-600 text-center mt-4 text-red-500">                                    لايوجد احد للان ...
                                .</p>

                        @endif

                    </div>
                </center>
            </div>
        </div>
    </div>
</x-app-layout>
