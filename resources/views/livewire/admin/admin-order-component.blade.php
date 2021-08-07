<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders
                    </div>
                    <div class="panel-body">
                        @if(Session::has('order_message'))
                        <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <th>Order Id</th>
                                <th>Subtotal</th>
                                <th>Discount</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>ZipCode</th>
                                <th>Status</th>
                                <th>Order Date</th>
                                <th colspan="2" class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>Rs. {{$order->subtotal}}</td>
                                    <td>Rs. {{$order->discount}}</td>
                                    <td>Rs. {{$order->tax}}</td>
                                    <td>Rs. {{$order->total}}</td>
                                    <td>{{$order->firstname}}</td>
                                    <td>{{$order->lastname}}</td>
                                    <td>{{$order->mobile}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->zipcode}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}"
                                            class="btn btn-info btn-sm">Details</a></td>
                                    <td>
                                        @if($order->status !== 'delivered' && $order->status !== 'cancelled')


                                        <div class="dropdown">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                                Status
                                                <span class="caret"></span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"
                                                        wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delievered</a>
                                                </li>
                                                <li><a href="#"
                                                        wire:click.prevent="updateOrderStatus({{$order->id}},'cancelled')">Cancelled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>