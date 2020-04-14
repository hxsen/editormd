laravel-admin extension
======
### 安装
```
composer require hxsen/laravel-admin-editormd
```
### 发布资源
```
php artisan vendor:publish --provider=Hxsen\EditorMd\EditorMdServiceProvider
```
### 配置
```
'extensions' => [
   
        'editormd' => [
            // Set to false if you want to disable this extension
            'enable' => true,
            // Set to true if you want to take advantage the screen length for your editormd instance.
            'wideMode' => false,
            // Set to true when the instance included in larave-admin tab component.
            'dynamicMode' => false,
            // Editor.js configuration (Refer to http://pandao.github.io/editor.md/)
            'config' =>[
                'path' => '/vendor/hxsen/editormd/editor.md/lib/',
                'width' => '100%',
                'height' => 600,
                'emoji' => true,
                // 主题
                'theme' => 'dark',
                'previewTheme' => 'dark',
                'editorTheme' => 'pastel-on-dark',
                // 图片上传
                'imageUpload' => true,
                'imageFormats' => ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'webp'],
                'imageUploadURL' => '/admin/editormd/upload',

                // 'markdown' => 'md',
                'codeFold' => true,
                'taskList' => true,
            ],
        ]
```
### 用法
```php
$form->editormd('content');
```
### 自定义扩展
本扩展是在editormd官方插件基础上封装的适用于laravel-admin的扩展包。
为了更加开发者后期更加方面的后期开发，本插件的编辑器变量，已声明成了全局变量。你们可以根据原本文档说明，对自己的编辑器，做更加针对性的配置。
如需更多了解，戳[这里](http://editor.md.ipandao.com/)查看官方文档，了解更多。

- 例如监听编辑器改变事件
```
$('#editorMdcontent').settings.onchange = function(){
    // console.log("onchange =>", this, this.id, this.state);
};
```
- 自定义快捷键事件
```
$('#editorMdcontent').addKeyMap = function(){
    "Ctrl-S": function(cm) {
        // alert("Ctrl+S");
        saveContent();
    },
    "Ctrl-A": function(cm) { // default Ctrl-A selectAll
        // custom
        alert("Ctrl+A");
        cm.execCommand("selectAll");
    },
};
```

### 注意
如果您想在Laravel-admin选项卡组件中使用，你应该将该配置选项"dynamicMode"设置为true，以避免错误。

