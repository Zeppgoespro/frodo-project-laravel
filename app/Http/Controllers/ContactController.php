<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => ['required', 'email'],
            'message'   => 'required'
        ]);

        # Send email

        return ['success' => true];
    }
}