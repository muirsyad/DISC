@extends('admin_layout')
@section('content')
<h1>Clients</h1>
    <div class="row justify-content-center">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body text-center">



                    {{-- <div class="text-xl font-weight-bold text-primary text-center text-uppercase mb-1">
                            View</div> --}}
                    <a href="/admin/client/list">
                        <h1
                            class="text-xl font-weight-bold text-primary text-center text-uppercase mb-1 ">
                            View</h1>
                    </a>




                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body text-center">



                    {{-- <div class="text-xl font-weight-bold text-primary text-center text-uppercase mb-1">
                            View</div> --}}
                            <a href="/admin/client/create"><h1 class="text-xl font-weight-bold text-primary text-center text-uppercase mb-1">Create</h1></a>





                </div>
            </div>
        </div>


    </div>
@endsection
