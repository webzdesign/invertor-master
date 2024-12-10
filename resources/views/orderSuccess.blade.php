
@extends('layouts.master')

@section('content')
<style>
.thankSec h2{
font-size:45px;
margin:30px 0 20px;
}
.thankSec h3{
font-size:23px;
}
.thankSec{
    /* margin: auto; */
    display: table;
    text-align: center;
    padding: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: calc(100vh - 105px);
}
.thankSec a{
margin-top:20px;
}
.thankSec .path {
stroke-dasharray: 1000;
stroke-dashoffset: 0;
}
.thankSec .path .circle {
animation: dash 1.5s ease-in-out;
}
.thankSec .path .check {
stroke-dasharray: 700;
animation: dash-check 1s ease-in-out forwards;
}
@keyframes dash{
0% {
stroke-dashoffset: 1000;
}
100% {
stroke-dashoffset: 0;
}
}

@keyframes dash-check{
0% {
stroke-dashoffset: 700;
}
100% {
stroke-dashoffset: 1400;
}
}

.thankSec table {
border-collapse: collapse;
width: 100%;
}

.thankSec td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}
.thankSec .productTable{
    margin: 12px 0;
    max-width:600px;
    width: 100%;
}
.thankSec th{
    font-weight: 600;
}
</style>
<div class="container">
    <div class="thankSec">
        <svg width="70px" height="70px" class="success" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1233.000000, -901.000000)" stroke="#34D183" stroke-width="4">
                    <g transform="translate(1237.000000, 905.000000)" class="path circle">
                        <circle class="path circle" cx="32" cy="32" r="32"></circle>
                        <polyline class="path check" points="48 22.7096774 26.6484279 42.3225806 15.483871 31.5557034">
                        </polyline>
                    </g>
                </g>
            </g>
        </svg>
        <h2>Thank You.</h2>
        <h3>Your order place successfully!</h3>
        <h3 class="f-23 f-400 mb-4">Order ID : <b>{{ $order->order_no }}</b>.</h3>
        <div class="productTable">
            <div class="table-responsive">
                <table>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Amount</th>
                    </tr>
                    @foreach ($order->items as $orderItem)
                        <tr>
                            <td><div>{{ $orderItem->product->name }}</div></td>
                            <td>{{ $orderItem->qty }}</td>
                            <td>{{ '£'.number_format($orderItem->price, 2) }}</td>
                            <td>{{ '£'.number_format($orderItem->amount, 2) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" style="text-align: right;"><b>Total<b></td>
                        <td>{{ '£'.number_format($order->total(), 2) }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <a href="{{ route('shop') }}">
            <button type="submit" class="site-btn button-dark">Shop</button>
        </a>
    </div>
</div>
@endsection