@extends('layout2')
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
                                <th scope="col">Answer</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Groups as $gp)
                            @php
                                $grp = DB::table('questions')->where('group_id', $gp->group_id);
                                var_dump($grp);die();
                            @endphp

                                @foreach ($grp as $grp)
                                    <tr>
                                        {{-- <th scope="row">{{ $grp->question }}</th> --}}
                                        {{-- <th scope="row">{{ $Question->id }}</th> --}}
                                        <td>{{ $Question->question }}</td>
                                        <td> <button class="btn btn-primary">Modify</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
