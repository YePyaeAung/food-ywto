<x-layout>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 410px;">
                    <img class="img-fluid" src="assets/img/banner1.jpg" alt="Image">
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="assets/img/banner2.jpg" alt="Image">
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="assets/img/banner3.png" alt="Image">
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            @auth
                <a class="btn btn-primary my-5" href="/menus" style="margin-left: 46%; padding-top: -50%">See More</a>
            @endauth
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    @auth
    <div style="margin-top: -69px;">
        <h5 class="text-center"><i class="fa fa-arrow-up"></i></h5>
        <h5 class="text-center">Click to see our menus.</h5>
    </div>
    @endauth
        </x-layout>
        
        