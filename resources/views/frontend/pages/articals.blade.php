@extends('frontend.layouts.master')
@section('title')
articals
@endsection
@section('content')
<style>
    .articals-advices img {
        width: 100%;
        height: 600px;
        object-fit: cover;
    }
</style>
<nav aria-label="breadcrumb bg-skylight">
    <ol class="breadcrumb p-3">
        <li class="breadcrumb-item fw-bold text-dark"><a href="https://eliteblue.net/motorvero/public/" class="fw-bold text-dark">Home</a></li>
        <li class="breadcrumb-item active text-dark" aria-current="page">Articals</li>
    </ol>
</nav>
<section class="">
    <div class="container">
        <h1 class="heading">Articles & Advice</h1>
        <p class="mb-0">Discover our library of in-depth articles and valuable advice</p>
        <div class="row">
            <div class="col-md-6 p-3 articals-advices">
                <img src="https://images.pexels.com/photos/733745/pexels-photo-733745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                <h3 class="heading-m my-2">The Best Sports Cars Under $30k to Buy in 2023</h3>
                <p class="text-secondary mb-0">by <span>Craig Fitzgerald</span></p>
                <p class="mb-0 my-2">You can buy some great sports cars, both new and used, with less than $30,000 to spend.</p>
            </div>
            <div class="col-md-6 p-3">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100" src="https://images.pexels.com/photos/733745/pexels-photo-733745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        <h3 class="heading-m my-2">The Best Sports Cars Under $30k to Buy in 2023</h3>
                        <p class="text-secondary mb-0">by <span>Craig Fitzgerald</span></p>
                        <p class="mb-0 my-2">You can buy some great sports cars, both new and used, with less than $30,000 to spend.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="w-100" src="https://images.pexels.com/photos/733745/pexels-photo-733745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        <h3 class="heading-m my-2">The Best Sports Cars Under $30k to Buy in 2023</h3>
                        <p class="text-secondary mb-0">by <span>Craig Fitzgerald</span></p>
                        <p class="mb-0 my-2">You can buy some great sports cars, both new and used, with less than $30,000 to spend.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="w-100" src="https://images.pexels.com/photos/733745/pexels-photo-733745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        <h3 class="heading-m my-2">The Best Sports Cars Under $30k to Buy in 2023</h3>
                        <p class="text-secondary mb-0">by <span>Craig Fitzgerald</span></p>
                        <p class="mb-0 my-2">You can buy some great sports cars, both new and used, with less than $30,000 to spend.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="w-100" src="https://images.pexels.com/photos/733745/pexels-photo-733745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        <h3 class="heading-m my-2">The Best Sports Cars Under $30k to Buy in 2023</h3>
                        <p class="text-secondary mb-0">by <span>Craig Fitzgerald</span></p>
                        <p class="mb-0 my-2">You can buy some great sports cars, both new and used, with less than $30,000 to spend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection