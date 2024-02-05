<div>
    <div class="py-12">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-lg  w-full">
                <center class="p-6">
                    <h1 class="text-2xl font-semibold mb-4 text-center">الطلبات</h1>
                    <p class="mb-4 text-lg leading-relaxed">هنا يمكنك الوصول إلى الطلبات الخاصة بك.</p>
                    <ul class="space-y-4">
                        @if(auth()->user()->role != "user")
                            @foreach($requests as $request)
                                <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                                    <a href="/profile/{{$request->user_id}}"> {{\App\Models\User::find($request->user_id)->name}}</a>
                                    <div class="flex">
                                        <button wire:click="acceptRequest({{$request->id}})" style="
    background-color: green;
" class="bg-green-600 hover:bg-green-700 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">قبول</button>
                                        <button wire:click="rejectRequest({{$request->id}})" class="bg-red-500 hover:bg-red-600 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2">رفض</button>
                                    </div>
                                </li>
                            @endforeach
                            @if(\App\Models\req::where('id_driver', \Auth::id())->count() == 0)
                                لايوجد طلبات
                                @endif

                        @else

                            @foreach(\App\Models\req::where("user_id",'=',auth()->id())->get() as $request)
                                <li class="flex justify-between items-center bg-gray-100 p-4 rounded-md" dir="rtl">
                                    <a href="/profile/{{$request->user_id}}"> {{\App\Models\User::find($request->id_driver)->name}}</a>
                                    @if($request->accept === null)
                                    <a href="">في الانتظار...</a>
                                    @elseif($request->accept == true )
                                        <a href="">تم القبول</a>
                                    @elseif($request->accept == false)
                                        <a href="">تم الرفض</a>
                                    @else
                                        <a href="">تم الرفض</a>

                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </center>
            </div>
        </div>
    </div>
</div>
