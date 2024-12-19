<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <section class="navabar-top postion-sticky">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img class="img-fluid h-15 w-25"
                            src="{{ asset('frontend/svg/apple-7688110.svg') }}" alt="" srcset=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav fs-4 fw-bold custom-font ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><button type="submit" class="btn btn-danger">Login</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <main>
            {{--  section 1 carousel  --}}
            <section class="carousel my-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/image/cups-8793334_640.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Take your rest</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/image/coffee-2306471_640.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Make refreshment</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/image/coffee-6984075_640.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>jam the meet with people</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            {{--  section 2 menu items  --}}
            <section class="menu ">
                <div class="container">
                    <h1 class="text-center ">Our <span class="text-primary">menu</span></h1>
                    <hr class="w-25 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-12 my-2 col-md-4 col-lg-4 ">
                            <div class="items h-50 w-100">
                                <img src="{{ asset('frontend/image/beverage-1869598_640.jpg') }}" alt="img" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="items h-50 w-100  ">
                                <img src="{{ asset('frontend/image/coffee-6984075_640.jpg') }}" alt="img" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="items h-25 w-75  ">
                                <img src="{{ asset('frontend/image/coffee-3727673_640.jpg') }}" alt="img" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="items h-50 w-100  ">
                                <img src="{{ asset('frontend/image/coffee-6984075_640.jpg') }}" alt="img" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="items h-50 w-100  ">
                                <img src="{{ asset('frontend/image/coffee-6984075_640.jpg') }}" alt="img" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="items h-50 w-100  ">
                                <img src="{{ asset('frontend/image/coffee-6984075_640.jpg') }}" alt="img" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--  section 3 Our team  --}}
            <section class="team">
                <div class="container">
                    <h1 class="text-center">Our <span class="text-primary ">Teams</span></h1>
                    <hr class="w-25 m-auto mb-3">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="card ">
                                <div class="card-body ">
                                    <img src="{{ asset('frontend/svg/apple-7688110.svg') }}" alt="" class="w-50 img-fluid rounded-circle offset-3">
                                    <p class="text-center">Silas Rai</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo officia error voluptate id animi ducimus consequuntur, facere quis voluptatem necessitatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="card ">
                                <div class="card-body ">
                                    <img src="{{ asset('frontend/svg/apple-7688110.svg') }}" alt="" class="w-50 img-fluid rounded-circle offset-3">
                                    <p class="text-center">Silas Rai</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo officia error voluptate id animi ducimus consequuntur, facere quis voluptatem necessitatibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="card ">
                                <div class="card-body ">
                                    <img src="{{ asset('frontend/svg/apple-7688110.svg') }}" alt="" class="w-50 img-fluid rounded-circle offset-3">
                                    <p class="text-center">Silas Rai</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo officia error voluptate id animi ducimus consequuntur, facere quis voluptatem necessitatibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--  section 4 contact  --}}
            <section class="contact">
                <div class="container">
                </div>
            </section>
        </main>
        <footer>

        </footer>
    </header>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
