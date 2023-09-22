<x-layout>
    <!-- Page Header End -->
    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Our Categories</h5>
                    @foreach ($categories as $key => $category)
                    <div class="form-group">
                        {{-- <input type="radio" name="category_id" id="category" class="categories" value="{{$category}}"> --}}
                        <label for="category" class="search-label">{{ $category->name }}</label>
                    </div>
                    @endforeach
                    
                    
                </div>
                <!-- Price End -->
            </div>
            <!-- Shop Sidebar End -->
            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                {{-- <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by name" id="search-name">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row pb-3" id="search-data">
                    @foreach ($menus as $menu)
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img src="{{ asset("/storage/$menu->image") }}" alt="{{ $menu->image }}" width="100%" height="200px">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{ $menu->name }}</h6>
                                <div class="justify-content-center">
                                    <h6>{{ $menu->price }} MMK</h6>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <p class="btn btn-sm text-dark p-0">
                                        <i class="fas fa-list-alt text-primary mr-1"></i>
                                        {{ $menu->category->name }}
                                    </p>
                                    <a class="btn btn-sm text-dark p-0" data-toggle="modal" data-target="#cartModal">
                                        <i class="fas fa-shopping-cart text-primary mr-1"></i>
                                        Add To Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-12 pb-1">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-3" id="page-data">
                            {{ $menus->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>                               
        <!-- Shop End -->
        <!-- Cart Modal -->
        <div class="modal fade" id="cartModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title float-left">Add to cart</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="special_note">Special Note</label>
                                <textarea name="special_note" class="form-control" id="special_note" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="image" id="image">
                        <input type="hidden" name="menu_name" id="menu_name">
                        <input type="hidden" name="price" id="price">
                        <input type="hidden" name="category_name" id="category_name">
                        <input type="hidden" name="menu_id" id="menu_id">
                    </div>
                    <div class="modal-footer">
                        <button onclick="shoppingcart()" class="btn btn-primary" data-dismiss="modal" name="btnaddtocart">Add to Cart</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
    </x-layout>