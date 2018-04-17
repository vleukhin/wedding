<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function showInvite(Invite $invite)
    {
        if (Auth::guard('admin')->guest()){
            $invite->views++;
            $invite->save();
        }

        return view('invite', [
            'invite' => $invite,
        ]);
    }
}