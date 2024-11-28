@extends('ui.layouts.mainLayout')
<?php
$transactions = [
    [
        'id' => '54546832',
        'name' => 'Brooklyn Simmons',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'bill.sanders@example.com',
        'gateway' => 'Paypal',
        'class' => 'Transaction',
    ],
    [
        'id' => '54546924',
        'name' => 'Jane Cooper',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'tanya.hill@example.com',
        'gateway' => 'Paypal',
        'class' => 'Transaction',
    ],
    [
        'id' => '54547023',
        'name' => 'Eleanor Pena',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'nathan.roberts@example.com',
        'gateway' => 'Stripe',
        'class' => 'Transaction',
    ],
    [
        'id' => '54547124',
        'name' => 'Cody Fisher',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'dolores.chambers@example.com',
        'gateway' => 'Stripe',
        'class' => 'Transaction',
    ],
    [
        'id' => '54546832',
        'name' => 'Brooklyn Simmons',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'bill.sanders@example.com',
        'gateway' => 'Paypal',
        'class' => 'Transaction',
    ],
    [
        'id' => '54546924',
        'name' => 'Jane Cooper',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'tanya.hill@example.com',
        'gateway' => 'Paypal',
        'class' => 'Transaction',
    ],
    [
        'id' => '54547023',
        'name' => 'Eleanor Pena',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'nathan.roberts@example.com',
        'gateway' => 'Stripe',
        'class' => 'Transaction',
    ],
    [
        'id' => '54545023',
        'name' => 'Savannah Nguyen',
        'dateTime' => '2024-10-12 17:02:10',
        'email' => 'jackson.graham@example.com',
        'gateway' => 'Sofort',
        'class' => 'Transaction',
    ],
    [
        'id' => '54541023',
        'name' => 'Ronald Richards',
        'dateTime' => '2024-10-12 17:03:06',
        'email' => 'deanna.curtis@example.com',
        'gateway' => 'Stripe',
        'class' => 'Transaction',
    ],
];

