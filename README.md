laravel-admin extension
======
### 安装
```
composer require hxsen/editormd
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
### 注意
如果您想在Laravel-admin选项卡组件中使用，你应该将该配置选项"dynamicMode"设置为true，以避免错误。

