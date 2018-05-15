<?php

namespace App\Admin\Controllers;

use App\Models\Invite;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SurveyController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        $meal = [
            'meat' => ['count' => 0, 'list' => []],
            'fish' => ['count' => 0, 'list' => []],
            'bird' => ['count' => 0, 'list' => []],
        ];

        $drink = [
            'wiskey' => ['count' => 0, 'list' => []],
            'cognac' => ['count' => 0, 'list' => []],
            'wine'   => ['count' => 0, 'list' => []],
            'vodka'  => ['count' => 0, 'list' => []],
            'none'   => ['count' => 0, 'list' => []],
        ];

        Invite::where('accepted', 1)->get()->each(function (Invite $invite) use (&$meal, &$drink) {
            if (is_array($invite->survey['meal'])) {
                $meal[$invite->survey['meal'][0]]['count']++;
                $meal[$invite->survey['meal'][1]]['count']++;

                $meal[$invite->survey['meal'][0]]['list'][] = $invite->getNames()[0];
                $meal[$invite->survey['meal'][1]]['list'][] = $invite->getNames()[1];
            } else {
                $meal[$invite->survey['meal']]['count']++;
                $meal[$invite->survey['meal']]['list'][] = $invite->name;
            }

            if (is_array($invite->survey['drink'])) {
                $drink[$invite->survey['drink'][0]]['count']++;
                $drink[$invite->survey['drink'][1]]['count']++;

                $drink[$invite->survey['drink'][0]]['list'][] = $invite->getNames()[0];
                $drink[$invite->survey['drink'][1]]['list'][] = $invite->getNames()[1];
            } else {
                $drink[$invite->survey['drink']]['count']++;
                $drink[$invite->survey['drink']]['list'][] = $invite->name;
            }
        });

        return Admin::content(function (Content $content) use ($meal, $drink) {

            $content->header('Результаты опроса');

            $content->body(view('admin.poll', compact('meal', 'drink')));
        });
    }
}
