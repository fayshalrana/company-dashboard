@extends('ui.layouts.mainLayout')

<?php
// Define the table data array
$tableData = [
    [
        'id' => '54546832',
        'name' => 'Brooklyn Simmons',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'bill.sanders@example.com',
        'phone' => '+1 (229) 555-0109',
        'totalTransactions' => 540
    ],
    [
        'id' => '54546924',
        'name' => 'Jane Cooper',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'tanya.hill@example.com',
        'phone' => '+1 (307) 555-0133',
        'totalTransactions' => 740
    ],
    [
        'id' => '54547023',
        'name' => 'Eleanor Pena',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'nathan.roberts@example.com',
        'phone' => '+1 (209) 555-0104',
        'totalTransactions' => 536
    ],
    [
        'id' => '54547124',
        'name' => 'Cody Fisher',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'dolores.chambers@example.com',
        'phone' => '+1 (207) 555-0119',
        'totalTransactions' => 561
    ],
    [
        'id' => '54546832',
        'name' => 'Brooklyn Simmons',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'bill.sanders@example.com',
        'phone' => '+1 (629) 555-0129',
        'totalTransactions' => 492
    ],
    [
        'id' => '54546924',
        'name' => 'Jane Cooper',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'tanya.hill@example.com',
        'phone' => '+1 (405) 555-0128',
        'totalTransactions' => 583
    ],
    [
        'id' => '54547023',
        'name' => 'Eleanor Pena',
        'dateTime' => '2024-10-12 18:03:12',
        'email' => 'nathan.roberts@example.com',
        'phone' => '+1 (209) 555-0104',
        'totalTransactions' => 536
    ],
    [
        'id' => '54547023',
        'name' => 'Brooklyn Simmons',
        'dateTime' => '2024-10-12 17:03:06',
        'email' => 'michael.mitc@example.com',
        'phone' => '+1 (684) 555-0102',
        'totalTransactions' => 883
    ],
    [
        'id' => '54547023',
        'name' => 'Ralph Edwards',
        'dateTime' => '2024-10-12 17:02:10',
        'email' => 'debra.holt@example.com',
        'phone' => '+1 (225) 555-0118',
        'totalTransactions' => 196
    ],
    [
        'id' => '54547023',
        'name' => 'Jerome Bell',
        'dateTime' => '2024-10-12 17:01:10',
        'email' => 'deanna.curtis@example.com',
        'phone' => '+1 (205) 555-0100',
        'totalTransactions' => 177
    ]
];
?>
@section('content')

<div class="wipe-page dashboard-pg">
    <div class="page-header">
        <div class="pg-title">
            <h1>User Management</h1>
            <div class="daterange-container show-drp-mob">
                <input type="text" class="daterange" class="form-control">
            </div>
        </div>
        <div class="page-action">
            <div class="daterange-container hide-drp-mob">
                <input type="text" class="daterange" class="form-control">
            </div>
            <div class="total-earn-rcv">
                <h4>Total Earned: <span>$233,000.00</span></h4>
                <h4>Total Received: <span>$433,000.00</span></h4>
            </div>
            <!-- <button type="button" class="primary-btn">Add Phone</button> -->
        </div>
    </div>
    <div class="page-cards">
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
    <div class="smoothsWipe-table">
        <div class="smoothsWipe-table-header">
            <div class="smooth-left">
                <h4 class="mb-0">Users</h4>
                <div class="form-wrapper">
                    <div class="form-container">
                        <div class="position-relative search-input-container">
                            <input type="search" placeholder="Search">
                            <svg class="search-icon" width="16" height="16">
                                <use href="#search-icon"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Structure -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="th-d-none">Date Time</th>
                        <th>Name</th>
                        <th class="th-d-none">Email</th>
                        <th class="th-d-none">Phone</th>
                        <th class="th-d-none">Total Transactions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tableData as $row): ?>
                    <tr>
                        <td class="tdd-container">
                            <div class="td-show-btn">
                                <button class="td-d-show">
                                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upt.svg"
                                        class="tsb-right-arrow" alt="">
                                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upd.svg"
                                        class="tsb-down-arrow" alt="">
                                </button>
                                <span><?= htmlspecialchars($row['id']); ?></span>
                            </div>
                            <div class="td-show-details">
                                <ul>
                                    <li>
                                        <label>Name</label>
                                        <div class="tdDetail">
                                            <a href="#" data-toggle="modal" data-target="#DetailedModal">
                                                <strong><?= htmlspecialchars($row['name']); ?></strong>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <label>Date Time</label>
                                        <div class="tdDetail"><?= htmlspecialchars($row['dateTime']); ?></div>
                                    </li>
                                    <li>
                                        <label>Email</label>
                                        <div class="tdDetail"><?= htmlspecialchars($row['email']); ?></div>
                                    </li>
                                    <li>
                                        <label>Phone</label>
                                        <div class="tdDetail"><?= htmlspecialchars($row['phone']); ?></div>
                                    </li>
                                    <li>
                                        <label>Transactions</label>
                                        <div class="tdDetail"><?= htmlspecialchars($row['totalTransactions']); ?></div>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="td-d-none"><?= htmlspecialchars($row['dateTime']); ?></td>
                        <td class="sc-show">
                            <a href="#" data-toggle="modal"
                                data-target="#DetailedModal"><?= htmlspecialchars($row['name']); ?></a>
                        </td>
                        <td class="td-d-none"><?= htmlspecialchars($row['email']); ?></td>
                        <td class="td-d-none"><?= htmlspecialchars($row['phone']); ?></td>
                        <td class="td-d-none"><?= htmlspecialchars($row['totalTransactions']); ?></td>
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



</div>


<div class="base-modal modal fade" id="DetailedModal" tabindex="-1" role="dialog" aria-labelledby="DetailedModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detailed Information</h5>
                <button type="button" class="close-btn" data-dismiss="modal">
                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/close-icon.svg" alt="close-icon">
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
        </div>
    </div>
</div>
@endsection

@section('scripts')