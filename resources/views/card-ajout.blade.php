@extends('theme')
@section('content')
    <form method="POST" action="/add-card">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="validationCustom01"
                                            placeholder="Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Job Title</label>
                                        <input type="text" class="form-control" name="job_title" id="validationCustom02"
                                            placeholder="Job Title"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Department</label>
                                        <input type="text" class="form-control" name='department' id="validationCustom02"
                                            placeholder="Department"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" name='company_name'
                                            id="validationCustom02" placeholder="Company Name"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Email</label>
                                        <input type="text" class="form-control" name='email' id="validationCustom02"
                                            placeholder="Email"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Telephone</label>
                                        <input type="text" class="form-control" name="telephone" id="validationCustom02"
                                            placeholder="Telephone"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Url Company</label>
                                        <input type="text" class="form-control" name='url_company'
                                            id="validationCustom02" placeholder="Url Company"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" id="validationCustom02"
                                            placeholder="Address"required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div>
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->


        </div>
    @endsection
