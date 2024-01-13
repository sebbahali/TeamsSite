@props(['id'])

<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/translations/ar.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-alignment@29.0.0/src/index.min.js"></script> --}}

<script>
    ClassicEditor.create(document.querySelector("#{{ $id }}"),{
        language: 'ar',
        toolbar: [
            'fontfamily', 'fontsize', '|',
            'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock', '|',
            'alignment', '|',
            'fontColor', 'fontBackgroundColor', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
            'link', '|',
            'outdent', 'indent', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'code', 'codeBlock', '|',
            'insertTable', '|',
            'blockQuote', '|',
            'undo', 'redo', '|',
            'heading', '|'
        ]
    });
</script>
