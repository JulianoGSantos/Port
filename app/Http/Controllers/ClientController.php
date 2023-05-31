<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Models\Data;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function start(){
        return view('site.inicio');
    }

    public function index(){
        return view('site.index');
    }

    public function store(DataRequest $request)
    {
        $data = new Data();

        $data->subject = $request->subject;
        $data->description = $request->description;

        $data->save();

        return redirect('start');
    }
}
