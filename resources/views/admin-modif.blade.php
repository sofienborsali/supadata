@extends('theme')
@section('content')
    <form method="POST" action="/modifadmin">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{ $data->id }}">



                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name" placeholder="Name"
                                    id="example-text-input" value="{{ $data->name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">User Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"name="login" placeholder="User Name"
                                    id="example-text-input" value="{{ $data->login }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email" placeholder="Email"
                                    id="example-text-input" value="{{ $data->email }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="password" placeholder=Password"
                                    id="example-text-input" value="{{ $data->password }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Phone</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="phone" placeholder="phone"
                                    id="example-text-input" value="{{ $data->phone }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">modifier</button>




                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </form>
@endsection
