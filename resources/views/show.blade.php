<div id="{{ $eleId }}">
    <textarea  style="display:none;">{{ $value }}</textarea>
</div>
<script >
    $(function(){
        let config = Object.assign({id:'{{ $eleId }}'}, {!! $config !!});
        editorMd{{ $eleId }} = editormd(config);
    })
</script>
