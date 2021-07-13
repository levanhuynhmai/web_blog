<?php

namespace App\Http\Controllers\Site;

use App\Models\Page;
use Illuminate\Http\Request;

final class PageController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function view(Request $request, $slug)
    {
        $page = Page::query()->where('slug', $slug)->first();

        if (empty($page)) {
            return redirect(base_url('404.html'));
        }

        $data = [
            'title' => $page->title,
            'page' => $page,
        ];

        return view($this->layout . 'page.view', $this->render($data));
    }

    function getblog(){
        return view('layout.default.page.blog-show');
    }
    function postblog(){
        
    }
}
