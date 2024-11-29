<?php

namespace App\Livewire;

use App\Models\Comments;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ShowComments extends Component
{
    public $content;
    public $postId;
    public $totalComments;
    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->totalComments = Comments::where('posts_id', $postId)->count();
    }

    public function render()
    {
        $comments = Comments::where('posts_id', $this->postId)
                                    ->with('user', 'likes')
                                    ->get();

        return view('livewire.show-comments', [
            'comments' => $comments,
            'totalComments' => $this->totalComments,
        ]);
    }

    public function createComment()
    {
        $this->validate(); // Valida o conteúdo do comentário

        // Log dos dados inseridos
        Log::info('Tentando criar um comentário com os seguintes dados:', [
            'users_id' => Auth::id(),
            'posts_id' => $this->postId,
            'author' => Auth::user()->name,
            'content' => $this->content,
        ]);

        // Inserção de dados
        Auth::user()->comments()->create([
            'users_id' => Auth::id(),
            'posts_id' => $this->postId,
            'author' => Auth::user()->name,
            'content' => $this->content,
        ]);

        $this->totalComments = Comments::where('posts_id', $this->postId)->count();

        $this->content = '';
    }

    public function likeComment($commentId)
    {
        $comment = Comments::find($commentId);

        if ($comment) {
            $comment->likes()->create([
                'user_id' => Auth::id(),
                'comments_id' => $commentId,
            ]);
        }
    }

    public function unlikeComment($commentId)
    {
        $comment = Comments::findOrFail($commentId);

        $comment->likes()->where('user_id', Auth::id())->delete();
    }
}
