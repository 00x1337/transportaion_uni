<div >
    <div id="chat-container"  style="overflow-y: scroll; ">
    <div class="border rounded-lg p-4 mb-4 space-y-4">

        <!-- عرض الرسائل -->
        @foreach ($messages as $message)
            @if ($message['user_id'] != \Auth::user()->id)
                @php
                    $user = \App\Models\User::find($message->user_id);
                    $profile_photo_path = $user->profile_photo_path ?? ""
                @endphp
                <div class="flex items-start mb-2">
                    <div style="">
                        <span>{{ \App\Models\User::find($message->user_id)->name }}</span>
                        <img src="https://ui-avatars.com/api/?name={{$user->name[0]}}&color=7F9CF5&background=EBF4FF" alt="صورة المستلم" class="rounded-full w-8 h-8">
                    </div>
                    <div style="">
                        <div class="bg-gray-200 rounded-lg p-2 ml-2">
                            <p>{{ $message['content'] }}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex justify-end mb-2">
                    <div class="bg-blue-500 rounded-lg p-2 mr-2">
                        <p class="text-white">{{ $message['content'] }}</p>
                    </div>
                    <img src="https://via.placeholder.com/50" alt="صورة المرسل" class="rounded-full w-8 h-8">
                </div>
            @endif
        @endforeach
    </div>
        <!-- حقل الإدخال لإرسال الرسالة -->

    </div>
    <br>
    <hr>
    <br>
    <form wire:submit.prevent="sendMessage" class="flex items-center">
        <input wire:model="newMessage" type="text" class="border rounded-md p-2 w-full mr-2" placeholder="اكتب رسالتك">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">إرسال</button>
    </form>
    <script>
        window.onload = function() {
            const chatContainer = document.getElementById('chat-container');
            chatContainer.scrollTop = chatContainer.scrollHeight;
        };
    </script>
    <script>
        Livewire.on('messageAdded', () => {
            const chatContainer = document.getElementById('chat-container');
            chatContainer.scrollTop = chatContainer.scrollHeight;
        });
    </script>

</div>
