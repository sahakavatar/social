<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace Sahak\Social\Http\Controllers;

use Sahak\Social\Models\Test;
use Sahak\Social\Models\Validations;
use Btybug\btybug\Helpers\dbhelper;
use Btybug\btybug\Helpers\helpers;
use App\Http\Controllers\Controller;
use Btybug\btybug\Models\ExtraModules\Structures;
use Btybug\btybug\Models\Routes;
use Illuminate\Http\Request;
use Btybug\btybug\Repositories\HookRepository;

/**
 * Class TestController
 * @package App\ExtraModules\Test\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * TestController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return view('social::index');
    }



}