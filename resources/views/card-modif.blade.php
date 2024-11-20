@extends('theme')
@section('content')
    <form method="POST" action="/modifcard">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $data->name }}"
                                            name="name" id="validationCustom01" placeholder="Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Job Title</label>
                                        <input type="text" class="form-control" value="{{ $data->job_title }}"
                                            name="job_title" id="validationCustom02" placeholder="Job Title"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Department</label>
                                        <input type="text" class="form-control"
                                            name='department'value="{{ $data->department }}" id="validationCustom02"
                                            placeholder="Department"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" value="{{ $data->company_name }}"
                                            name='company_name' id="validationCustom02" placeholder="Company Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Email</label>
                                        <input type="text" class="form-control" value="{{ $data->email }}"
                                            name='email' id="validationCustom02" placeholder="Email"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Telephone</label>
                                        <input type="text" class="form-control" value="{{ $data->telephone }}"
                                            name="telephone" id="validationCustom02" placeholder="Telephone"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Url Company</label>
                                        <input type="text" class="form-control" value="{{ $data->telephone }}"
                                            name='url_company' id="validationCustom02" placeholder="Url Company"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Address</label>
                                        <input type="text" class="form-control" value="{{ $data->url_company }}"
                                            name="address" id="validationCustom02" placeholder="Address"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div>
                                <button class="btn btn-primary" type="submit">mofify</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->


        </div>
    @endsection
