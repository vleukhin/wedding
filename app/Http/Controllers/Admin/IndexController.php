<?php
/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */

namespace App\Http\Controllers\Admin;


class IndexController
{
    public function index()
    {
        return view('admin.app');
    }
}