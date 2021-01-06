@extends('layouts.admin')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.manageOrder.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-OfferProduct">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.bill_no') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.customer_id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.total_items') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.total_amount') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.total_delivery_amount') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.created_at') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.updated_at') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.manageOrder.fields.status') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($orderdata as $key => $order)
                                    <tr data-entry-id="{{ $order->id }}">
                                        <td>
                                            {{ $order->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->bill_no ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->customer_id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->total_item ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->total_amount ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->total_delivery_amount ?? '0' }}
                                        </td>
                                        <td>
                                            {{ $order->created_at ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->updated_at ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Order::ORDER_STATUS_SELECT[$order->order_status] ?? '' }}
                                        </td>
                                        <td>

                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.manage-orders.show', $order->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>


                                                <a class="btn btn-xs btn-info" href="{{ route('admin.manage-orders.edit', $order->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>


                                                <form action="{{ route('admin.manage-orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>

                                        </td>

                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('manage_orders_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.manage-orders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  let table = $('.datatable-Orders:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection