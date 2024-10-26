
@extends('layouts.checkoutMaster')

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
color: white;
}
.thankSec .productTable{
    margin: 12px 0;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
.thankSec th{
    font-weight: 500;
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
        <a href="{{ route('home') }}" class="btn btn-success">
            <button id="checkout-pay-button" type="submit" class="_1m2hr9ge _1m2hr9gd _1fragemsq _1fragemlj _1fragemnk _1fragem2i _1fragems4 _1fragemsg _1fragemsl _1fragemsa _1m2hr9g1h _1m2hr9g1d _1fragemne _1m2hr9g16 _1m2hr9g13 _1fragemop _1fragemon _1fragemor _1fragemol _1fragempl _1fragemph _1fragempp _1fragempd _1fragemb4 _1fragemaf _1fragembt _1fragem9q _1fragemsa _1m2hr9g1q _1m2hr9g1o _1m2hr9g10 _1m2hr9gx _1m2hr9g12 _1m2hr9g11 _1fragemri _1m2hr9g1b _1m2hr9g19 _1fragems5" style="background-color: rgb(34,36,38);padding: 7px 40px 9px;"><span class="_1m2hr9gr _1m2hr9gq _1fragems0 _1fragemsf _1fragems9 _1fragemsm _1m2hr9gn _1m2hr9gl _1fragem28 _1fragem6t _1fragems2"><span class="_19gi7yt0 _19gi7yt10 _19gi7ytz _1fragemnw">Shop</span></span></button>
        </a>
    </div>
</div>
@endsection