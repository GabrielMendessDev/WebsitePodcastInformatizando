<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Posts::orderBy('created_at', 'desc')->get(),
        ]);
    }
}