?>
@section('content') <div class="wipe-page Transactions">
    <!-- Page Header  -->
    <div class="page-header">
        <div class="pg-title">
            <h1>Transactions</h1>
            <div class="daterange-container show-drp-mob">
                <input type="text" class="daterange">
            </div>
        </div>
        <div class="page-action">
            <div class="daterange-container hide-drp-mob">
                <input type="text" class="daterange" class="form-control" readonly>
            </div>
            <div class="total-earn-rcv">
                <h4>Total Earned: <span>$233,000.00</span></h4>
                <h4>Total Received: <span>$433,000.00</span></h4>
            </div>
            <button type="button" class="primary-btn">Add Gateway</button>
        </div>
    </div>
    <!-- Transaction Cards  -->
    <div class="page-cards">
        <div class="row g-2 owl-carousel carousel_wrapper">
            <div class="custom-card">
                <div class="card-content">
                    <p class="header">Total Receivable</p>
                    <div class="content-body">
                        <h4>$45,000.00</h4>
                        <div class="stmt-msg">
                            <svg width="10" height="14">
                                <use href="#arrow-icon"></use>
                            </svg>
                            <span class="profit">12,1%</span>
                            <span>from last month</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="custom-card">
                <div class="card-content">
                    <p class="header">Total Received</p>
                    <div class="content-body">
                        <h4>$12,000.00</h4>
                        <div class="stmt-msg">
                            <svg width="10" height="14">
                                <use href="#arrow-icon"></use>
                            </svg>
                            <span class="profit">10,1%</span>
                            <span>from last month</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-card">
                <div class="card-content">
                    <p class="header">Pending To Be Received</p>
                    <div class="content-body">
                        <h4>$33,000.00</h4>
                        <div class="stmt-msg">
                            <svg width="11" height="14">
                                <use href="#arrow-down-icon"></use>
                            </svg>
                            <span class="loss">2,1%</span>
                            <span>from last month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-2 mt-2 graph">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-xxl-4">
                <div class="custom-card">
                    <div class="card-content">
                        <p class="header">Total Transactions</p>
                        <div class="content-body">
                            <h4>45</h4>
                            <div class="stmt-msg">
                                <svg width="10" height="14">
                                    <use href="#arrow-icon"></use>
                                </svg>
                                <span class="profit">12,1%</span>
                                <span>from last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{ env('BASE_resources_URL') }}assets/img/chart.webp" alt="">
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-xxl-4">
                <div class="custom-card">
                    <div class="card-content">
                        <p class="header">Total Settlements</p>
                        <div class="content-body">
                            <h4>12</h4>
                            <div class="stmt-msg">
                                <svg width="10" height="14">
                                    <use href="#arrow-icon"></use>
                                </svg>
                                <span class="profit">10,1%</span>
                                <span>from last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{ env('BASE_resources_URL') }}assets/img/chart.webp" alt="">
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-4 col-xxl-4">
                <div class="custom-card">
                    <div class="card-content">
                        <p class="header">Total Active Disputes</p>
                        <div class="content-body">
                            <h4>15</h4>
                            <div class="stmt-msg">
                                <svg width="11" height="14">
                                    <use href="#arrow-down-icon"></use>
                                </svg>
                                <span class="loss">2,1%</span>
                                <span>from last month</span>
                            </div>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{ env('BASE_resources_URL') }}assets/img/Chart-down.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table  -->
    <div class="smoothsWipe-table">
        <div class="smoothsWipe-table-header">
            <div class="smooth-left">
                <h4 class="mb-0">Processing</h4>
                <div class="form-container">
                    <div class="select-wrapper ssth-select-wrapper">
                        <div class="select-container mul mul-in">
                            <select class="form-select-multiple" id="tsd-select" name="item-select"
                                placeholder="Select Item" multiple>
                                <option></option>
                                <option value="1">Transactions</option>
                                <option value="2">Settlements</option>
                                <option value="3">Disputes</option>
                            </select>
                            <div class="arrow">
                                <b role="presentation"></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ssth-right">
                <div class="dropdown filter-dropdown-container">
                    <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ env('BASE_resources_URL') }}assets/img/svg/filter-lines.svg" alt="">
                    </button>
                    <div class="dropdown-menu p-3" aria-labelledby="filterDropdown">
                        <form>
                            <label for="filterSelect" class="form-label">Filter by:</label>
                            <select class="form-select" id="filterSelect" name="filter">
                                <option value="all" selected>All</option>
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                                <option value="category3">Category 3</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-3 w-100">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="th-d-none">Date Time</th>
                        <th>Name</th>
                        <th class="th-d-none">Email</th>
                        <th class="th-d-none">Gateway</th>
                        <th class="th-d-none">Class</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td class="tdd-container">
                            <div class="td-show-btn">
                                <button class="td-d-show">
                                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upt.svg"
                                        class="tsb-right-arrow" alt="">
                                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upd.svg"
                                        class="tsb-down-arrow" alt="">
                                </button>
                                <span><?= htmlspecialchars($transaction['id']); ?></span>
                            </div>
                            <div class="td-show-details">
                                <ul>
                                    <li><label>Name</label>
                                        <div class="tdDetail"><a href="#" data-toggle="modal"
                                                data-target="#transactionModal"><?= htmlspecialchars($transaction['name']); ?></a>
                                        </div>
                                    </li>
                                    <li><label>Date Time</label>
                                        <div class="tdDetail"><?= htmlspecialchars($transaction['dateTime']); ?></div>
                                    </li>
                                    <li><label>Email</label>
                                        <div class="tdDetail"><?= htmlspecialchars($transaction['email']); ?></div>
                                    </li>
                                    <li><label>Gateway</label>
                                        <div class="tdDetail"><?= htmlspecialchars($transaction['gateway']); ?></div>
                                    </li>
                                    <li><label>Class</label>
                                        <div class="tdDetail"><?= htmlspecialchars($transaction['class']); ?></div>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="td-d-none"><?= htmlspecialchars($transaction['dateTime']); ?></td>
                        <td class="sc-show"><a href="#" data-toggle="modal"
                                data-target="#transactionModal"><?= htmlspecialchars($transaction['name']); ?></a></td>
                        <td class="td-d-none"><?= htmlspecialchars($transaction['email']); ?></td>
                        <td class="td-d-none"><?= htmlspecialchars($transaction['gateway']); ?></td>
                        <td class="td-d-none"><?= htmlspecialchars($transaction['class']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


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

<!-- Modal -->
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
            <!-- <div class="modal-footer">
                <button type="button" class="secondary-btn" data-dismiss="modal">Close</button>
                <button type="button" class="primary-btn">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

@endsection