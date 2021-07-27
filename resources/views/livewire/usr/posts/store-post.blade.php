<div>

    @section('title', 'Create | Mini Blog')
    <div class="mt-2">
        <form wire:submit.prevent="savePost" class="form-control">

            <div class="mb-2 mt-2">
                <label for="form-label">Category</label>
                <select class="form-control" wire:model="p_catagory" required>
                    <option value="">select</option>
                    @foreach ($cat as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-2 mt-2">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" wire:model="p_title" required>

            </div>

            <div class="mb-2">
                <label class="form-label">Cover Image</label>
                <input type="file" class="form-control" wire:model="p_image">

            </div>


            <div class="mb-2">
                <label class="form-label">Post Description</label>
                <textarea type="text" class="form-control" wire:model="p_des" required></textarea>

            </div>

            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>


</div>