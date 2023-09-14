<x-layout>
    @if (session('login_error'))
    <div class="alert alert-danger text-center">
        {{ session('login_error') }}
    </div>
    @endif
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card my-5 py-5 px-3 shadow-sm">
                    <div class="card-header bg-primary border border-0 mb-5"><h3 class="text-center text-white">Login</h3></div>
                    <form method="POST" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error("email")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            @error("password")
                                <li class="text-danger">{{$message}}</li>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact Start -->
    <div class="container pt-5">
        <div class="card">
            <div class="card-body border border-5">
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2">Login</span></h2>
                </div>
                <div class="row"  style="padding:0 300px;">
                    <div class="contact-form col-12">
                        <div id="success"></div>
                        <form method="POST" action="">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error("email")
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
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-layout>