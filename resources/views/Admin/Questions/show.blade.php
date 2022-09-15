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
                        <th scope="col">Question</th>
                        <th scope="col">DISC Value</th>
                        <th scope="col">Group</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($Questions as $Question)
                        <tr>
                            <th scope="row">{{ $Question->id }}</th>
                            <td>{{ $Question->question }}</td>
                            <td>{{ $Question->disc_value }}</td>
                            <td>{{ $Question->group_id }}</td>
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
