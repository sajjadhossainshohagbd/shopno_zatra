@pushOnce('js')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
@endpushOnce
@push('js')
<script>
    $(document).ready(function() {
        var id = '#{{ $attributes->get('id') ?? $attributes->get('wire:model') }}';
        ClassicEditor
            .create( document.querySelector(id),{
                ckfinder: {
                    uploadUrl: '{{ route('image.upload').'?_token='.csrf_token()}}',
                }
            }).then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('{{ $attributes->get('wire:model') }}', editor.getData());
                })
            });
    });
</script>
@endpush

<div wire:ignore>
    <label class="form-label" class="control-label">{{ $attributes->get('label') }} @if(!$attributes->get('optional'))<small class="text text-danger">*</small> @endif</label> <br>
    <textarea placeholder="{{  $attributes->get('placeholder')  }}" name="{{  $attributes->get('name')  }}" id="{{ $attributes->get('id') ?? $attributes->get('wire:model') }}" @if($attributes->has('wire:model')) wire:model='{{ $attributes->get('wire:model') }}' @endif cols="30" rows="{{ $attributes->get('rows') }}">{!! $attributes->get('value') !!}</textarea>
</div>
