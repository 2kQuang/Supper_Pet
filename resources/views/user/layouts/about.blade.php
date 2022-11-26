<?php use App\Models\About;
$about = About::all();?>

<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">About Us</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">{{ $about[0]['name'] }}</span></h1>
            
            <p class="mb-4">{{ $about[0]['content'] }}</p>
            <ul class="list-inline">
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Best In Industry</h5></li>
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Emergency Services</h5></li>
                <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5></li>
            </ul>
            <a href="" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100" src="{{ asset($about[0]['images']) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>