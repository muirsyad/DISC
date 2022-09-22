@extends('admin_layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/question/store">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Group</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="1,2,3,4,etc.." name="group_id">
                            @error('group_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Question</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com" name="question">
                            @error('question')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">DISC value</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="************" name="DISC_value">
                            @error('DISC_value')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">DISC value</label>
                            <select class="form-select" id="inputGroupSelect01" name="disc_value">
                              <option selected>Choose...</option>
                              <option value="D">D</option>
                              <option value="I">I</option>
                              <option value="S">S</option>
                              <option value="C">C</option>
                            </select>
                          </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
