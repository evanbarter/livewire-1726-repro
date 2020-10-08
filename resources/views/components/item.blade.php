@props(['item', 'key'])

<div {{ $attributes }}>
    {{ $item }}
    <livewire:sub :key="$key" />
</div>