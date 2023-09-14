<x-layout>
    @if (session('login_error'))
    <div class="alert alert-danger text-center">
        {{ session('login_error') }}
    </div>
    @endif
    <!-- Contact Start -->
    <div class="container pt-5">
        <div class="card">
            <div class="card-body border border-5">
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2">Register</span></h2>
                </div>
                <div class="row"  style="padding:0 300px;">
                    <div class="contact-form col-12">
                        <div id="success"></div>
                    <form method="POST" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            @error("name")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error("email")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                            @error("phone")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea cols="10" rows="2" name="address" class="form-control" id="address"></textarea>
                            @error("address")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            @error("password")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
</x-layout>