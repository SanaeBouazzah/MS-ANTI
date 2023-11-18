@section('title')
    | Profile
@endsection
<x-master>
    <div class="container ">
        <div class="row my-4">
            <div class="col-md-8 rounded-4 shadow-lg bg-white column-spacing">
                @if (session('message'))
                    <x-alert-message type="success">{{ session('message') }}</x-alert-message>
                @endif
                <div>
                    <section class="page-section cta">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9 mx-auto">
                                    <div class="cta-inner bg-faded text-center rounded">
                                        <h2 class="section-heading mb-5">
                                            <span class="section-heading-upper">Come On In</span>
                                            <span class="section-heading-lower">We're Open</span>
                                        </h2>
                                        <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Sunday
                                                <span class="ms-auto">Closed</span>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Monday
                                                <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Tuesday
                                                <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Wednesday
                                                <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Thursday
                                                <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Friday
                                                <span class="ms-auto">7:00 AM to 8:00 PM</span>
                                            </li>
                                            <li class="list-unstyled-item list-hours-item d-flex">
                                                Saturday
                                                <span class="ms-auto">9:00 AM to 5:00 PM</span>
                                            </li>
                                        </ul>
                                        <p class="address mb-5">
                                            <em>
                                                <strong>1116 Orchard Street</strong>
                                                <br />
                                                Golden Valley, Minnesota
                                            </em>
                                        </p>
                                        <p class="mb-0">
                                            <small><em>Call Anytime</em></small>
                                            <br />
                                            (317) 585-8468
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="page-section about-heading">
                        <div class="container">
                            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg"
                                alt="..." />
                            <div class="about-heading-content">
                                <div class="row">
                                    <div class="col-xl-9 col-lg-10 mx-auto">
                                        <div class="bg-faded rounded p-5">
                                            <h2 class="section-heading mb-4">
                                                <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                                                <span class="section-heading-lower">About Our Cafe</span>
                                            </h2>
                                            <p>Founded in 1987 by the Hernandez brothers, our establishment has been
                                                serving up rich coffee sourced from artisan farmers in various regions
                                                of South and Central America. We are dedicated to travelling the world,
                                                finding the best coffee, and bringing back to you here in our cafe.</p>
                                            <p class="mb-0">
                                                We guarantee that you will fall in
                                                <em>lust</em>
                                                with our decadent blends the moment you walk inside until you finish
                                                your last sip. Join us for your daily routine, an outing with friends,
                                                or simply just to enjoy some alone time.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 parent">
                <div class="rounded-4 shadow-lg bg-white p-3 to_scroll">
                    <h2 class="h4 pt-4 pb-3 text-center">Discover Some Friends</h2>
                    @foreach ($profiles as $profile)
                        <ul>
                            <a href="{{ route('profiles.show', $profile) }}"
                                class="bg-light flex justify-content-between my-2 rounded px-3 py-2 touch">
                                <li><img src="{{ "../storage/$profile->image" }}"
                                        style="width:50px; height:50px; object-fit:cover; display:block; border-radius:50%;"
                                        alt=""></li>
                                <li class="py-2 mx-2">
                                    <p>{{ $profile->name }}</p>
                                </li>
                            </a>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-master>
