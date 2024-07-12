
<textarea {{ $attributes->class(['form-control']) }} id="mytextarea">
{{ $attributes->get('value') }}
</textarea>


<script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>




