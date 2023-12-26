<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('رافقني') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                <h1 class="text-2xl font-semibold mb-4 text-center">            {{\App\Models\User::find($id)->name}}
                </h1>
                {{--             @livewire('chat-component')--}}
                @livewire('chat-componen-user', ['id' => $id])

{{--                <livewire:chat-componen-user id="{{$id}}" />--}}
            </div>
        </div>
    </div>
</x-app-layout>
