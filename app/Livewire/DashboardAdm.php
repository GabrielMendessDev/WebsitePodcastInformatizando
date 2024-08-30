<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;



class DashboardAdm extends Component
{
    public $title;
    public $caption;
    public $content;
    public $link;
    public $type = [];

    protected $rules = [
        'title' => 'required|string|max:255',
        'caption' => 'required|string|max:255',
        'content' => 'required|string',
        'link' => 'required|string',
        'type' => 'required|array|min:1',
    ];
    public function mount()
    {
        // Verifica se o usuário é administrador ao carregar o componente
        if (Auth::check() && Auth::user()->lvl !== 'adm') {
            session()->flash('error', 'O usuário não tem autorização para acessar esta página.');
            return redirect()->to('/');
        }
    }

    public function create()
    {
        $slug = Str::slug($this->title);

        Log::info('Método create() iniciado');
        try {
            // Verifica se o usuário é administrador
            if (Auth::user()->lvl !== 'adm') {
                session()->flash('error', 'O usuário não tem autorização para acessar esta página.');
                return redirect()->to('/');
            }

            $this->validate();
        
            // Log dos dados antes da inserção
            Log::info('Tentando criar um post com os seguintes dados:', [
                'users_id' => auth()->id(),
                'author' => auth()->user()->name,
                'title' => $this->title,
                'caption' => $this->caption,
                'content' => $this->content,
                'link' => $this->link,
                'slug' => $slug,
                'type' => implode('', $this->type),
            ]);

            $post = Posts::create([
                'users_id' => auth()->id(),
                'author' => auth()->user()->name,
                'title' => $this->title,
                'caption' => $this->caption,
                'content' => $this->content,
                'link' => $this->link,
                'slug' => $slug,
                'type' => implode('', $this->type),
            ]);
            // Verifica se a criação do post foi bem-sucedida
            if ($post) {
                Log::info('Post criado com sucesso:', ['id' => $post->id]);
                session()->flash('success', 'Post criado com sucesso!');
            } else {
                Log::error('Falha ao criar o post.');
                session()->flash('error', 'Falha ao criar o post.');
            }

            // Limpa os campos após salvar
            $this->reset(['title', 'caption', 'content', 'type']);
        } catch (\Exception $e) {
            // Captura e registra qualquer exceção
            Log::error('Erro ao criar o post:', ['message' => $e->getMessage()]);
            session()->flash('error', 'Ocorreu um erro ao tentar criar o post. Tente novamente.');
        }
    }

    public function render()
    {
        return view('livewire.dashboard-adm');
    }
}

