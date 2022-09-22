@extends('admin_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($Clients as $cl)
                            <tr>
                                <th scope="row">{{ $cl->id }}</th>
                                <td>{{ $cl->name }}</td>

                                <td>   <button class="btn btn-primary">Modify</button>
                                        <button class="btn btn-danger">Delete</button>
                                </td>
                              </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
