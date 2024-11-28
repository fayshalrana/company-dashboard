<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UIController extends Controller
{
    // Common Components
    public function commonComponents() {
        return view('index');
    }
    

    public function dashboardController() {
        return view('.dashboard');
    }

    public function userMgmtController() {
        return view('user-mgmt');
    }

    public function gatewayMgmtController() {
        return view('gateway-mgmt');
    }

    public function transactionController() {
        return view('transaction');
    }

    public function subscriptionController() {
        return view('subscription');
    }

    public function settlementsController() {
        return view('settlements');
    }

    public function profileController() {
        return view('profile');
    }
    
    // Component template
    public function sidebarComp() {
        return view('sidebar-template');
    }

}