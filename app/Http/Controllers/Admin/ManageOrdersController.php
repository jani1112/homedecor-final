<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Order;

class ManageOrdersController extends Controller
{
    use MediaUploadingTrait;

    private $title = 'Orders';
    public function index()
    {
        abort_if(Gate::denies('manage_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderdata = Order::all();
        
        return view('admin.manageOrders.index',['title' => $this->title],compact('orderdata'));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back();
    }
}
