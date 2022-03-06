<?php

declare(strict_types=1);

namespace App\Http\Controllers\Elmarzougui\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Elmarzougui\Contact\ContactFormRequest;
use App\Mail\Elmarzougui\Contact\ContactMail;
use App\Models\Elmarzougui\Post;
use App\Repositories\Blog\BlogInterface;
use App\Repositories\Slider\SliderInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contactMail(ContactFormRequest $request)
    {
        //dd($request->validated());

        if (isConnected()) {

            Mail::to('abdelgha4or@gmail.com')->send(new ContactMail($request->validated()));

            if (empty(Mail::failures())) {

                return redirect()->back()->with('success', 'merci votre email a été envoyé avec succès');
            }
        }
        return redirect()->back()->with('error', 'Email was not send');

    }


}
