@extends('layout\v_layout')
@section('content')
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>News</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area Start ###### -->
    <section class="features-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p>Take look at</p>
                            <h2>Kredit Kami</h2>
                        </div>
                        <h6>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit.</h6>
                        <a href="/" class="btn credit-btn mt-50">Discover</a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img_k4.png" alt="Avatar">
                        <a href="/kredit" rel="stylesheet"><h5>Kredit Aneka Usaha</h5></a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img_k2.png" alt="">
                        <a href="/kredit" rel="stylesheet"><h5>Kredit B</h5></a>
                    </div> 
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="img_k3.png" alt="">
                        <a href="/kredit" rel="stylesheet"><h5>Kredit C</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area End ###### -->
    <!-- <h1>Home</h1>
    <a class="btn btn-info" href="{{ route('test.show','60224a391f390000380032eb') }}">Detail</a>
    <div class="card">
        <div class="container">
        <img src="cover.jpg" alt="Avatar" style="width:100%">
            <h4><b>AAA</b></h4>
            <p>OUE</p>
        </div>
    </div>
    <p><hr></p>
    
    <div class="row">
        <a href="/kredit/1" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Kredit A</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/2" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 2</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/3" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 3</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/4" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 4</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/5" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 5</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
    </div>
    <br>
    <div class="row">
        <a href="/kredit/6" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 6</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/7" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 7</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/8" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 8</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/9" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 9</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
        <a href="/kredit/10" rel="stylesheet">
            <div class="column">
                <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <h3 >Card 10</h3>
                <p>Some text</p>
                <p>Some text</p>
                </div>
            </div>
        <a>
    </div>
</body> -->
@endsection
        
