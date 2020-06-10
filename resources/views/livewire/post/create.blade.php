<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"
                        wire:model="title"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="Masukkan title" required>
                    @error('title')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>

                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea wire:model="content"
                        cols="30"
                        rows="10"
                        class="form-control @error('content') is-invalid @enderror"></textarea>
                    @error('content')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>

                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>
