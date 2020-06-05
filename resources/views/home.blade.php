@extends('layouts.app')

@section('content')
@if (!auth()->user()->admin)
{{-- header section  --}}


@include('layouts.message');


<div class="container-fluid header">
    <div class="row justify-content-center">
        <div class="col-5 head-col text-center">
            <h2 style="color:white">InterContinental Cairo Semiramis</h2>
            <p>Corniche El Nil Street, Cairo, 11511, Egypt</p>
        </div>
    </div>
</div>

{{-- about section  --}}

<section id="about">
    <div class="container about my-5">
        <div class="row about-header justify-content-center">
            <div class="col-3 text-center mb-5">
                <h1>About us</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <p>Standing on the site of the historic Semiramis hotel, guests can enjoy modern luxury on the River Nile.
                    This Cairo hotel features a 26 m2 rooftop pool and fine dining with exquisite cuisine for every taste.
                    A selection of twelve restaurants and bars reflect contemporary design, with the Nile Terrace offering stunning
                    views of the sunset over the Nile. Located in the heart of the
                    city centre this hotel offers free Wi-Fi and is located next to the Egyptian Museum and bazaars of old Cairo
                </p>
            </div>
        </div>
        <div class="row justify-content-center  mt-4 about-content">
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-wifi"></i> </span> Free High Speed Internet (WiFi)</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-parking"></i></span> public parking nearby</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-dumbbell"></i></span> Fitness Center with Gym</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-baby"></i></span>Kids stay free</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-glass-cheers"></i></span>Nightclub / DJ</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-swimming-pool"></i></span>Pool</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-utensils"></i></span>Restaurant</p>
            </div>
            <div class="col-5 about-col">
                <p class="mt-3"><span class="about-i"><i class="fas fa-spa"></i></span>Spa && Massage</p>
            </div>
        </div>
    </div>
</section>

{{-- book button section  --}}


<section id="book">
    <div class="container-fluid" style="background-color:steelblue">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h3 style="color:white;">You can book room from here <i class="fas fa-arrow-down"></i></h3>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-12 text-center mb-5">
                <a href="user/booking.blade.php"><button class="btn bg-light" style="color:steelblue">Book Now</button></a>
            </div>
        </div>
    </div>
</section>


{{-- gallary section  --}}
<section id="gallary">
    <div class="container gallary my-5 ">
        <div class="row about-header justify-content-center">
            <div class="col-4 text-center mb-5">
                <h1>OUR GALLARY</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 mt-3">
                <a href="/images/gallary/the-semiramis-intercontinental.jpg"><img class="img-thumbnail" src="/images/gallary/the-semiramis-intercontinental.jpg" alt="the-semiramis-intercontinental" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/semiramis-pavilion-offices.jpg"><img class="img-thumbnail" src="/images/gallary/semiramis-pavilion-offices.jpg" alt="semiramis-pavilion-offices" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/semiramis-pavilion-library.jpg"><img class="img-thumbnail" src="/images/gallary/semiramis-pavilion-library.jpg" alt="semiramis-pavilion-library" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/meeting-room.jpg"><img class="img-thumbnail" src="/images/gallary/meeting-room.jpg" alt="meeting-room" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/wedding-room.jpg"><img class="img-thumbnail" src="/images/gallary/wedding-room.jpg" alt="wedding-room" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/restaurant5.jpg"><img class="img-thumbnail" src="/images/gallary/restaurant5.jpg" alt="restaurant" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/restaurant4.jpg"><img class="img-thumbnail" src="/images/gallary/restaurant4.jpg" alt="restaurant" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/restaurant2.jpg"><img class="img-thumbnail" src="/images/gallary/restaurant2.jpg" alt="restaurant" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/intercontinental-cairo.jpg"><img class="img-thumbnail" src="/images/gallary/intercontinental-cairo.jpg" alt="food" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/pool.jpg"><img class="img-thumbnail" src="/images/gallary/pool.jpg" alt="pool" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/pool2.jpg"><img class="img-thumbnail" src="/images/gallary/pool2.jpg" alt="pool" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/spa.jpg"><img class="img-thumbnail" src="/images/gallary/spa.jpg" alt="spa" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/gym.jpg"><img class="img-thumbnail" src="/images/gallary/gym.jpg" alt="health-club" height="200px" width="100%"></a>
            </div>
            <div class="col-3 mt-3">
                <a href="/images/gallary/health-club.jpg"><img class="img-thumbnail" src="/images/gallary/health-club.jpg" alt="health-club" height="200px" width="100%"></a>
            </div>
        </div>
    </div>
</section>

@endif


@if (auth()->user()->admin)
{{-- header section  --}}

<div class="container-fluid admin-header">
    <div class="row justify-content-center">
        <div class="col-3 head-col text-center mt-5">
            <a href="admin/viewuser.blade.php"><button class="btn">View users</button></a>
        </div>
        <div class="col-3 head-col text-center mt-5">
            <a href="admin/viewreserv.blade.php"><button class="btn">View reservations</button></a>
        </div>
        <div class="col-3 head-col text-center mt-5">
            <a href="admin/viewrooms.blade.php"><button class="btn">View rooms</button></a>
        </div>
    </div>
</div>
@endif
@endsection
