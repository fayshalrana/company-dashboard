<div class="form-wrapper">
    <div class="form-container mb-4">
        <label for="">Text password</label>
        <input type="text" placeholder="Enter here">
    </div>
    <div class="form-container mb-4">
        <label for="">Password Text Field</label>
        <div class="position-relative">
            <input type="password" name="password"  id="password" placeholder="Password">
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
    <div class="form-container mb-4">
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
    <div class="form-container mb-4">
        <label for="">Search</label>
        <div class="position-relative search-input-container">
            <input type="search" placeholder="Search">
            <svg class="search-icon" width="16" height="16">
              <use href="#search-icon"></use>
            </svg>
        </div>
    </div>
</div>