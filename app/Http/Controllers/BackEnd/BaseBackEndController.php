<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\BaseController;
use App\Enum\NavMenuEnum;
use App\Enum\SettingsEnum;

class BaseBackEndController extends BaseController
{
    const ITEMS_PER_PAGE = SettingsEnum::ADMIN_ITEM_PER_PAGE;

    public function __construct() {
        view()->share([
            'nav_menu' => NavMenuEnum::AMNIN_NAV_MENU
        ]);
    }
}
