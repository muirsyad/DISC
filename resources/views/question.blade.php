@extends('layout')

@section('content')
    <table class="table">

        <thead>
            <tr>

                <th scope="col">No</th>
                <th scope="col">Question</th>
                <th scope="col">tick</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($quest as $question)
                <tr>
                    <th scope="row">{{ $question['id'] }}</th>
                    <td>{{ $question['question'] }}</td>
                    <td>
                        <form action="#">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1" value={{ $question['value'] }}>
                                </label>
                            </div>

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
        <h1>test</h1>

    </table>
@endsection
