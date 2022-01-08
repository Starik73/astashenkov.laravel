<?php

namespace App\Http\Controllers\FrontEnd;

use App\Enum\NavMenuEnum;
use App\Enum\SettingsEnum;
use App\Http\Controllers\BaseController;

class BaseFrontEndController extends BaseController
{
    const ITEMS_PER_PAGE = SettingsEnum::SITE_ITEM_PER_PAGE;

    public function __construct()
    {
        view()->share([
            'nav_menu' => NavMenuEnum::SITE_NAV_MENU,
        ]);
    }
}
