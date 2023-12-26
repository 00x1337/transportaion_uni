<div>
    <div>
        <div class="list-disc list-inside mb-6 space-y-4">
            <div>
                <!-- زر رفع ملف الهوية أو الإقامة -->
                <label for="file-id-1" wire:loading.class="bg-blue-500" wire:target="document_1" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-gray-500 hover:bg-blue-600 cursor-pointer">
                    رفع ملف ارفاق الهوية أو الإقامة
                    <input wire:model="document_1" id="file-id-1" type="file" class="hidden">
                </label>
            </div>
            <br>
            <div>
                <!-- زر رفع ملف رخصة القيادة -->
                <label for="file-id-3" wire:loading.class="bg-blue-500" wire:target="document_2" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-gray-500 hover:bg-blue-600 cursor-pointer">
                    رفع ملف رخصة القيادة
                    <input wire:model="document_2" id="file-id-3" type="file" class="hidden">
                </label>
            </div>
            <br>
            <div>
                <!-- زر رفع ملف نوع السيارة -->
                <label for="file-id-4" wire:loading.class="bg-blue-500" wire:target="document_3" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-gray-500 hover:bg-blue-600 cursor-pointer">
                    رفع ملف استمارة السيارة
                    <input wire:model="document_3" id="file-id-4" type="file" class="hidden">
                </label>
            </div>
        </div>

        <hr>
        <br>

        <!-- زر لرفع المستندات وتخزينها في قاعدة البيانات -->
        <button wire:click="store" wire:loading.class="bg-green-500" class="w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-500 hover:bg-green-500 cursor-pointer">
            رفع المستندات
        </button>

        <br><br>

        <p class="text-sm text-gray-600 text-center">إذا كانت لديك أي استفسارات، لا تتردد في الاتصال بنا.</p>
    </div>
</div>
