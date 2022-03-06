<?php

declare(strict_types=1);

namespace App\Http\Controllers\Elmarzougui\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Slider\SliderInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function index()
    {
        $sliders = app(SliderInterface::class)->getAll();

        return view('pages.home.index', compact('sliders'));
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function service()
    {
        return view('pages.service.index');
    }
}
