<?php

namespace App\Enum;

abstract class BreadCrumbsEnum
{
    const BREAD_CRUMBS = [
        'index'           => 'Главная',
        'blog'            => 'Блог',
        'post'            => 'Запись',
        'courses'         => 'Онлайн уроки',
        'courses.html'    => 'HTML',
        'courses.js'      => 'JavaScript',
        'courses.css'     => 'CSS',
        'courses.php'     => 'PHP',
        'info'            => 'Информация',
        'game'            => 'Игра',
        'contact'         => 'Контакты',
        'login'           => 'Авторизация',
        'registration'    => 'Регистрация',
        'forgot-password' => 'Забытый пароль',
        'shop'            => "Магазин"
    ];

    const COURSES = [
        'html' => 'courses.html',
        'js'   => 'courses.html',
        'css'  => 'courses.css',
        'php'  => 'courses.php',
    ];
}
