<div class="modal fade" id="editSantriModal{{ $row->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Basic Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('santri.update', $row->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
        <div class="col-md-12">
                  <label for="inputName5" class="form-label mt-3">Name Santri</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="{{ $row->name }}" required>
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label mt-3">Umur Santri</label>
                  <input type="number" class="form-control" id="inputName5" name="age" value="{{ $row->age }}">
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label mt-3">Alamat</label>
                  <input type="text" class="form-control" id="inputName5" name="address" value="{{ $row->address }}">
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label mt-3">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="inputName5" name="date" value="{{ $row->date }}">
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