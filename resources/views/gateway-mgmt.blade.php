@extends('ui.layouts.mainLayout')

@php
$processors = [
[
'name' => 'Paypal',
'available_countries' => 65,
'transaction_fee' => '3.5% + 20 cents per transaction',
'total_transactions' => 74875,
'total_revenue' => 66105.55,
'status' => 'Active',
'action_button_class' => 'secondary-btn hovered action-btn',
'action_button_text' => 'Deactivate',
'modal_target' => '#DeactivateGateway',
],
[
'name' => 'Stripe',
'available_countries' => 65,
'transaction_fee' => '3.5% + 20 cents per transaction',
'total_transactions' => 38200,
'total_revenue' => 36358.35,
'status' => 'Not Active',
'action_button_class' => 'primary-btn action-btn',
'action_button_text' => 'Activate',
'modal_target' => '#activateGateway',
],
[
'name' => 'Sofort',
'available_countries' => 65,
'transaction_fee' => '3.5% + 20 cents per transaction',
'total_transactions' => '38,200',
'total_revenue' => '36,358.35',
'status' => 'Not Active',
'action_button_class' => 'primary-btn action-btn',
'action_button_text' => 'Activate',
'modal_target' => '#activateGateway',
],
// Add more processors as needed
];
@endphp


@section('content')
<div class="wipe-page gateway">
    <!-- Page Header  -->
    <div class="page-header">
        <div class="pg-title">
            <h1>Gateway Management</h1>
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
    <!-- Gateway Cards  -->
    <div class="page-cards">
        <div class="row owl-carousel carousel_wrapper">
            <div class="custom-card">
                <div class="card-content">
                    <p class="header">Connected Payment Gateways</p>
                    <div class="content-body">
                        <h4>3</h4>
                    </div>
                </div>
            </div>
            <div class="custom-card">
                <div class="card-content">
                    <p class="header">Active Payment Gateways</p>
                    <div class="content-body">
                        <h4>2</h4>
                    </div>
                </div>
            </div>
            <div class="custom-card">
                <div class="card-content">
                    <p class="header">Inactive Payment Gateways</p>
                    <div class="content-body">
                        <h4>1</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table  -->
    <div class="smoothsWipe-table">
        <div class="smoothsWipe-table-header">
            <div class="smooth-left">
                <h4 class="mb-0">Connected Gateways</h4>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Processor</th>
                        <th class="th-d-none">Available Countries</th>
                        <th>Transaction Fee</th>
                        <th class="th-d-none">Total Transactions</th>
                        <th class="th-d-none">Total Revenue ($)</th>
                        <th class="th-d-none">Status</th>
                        <th class="th-d-none">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($processors as $processor)
                    <tr>
                        <td class="tdd-container">
                            <div class="td-show-btn">
                                <button class="td-d-show">
                                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upt.svg"
                                        class="tsb-right-arrow" alt="">
                                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/chevron-upd.svg"
                                        class="tsb-down-arrow" alt="">
                                </button>
                                <span>{{ $processor['name'] }}</span>
                            </div>
                            <div class="td-show-details">
                                <ul>
                                    <li><label>Available Countries</label>
                                        <div class="tdDetail">{{ $processor['available_countries'] }} <a href="#">See
                                                List</a></div>
                                    </li>
                                    <li><label>Transaction Fee</label>
                                        <div class="tdDetail">{{ $processor['transaction_fee'] }}</div>
                                    </li>
                                    <li><label>Total Transactions</label>
                                        <div class="tdDetail">{{ $processor['total_transactions'] }}</div>
                                    </li>
                                    <li><label>Total Revenue ($)</label>
                                        <div class="tdDetail">{{ $processor['total_revenue'] }}</div>
                                    </li>
                                    <li><label>Status</label>
                                        <div class="tdDetail">{{ $processor['status'] }}</div>
                                    </li>
                                    <li><label>Actions</label>
                                        <div class="tdDetail">
                                            <button type="button" class="{{ $processor['action_button_class'] }}"
                                                data-toggle="modal" data-target="{{ $processor['modal_target'] }}">
                                                {{ $processor['action_button_text'] }}
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="td-d-none">{{ $processor['available_countries'] }} <a href="#">See List</a></td>
                        <td class="sc-show">{{ $processor['transaction_fee'] }}</td>
                        <td class="td-d-none">{{ $processor['total_transactions'] }}</td>
                        <td class="td-d-none">{{ $processor['total_revenue'] }}</td>
                        <td class="td-d-none">{{ $processor['status'] }}</td>
                        <td class="td-d-none">
                            <button type="button" class="{{ $processor['action_button_class'] }}" data-toggle="modal"
                                data-target="{{ $processor['modal_target'] }}">
                                {{ $processor['action_button_text'] }}
                            </button>
                        </td>
                    </tr>
                    @endforeach
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
<div class="base-modal modal fade Gateway" id="activateGateway" tabindex="-1" role="dialog"
    aria-labelledby="activateGatewayTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="activateGatewayLongTitle">Activate Gateway</h5>
                <button type="button" class="close-btn" data-dismiss="modal">
                    <img src="{{ env('BASE_resources_URL') }}assets/img/svg/close-icon.svg" alt="close-icon">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-wrapper">
                    <div class="form-container mb-4">
                        <label for="">Your API Key</label>
                        <input type="text" placeholder="Enter here">
                    </div>
                    <div class="form-container mb-4">
                        <label for="">Your Private Key</label>
                        <input type="text" placeholder="Enter here">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="secondary-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="primary-btn">Activate</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')



@endsection