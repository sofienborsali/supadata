<head>


</head>
@extends('theme')
@section('content')
    <form>
        <div class="row">
            <div class="col-12">
                <div class="card">

                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif



                    <table id="datatable-buttons" style="font-size:11px"
                        class="table table-bordered fixed-table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Job title</th>
                                <th>Department</th>
                                <th>Company name</th>
                                <th>email</th>
                                <th>Telephone</th>
                                <th>Url Company</th>
                                <th>address</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody id="table-body">

                            @foreach ($data as $newdata)
                                <tr>
                                    <td>{{ $newdata->name }}</td>
                                    <td>{{ $newdata->job_title }}</td>
                                    <td>{{ $newdata->department }}</td>
                                    <td>{{ $newdata->company_name }}</td>
                                    <td>{{ $newdata->email }}</td>
                                    <td>{{ $newdata->telephone }}</td>
                                    <td>{{ $newdata->url_company }}</td>
                                    <td>{{ $newdata->address }}</td>
                                    <td>
                                        <a href="/editcarde/{{ $newdata->id }}" class="btn btn-primary">Modify</a>
                                        <a href="/DeleteCard/{{ $newdata->id }}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                </div>

            </div>

        </div> <!-- end col -->

        </div>

    </form>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                console.log("Search term:", query); // Log the search term
                $.ajax({
                    url: '/search', // Your Laravel route
                    method: 'GET',
                    data: {
                        'query': query
                    },
                    success: function(response) {
                        var results = $('#table-body');
                        results.empty();
                        results.append(
                            '<p style="position: absolute;top: 0px;font-weight: bold;font-size: 15px;">' +
                            "il ya " + response.length +
                            " result" + '</p>');

                        if (response.length > 0) {
                            $.each(response, function(index, product) {

                                results.append(
                                    '<tr>' +
                                    '<td>' + product.name + '</td>' +
                                    '<td>' + product.job_title + '</td>' +
                                    '<td>' + product.department + '</td>' +
                                    '<td>' + product.company_name + '</td>' +
                                    '<td>' + product.email + '</td>' +
                                    '<td>' + product.telephone + '</td>' +
                                    '<td>' + product.url_company + '</td>' +
                                    '<td>' + product.address + '</td>' +
                                    '<td> <a href="/editcarde/' + product.id +
                                    '" class="btn btn-primary">Modify</a> <a href="/DeleteCard/' +
                                    product.id +
                                    '" class="btn btn-danger">Delete</a></td>' +
                                    '</tr>'

                                )


                            });

                        } else {
                            results.append(
                                '<tr><td colspan="7" style="text-align:center">No results found</tr></tr>'
                            );
                        }

                    }
                });
            });
        });
    </script>
@endsection
