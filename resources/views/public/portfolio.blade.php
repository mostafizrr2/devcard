@extends('public')
@section('content')

<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Portfolio</h2>
        <div class="intro">
        <p>Welcome to my online portfolio. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. I'm taking on freelance work at the moment. Want some help building your software?</p>
        
        </div>
        <a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
        
        
    </div><!--//container-->
</section>
<section class="projects-list px-3 py-5 p-md-5">
    <div class="container">
        <div class="text-center">
            <ul id="filters" class="filters mb-5 mx-auto pl-0">
                <li class="type active mb-3 mb-lg-0" data-filter="*">All</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".webapp">We App</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".mobileapp">Mobile App</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".frontend">Frontend</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".backend">Backend</li>
            </ul><!--//filters-->
        </div>
        
        <div class="project-cards row isotope">

            @foreach ($portfolios as $item)
                <div class="isotope-item col-md-6 mb-5 mobileapp frontend">
                    <div class="card project-card">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-img-holder">
                                <img src="{{ url('storage/portfolio', $item->project_image) }}" class="card-img" alt="{{ $item->project_name }}">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('public.project', $item->slug) }}" class="theme-link">
                                            {{ $item->project_name }}
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        {{ $item->project_intro }}
                                    </p>
                                    <p class="card-text"><small class="text-muted">Client: {{ $item->client_name}}</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="link-mask">
                            <a class="link-mask-link" href="{{ route('public.project', $item->slug) }}"></a>
                            <div class="link-mask-text">
                                <a class="btn btn-secondary" href="{{ route('public.project', $item->slug) }}">
                                    <i class="fas fa-eye mr-2"></i>View Case Study
                                </a>
                            </div>
                        </div>
                        <!--//link-mask-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
            @endforeach


        </div><!--//row-->
    
    </div>
</section>

@endsection