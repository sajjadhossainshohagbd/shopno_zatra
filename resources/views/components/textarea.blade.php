@pushOnce('js')
<!--tinymce js-->
<script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>
@endpushOnce
@push('js')
<script>
    $(document).ready(function() {
        var id = '#{{ $attributes->get('id') ?? $attributes->get('wire:model') }}';
        0 < $(id).length && tinymce.init({
            selector:id,
            height: 300,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                    @this.set("{{ $attributes->get('wire:model') }}", editor.getContent());
                });
            },
            plugins: ["advlist autolink link lists charmap print preview hr anchor pagebreak ", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [{
                title: "Bold text",
                inline: "b"
            }, {
                title: "Red text",
                inline: "span",
                styles: {
                    color: "#ff0000"
                }
            }, {
                title: "Red header",
                block: "h1",
                styles: {
                    color: "#ff0000"
                }
            }, {
                title: "Example 1",
                inline: "span",
                classes: "example1"
            }, {
                title: "Example 2",
                inline: "span",
                classes: "example2"
            }, {
                title: "Table styles"
            }, {
                title: "Table row 1",
                selector: "tr",
                classes: "tablerow1"
            }]
        });
    });
</script>
@endpush

<div wire:ignore>
    <label class="form-label" class="control-label">{{ $attributes->get('label') }} @if(!$attributes->get('optional'))<small class="text text-danger">*</small> @endif</label> <br>
    <textarea placeholder="{{  $attributes->get('placeholder')  }}" name="{{  $attributes->get('name')  }}" id="{{ $attributes->get('id') ?? $attributes->get('wire:model') }}" @if($attributes->has('wire:model')) wire:model='{{ $attributes->get('wire:model') }}' @endif cols="30" rows="{{ $attributes->get('rows') }}">{!! $attributes->get('value') !!}</textarea>
</div>
