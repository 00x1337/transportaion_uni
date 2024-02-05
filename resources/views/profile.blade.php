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
                    <img src="{{\App\Models\User::find($id)->profile_photo_url}}" alt="صورة المستخدم" class="rounded-full w-12 h-12">

                    <div class="flex items-center " dir="rtl">

                    <h1 class="text-2xl font-semibold mb-4 text-center">الملف الشخصي</h1>
                    @if(\App\Models\user_info::where("id_user",'=',\Auth::user()->id)->count() == 0)
                        <img src="https://www.business2community.com/wp-content/uploads/2023/02/instagram-verified-badge-760x433.png" alt="" width="90">
                    @endif
                    </div>

                    <!-- استبدل هذا الجزء بمعلومات المستخدم المحدد -->
                    <div class=" items-center border rounded-lg p-3">
                        <div class="ml-4">
                            <p class="font-semibold">#{{\App\Models\User::find($id)->id}}</p>
                            <p class="text-gray-600 text-sm">البريد الإلكتروني: {{\App\Models\User::find($id)->email}}</p>
                            <p class="text-gray-600 text-sm">رقم الجوال: {{\App\Models\User::find($id)->phone}}</p>
                            <div>
                                <p>المنطقة: {{ \App\Models\User::find($id)->located }}</p>
    <hr>
                                @if(\App\Models\User::find($id)->role == "user")
                                <div>
                                        <?php try{ ?>

                                    @foreach(json_decode(App\Models\User::find($id)->selectedDays, true) as $day => $hours)
                                    <p>{{ $day }}:</p>

                                    <ul>
                                        @foreach($hours as $hour => $selected)
                                            @if($selected)
                                                <li>{{ $hour }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <hr>
                                @endforeach

                                    <?php }catch(\Exception $e){ ?>
                                        لايوجد جدول
                                    <?php } ?>



        </div>


                                @else
                                    <p class="text-gray-600 text-sm">الجنسية: {{\App\Models\User::find($id)->where}}</p>
                                    <p class="text-gray-600 text-sm">السعر: {{\App\Models\User::find($id)->price}}</p>
                                    <p class="text-gray-600 text-sm">نوع السياره: {{\App\Models\User::find($id)->type_car}}</p>
                                @endif
    </div>
                            <!-- يمكنك استبدال البيانات الشخصية بالبيانات الفعلية للمستخدم -->
                            <!-- ويمكنك تعديل النصوص والتفاصيل كما تريد -->
                        </div>
                    </div>
                    <!-- اضف هنا أي معلومات إضافية تود عرضها -->
                </center>
            </div>
        </div>
    </div>
</x-app-layout>
