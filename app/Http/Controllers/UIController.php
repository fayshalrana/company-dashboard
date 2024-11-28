<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UIController extends Controller
{
    // Common Components
    public function commonComponents() {
        return view('ui.index');
    }
    
    // Page
    public function welcome() {
        return view('welcome');
    }

    public function dashboardController() {
        return view('ui.dashboard');
    }

    public function userMgmtController() {
        return view('ui.user-mgmt');
    }

    public function gatewayMgmtController() {
        return view('ui.gateway-mgmt');
    }

    public function transactionController() {
        return view('ui.transaction');
    }

    public function subscriptionController() {
        return view('ui.subscription');
    }

    public function settlementsController() {
        return view('ui.settlements');
    }

    public function profileController() {
        return view('ui.profile');
    }
    
    // Component template
    public function sidebarComp() {
        return view('ui.sidebar-template');
    }

}