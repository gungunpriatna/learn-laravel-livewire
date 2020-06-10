<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="postId">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"
                        wire:model="title"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="Masukan title">
                    @error('title')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content
                    </label>
                    <textarea wire:model="content"
                            rows="10"
                            class="form-control @error('content') is-invalid @enderror"
                            placeholder="Masukan title"></textarea>
                        @error('content')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                </div>
                <button class="btn btn-primary" type="submit">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
</div>
