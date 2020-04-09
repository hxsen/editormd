<?php

namespace Hxsen\EditorMd;

use Encore\Admin\Show\AbstractField;
use Illuminate\Support\Str;

class EditorShow extends AbstractField
{
    // 关闭边框
    public $border = false;
    // 定义当前的字段不解析
    public $escape = false;

    // 定义需要显示的html
    private function html(){
        $config = $this->config();
        // 好无奈，这里竟然获取不到字段的名字。只能选择随机数作为id了。
        $eleId = Str::random(6);

        return view('editormd::show', ['value'=>$this->value, 'config'=>$config, 'eleId'=>$eleId])->render();
    }
    // 定义需要的配置
    private function config(){
        $config = (array) config('admin.extensions.editormd.config');
        $config['readOnly'] = true;

        return json_encode($config);
    }
    public function render()
    {
        // 返回任意可被渲染的内容
        return $this->html();
    }
}
