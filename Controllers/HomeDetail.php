<?php
namespace App\Http\Controllers;
use Faker\Provider\Base;
use Illuminate\Routing\Controllers as BaseController;

class HomeDetail extends BaseController
{
    public function showController()
    {
        return'Controller Detail';
    }
}
