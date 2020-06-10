<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">Create New Post</a>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="text-center">
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td class="text-center">
                        <a href="{{route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" wire:click="destroy({{ $post->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
