@extends('theme')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Inbox</h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <!-- Left sidebar -->
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
                <!-- End Left sidebar -->


                <!-- Right Sidebar -->
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
                                <button type="button" class="btn btn-primary waves-light waves-effect"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Updates</a>
                                    <a class="dropdown-item" href="#">Social</a>
                                    <a class="dropdown-item" href="#">Team Manage</a>
                                </div>
                            </div>
                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                <button type="button" class="btn btn-primary waves-light waves-effect"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Updates</a>
                                    <a class="dropdown-item" href="#">Social</a>
                                    <a class="dropdown-item" href="#">Team Manage</a>
                                </div>
                            </div>

                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                <button type="button" class="btn btn-primary waves-light waves-effect"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                        <ul class="message-list">
                            @foreach ($data as $newdata)
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk19">
                                            <label for="chk19" class="toggle"></label>
                                        </div>
                                        <a href="/ReadEmail/{{ $newdata->id }}"
                                            class="title">{{ $newdata->name }}</a><span
                                            class="star-toggle far fa-star"></span>
                                    </div>
                                    <div class="col-mail col-mail-2"
                                        style="position: absolute;
                                    top: 0;w
                                    left: 241px;">
                                        <a href="javascript: void(0);" class="subject"><span class="teaser">
                                                {{ Str::limit($newdata->subject, 25, '...') }}</span>
                                        </a>
                                        <div class="col-mail col-mail-2"
                                            style="position: absolute;
                                        top: 0;
                                        left: 200px;">
                                            <a href="javascript: void(0);" class="message"><span
                                                    class="teaser">{{ Str::limit($newdata->message, 30, '...') }}</span>
                                            </a>
                                        </div>
                                        <div class="date">{{ Str::limit($newdata->updated_at, 10, '') }}</div>
                                    </div>
                                </li>
                            @endforeach



                        </ul>

                    </div><!-- card -->

                    <div class="row">
                        <div class="col-7">

                        </div>
                        <div class="col-5">
                            <div class="btn-group float-end">
                                <button type="button" class="btn btn-sm btn-success waves-effect"><i
                                        class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-sm btn-success waves-effect"><i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>

                </div> <!-- end Col-9 -->

            </div>

        </div><!-- End row -->

    </div>

@section('script')
    <script>
        $(document).ready(function() {
            $('#updateButton').click(function() {
                var contactId = $(this).data('contact-id');
                $.ajax({
                    url: "{{ route('update-status') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: contactId
                    },
                    success: function(response) {
                        console.log(response);
                        alert("Status updated successfully!");
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        alert("Failed to update status!");
                    }
                });
            });
        });
    </script>
@endsection
@endsection
