<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ValidationController extends Controller
{
    public function checkUserEmailUnique($email)
    {
        $isUnique = !User::where('email', $email)->exists();

        return response()->json($isUnique);
    }

    public function checkUserUsernameUnique($username)
    {
        $isUnique = !User::where('name', $username)->exists();

        return response()->json($isUnique);
    }
}
