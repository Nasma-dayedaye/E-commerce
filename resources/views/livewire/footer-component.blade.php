<footer id="footer">
    <div class="wrap-footer-content footer-style-1">

        <div class="wrap-function-info">
            <div class="container">
                <ul>
                    <li class="fc-info-item">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">LIVRAISON OFFERTE</h4>
                            <p class="fc-desc">à partir 400 DH</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">GARANTIE PRODUITS</h4>
                            <p class="fc-desc">Remboursement possible</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name"> PAIEMENT 100% SÉCURISÉ</h4>
                            <p class="fc-desc">Nous sécurisons votre paiement</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">OFFRE EXCEPTIONNELLE</h4>
                            <p class="fc-desc">Seulement pour vous</p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <!--End function info-->
        <div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contactez-nous</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">{{$setting->address}}</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt">{{$setting->phone}}</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">{{$setting->email}}</p>
                                        </li>												
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item footer-item-second">
								<div class="newsletter">
									<div class="wrap-newletter-footer">
										<p>Sign Up for the <strong>NEWSLETTER</strong></p>
										<form>
										<input class="input" type="email" placeholder="Entez votre E-Mail">
										<button class="newsletter-btn"><i class="fa fa-envelope"></i> S'inscrire</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
							<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Nous utilisons des paiements sécurisés :</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{asset('assets2/img/payment.png')}}" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Réseau social</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>


        <div class="main-footer-content">

        <div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a></p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="/about-us" class="link-term">A propos de nous</a></li>	
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
    </div>
</footer>