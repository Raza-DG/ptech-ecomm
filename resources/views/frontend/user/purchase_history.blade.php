@extends('frontend.layouts.user_panel')

@section('panel_content')

    <div class="woocommerce-notices-wrapper"></div>
    @if (count($orders) > 0)
        <table
            class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
            <thead>
                <tr>
                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span
                            class="nobr">{{ translate('Order') }}</span></th>

                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span
                            class="nobr">{{ translate('Date') }}</span></th>
                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span
                            class="nobr">{{ translate('Status') }}</span></th>
                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span
                            class="nobr">{{ translate('Total') }}</span></th>
                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span
                            class="nobr">{{ translate('Actions') }}</span></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $key => $order_id)
                    @php
                        $order = \App\Models\Order::find($order_id->id);
                    @endphp
                    @if ($order != null)
                        <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-pending order">
                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                                data-title="Order">
                                <a href="javascript:void(0)"
                                    onclick="show_purchase_history_details({{ $order->id }})">{{ $order->code }} </a>

                            </td>
                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date"
                                data-title="Date">
                                <time
                                    datetime="{{ date('d-m-Y H:i A', $order->date) }}">{{ date('d M Y', $order->date) }}</time>
                            </td>
                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status"
                                data-title="Status">
                                @if ($order->payment_status == 'paid')
                                    <span class="badge badge-inline badge-success">{{ translate('Paid') }}</span>
                                @else
                                    <span class="badge badge-inline badge-danger">{{ translate('Unpaid') }}</span>
                                @endif
                            </td>
                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                data-title="Total">
                                <span
                                    class="woocommerce-Price-amount amount">{{ single_price($order->grand_total) }}</span>
                                for {{ count($order->orderDetails->where('order_id', $order->id)) }} item
                            </td>
                            <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                data-title="Actions">
                                <a class="woocommerce-button button cancel"
                                    href="{{ route('invoice.download', $order->id) }}"
                                    title="{{ translate('Download Invoice') }}">
                                    <i class="las la-download"></i>
                                </a> <a href="javascript:void(0)"
                                    onclick="show_purchase_history_details({{ $order->id }})"
                                    class="woocommerce-button button view">View</a>
                                <a href="javascript:void(0)" data-href="{{ route('orders.destroy', $order->id) }}"
                                    title="{{ translate('Cancel') }}" class="woocommerce-button button cancel">Cancel</a>

                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination">
            {{ $orders->links() }}
        </div>
    @else
        <h3 align="center">No Order Found</h3>
    @endif

@endsection

@section('modal')
    @include('modals.delete_modal')

    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div id="payment_modal_body">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('#order_details').on('hidden.bs.modal', function() {
            location.reload();
        })
    </script>
@endsection
