@props(['items'])

<div {{ $attributes }}>
    @foreach ($items as $key => $item)
        {{-- Error: --}}
        <x-item :item="$item" :key="$key" wire:key="inner-{{ $loop->index }}" />
        {{-- Error: --}}
        {{-- <div>{{ $item }} <livewire:sub :key="$key" /></div> --}}
        {{-- Okay? 🤷‍♂️ --}}
        {{-- {{ $item }} <livewire:sub :key="$key" /> --}}
    @endforeach
</div>