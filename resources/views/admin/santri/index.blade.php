@extends('welcome')

@section('content')
    
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Data Santri</h5>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createsantriModal">
            <i class="ri-add-fill"></i></i>    Add santri
        </button>
        @include('admin.santri.create')

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($santri as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->age }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->date }}</td>
                    <td>
                        <!-- Edit Modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editSantriModal{{ $row->id }}">
                            <i class="bi bi-pencil-square"></i> Edit santri
                        </button>
                        @include('admin.santri.edit-modal')
                        <!-- End Edit Modal -->

                        <form action="{{ route('santri.destroy', $row->id) }}" method="post">
                            @csrf
                            @method ('DELETE')
                            <button class="btn btn-danger mt-2" type="submit">
                                <i class="bi bi-trash-fill"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>

@endsection