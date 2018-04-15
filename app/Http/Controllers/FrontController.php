<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Http\Controllers;

use App\Models\Invite;

class FrontController extends Controller
{
    public function showInvite(Invite $invite)
    {
        return view('invite', [
            'invite' => $invite,
        ]);
    }
}