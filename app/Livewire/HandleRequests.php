<?php

namespace App\Livewire;

use App\Models\req;
use Livewire\Component;

class HandleRequests extends Component
{
    public function acceptRequest($requestId)
    {
        $request = req::find($requestId);
        if ($request) {
            $request->id_driver = Auth::id();
            $request->accept = true;
            $request->save();
        }
    }

    public function rejectRequest($requestId)
    {
        $request = req::find($requestId);
        if ($request) {
            $request->accept = false;
            $request->save();
        }
    }
    public function render()
    {
        $requests = req::where('id_driver', \Auth::id())->get();
        return view('livewire.handle-requests', ['requests' => $requests]);
    }
}
