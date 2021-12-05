<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">Accueil</a></li>
                <li class="item-link"><span>Confirmation</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
        <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-address-billing">
                    <h3 class="box-title">Adresse de facturation</h3>
                    <div class="billing-address">
                    <p class="row-in-form">
                            <label for="fname">Prénom :<span>*</span></label>
                            <input  type="text" name="fname" value="" placeholder="Votre prénom" wire:model="firstname">
                            @error('firstname')<p class="text-danger">{{$message}}</p>@enderror
                        </p>
                        <p class="row-in-form">
                            <label for="lname">Nom :<span>*</span></label>
                            <input  type="text" name="lname" value="" placeholder="Votre nom" wire:model="lastname">
                            @error('lastname')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        <p class="row-in-form">
                            <label for="email">Email :</label>
                            <input  type="email" name="email" value="" placeholder="Entrez votre email" wire:model="email">
                            @error('email')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        <p class="row-in-form">
                            <label for="phone">Numéro de téléphone :<span>*</span></label>
                            <input  type="number" name="phone" value="" placeholder="" wire:model='mobile'>
                            @error('mobile')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        <p class="row-in-form">
                            <label for="add">Ligne 1 :</label>
                            <input  type="text" name="add" value="" placeholder="" wire:model='line1'>
                            @error('line1')<p class="text-danger">{{$message}}</p>@enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Ligne 2 :</label>
                            <input  type="text" name="add" value="" placeholder="" wire:model='line2'>
                        </p>
                        <p class="row-in-form">
                            <label for="country">Pays :<span>*</span></label>
                            <input  type="text" name="country" value="" placeholder="Maroc" wire:model='country'>
                            @error('country')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        
                        <p class="row-in-form">
                            <label for="city">Province :<span>*</span></label>
                            <input  type="text" name="province" value="" placeholder="province" wire:model='province'>
                            @error('province')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        <p class="row-in-form">
                            <label for="city">Ville :<span>*</span></label>
                            <input  type="text" name="city" value="" placeholder="CasaBlanca" wire:model='city'>
                            @error('city')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        <p class="row-in-form">
                            <label for="zip-code">Code postal :</label>
                            <input  type="number" name="zip-code" value="" placeholder="votre code postam" wire:model='zipcode'>
                            @error('zipcode')<p class="text-danger">{{$message}}</p>@enderror

                        </p>
                        <p class="row-in-form fill-wife">
                            <label class="checkbox-field">
                                <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                <span>Livrer à une adresse différente ?</span>
                            </label>
                        </p>
                    </div>
                </div>
            </div>

            @if ($ship_to_different)
             <div class="wrap-address-billing">
                <h3 class="box-title">Adresse de livraison</h3>
                <div class="billing-address">
                <p class="row-in-form">
                        <label for="fname">Prénom :<span>*</span></label>
                        <input  type="text" name="fname" value="" placeholder="Votre prénom" wire:model='s_firstname'>
                        @error('s_firstname')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="lname">Nom :<span>*</span></label>
                        <input  type="text" name="lname" value="" placeholder="Votre Nom" wire:model='s_lastname'>
                        @error('s_lastname')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="email">Email :</label>
                        <input  type="email" name="email" value="" placeholder="Entrez votre email" wire:model='s_email'>
                        @error('s_email')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="phone">Numéro de téléphone : <span>*</span></label>
                        <input  type="number" name="phone" value="" placeholder="" wire:model='s_mobile'>
                        @error('s_mobile')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="add">Ligne 1:</label>
                        <input  type="text" name="add" value="" placeholder="" wire:model='s_line1'>
                        @error('s_line1')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="add">Ligne 2:</label>
                        <input  type="text" name="add" value="" placeholder="" wire:model='s_line2'>
                        
                    </p>
                    <p class="row-in-form">
                        <label for="country">Pays<span>*</span></label>
                        <input  type="text" name="country" value="" placeholder="Maroc" wire:model='s_country'>
                        @error('s_country')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="city">Province<span>*</span></label>
                        <input  type="text" name="province" value="" placeholder="Province" wire:model='s_province'>
                        @error('s_province')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="city">Ville<span>*</span></label>
                        <input  type="text" name="city" value="" placeholder="CasaBlanca" wire:model='s_city'>
                        @error('s_city')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                    <p class="row-in-form">
                        <label for="zip-code">Code postal:</label>
                        <input  type="number" name="zip-code" value="" placeholder="votre code postal" wire:model='s_zipcode'>
                        @error('s_zipcode')<p class="text-danger">{{$message}}</p>@enderror

                    </p>
                </div>
            </div>
            @endif


        </div>
            
        <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Mode de paiement</h4>
                    <p class="summary-info"><span class="title">Chéque/Mandat</span></p>
                    <p class="summary-info"><span class="title">Carte de crédit (Enregistrée)</span></p>
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model='paymentmode'>
                            <span>Paniement à la livraison</span>
                            <span class="payment-desc">Commandez maintenant Payez à la livraison</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model='paymentmode'>
                            <span>Débit / Carte de crédit</span>
                            <span class="payment-desc"></span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model='paymentmode'>
                            <span>Paypal</span>
                            <span class="payment-desc">Vous pouvez payer avec votre crédit</span>
                            <span class="payment-desc">carte si vous n'avez pas de compte paypal</span>
                        </label>
                        @error('paymentmode')<p class="text-danger">{{$message}}</p>@enderror

                    </div>
                    @if (Session::has('checkout'))
                        <p class="summary-info grand-total"><span>Total</span> <span class="grand-total-price">{{Session::get('checkout')['total']}}Dh</span></p>
                    @endif

                    @if ($errors->isEmpty)
                    <div wire:ignore id="processing" style="font-size:22px; margin-botton:20px;padding-left:37px;color:green;display:none;">
                        <i class="fa fa-spinner fa-pulse fa-fw"></i>
                        <span>Traitement...</span>
                    </div>
                    @endif

                    <button type="submit" class="btn btn-medium">Faites votre commande maintenant</button>
                </div>
               
            </div>

           
        </form>
        </div><!--end main content area-->
    </div><!--end container-->

</main>