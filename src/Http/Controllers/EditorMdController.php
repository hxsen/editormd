<?php

namespace Hxsen\EditorMd\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class EditorMdController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('editormd::index'));
    }
}