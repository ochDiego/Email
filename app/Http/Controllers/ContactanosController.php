<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMaillable;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContactanos;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(StoreContactanos $request)
    {
    
        $email = new ContactanosMaillable($request->all());

        Mail::to($request->empleado)->send($email);

        return redirect()->route('contactanos.index')->with('mensaje','Mensaje enviado');

    }
}
