@extends('ui.layouts.mainLayout')

<?php
$transactions = [
    [
        'id' => '54546832',
        'dateTime' => '2024-10-1218:00:12',
        'name' => 'Brooklyn Simmons',
        'email' => 'bill.sanders@example.com',
        'amount' => '536',
        'method' => 'BankWire',
        'paidOut' => 'User'
    ],
    [
        'id' => '54547023',
        'dateTime' => '2024-10-1218:00:12',
        'name' => 'Eleanor Pena',
        'email' => 'nathan.roberts@example.com',
        'amount' => '740',
        'method' => 'BankWire',
        'paidOut' => 'Brand'
    ],
    [
        'id' => '54547124',
        'dateTime' => '2024-10-1218:00:10',
        'name' => 'GreenWave',
        'email' => 'dolores.chambers@example.com',
        'amount' => '561',
        'method' => 'BankWire',
        'paidOut' => 'User'
    ],
    [
        'id' => '54547293',
        'dateTime' => '2024-10-1217:03:12',
        'name' => 'Marvin McKinney',
        'email' => 'kenzi.lawson@example.com',
        'amount' => '492',
        'method' => 'BankWire',
        'paidOut' => 'User'
    ],
    [
        'id' => '54547302',
        'dateTime' => '2024-10-1217:03:11',
        'name' => 'Dianne Russell',
        'email' => 'jackson.graham@example.com',
        'amount' => '583',
        'method' => 'BankWire',
        'paidOut' => 'User'
    ],
    [
        'id' => '54547302',
        'dateTime' => '2024-10-1217:03:10',
        'name' => 'Eleanor Pena',
        'email' => 'curtis.weaver@example.com',
        'amount' => '647',
        'method' => 'BankWire',
        'paidOut' => 'User'
    ]
];
?>


@section('content')

