<?php

namespace Hxsen\EditorMd;

use Encore\Admin\Form\Field;

class EditorField extends Field
{
    protected $view = 'editormd::index';

    protected static $css = [
        'vendor/hxsen/editormd/editor.md/css/editormd.min.css'
    ];

    protected static $js = [
        'vendor/hxsen/editormd/editor.md/editormd.min.js'
    ];

    public function render()
    {
        $dynamicMode = config('admin.extensions.markdown.dynamicMode', false);
        $config = $this->getConfigText();
        $valueType = config('admin.extensions.markdown.valueType');

        // 定义可能使用到的变量
        $data = [
            'dynamicMode'=>$dynamicMode,
            'config' => $config,
            'valueType' => $valueType,
            'column'=>$this->id
        ];
        $this->script = view('editormd::script', $data)->render();

        return parent::render();
    }
    // 获取配置并追加配置
    private function getConfigText(){
        $config = (array) config('admin.extensions.editormd.config');

        return json_encode($config);

    }
}
