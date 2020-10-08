<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Listing extends Component
{
    public $search;
    public function render()
    {

        $items = collect([
            'a' => 'Item #1',
            'b' => 'Item #2',
            'c' => 'Item #3',
            'd' => 'Item #4',
            'e' => 'Item #5',
            'f' => 'Item #6',
        ]);

        if ($this->search) {
            $items = $items->filter(fn ($i) => stripos($i, $this->search) !== false);
        }

        return view('livewire.listing', [
            'items' => $items,
        ]);
    }
}
