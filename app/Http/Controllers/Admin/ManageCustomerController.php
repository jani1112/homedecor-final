<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageCustomerController extends Controller
{
    private $title = 'Manage Customers';
    public function index()
    {
        abort_if(Gate::denies('manage_customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.manageCustomers.index',['title' => $this->title]);
    }
}
