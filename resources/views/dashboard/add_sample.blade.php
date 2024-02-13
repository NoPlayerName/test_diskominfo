@extends('layouts.dashboard.main')
@section('main_dashboard')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $tittle }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a type="button" class="btn btn-sm btn-primary" href="new_sample">Add Data Sample</a>
                    {{-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Add Data Sample</button> --}}
                    <button type="button" class="btn btn-sm btn-success">Export PDF</button>
                </div>

                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
            </div>
        </div>

        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis spesimen</th>
                        <th scope="col">Tanggal Daftar</th>
                        <th scope="col">Hasil Pemriksaan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $dt)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $dt->name }}</td>
                            <td>{{ $dt->jenis_spesimen }}</td>
                            <td>{{ $dt->created_at }}</td>
                            <td>{{ $dt->hasil }}</td>
                            <td>text</td>
                            @php
                                $i++;
                            @endphp
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem; margin-left: 10rem;">
                    <div class="card-body col">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

                <div class="card " style="width: 18rem;  margin-left: 10rem;">
                    <div class="card-body col">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/add_sample" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Pendaftar</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="spesimen" class="form-label">Jenis Spesimen</label>
                                <input type="text" class="form-control" id="spesimen">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
