@if ($errors->any())
    @foreach ($errors->all() as $errors)
        <div class="alert alert-danger alert-dismissable fade show mt-2" role="alert">
            <i class="bi bi-exclamation-ocatgon me-1"></i>
            {{ $errors }}
        </div>
    @endforeach
@endif
<div class="modal fade" id="createsantriModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Santri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('santri.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Name Santri</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Umur Santri</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="age">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="date">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
