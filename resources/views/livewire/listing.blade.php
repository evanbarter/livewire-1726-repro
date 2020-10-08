<div wire:key="outer">
    <input type="text" wire:model="search">
    <x-list :items="$items" wire:key="list" />
</div>
