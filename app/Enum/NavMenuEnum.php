<?php

namespace App\Enum;

abstract class NavMenuEnum
{
    const AMNIN_NAV_MENU = [
        'backend'      => 'Админка',
        'backend.blog' => 'Блог',
        'courses'      => [
            'Онлайн уроки' => [
                'backend.html'    => 'HTML',
                'backend.js'      => 'JavaScript',
                'backend.css'     => 'CSS',
                'backend.php'     => 'PHP',
            ],
        ],
        'backend.shop' => 'Магазин',
    ];
    const SITE_NAV_MENU = [
        'index'      => 'Главная',
        'blog'       => 'Блог',
        'courses'    => [
            'Онлайн уроки' => [
                'courses.html'    => 'HTML',
                'courses.js'      => 'JavaScript',
                'courses.css'     => 'CSS',
                'courses.php'     => 'PHP',
            ],
        ],
        'info'       => 'Информация',
        'game'       => 'Игра',
        'contact'    => 'Контакты'
    ];
    const BREAD_CRUMBS = [
        'index'      => 'Главная',
        'blog'       => 'Блог',
        'courses'    => 'Онлайн уроки',
        'html'       => 'HTML',
        'js'         => 'JavaScript',
        '.css'       => 'CSS',
        'php'        => 'PHP',
        'info'       => 'Информация',
        'game'       => 'Игра',
        'contact'    => 'Контакты'
    ];
}
