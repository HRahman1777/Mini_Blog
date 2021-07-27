<div>
    <main class="mt-5 pt-3">
        <div class="text-center mt-1">
            <h2>Catagory Details</h2>
            <hr>
            <div class="p-1 form-control">
                <form wire:submit.prevent="addCat" class="form">

                    <div class="input-group mb-1">
                        <input type="text" class="form-control" wire:model="catName" placeholder="type new category" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Add</button>
                    </div>

                </form>
            </div>
            <hr>

            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allcat as $ac)
                    <tr>
                        <th scope="row">{{ $ac->id }}</th>
                        <td>{{ $ac->name }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-warning" wire:click.prevent="OpenModalEdit( {{ $ac->id }} )">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger" wire:click.prevent="OpenModalDelete( {{ $ac->id }} )">Remove</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal fade" wire:ignore.self id="editModalId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-control text-center" id="editFormId" wire:submit.prevent="update">
                            <input type="hidden" wire:model="tempId">
                            <input type="text" class="form-control" wire:model="uCatName">
                            <span class="text-danger"> @error('uCatName') {{ $message }} @enderror</span>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" wire:ignore.self id="deleteModalId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">REMOVE ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are You Sure You Want To Remove <b></b> ?</p>
                    </div>
                    <div class="modal-footer">
                        <form wire:submit.prevent="delete">
                            <button type="submit" class="btn btn-outline-danger">Remove</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        window.addEventListener('OpenEditModal', function() {
            $('#editModalId').modal('show');
        });

        window.addEventListener('OpenDeleteModal', function() {
            $('#deleteModalId').modal('show');
        });

        window.addEventListener('editdAlert', function() {
            $('#editFormId')[0].reset();
            $('#editModalId').modal('hide');
        });

        window.addEventListener('delAlert', function() {
            $('#deleteModalId').modal('hide');
        });
    </script>

</div>