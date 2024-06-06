<link rel="stylesheet" href="css/profile.css">
@section('title')
    | Profile
@endsection
<x-master>
    <div class="container ">
        <div class="row my-4">
            <div class="col-md-8 column-spacing">
                @if (session('message'))
                    <x-alert-message type="success">{{ session('message') }}</x-alert-message>
                @endif
                <div>
                    <section class="page-section cta">
                        <div class="container">
                            <div class="row">
                                <h1>Profiles</h1>
                                @for ($i = 0; $i < 8; $i++)
                                @if (isset($profiles[$i]))
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="our-team">
                                            <div class="picture">
                                                <img class="img-fluid" src="{{ '../storage/' . $profiles[$i]->image }}">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="name">{{ $profiles[$i]->name }}</h3>
                                                <a href="{{ route('profiles.show', $profiles[$i]->id) }}" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endfor
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
