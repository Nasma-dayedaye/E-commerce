<div>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Détails commandés
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('user.orders')}}" class="btn btn-success pull-right">Tous les commandes</a>
                            </div>
                        </div>
                    </div>
                <div class="panel-body">
                    <table class="table">
                        <th>Date de commande</th>
                        <td>{{$order->created_at}}</td>
                        <th>Statut</th>
                        <td>{{$order->status}}</td>
                        @if ($order->status == "delivered")
                            <th>La date de livraison</th>
                            <td>{{$order->delivered_date}}</td>
                        @elseif($order->status == "canceled")
                            <th>Date d'annulation</th>
                            <td>{{$order->canceled_date}}</td>
                       @endif
                    </table>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                            Articles commandés
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                            Articles commandés
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Nom de produit</h3>
                            <ul class="products-cart">
                                @foreach ($order->orderItems as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img
                                                src="{{ asset('assets/images/products') }}/{{$item->product->image}}"
                                                alt="{{$item->product->name}}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product"
                                            href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">{{$item->price}}DH</p>
                                    </div>
                                    <div class="quantity">
                                        <h5>{{$item->quantity}}</h5>
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">{{$item->price * $item->quantity}}DH</p>
                                    </div>

                                </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Récapitulatif de la commande</h4>
                                <p class="summary-info"><span class="title">Total</span><b
                                        class="index">{{$order->subtotal}}DH</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b
                                        class="index">{{$order->tax}}DH</b></p>
                                <p class="summary-info"><span class="title">Livraison</span><b class="index">Livraison gratuite</b></p>
                                <p class="summary-info"><span class="title">Total</span><b
                                        class="index">{{$order->total}}DH</b></p>




                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Détails de la facturation
                            </div>
                            <div class="panel-body">

                                <table class="table">
                                    <tr>
                                        <th>Prénom</th>
                                        <td>{{$order->firstname}}</td>
                                        <th>Nom</th>
                                        <td>{{$order->lastname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Téléphone</th>
                                        <td>{{$order->phone}}</td>
                                        <th>Email</th>
                                        <td>{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ligne 1</th>
                                        <td>{{$order->line1}}</td>
                                        <th>Ligne 2</th>
                                        <td>{{$order->line2}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ville</th>
                                        <td>{{$order->city}}</td>
                                        <th>Province</th>
                                        <td>{{$order->province}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pays</th>
                                        <td>{{$order->country}}</td>
                                        <th>Code Postal</th>
                                        <td>{{$order->zipcode}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($order->is_shipping_different)

                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Les détails d'expédition
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>Prénom</th>
                                        <td>{{$order->shipping->firstname}}</td>
                                        <th>Nom</th>
                                        <td>{{$order->shipping->lastname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Téléphone</th>
                                        <td>{{$order->shipping->phone}}</td>
                                        <th>Email</th>
                                        <td>{{$order->shipping->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ligne 1</th>
                                        <td>{{$order->shipping->line1}}</td>
                                        <th>Ligne 2</th>
                                        <td>{{$order->shipping->line2}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ville</th>
                                        <td>{{$order->shipping->city}}</td>
                                        <th>Province</th>
                                        <td>{{$order->shipping->province}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pays</th>
                                        <td>{{$order->shipping->country}}</td>
                                        <th>Code Postal</th>
                                        <td>{{$order->shipping->zipcode}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Transaction
                            </div>
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <th>Transaction Mode</th>

                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <th>Transaction Date</th>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>