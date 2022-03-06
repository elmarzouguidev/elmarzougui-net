<?php

declare(strict_types=1);

namespace App\Http\Controllers\Elmarzougui\Web;

use App\Http\Controllers\Controller;
use App\Models\Elmarzougui\Post;
use App\Repositories\Blog\BlogInterface;
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

    public function price()
    {
        return view('pages.price.index');
    }

    public function blog()
    {
        $posts = app(BlogInterface::class)->getAll();

        return view('pages.blog.index', compact('posts'));
    }

    public function singleBlog(Post $post)
    {
        return view('pages.blog.single.index', compact('post'));
    }

    public function contact()
    {
        return view('pages.contact.index');
    }
}
