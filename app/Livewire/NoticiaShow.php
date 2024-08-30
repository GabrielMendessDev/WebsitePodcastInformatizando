<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;

class NoticiaShow extends Component
{
    public $post;

    public function mount($slug)
    {
        // Corrigir a busca do post pelo slug
        $this->post = Posts::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {

        return view('livewire.noticia-show', [
            'post' => $this->post,
        ]);
    }
}