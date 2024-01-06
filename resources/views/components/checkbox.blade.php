@php ($id = $attributes->get('id') ? $attributes->get('id') : Str::uuid())

<div class="form-check">
    <input class="form-check-input" type="checkbox" id="{{ $id }}"  {{ $attributes }} />
    <x-label class="form-check-label" for="{{ $id }}">
       {{ $slot }}
    </x-label>
</div>