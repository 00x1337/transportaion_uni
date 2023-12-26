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
                    <h1 class="text-2xl font-semibold mb-4 text-center">السائقين</h1>
                    <p class="mb-4 text-lg leading-relaxed">هنا يمكنك الوصول إلى المحادثات الخاصة بك.</p>
                    <div class="flex flex-col space-y-4">
                        <!-- مثال لمحادثة مستخدم 1 -->
                        @foreach(\App\Models\User::where("located",'=',\Auth::user()->located)->where("role",'=','driver')->get() as $o)
                            @if(\Auth::user()->id != $o->id)
                                <a href="/chats/user/{{$o->id}}" class="flex items-center border rounded-lg p-3">
                                    <img src="https://ui-avatars.com/api/?name={{$o->id}}&color=7F9CF5&background=EBF4FF" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                    <div class="ml-4">
                                        <p class="font-semibold">{{$o->name}}</p>
                                    </div>
                                </a>
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
