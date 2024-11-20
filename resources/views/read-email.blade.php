@extends('theme')
@section('content')
    <form action="read-email" method="GET">
        <div class="email-leftbar card">
            <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-bs-toggle="modal"
                data-bs-target="#composemodal">
                Compose
            </button>
            <div class="mail-list mt-4">
                <a href="javascript: void(0);" class="active"><i class="mdi mdi-email-outline me-2"></i> Inbox <span
                        class="ms-1 float-end">(18)</span></a>
                <a href="javascript: void(0);"><i class="mdi mdi-star-outline me-2"></i>Starred</a>
                <a href="javascript: void(0);"><i class="mdi mdi-diamond-stone me-2"></i>Important</a>
                <a href="javascript: void(0);"><i class="mdi mdi-file-outline me-2"></i>Draft</a>
                <a href="javascript: void(0);"><i class="mdi mdi-email-check-outline me-2"></i>Sent Mail</a>
                <a href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Trash</a>
            </div>






        </div>
        <div class="email-rightbar mb-3">

            <div class="card">
                <div class="btn-toolbar p-3" role="toolbar">
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                class="fa fa-inbox"></i></button>
                        <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                class="fa fa-exclamation-circle"></i></button>
                        <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary waves-light waves-effect" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary waves-light waves-effect" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Updates</a>
                            <a class="dropdown-item" href="#">Social</a>
                            <a class="dropdown-item" href="#">Team Manage</a>
                        </div>
                    </div>

                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" class="btn btn-primary waves-light waves-effect" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More <i class="mdi mdi-dots-vertical ms-2"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Mark as Unread</a>
                            <a class="dropdown-item" href="#">Mark as Important</a>
                            <a class="dropdown-item" href="#">Add to Tasks</a>
                            <a class="dropdown-item" href="#">Add Star</a>
                            <a class="dropdown-item" href="#">Mute</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-2.jpg"
                                alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1">
                            @foreach ($data as $newdata)
                                <h5 class="font-size-14 mt-1">{{ $newdata->name }}</h5>
                                <small class="text-muted">{{ $newdata->email }}</small>
                        </div>
                    </div>

                    <h4 class="font-size-16">{{ $newdata->subject }}</h4>


                    <p>{{ $newdata->message }}
                    </p>
                    @endforeach
                    <div class="row">
                        <div class="col-xl-2 col-6">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg"
                                    alt="Card image cap">
                                <div class="py-2 text-center">
                                    <a href="javascript: void(0);" class="fw-medium">Download</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="javascript: void(0);" class="btn btn-secondary waves-effect mt-4"><i
                            class="mdi mdi-reply"></i> Reply</a>
                </div>

            </div>
        </div>
    </form>
@endsection
