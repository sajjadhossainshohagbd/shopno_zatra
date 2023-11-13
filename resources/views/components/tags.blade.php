@pushOnce('css')
<link rel="stylesheet" href="{{ asset('backend/assets/libs/tagify/tagify.css') }}">
@endPushOnce

@pushOnce('js')
<script src="{{ asset('backend/assets/libs/tagify/tagify.js') }}"></script>
@endPushOnce

@push('js')
    <script>
        var id = '#{{ $attributes->get('id') ?? $attributes->get('wire:model') }}';

        var input = document.querySelector(id), tagify = new Tagify(input,{
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });

        input.addEventListener('change',(e) => {
            @this.set("{{ $attributes->get('wire:model') }}",e.target.value);
        })
    </script>
@endpush
<div wire:ignore>
    <label class="form-label" class="control-label">{{ $attributes->get('label') }} @if(!$attributes->get('optional'))<small class="text text-danger">*</small> @endif</label> <br>
    <input type="text" id="{{ $attributes->get('id') ?? $attributes->get('wire:model') }}" wire:model='{{ $attributes->get('wire:model') }}' value="{{ $attributes->get('value') }}"/>
</div>
