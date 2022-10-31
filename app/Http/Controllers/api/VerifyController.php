<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify(Request $request)
    {
        return [
            'error' => false,
            'people' => People::where('id_no', $request->id )->first(),
        ];
    }
}
