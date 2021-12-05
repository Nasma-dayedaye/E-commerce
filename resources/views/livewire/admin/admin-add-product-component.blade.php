<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                             Ajouter un nouveau produit
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Tous les produits</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                       
                        <form class="form-horizontal" ectype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom du produit</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                    @error('name')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="slug"/>
                                    @error('slug')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Brève description</label>
                                <div class="col-md-4">
                                    <textarea type="richtext" placeholder="Short Description" class="form-control input-md" wire:model="short_description"></textarea>
                                    @error('short_description')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-4" >
                                    <textarea placeholder="Description" class="form-control" wire:model="description"></textarea>
                                    @error('description')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix </label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price"/>
                                    @error('regular_price')<p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix en solde</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price"/>
                                    @error('sale_price')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                    @error('SKU')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stocker</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">En stock</option>
                                        <option value="outofstock">En rupture de stock</option>
                                    </select>
                                    @error('stock_status')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">En vedette</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">Non</option>
                                        <option value="1">Oui</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantité</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                    @error('quantity')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image de produit</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image"/>
                                    @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                    @error('image')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Galerie de produits</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="images" multiple/>
                                    @if ($images)
                                        @foreach ($images as $image)
                                            <img src="{{$image->temporaryUrl()}}" width="120"/>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Catégorie</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')<p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                </div>
                            </div>
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>