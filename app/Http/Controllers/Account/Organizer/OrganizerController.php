<?php

namespace App\Http\Controllers\Account\Organizer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    public function dashboard()
    {

        $data['user'] = User::find(Auth::user()->id);
        return view('account.organizer.dashboard', $data);
    }
}
