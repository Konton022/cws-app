@php
  $inputAttributes = $attributes->class(['class' => 'form-control'])->merge(['type' => 'text', 'value' => request()->old((string)$attributes->get('name'))]);
@endphp

<input {!! $inputAttributes !!} >
