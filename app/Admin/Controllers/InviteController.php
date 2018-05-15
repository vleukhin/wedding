<?php

namespace App\Admin\Controllers;

use App\Models\Invite;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Request;

class InviteController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     *
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Invite::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->column('uid', 'UID');
            $grid->column('name', 'Имя');
            $grid->multiple('Для двоих')->display(function ($multiple) {
                return $multiple ? 'Да' : 'Нет';
            });
            $grid->accepted('Принято')->display(function ($accepted) {
                switch (true){
                    case $accepted === 1:
                        $res = 'Да';
                        break;
                    case $accepted === 0:
                        $res = 'Нет';
                        break;
                    default:
                        $res = 'Не отвечено';
                        break;
                }

                return $res;
            });
            $grid->respect('Уважительное обращение')->display(function ($accepted) {
                return $accepted ? 'Да' : 'Нет';
            });
            $grid->bride_team('Подружка невесты')->display(function ($accepted) {
                return $accepted ? 'Да' : 'Нет';
            });
            $grid->groom_team('Друг жениха')->display(function ($accepted) {
                return $accepted ? 'Да' : 'Нет';
            });
            $grid->column('views', 'Просмотры');

            $grid->created_at();
            $grid->updated_at();

            $grid->filter(function ($filter) {
                $filter->like('name', 'Имя');
                $filter->equal('uid');

                $filter->equal('accepted', 'Принято')->radio([
                    -1 => 'Не отвечено',
                    1 => 'Да',
                    0 => 'Нет',
                ]);

                $filter->equal('respect', 'Уважительное обращение')->radio([
                    1 => 'Да',
                    0 => 'Нет',
                ]);

                $filter->equal('multiple', 'Для двоих')->radio([
                    1 => 'Да',
                    0 => 'Нет',
                ]);

                $filter->equal('bride_team', 'Подружка невесты')->radio([
                    1 => 'Да',
                    0 => 'Нет',
                ]);

                $filter->equal('groom_team', 'Друг жениха')->radio([
                    1 => 'Да',
                    0 => 'Нет',
                ]);
            });

            $grid->actions(function ($actions) {
                $actions->append('<a href="/invite/' . $actions->row->uid . '" target="_blank"><i class="fa fa-eye"></i></a>');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Invite::class, function (Form $form) {
            $form->text('name', 'Имя:');
            $form->switch('multiple', 'Для двоих');
            $form->switch('bride_team', 'Подружка невесты');
            $form->switch('groom_team', 'Друг жениха');
            $form->switch('respect', 'Уважительное обращение');
            $form->radio('sex', 'Пол')->options([
                1 => 'М',
                0 => 'Ж',
            ]);
            $form->hidden('uid');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Request::merge(['uid' => uniqid()]);

        return $this->form()->store();
    }
}
