@extends('theme')
@section('content')
    <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="/assets/images/14.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
            <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="ti ti-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                    <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                </button>

                <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
            </div>
        </div>
    </div>
    <hr class="my-0">
    <div class="card-body">
        <form id="formAccountSettings" method="GET" onsubmit="return false">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input class="form-control" type="text" id="firstName" name="firstName"
                        value={{ Auth::user()->name }} autofocus />
                </div>

                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" type="text" id="email" name="email" value={{ Auth::user()->email }}
                        placeholder="john.doe@example.com" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="organization" class="form-label">password</label>
                    <input type="text" class="form-control" id="organization" name="password" />
                </div>







            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
    </div>

    </div>
    </div>
    </div>


    </div>
    <!-- / Content -->
@endsection
