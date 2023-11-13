@pushOnce('css')
<!-- select2 css -->
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpushOnce

@pushOnce('js')
<script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}" data-navigate-track></script>
@endpushOnce

@push('js')
<script>
    var id = '{{ $attributes->get('id') ?? $attributes->get('wire:model') }}';
    $('#'+id).select2();
    $('#'+id).on('change', function (e) {
        var data = $(this).val();
        @this.set('{{ $attributes->get('wire:model') }}', data);
    });
</script>
@endpush

<div wire:ignore>
    <label class="form-label" class="control-label">{{ $attributes->get('label') }} @if(!$attributes->get('optional'))<small class="text text-danger">*</small> @endif</label> <br>
    <select {{ $attributes }} id="{{ $attributes->get('id') ?? $attributes->get('wire:model') }}" wire:model='{{ $attributes->get('wire:model') }}'>
        {{ $slot }}
    </select>
</div>
