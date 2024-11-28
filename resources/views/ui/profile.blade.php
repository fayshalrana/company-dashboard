@extends('ui.layouts.mainLayout')

@section('styles')

    

@endsection

@section('content')
    <div class="wipe-page page-container mb-2">
        <a href="javascript:" class="back-btn">
            <svg width="24" height="24">
              <use href="#grey-left-arrow-icon"></use>
            </svg>
            <span>Back</span>
        </a>
    
        <div class="page-header mb-xl">
            <div class="pg-title">
                <h1>Profile Settings</h1>
            </div>
        </div>

        <div class="ss-navs-container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="personal-information-tab" data-bs-toggle="tab" data-bs-target="#personal-information" type="button" role="tab" aria-controls="personal-information" aria-selected="true">Personal Information</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Password</button>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="personal-information" role="tabpanel" aria-labelledby="personal-information-tab" tabindex="0">
                    <div class="settings-form-container">
                        <div class="form-card form-wrapper flex-card order-1 order-sm-0">
                            <div class="form-container d-block d-sm-none">
                                <label for="">Profile Photo</label>
                                <div class="position-relative file-upload-container mobile-verion">
                                    <label class="file-input mb-0 position-relative" for="upload-profile-photo-2">
                                        <span>
                                            <svg width="16" height="16">
                                              <use href="#plus-icon"></use>
                                            </svg>
                                        </span>
                                        <span>Upload</span>
                                        <input type="file" class="p-0" id="upload-profile-photo-2" accept="image/*">
                                    </label>
                                    <a href="javascript:" class="uploaded-file-container" id="uploaded-image-2">
                                        <img class="uploaded-file" src="" alt="">
                                    </a>
                                    <ul class="upload-file-option mobile-version" style="display: none;" data-mob-options="uploaded-image-2" data-input-id="upload-profile-photo-2" data-image-id="uploaded-image-2">
                                      <li><a class="dropdown-item update-photo primary-btn" href="#">Update Photo</a></li>
                                      <li><a class="dropdown-item delete-photo secondary-btn" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-container">
                                <label for="">Full Name</label>
                                <input type="text" placeholder="Enter here" value="Claire Littleton">
                            </div>
                            <div class="form-container">
                                <label for="">Business Email</label>
                                <input type="text" placeholder="Enter here" value="claire.littleton@company.co">
                            </div>
                            <div class="form-container">
                                <label for="">Job Title</label>
                                <input type="text" placeholder="Enter here" value="Financial Manager">
                            </div>
                            <div class="form-container">
                                <label for="">Phone Number</label>
                                <input type="text" placeholder="Enter here">
                            </div>
                            <div class="form-container mt-2">
                                <input class="primary-btn" type="submit" value="Save Changes">
                            </div>
                        </div>
                        <div class="form-card form-wrapper xs-card order-0 order-sm-1 d-none d-sm-block">
                            <div class="form-container">
                                <label for="">Profile Photo</label>
                                <div class="position-relative file-upload-container" style="max-width: 180px">
                                    <label class="file-input" for="upload-profile-photo-1">
                                        <span>
                                            <svg width="16" height="16">
                                              <use href="#plus-icon"></use>
                                            </svg>
                                        </span>
                                        <span>Upload</span>
                                    </label>
                                    <input type="file" id="upload-profile-photo-1" accept="image/*">
                                    <a href="javascript:" class="uploaded-file-container dropdown-toggle" id="uploaded-image-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="uploaded-file" src="" alt="">
                                    </a>
                                    <ul class="upload-file-option dropdown-menu" data-input-id="upload-profile-photo-1" data-image-id="uploaded-image-1">
                                      <li><a class="dropdown-item update-photo" href="#">Update Photo</a></li>
                                      <li><a class="dropdown-item delete-photo" href="#">Delete Photo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="change-password" role="tabpanel" aria-labelledby="change-password-tab" tabindex="0">
                    <div class="settings-form-container">
                        <div class="form-card form-wrapper flex-card order-1 order-sm-0">
                            <div class="form-container">
                                <label for="">Current password</label>
                                <div class="position-relative">
                                    <input type="password" name="password"  id="password" placeholder="Enter here">
                                    <div class="eye-wrapper">
                                        <i class="fa fas fa-eye-slash toggle-password" data-target="password">
                                            <svg class="eye" width="18" height="14">
                                              <use href="#icon-eye" fill="#00000066"></use>
                                            </svg>
                                            <svg class="eye-slash" width="18" height="17" fill="#00000066">
                                              <use href="#icon-eye-slash"></use>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container">
                                <label for="">New Password</label>
                                <div class="position-relative">
                                    <input type="password" name="password"  id="password1" placeholder="Enter here">
                                    <div class="eye-wrapper">
                                        <i class="fa fas fa-eye-slash toggle-password" data-target="password1">
                                            <svg class="eye" width="18" height="14">
                                              <use href="#icon-eye" fill="#00000066"></use>
                                            </svg>
                                            <svg class="eye-slash" width="18" height="17" fill="#00000066">
                                              <use href="#icon-eye-slash"></use>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container">
                                <label for="">Repeat New Password</label>
                                <div class="position-relative">
                                    <input type="password" name="password"  id="password2" placeholder="Enter here">
                                    <div class="eye-wrapper">
                                        <i class="fa fas fa-eye-slash toggle-password" data-target="password2">
                                            <svg class="eye" width="18" height="14">
                                              <use href="#icon-eye" fill="#00000066"></use>
                                            </svg>
                                            <svg class="eye-slash" width="18" height="17" fill="#00000066">
                                              <use href="#icon-eye-slash"></use>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-container mt-2">
                                <input class="primary-btn" type="submit" value="Change Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')



@endsection