<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Accueil</a></li>
                <li class="item-link"><span>Panier</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            @if (Cart::instance('cart')->count() > 0)
            <div class="wrap-iten-in-cart">
                @if (Session::has('success_message'))
                    <div class="alert alert-success">
                        <strong>Success</strong> {{Session::get('success_message')}}
                    </div>                    
                @endif
                @if (Cart::instance('cart')->count() > 0)
                <h3 class="box-title">Nom des produits</h3>
                <ul class="products-cart">
                    @foreach (Cart::instance('cart')->content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                        </div>
                        <div class="price-field produtc-price"><p class="price">{{$item->model->regular_price}}DH</p></div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total"><p class="price">{{$item->subtotal}}DH</p></div>
                        <div class="delete">
                            <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                                <span>Supprimer de votre panier</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>	
                    @endforeach											
                </ul>
                @else
                    <p>Aucun article dans le panier </p>
                @endif
            </div>
            

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Récapitulatif de la commande</h4>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">{{Cart::instance('cart')->subtotal()}}DH</b></p>
                    @if(Session::has('coupon'))
                    <p class="summary-info"><span class="title">Réduction ({{Session::get('coupon')['code']}})<a href="#" wire:click.prevent= "removeCoupon"><i class="fa fa-times text-danger"></i></a></span><b class="index"> - {{number_format($discount,2)}}DH</b></p>
                    <p class="summary-info"><span class="title">Total avec réduction</span><b class="index">{{number_format($subtotalAfterDiscount,2)}}DH</b></p>
                    <p class="summary-info"><span class="title">Tax ({{config('cart.tax')}}%)</span><b class="index">{{number_format($taxAfterDiscount,2)}}DH</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">{{number_format($totalAfterDiscount,2)}}DH</b></p>
                    @else
                        <p class="summary-info"><span class="title">Tax</span><b class="index">{{Cart::instance('cart')->tax()}}DH</b></p>
                        <p class="summary-info"><span class="title">Expédition</span><b class="index">Livraison Gratuite</b></p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">{{Cart::instance('cart')->total()}}DH</b></p>
                    @endif    
                </div>
               
                    <div class="checkout-info">
                         @if(!Session::has('coupon'))
                        <label class="checkbox-field">
                            <input class="frm-input " name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode"><span>j'ai un code coupon</span>
                        </label>
                        @if($haveCouponCode == 1)
                            <div class="summary-item">
                                <form wire:submit.prevent="applyCouponCode">
                                    <h4 class="title-box">Code coupon</h4>
                                    @if(Session::has('coupon_message'))
                                        <div class="alert alert-danger" role="danger">{{Session::get('coupon_message')}}</div>
                                    @endif
                                    <p class="row-in-form">
                                        <label for="coupon-code">Entrez ton code coupon:</label>
                                        <input type="text" name="coupon-code" wire:model="couponCode" />
                                    </p>
                                    <button type="submit" class="btn btn-small">Appliquer</button>
                                </form>
                            </div>
                        @endif
                         @endif
                    <a class="btn btn-checkout" href="#"  wire:click.prevent="checkout">Finaliser votre commande</a>
                    <a class="link-to-shop" href="shop.html">Continuer vos achats<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Vider le panier</a>
                    <a class="btn btn-update" href="#">Mettre à jour au panier</a>
                </div>
            </div>

            @else
                <div class="text-center" style="padding: 30px 0;">
                    <h1>Votre panier est vide!</h1>
                    <p>Ajouter un élément maintenat</p>
                    <a href="/shop" class="btn btn-success">Achetez maintenant</a>
                </div>
            @endif
         

        </div><!--end main content area-->
    </div><!--end container-->

</main>