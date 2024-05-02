<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefono;

class TelefonosController extends Controller
{
    
    public function show(string $id)
    {
        $telefono = Telefono::findOrfail($id);
        return view('Show' , compact('telefono'));
    }
}