<div class="wipe-page settlement-pg">
    <div class="page-header">
        <div class="pg-title">
            <h1>Settlements</h1>
            <div class="daterange-container show-drp-mob">
                <input type="text" class="daterange">
            </div>
        </div>
        <div class="page-action">
            <div class="daterange-container hide-drp-mob">
                <input type="text" class="daterange" class="form-control" value="All Time">
            </div>
            <div class="total-earn-rcv">
                <h4>Total Earned: <span>$233,000.00</span></h4>
                <h4>Total Received: <span>$433,000.00</span></h4>
            </div>
            <div class="header-flex-btns">
                <button type="button" class="primary-btn">Payout User</button>
                <button type="button" class="primary-btn">Payout Brand</button>
            </div>
        </div>
    </div>
    <span class="alert-msg mt-2">
        <svg width="24" height="24">
            <use href="#info-icon"></use>
        </svg>
        <span>Please Add Your Payout Details!</span>
        <a class="ms-auto" href="javascript:" data-toggle="modal" data-target="#AddPayoutModal">Add Details</a>
    </span>
    <div class="page-cards">
        <div class="row owl-carousel carousel_wrapper">
            <div class="custom-card sm">
                <div class="card-content">
                    <p class="header">Total Earned</p>
                    <div class="content-body">
                        <h4>$45,000.00</h4>
                    </div>
                </div>
            </div>
            <div class="custom-card sm">
                <div class="card-content">
                    <p class="header">Ready for Payout to Users</p>
                    <div class="content-body">
                        <h4>$12,000.00</h4>
                    </div>
                </div>
            </div>
            <div class="custom-card sm">
                <div class="card-content">
                    <p class="header">Ready for Payout to Brand</p>
                    <div class="content-body">
                        <h4>$5,000.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="smoothsWipe-table">
        <div class="smoothsWipe-table-header">
            <div class="smooth-left">
                <h4 class="mb-0">Payouts</h4>
                <div class="form-container">
                    <div class="select-wrapper">
                        <div class="select-container single">
                            <select class="form-select-single" name="item-select" placeholder="Select Item">
                                <option></option>
                                <option value="1" selected>Paid Out to All</option>
                                <option value="2">Paid Out to User</option>
                                <option value="3">Paid Out to Brand</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="th-d-none">Date Time</th>
                    <th>Name</th>
                    <th class="th-d-none">Email</th>
                    <th class="th-d-none">Amount</th>
                    <th class="th-d-none">Method</th>
                    <th class="th-d-none">Paid Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upt.svg"
                                    class="tsb-right-arrow" alt="">
                                <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upd.svg"
                                    class="tsb-down-arrow" alt="">
                            </button>
                            <span>{{ $transaction['id'] }}</span> <!-- Accessing array index -->
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Date Time</label>
                                    <div class="tdDetail">{{ $transaction['dateTime'] }}</div>
                                </li>
                                <li><label>Name</label>
                                    <div class="tdDetail"><strong><a href="#" data-toggle="modal"
                                                data-target="#transactionModal">{{ $transaction['name'] }}</a></strong>
                                    </div>
                                </li>
                                <li><label>Email</label>
                                    <div class="tdDetail">{{ $transaction['email'] }}</div>
                                </li>
                                <li><label>Amount</label>
                                    <div class="tdDetail">{{ $transaction['amount'] }}</div>
                                </li>
                                <li><label>Method</label>
                                    <div class="tdDetail">{{ $transaction['method'] }}</div>
                                </li>
                                <li><label>Paid Out</label>
                                    <div class="tdDetail">{{ $transaction['paidOut'] }}</div>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td class="td-d-none">{{ $transaction['dateTime'] }}</td>
                    <td class="sc-show"><a href="#" data-toggle="modal"
                            data-target="#transactionModal">{{ $transaction['name'] }}</a></td>
                    <td class="td-d-none">{{ $transaction['email'] }}</td>
                    <td class="td-d-none">{{ $transaction['amount'] }}</td>
                    <td class="td-d-none">{{ $transaction['method'] }}</td>
                    <td class="td-d-none">{{ $transaction['paidOut'] }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>

        <div class="smoothsWipe-table-footer">
            <div class="page-total-dd dropdown">
                <div class="page-total" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>1-10</span> <span>of 240</span>
                </div>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item" href="#">Ascending Order</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Descending Order</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Show 10 per page</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Show 20 per page</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Show 30 per page</a>
                    </li>
                </ul>
            </div>
            <nav>
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M11 4.44031L11 11.9597C11 12.3789 10.515 12.612 10.1877 12.3501L5.48804 8.59043C5.23784 8.39027 5.23784 8.00973 5.48804 7.80956L10.1877 4.04988C10.515 3.78797 11 4.02106 11 4.44031Z"
                                    fill="url(#paint0_linear_9183_71407)" />
                            </svg>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M5 4.44031L5 11.9597C5 12.3789 5.48497 12.612 5.81235 12.3501L10.512 8.59043C10.7622 8.39027 10.7622 8.00973 10.512 7.80956L5.81235 4.04988C5.48497 3.78797 5 4.02106 5 4.44031Z"
                                    fill="url(#paint0_linear_9183_71407)" />
                                <defs>
                                    <linearGradient id="paint0_linear_9183_71407" x1="5.3" y1="12.4" x2="13.0795"
                                        y2="7.67103" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#5B8EE6" />
                                        <stop offset="1" stop-color="#712DA7" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="empty-state d-none">
            <div class="empty-state-img">
                <img src="{{ env('BASE_resources_URL') }}assets/img/svg/empty-state.svg" alt="empty-state">
            </div>
            <p>It looks like you don’t have
                any processing yet.</p>
        </div>
    </div>

</div>

<div class="base-modal modal fade transactionModal" id="transactionModal" tabindex="-1" role="dialog"
    aria-labelledby="transactionModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transactionModalLongTitle">Transaction Information</h5>
                <button type="button" class="close-btn" data-dismiss="modal">
                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/close-icon.svg" alt="close-icon">
                </button>
            </div>
            <div class="modal-body">
                <div class="info-box">
                    <div class="info-item">
                        <h4>Timestamp</h4>
                        <h3>2024-10-30 14:22:05</h3>
                    </div>
                    <div class="info-item">
                        <h4>Last 4 digits of cards</h4>
                        <div class="password-label">
                            <input type="password" name="password" id="password2" value="test">

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
                    <div class="info-item">
                        <h4>Gateway</h4>
                        <h3>Stripe</h3>
                    </div>
                    <div class="info-item">
                        <h4>Status</h4>
                        <h3>Active</h3>
                    </div>
                    <div class="info-item">
                        <h4>Currency</h4>
                        <h3>USD</h3>
                    </div>
                    <div class="info-item">
                        <h4>Value</h4>
                        <h3>$59.99</h3>
                    </div>
                    <div class="info-item">
                        <h4>Frequency</h4>
                        <h3>Monthly</h3>
                    </div>
                    <div class="info-item">
                        <h4>Last payment date</h4>
                        <h3>2024-09-30</h3>
                    </div>
                    <div class="info-item">
                        <h4>Next payment date</h4>
                        <h3>2024-10-29</h3>
                    </div>
                    <div class="info-item">
                        <h4>Merchant</h4>
                        <h3>Amazon</h3>
                    </div>
                    <div class="info-item">
                        <h4>Product name</h4>
                        <h3>Amazon Prime Membership</h3>
                    </div>
                    <div class="info-item">
                        <h4>Offer name</h4>
                        <h3>Prime Yearly Discount</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="base-modal modal fade AddPayoutModal" id="AddPayoutModal" tabindex="-1" role="dialog"
    aria-labelledby="AddPayoutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddPayoutModalLongTitle">Add Your Payout Details</h5>
                <button type="button" class="close-btn" data-dismiss="modal">
                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/close-icon.svg" alt="close-icon">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-wrapper">
                    <div class="form-container mb-3">
                        <label for="">Payout Method</label>
                        <div class="select-wrapper">
                            <div class="select-container form-inner-select-container single">
                                <select class="form-select-single" name="item-select"
                                    placeholder="Select Payout Method">
                                    <option></option>
                                    <option value="1" selected>BankWire</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-container mb-3">
                        <label for="">Bank Name</label>
                        <input type="text" placeholder="Enter here">
                    </div>
                    <div class="form-container mb-3">
                        <label for="">Bank Account Holder Name</label>
                        <input type="text" placeholder="Enter here">
                    </div>
                    <div class="form-container mb-3">
                        <label for="">IBAN</label>
                        <input type="text" placeholder="Enter here">
                    </div>
                    <div class="form-container mb-3">
                        <label for="">SWIFT/BIC</label>
                        <input type="text" placeholder="Enter here">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="secondary-btn" data-dismiss="modal">Cancel</button>
                <button type="button" id="confirm-btn" class="primary-btn">Confirm</button>
            </div>
        </div>
    </div>
</div>


<div class="toast-container custom-success-toast">
    <div id="payoutsuccess" class="toast w-auto" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            <img src="{{ env('BASE_resources_URL') }}assets/img/svg/alert-circle.svg">
            <span>Payout Details successfully added!</span>
        </div>
    </div>
</div>

<script>
document.getElementById('confirm-btn').addEventListener('click', function() {
    const toastLiveExample = document.getElementById('payoutsuccess');
    const toast = new bootstrap.Toast(toastLiveExample);
    toast.show();
});
</script>
@endsection

@section('scripts')



@endsection