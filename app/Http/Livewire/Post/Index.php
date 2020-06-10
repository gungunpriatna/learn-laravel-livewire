<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);

        if ($post) {
            $post->delete();
            # code...
        }

        session()->flash('message', 'Data berhasil dihapus');

        return redirect()->route('post.index');
    }
}
