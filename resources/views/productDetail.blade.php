@extends('layouts.master')

@section('content')
   <!-- Shop Details Section Begin -->
   <section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('shop') }}">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            @foreach ($product->images as $imageKey => $image)
                                @if($imageKey == 0)
                                <a class="nav-link active" data-toggle="tab" href="#tabs-{{$imageKey}}" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}">
                                    </div>
                                </a>
                                @else
                                <a class="nav-link" data-toggle="tab" href="#tabs-{{$imageKey}}" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}">
                                    </div>
                                </a>
                                @endif
                            @endforeach
                        </li>
                      
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        @foreach ($product->images as $imageKey => $image)
                            @if($imageKey == 0)
                            <div class="tab-pane active" id="tabs-{{$imageKey}}" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}" alt="">
                                </div>
                            </div>
                            @else
                            <div class="tab-pane" id="tabs-{{$imageKey}}" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ env('APP_Image_URL').'storage/product-images/'.$image->name }}" alt="">
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4>{{ $product->name }}</h4>
                        
                        <h3>£{{ number_format($product->web_sales_price, 2) }} <!--<span>70.00</span>--></h3>
                        <p>{{ $product->description }}</p>
                       
                        <div class="product__details__cart__option">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1"  id="qty">
                                    
                                </div>
                            </div>
                            <input type="hidden" value="{{ encrypt($product->id)}}"  id="pid">
                            <a href="#" class="primary-btn AddToCartBtn">add to cart</a>
                        </div>
                     
                      
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Related Product</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($othersProducts as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                       
                            <a  href="{{ route('productDetail', encrypt($product->id)) }}"><div class="product__item__pic set-bg" data-setbg="{{ env('APP_Image_URL').'storage/product-images/'.$product->images->first()->name }}"></div></a>
                           
                        <div class="product__item__text">
                            <h6>{{ $product->name }}</h6>
                            <a href="#" class="add-cart AddToCartBtn1" data-pid="{{encrypt($product->id)}}">Add To Cart</a>
                            
                            <h5>£{{ number_format($product->web_sales_price, 2) }}</h5>
                        
                        </div>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>
</section>
<!-- Related Section End -->
@endsection

@section('script')
<script>
$(document).ready(function(){
   
    $('body').on('click', '.AddToCartBtn', function(e){
        
        e.preventDefault();
        const productId = $('#pid').val();;
        var quantity = $('#qty').val();;
        
        $.ajax({
            url: '{{ route("cart.add") }}',
            type: 'POST',
            data: {
                productId: productId,
                quantity: quantity,
            },
            success: function(response) {
                if (response.success) {
                 
                    $('body').find('.cartCount').text(response.cartCount);
                    var href = $('body').find('.cart-link').attr('href');
                    window.location.href = href;
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
               
            }
        });
        
    });

    $('body').on('click', '.AddToCartBtn1', function(e){
      
        e.preventDefault();
        var pid = $(this).data("pid");
        var quantity = 1;
       
        $.ajax({
            url: '{{ route("cart.add") }}',
            type: 'POST',
            data: {
                productId: pid,
                quantity: quantity,
            },
            success: function(response) {
                if (response.success) {
                  
                    $('body').find('.cartCount').text(response.cartCount);
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