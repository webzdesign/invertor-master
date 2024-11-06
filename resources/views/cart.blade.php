@extends('layouts.master')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('shop') }}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

  <!-- Shopping Cart Section Begin -->
  <section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $subtotal = 0;
                            @endphp
    
                            @if(isset($cart) && !empty($cart))
                               
                                @foreach($cart as $ck=>$cv)
                                
                                    <tr class="product{{$ck}}">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ $cv['image']}}" height = "100" width = "100" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{$cv['name']}}</h6>
                                                <h5>£{{ number_format($cv['price'], 2) }}</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input type="text" name='qty' id="qty" value="{{$cv['quantity']}}" data-pid="{{$ck}}" >
                                                    <input type="hidden" value="{{$ck}}"  id="pid" name="pid">
                                                </div>
                                            </div>
                                        </td>
                                        @php
                                            $total = $cv['price'] * $cv['quantity'];
                                            $subtotal = $subtotal + $total;
                                        @endphp
                                        <td class="cart__price">£{{ number_format($total, 2) }}</td>
                                        <td class="cart__close"><i class="fa fa-close remove" data-pid="{{$ck}}"></i></td>
                                    </tr>
                                @endforeach
                            @else
                            <tr >
                                <td colspan="3"><h6 class="coupon__code"><span class="icon_tag_alt"></span> Empty Cart! No products add to cart.</h6></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{ route('shop') }}">Continue Shopping</a>
                        </div>
                    </div>
                    @if(isset($cart) && !empty($cart))
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#" class="updateCart"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <!--<div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>-->
                @if(isset($cart) && !empty($cart))
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total <span>£{{ number_format($subtotal, 2) }}</span></li>
                            <!--<li>Total <span>$ 169.50</span></li>-->
                        </ul>
                        <!--<a href="{{ route('checkout') }}" class="primary-btn">Proceed to checkout</a>-->
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
@section('script')
<script>
$(document).ready(function(){
  
   
    $('body').on('click', '.updateCart', function(e){
        e.preventDefault();
      
        var productArr = $('input[name=qty]').map(function() {
            var pid = $(this).data("pid");
            var qty = this.value;
            var product = $(this).data("pid") +'-'+ this.value;
            return product;
        }).get();
        
        $.ajax({
            url: '{{ route("cart.sync") }}',
            type: 'POST',
            data: {
                productArr: productArr,
               
            },
            success: function(response) {
                if (response.success) {
                    var href = $('body').find('.cart-link').attr('href');
                    window.location.href = href;
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
        
        
    });

    $('body').on('click', '.remove', function(e){
        
        var element = '.product'+$(this).data("pid");
        var pid = $(this).data("pid");
       
        $.ajax({
            url: '{{ route("cart.remove") }}',
            type: 'POST',
            data: {
                pid: pid,
               
            },
            success: function(response) {
                if (response.success) {
                   
                    $(element).remove();
                }else{
                    var href = $('body').find('.cart-link').attr('href');
                    window.location.href = href;
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
        
        
    });
});
</script>
@endsection