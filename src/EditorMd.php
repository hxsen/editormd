<?php

namespace Hxsen\EditorMd;

use Encore\Admin\Extension;

class EditorMd extends Extension
{
    public $name = 'editormd';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Editormd',
        'path'  => 'editormd',
        'icon'  => 'fa-gears',
    ];
}
