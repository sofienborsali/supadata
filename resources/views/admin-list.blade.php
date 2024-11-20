@extends('theme')
@section('content')
<form>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    

                    @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session("message")}}
                      </div>
                    @endif

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Login</th>
                                <th>Email</th>
                                <th>password</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($data as $newdata)
                                <tr>
                                    <td>{{ $newdata->name}}</td>
                                    <td>{{ $newdata->login }}</td>
                                    <td>{{ $newdata->email }}</td>

                                    <td>{{ $newdata->password }}</td>
                                    <td>
                                    
                                    <a href="/admin-modif/{{$newdata->id}}"class="btn btn-primary">Modifier</a>
                                    
                                    <a href="/DeleteAdmin/{{$newdata->id}}" class="btn btn-danger">Supprimer</a>
                                    </td>
                                    

                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    <a href='/admin-ajout'>
                    <button type="button" class="btn btn-success" > 
                        ajouter nouveau Admin
                    
                    </button>
                </a>

                </div>
                
            </div>
            
        </div> <!-- end col -->
        
    </div> 
    
</form>
@endsection
