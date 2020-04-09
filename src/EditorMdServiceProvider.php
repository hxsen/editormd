<?php

namespace Hxsen\EditorMd;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Encore\Admin\Show;
use Illuminate\Support\ServiceProvider;

class EditorMdServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(EditorMd $extension)
    {
        if (! EditorMd::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'editormd');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/hxsen/editormd')],
                'editormd'
            );
        }

        $this->app->booted(function () {
            EditorMd::routes(__DIR__.'/../routes/web.php');
        });

        // 启动该插件的时候
        Admin::booting(function () {
            Form::extend('editormd', EditorField::class);
            Show::extend('mdShow', EditorShow::class);
        });
        // 启动成功之后加载
        Admin::booted(function () {

        });
    }
}
