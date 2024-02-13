@extends('layouts.dashboard.main')
@section('main_dashboard')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $tittle }}</h1>

        </div>

        <form action="/add_sample" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pendaftar</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="spesimen" class="form-label">Jenis Spesimen</label>
                    <input type="text" name="spesimen" class="form-control" id="spesimen">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </main>
@endsection
