<aside>
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="logo-container">
                <img src="{{URL::asset('assets/img/Logo.webp')}}" alt="">
            </div>
            <h5>Company</h5>
            <a href="javascript:" class="close-menu ms-auto" id="closeHam">
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.52858 4.02827C3.78892 3.76792 4.21103 3.76792 4.47138 4.02827L7.99998 7.55687L11.5286 4.02827C11.7889 3.76792 12.211 3.76792 12.4714 4.02827C12.7317 4.28862 12.7317 4.71073 12.4714 4.97108L8.94279 8.49967L12.4714 12.0283C12.7317 12.2886 12.7317 12.7107 12.4714 12.9711C12.211 13.2314 11.7889 13.2314 11.5286 12.9711L7.99998 9.44248L4.47138 12.9711C4.21103 13.2314 3.78892 13.2314 3.52858 12.9711C3.26823 12.7107 3.26823 12.2886 3.52858 12.0283L7.05717 8.49967L3.52858 4.97108C3.26823 4.71073 3.26823 4.28862 3.52858 4.02827Z"
                        fill="#757A89" />
                </svg>
            </a>
        </div>
        <ul class="sidebar-menu main-menu">
            <li>
                <a href="{{ route('dashboard')}}" class="{{ Route::is('dashboard') ? 'active' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.6 1H6.4C6.96005 1 7.24008 1 7.45399 1.10899C7.64215 1.20487 7.79513 1.35785 7.89101 1.54601C8 1.75992 8 2.03995 8 2.6V6.4C8 6.96005 8 7.24008 7.89101 7.45399C7.79513 7.64215 7.64215 7.79513 7.45399 7.89101C7.24008 8 6.96005 8 6.4 8H2.6C2.03995 8 1.75992 8 1.54601 7.89101C1.35785 7.79513 1.20487 7.64215 1.10899 7.45399C1 7.24008 1 6.96005 1 6.4V2.6C1 2.03995 1 1.75992 1.10899 1.54601C1.20487 1.35785 1.35785 1.20487 1.54601 1.10899C1.75992 1 2.03995 1 2.6 1Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.6 1H17.4C17.9601 1 18.2401 1 18.454 1.10899C18.6422 1.20487 18.7951 1.35785 18.891 1.54601C19 1.75992 19 2.03995 19 2.6V6.4C19 6.96005 19 7.24008 18.891 7.45399C18.7951 7.64215 18.6422 7.79513 18.454 7.89101C18.2401 8 17.9601 8 17.4 8H13.6C13.0399 8 12.7599 8 12.546 7.89101C12.3578 7.79513 12.2049 7.64215 12.109 7.45399C12 7.24008 12 6.96005 12 6.4V2.6C12 2.03995 12 1.75992 12.109 1.54601C12.2049 1.35785 12.3578 1.20487 12.546 1.10899C12.7599 1 13.0399 1 13.6 1Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.6 12H17.4C17.9601 12 18.2401 12 18.454 12.109C18.6422 12.2049 18.7951 12.3578 18.891 12.546C19 12.7599 19 13.0399 19 13.6V17.4C19 17.9601 19 18.2401 18.891 18.454C18.7951 18.6422 18.6422 18.7951 18.454 18.891C18.2401 19 17.9601 19 17.4 19H13.6C13.0399 19 12.7599 19 12.546 18.891C12.3578 18.7951 12.2049 18.6422 12.109 18.454C12 18.2401 12 17.9601 12 17.4V13.6C12 13.0399 12 12.7599 12.109 12.546C12.2049 12.3578 12.3578 12.2049 12.546 12.109C12.7599 12 13.0399 12 13.6 12Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.6 12H6.4C6.96005 12 7.24008 12 7.45399 12.109C7.64215 12.2049 7.79513 12.3578 7.89101 12.546C8 12.7599 8 13.0399 8 13.6V17.4C8 17.9601 8 18.2401 7.89101 18.454C7.79513 18.6422 7.64215 18.7951 7.45399 18.891C7.24008 19 6.96005 19 6.4 19H2.6C2.03995 19 1.75992 19 1.54601 18.891C1.35785 18.7951 1.20487 18.6422 1.10899 18.454C1 18.2401 1 17.9601 1 17.4V13.6C1 13.0399 1 12.7599 1.10899 12.546C1.20487 12.3578 1.35785 12.2049 1.54601 12.109C1.75992 12 2.03995 12 2.6 12Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user-mgmt')}}" class="{{ Route::is('user-mgmt') ? 'active' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.9461 15.8369C19.402 16.5683 20.6503 17.742 21.5614 19.2096C21.7418 19.5003 21.832 19.6456 21.8632 19.8468C21.9266 20.2558 21.6469 20.7585 21.2661 20.9204C21.0786 21 20.8678 21 20.4461 21M15.9461 11.5322C17.4278 10.7959 18.4461 9.26686 18.4461 7.5C18.4461 5.73314 17.4278 4.20411 15.9461 3.46776M13.9461 7.5C13.9461 9.98528 11.9314 12 9.44613 12C6.96084 12 4.94613 9.98528 4.94613 7.5C4.94613 5.01472 6.96084 3 9.44613 3C11.9314 3 13.9461 5.01472 13.9461 7.5ZM2.50536 18.9383C4.09966 16.5446 6.6155 15 9.44613 15C12.2768 15 14.7926 16.5446 16.3869 18.9383C16.7362 19.4628 16.9108 19.725 16.8907 20.0599C16.875 20.3207 16.7041 20.64 16.4957 20.7976C16.228 21 15.86 21 15.1238 21H3.76848C3.0323 21 2.6642 21 2.39656 20.7976C2.18817 20.64 2.01721 20.3207 2.00156 20.0599C1.98145 19.725 2.15609 19.4628 2.50536 18.9383Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>User Management</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaction')}}" class="{{ Route::is('transaction') ? 'active' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 12H22M2 12C2 17.5228 6.47715 22 12 22M2 12C2 6.47715 6.47715 2 12 2M22 12C22 17.5228 17.5228 22 12 22M22 12C22 6.47715 17.5228 2 12 2M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22M12 2C9.49872 4.73835 8.07725 8.29203 8 12C8.07725 15.708 9.49872 19.2616 12 22"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Transactions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('gateway-mgmt')}}" class="{{ Route::is('gateway-mgmt') ? 'active' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22 10H2M11 19L18.8 19C19.9201 19 20.4802 19 20.908 18.782C21.2843 18.5903 21.5903 18.2843 21.782 17.908C22 17.4802 22 16.9201 22 15.8V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.7157 21.2843 5.40974 20.908 5.21799C20.4802 5 19.9201 5 18.8 5H17M11 19L13 21M11 19L13 17M7 19H5.2C4.07989 19 3.51984 19 3.09202 18.782C2.71569 18.5903 2.40973 18.2843 2.21799 17.908C2 17.4802 2 16.9201 2 15.8V8.2C2 7.0799 2 6.51984 2.21799 6.09202C2.40973 5.71569 2.7157 5.40973 3.09202 5.21799C3.51984 5 4.0799 5 5.2 5H13M13 5L11 7M13 5L11 3"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Gateway Management</span>
                </a>
            </li>
            <li>
                <a href="{{ route('subscription')}}" class="{{ Route::is('subscription') ? 'active' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22 8.5H2M2 12.5H5.54668C6.08687 12.5 6.35696 12.5 6.61813 12.5466C6.84995 12.5879 7.0761 12.6563 7.29191 12.7506C7.53504 12.8567 7.75977 13.0065 8.20924 13.3062L8.79076 13.6938C9.24023 13.9935 9.46496 14.1433 9.70809 14.2494C9.9239 14.3437 10.15 14.4121 10.3819 14.4534C10.643 14.5 10.9131 14.5 11.4533 14.5H12.5467C13.0869 14.5 13.357 14.5 13.6181 14.4534C13.85 14.4121 14.0761 14.3437 14.2919 14.2494C14.535 14.1433 14.7598 13.9935 15.2092 13.6938L15.7908 13.3062C16.2402 13.0065 16.465 12.8567 16.7081 12.7506C16.9239 12.6563 17.15 12.5879 17.3819 12.5466C17.643 12.5 17.9131 12.5 18.4533 12.5H22M2 7.2L2 16.8C2 17.9201 2 18.4802 2.21799 18.908C2.40973 19.2843 2.71569 19.5903 3.09202 19.782C3.51984 20 4.07989 20 5.2 20L18.8 20C19.9201 20 20.4802 20 20.908 19.782C21.2843 19.5903 21.5903 19.2843 21.782 18.908C22 18.4802 22 17.9201 22 16.8V7.2C22 6.0799 22 5.51984 21.782 5.09202C21.5903 4.7157 21.2843 4.40974 20.908 4.21799C20.4802 4 19.9201 4 18.8 4L5.2 4C4.0799 4 3.51984 4 3.09202 4.21799C2.7157 4.40973 2.40973 4.71569 2.21799 5.09202C2 5.51984 2 6.07989 2 7.2Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Subscriptions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settlements')}}" class="{{ Route::is('settlements') ? 'active' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 6.07003 16 5.60504 15.8978 5.22354C15.6204 4.18827 14.8117 3.37962 13.7765 3.10222C13.395 3 12.93 3 12 3C11.07 3 10.605 3 10.2235 3.10222C9.18827 3.37962 8.37962 4.18827 8.10222 5.22354C8 5.60504 8 6.07003 8 7M5.2 21H18.8C19.9201 21 20.4802 21 20.908 20.782C21.2843 20.5903 21.5903 20.2843 21.782 19.908C22 19.4802 22 18.9201 22 17.8V10.2C22 9.07989 22 8.51984 21.782 8.09202C21.5903 7.71569 21.2843 7.40973 20.908 7.21799C20.4802 7 19.9201 7 18.8 7H5.2C4.07989 7 3.51984 7 3.09202 7.21799C2.71569 7.40973 2.40973 7.71569 2.21799 8.09202C2 8.51984 2 9.07989 2 10.2V17.8C2 18.9201 2 19.4802 2.21799 19.908C2.40973 20.2843 2.71569 20.5903 3.09202 20.782C3.51984 21 4.0799 21 5.2 21Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Settlements</span>
                </a>
            </li>
            <li>
                <a href="javascript:">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.09436 11.2288C6.03221 10.8282 5.99996 10.4179 5.99996 10C5.99996 5.58172 9.60525 2 14.0526 2C18.4999 2 22.1052 5.58172 22.1052 10C22.1052 10.9981 21.9213 11.9535 21.5852 12.8345C21.5154 13.0175 21.4804 13.109 21.4646 13.1804C21.4489 13.2512 21.4428 13.301 21.4411 13.3735C21.4394 13.4466 21.4493 13.5272 21.4692 13.6883L21.8717 16.9585C21.9153 17.3125 21.9371 17.4895 21.8782 17.6182C21.8266 17.731 21.735 17.8205 21.6211 17.8695C21.4911 17.9254 21.3146 17.8995 20.9617 17.8478L17.7765 17.3809C17.6101 17.3565 17.527 17.3443 17.4512 17.3448C17.3763 17.3452 17.3245 17.3507 17.2511 17.3661C17.177 17.3817 17.0823 17.4172 16.893 17.4881C16.0097 17.819 15.0524 18 14.0526 18C13.6344 18 13.2237 17.9683 12.8227 17.9073M7.63158 22C10.5965 22 13 19.5376 13 16.5C13 13.4624 10.5965 11 7.63158 11C4.66668 11 2.26316 13.4624 2.26316 16.5C2.26316 17.1106 2.36028 17.6979 2.53955 18.2467C2.61533 18.4787 2.65322 18.5947 2.66566 18.6739C2.67864 18.7567 2.68091 18.8031 2.67608 18.8867C2.67145 18.9668 2.65141 19.0573 2.61134 19.2383L2 22L4.9948 21.591C5.15827 21.5687 5.24 21.5575 5.31137 21.558C5.38652 21.5585 5.42641 21.5626 5.50011 21.5773C5.5701 21.5912 5.67416 21.6279 5.88227 21.7014C6.43059 21.8949 7.01911 22 7.63158 22Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Disputes</span>
                </a>
            </li>
            <li>
                <a href="javascript:">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 2H15.2C16.8802 2 17.7202 2 18.362 2.32698C18.9265 2.6146 19.3854 3.07354 19.673 3.63803C20 4.27976 20 5.11984 20 6.8V17.2C20 18.8802 20 19.7202 19.673 20.362C19.3854 20.9265 18.9265 21.3854 18.362 21.673C17.7202 22 16.8802 22 15.2 22H8.8C7.11984 22 6.27976 22 5.63803 21.673C5.07354 21.3854 4.6146 20.9265 4.32698 20.362C4 19.7202 4 18.8802 4 17.2V16.5M16 13H11.5M16 9H12.5M16 17H8M6 10V4.5C6 3.67157 6.67157 3 7.5 3C8.32843 3 9 3.67157 9 4.5V10C9 11.6569 7.65685 13 6 13C4.34315 13 3 11.6569 3 10V6"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Attachments</span>
                </a>
            </li>
            <li>
                <a href="javascript:">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 7L11.8845 4.76892C11.5634 4.1268 11.4029 3.80573 11.1634 3.57116C10.9516 3.36373 10.6963 3.20597 10.4161 3.10931C10.0992 3 9.74021 3 9.02229 3H5.2C4.0799 3 3.51984 3 3.09202 3.21799C2.71569 3.40973 2.40973 3.71569 2.21799 4.09202C2 4.51984 2 5.0799 2 6.2V7M2 7H17.2C18.8802 7 19.7202 7 20.362 7.32698C20.9265 7.6146 21.3854 8.07354 21.673 8.63803C22 9.27976 22 10.1198 22 11.8V16.2C22 17.8802 22 18.7202 21.673 19.362C21.3854 19.9265 20.9265 20.3854 20.362 20.673C19.7202 21 18.8802 21 17.2 21H6.8C5.11984 21 4.27976 21 3.63803 20.673C3.07354 20.3854 2.6146 19.9265 2.32698 19.362C2 18.7202 2 17.8802 2 16.2V7ZM15.5 17.5L14 16M15 13.5C15 15.433 13.433 17 11.5 17C9.567 17 8 15.433 8 13.5C8 11.567 9.567 10 11.5 10C13.433 10 15 11.567 15 13.5Z"
                            stroke="#9EA2B1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Audit Logs</span>
                </a>
            </li>
        </ul>
        <ul class="sidebar-menu footer mt-auto">
            <li>
                <a href="javascript:" id="minimizeMenu">
                    <svg class="minimize-btn" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7.80005V16.2001V18V6" stroke="#919AA7" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M9 17L4 12M4 12L9 7M4 12H16" stroke="#919AA7" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span>Minimize Menu</span>
                </a>
            </li>
            <li>
                <a href="javascript:"
                    class="custom-dropdown-toggle dropdown-toggle {{ Route::is('profile') ? 'active' : '' }}"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="img-container">
                        <img src="{{URL::asset('assets/img/usr-profile.webp')}}" alt="">
                    </div>
                    <div class="content">
                        <p class="title">Claire Littleton</p>
                        <p class="sub-title">Financial Manager</p>
                    </div>
                </a>
                <ul class="custom-dropdown-menu dropdown-menu" data-input-id="upload-profile-photo-1"
                    data-image-id="uploaded-image-1">
                    <li>
                        <a class="dropdown-item delete-photo {{ Route::is('profile') ? 'active' : '' }}"
                            href="{{ route('profile') }}">
                            <svg width="18" height="19">
                                <use href="#gear-icon"></use>
                            </svg>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item update-photo" href="#">
                            <svg width="18" height="19">
                                <use href="#logout-icon" />
                            </svg>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<div class="sidebar-overlay"></div>