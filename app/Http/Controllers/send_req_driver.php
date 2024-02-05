<?php

namespace App\Http\Controllers;

use App\Models\req;
use Illuminate\Http\Request;

class send_req_driver extends Controller
{
    public function acceptRequest($requestId)
    {
        $request = req::find($requestId);
//        dd($request);
        if ($request) {
            $request->id_driver = \Auth::id();
            $request->accept = true;
            $request->save();
//            dd($request);
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
}
