@pushOnce('js')
<script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>
@endpushOnce
@push('js')
<script>
    var id = '#{{ $attributes->get('id') ?? $attributes->get('wire:model') }}';

    tinymce.init({
		selector:id,
		height: 300,
        resize: true,
        convert_urls: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.set('{{ $attributes->get('wire:model') }}', editor.getContent());
            });
        },
        images_upload_url: '{{ route('image.upload') }}',
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '{{ route('image.upload') }}');
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
		plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
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
		}]
	});
</script>
@endpush

<div wire:ignore>
    <label class="form-label" class="control-label">{{ $attributes->get('label') }} @if(!$attributes->get('optional'))<small class="text text-danger">*</small> @endif</label> <br>
    <textarea placeholder="{{  $attributes->get('placeholder')  }}" name="{{  $attributes->get('name')  }}" id="{{ $attributes->get('id') ?? $attributes->get('wire:model') }}" @if($attributes->has('wire:model')) wire:model='{{ $attributes->get('wire:model') }}' @endif cols="30" rows="{{ $attributes->get('rows') }}">{!! $attributes->get('value') !!}</textarea>
</div>
