@extends('layouts.apps')
@section('content')

    <div class="indicator">
        <nav>
            <ul>
                <li><a href="#first" class="active"><p>Our Project</p><span></span></a></li>
                <li><a href="#second"><p>Our Services</p><span></span></a></li>
                <li><a href="#third"><p>Our Products</p><span></span></a></li>
                <li><a href="#fourth"><p>Our Clients</p><span></span></a></li>
            </ul>
        </nav>
    </div>

    <main class="section">
        <section id="first" class="section__home" style="background-image: url('{{ asset('assets/images/unsplash_ucnCGqOnyYo.jpg') }}');">
            <div class="section__home-floating">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2 class="title-main">We simplify your business activities</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="second" class="section__home" style="background-image: url('{{ asset('assets/images/iunsplash_ucnCGqOnyYo.jpg') }}');">
            <div class="section__home-floating">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2 class="title-main mb-5">And here's what we can do for you.</h2>

                            <div class="row">
                                <div class="col-6 col-lg-4">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('assets/images/computer.svg') }}" class="d-block img-icon" style="margin: 0 auto 10px;" alt="">
                                        <label class="title-card">Website Development</label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('assets/images/smartphone.svg') }}" class="d-block img-icon" style="margin: 0 auto 10px;" alt="">
                                        <label class="title-card">Mobile Apps Development</label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('assets/images/laptop.svg') }}" class="d-block img-icon" style="margin: 0 auto 10px;" alt="">
                                        <label class="title-card">User Experiences Design</label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('assets/images/world.svg') }}" class="d-block img-icon" style="margin: 0 auto 10px;" alt="">
                                        <label class="title-card">Digital Marketing</label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('assets/images/video-camera.svg') }}" class="d-block img-icon" style="margin: 0 auto 10px;" alt="">
                                        <label class="title-card">Creative
                                            Design & Video</label>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('assets/images/users.svg') }}" class="d-block img-icon" style="margin: 0 auto 10px;" alt="">
                                        <label class="title-card">IT Talent acquisition</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="third" class="section__home" style="background-image: url('{{ asset('assets/images/ounsplash_ucnCGqOnyYo.jpg') }}');">
            <div class="section__home-floating">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2 class="title-main">Simplify your business activities</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fourth" class="section__home" style="background-image: url('{{ asset('assets/images/punsplash_ucnCGqOnyYo.jpg') }}');">
            <div class="section__home-floating">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2 class="title-main">Our satisfied client</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection