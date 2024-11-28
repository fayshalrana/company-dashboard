<div class="d-flex justify-content-center align-items-center h-100">
    <!-- Button trigger modal -->
    <button type="button" class="primary-btn" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

</div>

<!-- Modal -->
<div class="base-modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detailed Information</h5>
                <button type="button" class="close-btn" data-dismiss="modal">
                    <img src=" {{ env('BASE_resources_URL') }}assets/img/svg/close-icon.svg" alt="close-icon">
                </button>
            </div>
            <div class="modal-body">
                <div class="info-box">
                    <div class="info-item">
                        <h4>Name</h4>
                        <h3>Brooklyn Simmons</h3>
                    </div>
                    <div class="info-item">
                        <h4>Email</h4>
                        <h3>bill.sanders@example.com</h3>
                    </div>
                    <div class="info-item">
                        <h4>Phone</h4>
                        <h3>+1 (229) 555-0109</h3>
                    </div>
                    <div class="info-item">
                        <h4>Password</h4>
                        <div class="password-label">
                            <input type="password" name="password" id="password2"
                                value="wsfrgerft54refcwsfrgerft54refcwsfrgerft54refc">

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
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="secondary-btn" data-dismiss="modal">Close</button>
                <button type="button" class="primary-btn">Save changes</button>
            </div> -->
        </div>
    </div>
</div>