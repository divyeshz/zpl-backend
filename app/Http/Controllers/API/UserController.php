<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function edit($id)
    {
        // find the user
        $user = User::findOrFail($id);

        // Return success response after account creation
        return ok(__('strings.success', ['name' => 'Get user details']), ['user' => $user]);
    }
}
