<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Invite;

class InvitesController extends Controller
{
    public function index()
    {
        $invites = Invite::all();

        return view('admin.invites.index', compact('invites'));
    }
}