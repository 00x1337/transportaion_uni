<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\user_info;
class FileUploader extends Component
{
    use WithFileUploads;

    public $id_user;
    public $document_1;
    public $document_2;
    public $document_3;
    public $document_4;

    protected $rules = [
        'document_1' => 'nullable|mimes:pdf,doc,docx,jpeg,png,jpg,pdf,doc,docx|max:10240', // تأكد من تحديد الامتدادات والحجم المسموح به
        'document_2' => 'nullable|mimes:pdf,doc,docx,jpeg,png,jpg,pdf,doc,docx|max:10240',
        'document_3' => 'nullable|mimes:pdf,doc,docx,jpeg,png,jpg,pdf,doc,docx|max:10240',
    ];

    public function store()
    {
//        dd(1);
        $this->validate();

        $userInfo = user_info::updateOrCreate(
            ['id_user' => auth()->id()],
            [
                'document_1' => $this->document_1->store('documents') ,
                'document_2' => $this->document_2->store('documents') ,
                'document_3' => $this->document_3->store('documents') ,
            ]
        );

        $this->reset(['document_1', 'document_2', 'document_3']);

        session()->flash('message', 'تم رفع المستندات بنجاح!');
        return $this->redirect("/");
    }

    public function render()
    {
        return view('livewire.file-uploader');
    }
}
