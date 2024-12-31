<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
    </div>
    <div class="card-body">
        <form wire:submit="{{ $editPost == true ? 'update' : 'store' }}">
            @csrf
            <div class="mb-6">
                <label class="form-label">Title</label>
                <input type="hidden" wire:model="postId">
                <input type="text" class="form-control" wire:model="title" placeholder="Title">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label class="form-label">Description</label>
                <textarea class="form-control" wire:model="body" placeholder=""></textarea>
                @error('body') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">{{ $editPost == false ? 'Create' : 'Update' }}</button>
            <button type="button" wire:click="create" class="btn btn-info waves-effect waves-light">Create New</button>

            <button type="button" id="btnSend" class="btn btn-primary waves-effect waves-light">Modal</button>
            <button type="button" data-target="#modalForm" class="btn btn-primary waves-effect waves-light">Modal Company</button>
            <button type="button" id="btnSweetAlert" class="btn btn-primary waves-effect waves-light">Sweet Alert</button>
        </form>
    </div>
    @if($isModalOpen)
    <div class="modal fade show" id="modalForm" tabindex="-1" aria-hidden="true" style="display: block;">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Add New Post</h4>
                        <p>Add new post via modal</p>
                    </div>
                    <form wire:submit="{{ $editPost == true ? 'update' : 'store' }}">
                        @csrf
                        <div class="mb-6">
                            <label class="form-label">Title</label>
                            <input type="hidden" wire:model="postId">
                            <input type="text" class="form-control" wire:model="title" placeholder="Title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" wire:model="body" placeholder=""></textarea>
                            @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" @click="closeModal" class="btn btn-primary waves-effect waves-light">{{ $editPost == false ? 'Create' : 'Update' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif
    <script>
        $(document).ready(function() {
            document.getElementById('btnSend').addEventListener('click', function() {
                $('#addNewCCModal').modal('show');
            });

            $(".details-radio").on("click", function() {
                let value = $(this).val();
                $("#basic-default-company").val(value);
                $(".details-radio").prop("checked", false);
                $(this).prop("checked", true);
                $('#modalCompany').modal('hide');
            });

            $('#btnSweetAlert').on('click', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    customClass: {
                        confirmButton: 'btn btn-primary me-3',
                        cancelButton: 'btn btn-label-secondary'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.isConfirmed) {

                        // $wire.delete(postId);
                        // Livewire.on('delete', postId => {
                        //     console.log('Deleting post:', postId);
                        // });
                    }
                })
            })
        });
    </script>
</div>