@extends('theme')
@section('content')
    <form method="POST" action="/modifclient">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <input type="hidden" name="id" value="{{$data->id}}">


                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name" placeholder="name"
                                    id="example-text-input" value="{{$data->name}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">login</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"name="login" placeholder="login"
                                    id="example-text-input" value="{{$data->login}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email" placeholder="email"
                                    id="example-text-input" value="{{$data->email}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="password" placeholder="password"
                                    id="example-text-input" value="{{$data->password}}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>




                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        
    </form>
@endsection
