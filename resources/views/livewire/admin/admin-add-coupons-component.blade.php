<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                             Ajouter un nouveau coupon
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">Tous les coupons</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeCoupon">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Code de coupon</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Code coupon" class="form-control input-md" wire:model="code"/>
                                    @error('code')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Type de coupon</label>
                                <div class="col-md-4">
                                   <select class="form-control" wire:model="type">
                                        <option value="">Sélectionner</option>
                                        <option value="fixed">Fixée</option>
                                        <option value="percent">pourcentage</option>
                                   </select>
                                   @error('type')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Valuer de coupon</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Coupon valeur" class="form-control input-md" wire:model="value"/>
                                    @error('value')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Valeur du panier</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Panier valeur" class="form-control input-md"wire:model="cart_value" />
                                    @error('cart_value')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date d'expiration</label>
                                <div class="col-md-4" wire:ignore>
                                    <input type="text" id="expiry-date"placeholder="date d'expiration" class="form-control input-md" wire:model="expiry_date"/>
                                    @error('expiry_date')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" >Soumettre</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change',function(ev){
                var data = $('#expiry-date').val();
                @this.set('expiry_date' ,data);
            });
        });
    </script>    
@endpush
