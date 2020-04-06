{{--调试的时候，如果没有语法提示，可以暂时打开script标签--}}
{{--<script>--}}
    // 定义全局变量，开放用户可以操作的权限
    window.editorMd{{ $column }};
    $(document).ready(function(){
        @if($dynamicMode)
        // 动态的开关
        $("#editormd-create-btn-{{ $column }}").click(function(){
            $(this).hide();
        @endif
            // 实例化代码的主体
            // let valueType = '{{ $valueType }}';
            let config = Object.assign({id:'{{ $column }}'}, {!! $config !!});
            editorMd{{ $column }} = editormd(config);
            // Fix editormd V1.5.0 bug (Previewing close button default set to show when loaded).
            $("#{{ $column }}").find(".editormd-preview-close-btn").hide();
            // Set the content value type.
            if( config['saveHTMLToTextarea'] ) {
                $(".editormd-html-textarea").attr("name", '{{ $column }}');
            } else {
                $(".editormd-markdown-textarea").attr("name", '{{ $column }}');
            }
        @if($dynamicMode)
        });
        @endif
    });
{{--</script>--}}
