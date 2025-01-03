@extends('frontend.layout.main')
@section('content')


<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            Wishlist
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index-2.html">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Shopping Cart
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="shop-wishlist">	
                            <table class="wishlist-items">                            
                                <tbody>
                                    <tr class="wishlist-item">
                                        <td class="wishlist-item-remove"><span></span></td>
                                        <td class="wishlist-item-image">
                                            <a href="shop-details.html">
                                                <img width="600" height="600" src="{{url('media/product/3.jpg')}}" alt="">
                                            </a>
                                           </td>
                                        <td class="wishlist-item-info">
                                            <div class="wishlist-item-name">
                                                <a href="shop-details.html">Twin Hoops</a>
                                            </div>
                                            <div class="wishlist-item-price">
                                                <span>$150.00</span>
                                            </div>
                                            <div class="wishlist-item-time">June 6, 2022</div>
                                        </td>
                                        <td class="wishlist-item-actions">
                                            <div class="wishlist-item-stock">
                                                In stock                                    
                                            </div>
                                            <div class="wishlist-item-add">
                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                    <a rel="nofollow" href="{{ 'cart' }}" class="product-btn">Add to cart</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="wishlist-item">
                                        <td class="wishlist-item-remove"><span></span></td>
                                        <td class="wishlist-item-image">
                                            <a href="shop-details.html">
                                                <img width="600" height="600" src="{{url('media/product/4.jpg')}}" alt="">
                                            </a>
                                           </td>
                                        <td class="wishlist-item-info">
                                            <div class="wishlist-item-name">
                                                <a href="shop-details.html">Yilver And Turquoise Earrings</a>
                                            </div>
                                            <div class="wishlist-item-price">
                                                <del aria-hidden="true"><span>$150.00</span></del> 
                                                <ins><span>$100.00</span></ins>
                                            </div>
                                            <div class="wishlist-item-time">June 6, 2022</div>
                                        </td>
                                        <td class="wishlist-item-actions">
                                            <div class="wishlist-item-stock">
                                                In stock                                    
                                            </div>
                                            <div class="wishlist-item-add">
                                                <div class="btn-add-to-cart" data-title="Add to cart">
                                                    <a rel="nofollow" href="{{ 'cart'}}" class="product-btn">Add to cart</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>


@endsection
