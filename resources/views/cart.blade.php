<x-layout>
    <!-- Cart Start -->
    {{-- @dd($carts) --}}
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Menus</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @if ($carts->count() > 0)
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="align-middle"><img src="{{ asset('/storage/'.$cart->image) }}" alt="{{ $cart->menu_name }}" style="width: 50px;"><br />
                                        {{ $cart->menu_name }}
                                    </td>
                                    <td class="align-middle">{{ $cart->category_name }}</td>
                                    <td class="align-middle price" data-price="{{ $cart->price }}">{{ $cart->price }} MMK</td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            {{-- <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-minus btn-cart" data-size="decrease" data-cart-id="{{ $cart->id }}" data-noofquantity="{{ $cart->quantity }}">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </div> --}}
                                            {{-- <input type="text" class="form-control form-control-sm bg-secondary text-center noofquantity" value="{{ $cart->quantity }}"> --}}
                                            <div class="form-control form-control-sm bg-secondary text-center noofquantity">
                                                {{ $cart->quantity }}
                                            </div>
                                            {{-- <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary btn-plus btn-cart" data-size="increase" data-cart-id={{ $cart->id }}" data-noofquantity="{{ $cart->quantity }}">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div> --}}
                                        </div>
                                    </td>
                                    <td class="align-middle totalprice">{{ $cart->quantity * $cart->price }} MMK</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-primary removebtn" data-cart-id={{ $cart->id }}"><i class="fa fa-times"></i></button></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan=7>
                                    Cart is Empty. <br />
                                    <a href="menu_list.php" class="btn btn-primary">Go to Shop</a>
                                </td>
                            </tr>
                        @endif
                        
                        
                            
                        
                </table>
            </div>
            {{-- Cart Summary --}}
            {{-- <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><?php echo $subtotal; ?> MMK</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium"><?php echo $shipping_fees; ?> MMK</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?php echo $grandtotal; ?> MMK</h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Cart End -->
</x-layout>