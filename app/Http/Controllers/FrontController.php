<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function showInvite(Invite $invite)
    {
        if (Auth::guard('admin')->guest()) {
            $invite->views++;
            $invite->save();
        }

        $survey_done = session()->get('survey_done', null);
        session()->forget('survey_done');

        return view('invite', [
            'invite'      => $invite,
            'survey_done' => $survey_done,
        ]);
    }

    public function saveSurvey(Request $request, Invite $invite)
    {
        $invite->update([
            'accepted' => $request->input('accept', false),
            'survey'   => [
                'meal'  => $request->input('meal'),
                'drink' => $request->input('drink'),
            ],
        ]);


        session()->put('survey_done', $request->input('accept', 0));

        return redirect()->route('invite', [$invite->uid]);
    }
}