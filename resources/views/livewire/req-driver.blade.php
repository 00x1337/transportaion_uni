<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="py-12">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-lg  w-full">
                <center class="p-6">
                    @if(session()->has('message'))
                        <div id="alertMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('message') }}</span>
                            <span id="closeIcon" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
            <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1 1 0 0 1-1.414 0L10 11.414l-2.93 2.935a1 1 0 1 1-1.414-1.414L8.586 10 5.651 7.065a1 1 0 0 1 1.414-1.414L10 8.586l2.935-2.931a1 1 0 0 1 1.414 1.414L11.414 10l2.934 2.935a1 1 0 0 1 0 1.414z"/>
            </svg>
        </span>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const alertMessage = document.getElementById('alertMessage');
                                const closeIcon = document.getElementById('closeIcon');

                                const hideMessage = () => {
                                    if (alertMessage) {
                                        alertMessage.style.display = 'none';
                                    }
                                };

                                setTimeout(hideMessage, 5000);

                                const hideOnCloseIconClick = () => {
                                    if (alertMessage) {
                                        alertMessage.style.display = 'none';
                                    }
                                };

                                if (closeIcon) {
                                    closeIcon.addEventListener('click', hideOnCloseIconClick);
                                }
                            });
                        </script>
                    @endif


                    <h1 class="text-2xl font-semibold mb-4 text-center">السائقين</h1>
{{--                    <p class="mb-4 text-lg leading-relaxed">هنا يمكنك الوصول إلى الطلبات الخاصة بك.</p>--}}
                    <ul class="space-y-4">
                        @foreach($requests as $request)
                            <li class="" dir="rtl">

                                <div href="#" class="flex justify-between items-center bg-gray-100 p-4 rounded-md">
                                    <img src="{{$request->profile_photo_url}}" alt="صورة المستخدم" class="rounded-full w-12 h-12">
                                        <a href="/profile/{{$request->id}}" class="font-semibold">{{$request->name}}</a>
                                    <div class="flex">
                                        @if(\App\Models\req::where("user_id",'=',\Auth::id())->where("id_driver",'=',$request->id)->count() != 1)
                                            <button wire:click="acceptRequest({{$request->id}})" style="
    background-color: green;
" class="bg-green-600 hover:bg-green-700 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">ارسال طلب</button>
                                            {{--                                    <button wire:click="rejectRequest({{$request->id}})" class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>--}}
                                        @else
                                            تم ارسال طلب
                                       @endif
                                        </div>
                                </div>


                            </li>
                        @endforeach
                        @if(\App\Models\User::where('located', \Auth::user()->located)->where("role",'!=','user')->count() == 0)
                            لايوجد سائقين  حولك
                        @endif
                    </ul>
                </center>
            </div>
        </div>
    </div>

</div>
