<div id="{{ $eleId }}">
    <textarea  style="display:none;">{{ $value }}</textarea>
</div>
<script>
    $(function(){
        editorMd{{ $eleId }} = editormd('{{ $eleId }}', {!! $config !!});
    })
</script>
