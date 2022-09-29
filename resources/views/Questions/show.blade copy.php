@extends('layout2')
@section('content')
    <form method="POST" action="/questions/quiz/score">
        @csrf


        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <h1>{{ auth()->user()->id }}</h1>




        @foreach ($Groups as $gp)
            {{-- {{ $gp->group_id }} --}}
            @php
                $grp = DB::table('questions')
                    ->where('group_id', $gp->id)
                    ->get();

            @endphp
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Question</th>
                                        <th scope="col">Answer</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($grp as $g)
                                        <tr>

                                            <td scope="row">{{ $g->question }}</td>
                                            <td scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input radio " type="radio"
                                                        name="Q_{{ $g->group_id }}" id="Q_{{ $g->group_id }}"
                                                        value="{{ $g->disc_value }}">

                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-3 mb-3 text-center">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>

    </form>
@endsection
