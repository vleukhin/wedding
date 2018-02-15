<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\MessageBag;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Список ошибок
     *
     * @var MessageBag
     */
    protected $errors;

    /**
     * Авторизованный пользователь
     *
     * @var User
     */
    protected $user;

    /**
     * Конструктор
     */
    public function __construct()
    {
        // Инициалиируем переменную для хранения ошибок
        $this->errors = new MessageBag();

        // Определяем авторизованного пользователя
        if (auth()->check()) {
            $this->user = auth()->user();
        } else {
            $this->user = new User(['id' => 0]);
        }
    }
}
