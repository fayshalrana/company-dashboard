<div class="smoothsWipe-table">
    <div class="smoothsWipe-table-header">
        <div class="smooth-left">
            <h4 class="mb-0">Processing</h4>
            <div class="form-container">
                <div class="select-wrapper ssth-select-wrapper">
                    <div class="select-container mul mul-in">
                        <select class="form-select-multiple" id="tsd-select" name="item-select" placeholder="Select Item" multiple>
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
                <button class="filter-dropdown-btn dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{URL::asset('assets/img/svg/filter-lines.svg')}}" alt="">
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
                    <th>Name</th>
                    <th class="th-d-none">Email</th>
                    <th class="th-d-none">Gateway</th>
                    <th class="th-d-none">Class</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td class="tdd-container">
                    <div class="td-show-btn">
                        <button class="td-d-show">
                            <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                            <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                        </button> 
                        <span>54546832</span>
                    </div>
                    <div class="td-show-details">
                        <ul>
                            <li><label>Name</label> <div class="tdDetail"><strong>Brooklyn Simmons</strong></div></li>
                            <li><label>Email</label> <div class="tdDetail">bill.sanders@example.com</div></li>
                            <li><label>Gateway</label> <div class="tdDetail">Paypal</div></li>
                            <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                        </ul>
                    </div>
                    </td>
                    <td class="sc-show"><a href="#">Brooklyn Simmons</a></td>
                    <td class="td-d-none">bill.sanders@example.com</td>
                    <td class="td-d-none">Paypal</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                                <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                            </button> <span>54546924</span>
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Name</label> <div class="tdDetail"><strong>Jane Cooper</strong></div></li>
                                <li><label>Email</label> <div class="tdDetail">tanya.hill@example.com</div></li>
                                <li><label>Gateway</label> <div class="tdDetail">Paypal</div></li>
                                <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                            </ul>
                        </div>
                    </td>
                    <td class="sc-show"><a href="#">Jane Cooper</a></td>
                    <td class="td-d-none">tanya.hill@example.com</td>
                    <td class="td-d-none">Paypal</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                                <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                            </button> <span>54547023</span>
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Name</label> <div class="tdDetail"><strong>Eleanor Pena</strong></div></li>
                                <li><label>Email</label> <div class="tdDetail">nathan.roberts@example.com</div></li>
                                <li><label>Gateway</label> <div class="tdDetail">Stripe</div></li>
                                <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                            </ul>
                        </div>
                    </td>
                    <td class="sc-show"><a href="#">Eleanor Pena</a></td>
                    <td class="td-d-none">nathan.roberts@example.com</td>
                    <td class="td-d-none">Stripe</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                                <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                            </button> <span>54547124</span>
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Name</label> <div class="tdDetail"><strong>Cody Fisher</strong></div></li>
                                <li><label>Email</label> <div class="tdDetail">dolores.chambers@example.com</div></li>
                                <li><label>Gateway</label> <div class="tdDetail">Stripe</div></li>
                                <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                            </ul>
                        </div>
                    </td>
                    <td class="sc-show"><a href="#">Cody Fisher</a></td>
                    <td class="td-d-none">dolores.chambers@example.com</td>
                    <td class="td-d-none">Stripe</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                    <div class="td-show-btn">
                        <button class="td-d-show">
                            <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                            <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                        </button> 
                        <span>54546832</span>
                    </div>
                    <div class="td-show-details">
                        <ul>
                            <li><label>Name</label> <div class="tdDetail"><strong>Brooklyn Simmons</strong></div></li>
                            <li><label>Email</label> <div class="tdDetail">bill.sanders@example.com</div></li>
                            <li><label>Gateway</label> <div class="tdDetail">Paypal</div></li>
                            <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                        </ul>
                    </div>
                    </td>
                    <td class="sc-show"><a href="#">Brooklyn Simmons</a></td>
                    <td class="td-d-none">bill.sanders@example.com</td>
                    <td class="td-d-none">Paypal</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                                <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                            </button> <span>54546924</span>
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Name</label> <div class="tdDetail"><strong>Jane Cooper</strong></div></li>
                                <li><label>Email</label> <div class="tdDetail">tanya.hill@example.com</div></li>
                                <li><label>Gateway</label> <div class="tdDetail">Paypal</div></li>
                                <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                            </ul>
                        </div>
                    </td>
                    <td class="sc-show"><a href="#">Jane Cooper</a></td>
                    <td class="td-d-none">tanya.hill@example.com</td>
                    <td class="td-d-none">Paypal</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                                <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                            </button> <span>54547023</span>
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Name</label> <div class="tdDetail"><strong>Eleanor Pena</strong></div></li>
                                <li><label>Email</label> <div class="tdDetail">nathan.roberts@example.com</div></li>
                                <li><label>Gateway</label> <div class="tdDetail">Stripe</div></li>
                                <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                            </ul>
                        </div>
                    </td>
                    <td class="sc-show"><a href="#">Eleanor Pena</a></td>
                    <td class="td-d-none">nathan.roberts@example.com</td>
                    <td class="td-d-none">Stripe</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
                <tr>
                    <td class="tdd-container">
                        <div class="td-show-btn">
                            <button class="td-d-show">
                                <img src="{{URL::asset('assets/img/svg/chevron-upt.svg')}}" class="tsb-right-arrow" alt="">
                                <img src="{{URL::asset('assets/img/svg/chevron-upd.svg')}}" class="tsb-down-arrow" alt="">
                            </button> <span>54547124</span>
                        </div>
                        <div class="td-show-details">
                            <ul>
                                <li><label>Name</label> <div class="tdDetail"><strong>Cody Fisher</strong></div></li>
                                <li><label>Email</label> <div class="tdDetail">dolores.chambers@example.com</div></li>
                                <li><label>Gateway</label> <div class="tdDetail">Stripe</div></li>
                                <li><label>Class</label> <div class="tdDetail">Transaction</div></li>
                            </ul>
                        </div>
                    </td>
                    <td class="sc-show"><a href="#">Cody Fisher</a></td>
                    <td class="td-d-none">dolores.chambers@example.com</td>
                    <td class="td-d-none">Stripe</td>
                    <td class="td-d-none">Transaction</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="smoothsWipe-table-footer">
        <div class="page-total-dd dropdown">
            <div class="page-total" id="dropdownMenuButton"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>1-10</span> <span>of 240</span>
            </div>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li>
                    <a class="dropdown-item" href="#">Ascending Order</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Descending Order</a>
                </li>
                <li><hr class="dropdown-divider"></li>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M11 4.44031L11 11.9597C11 12.3789 10.515 12.612 10.1877 12.3501L5.48804 8.59043C5.23784 8.39027 5.23784 8.00973 5.48804 7.80956L10.1877 4.04988C10.515 3.78797 11 4.02106 11 4.44031Z" fill="url(#paint0_linear_9183_71407)"/>
                        </svg>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5 4.44031L5 11.9597C5 12.3789 5.48497 12.612 5.81235 12.3501L10.512 8.59043C10.7622 8.39027 10.7622 8.00973 10.512 7.80956L5.81235 4.04988C5.48497 3.78797 5 4.02106 5 4.44031Z" fill="url(#paint0_linear_9183_71407)"/>
                        <defs>
                        <linearGradient id="paint0_linear_9183_71407" x1="5.3" y1="12.4" x2="13.0795" y2="7.67103" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5B8EE6"/>
                        <stop offset="1" stop-color="#712DA7"/>
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
                <img src="{{URL::asset('assets/img/svg/empty-state.svg')}}" alt="empty-state">
            </div>
            <p>It looks like you don’t have
                any processing yet.</p>
        </div>
</div>
