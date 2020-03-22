@extends('public')
@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container single-col-max-width">
        <h2 class="heading text-center">Case Study: {{ $portfolio->project_name }}</h2>
        <div class="project-intro text-center">
            <p class="mb-0 lead">{{ $portfolio->project_intro }}</p>
        </div>
        
    </div><!--//container-->
</section>
<section class="project px-3 py-5 p-md-5">
    <div class="container">
        <div class="project-meta media flex-column flex-md-row p-4 theme-bg-light">
            <img class="project-thumb mb-3 mb-md-0 mr-md-5 rounded d-none d-md-inline-block" src="{{ url('storage/portfolio', $portfolio->project_image) }}" alt="{{ $portfolio->client_name }}">
            <div class="media-body">
                <div class="client-info">
                    <h3 class="client-name font-weight-bold mb-4">Client: {{ $portfolio->client_name }}</h3>
                    <ul class="client-meta list-unstyled">
                        <li class="mb-2"><i class="fas fa-industry fa-fw mr-2"></i><strong>Industry:</strong> Tech</li>
                        <li class="mb-2"><i class="fas fa-users fa-fw mr-2"></i><strong>Size:</strong> {{ $portfolio->project_size }}+</li>
                        <li class="mb-2"><strong><i class="fas fa-link fa-fw mr-2">
                            </i>Website:</strong> 
                            <a class="theme-link" target="_blank" href="{{ 'http://'.$portfolio->project_url }}">
                                {{ $portfolio->project_url }}
                            </a>
                        </li>
                    </ul>
                    <div class="client-bio mb-4">
                        {!! $portfolio->short_description !!}
                    </div>
                </div>					
            </div><!--//media-body-->
        </div><!--//project-meta-->
        <div class="project-sections py-5">
            <div class="project-section mb-5">
                <h3 class="project-section-title mb-3">Project Overview</h3>

                {!! $portfolio->brief_description !!}
            </div><!--//project-section-->
            
    

            
           @if ($portfolio->testimonial)
           <div class="project-section mb-5">
                   <h3 class="project-section-title mb-3">Client Testimonial</h3>
           </div><!--//project-section-->
           <div class="client-quote">
               <div class="quote-holder">
                   <blockquote class="quote-content">
                       {{ $portfolio->testimonial->client_message }}
                   </blockquote>
                   <i class="fas fa-quote-left"></i>
               </div><!--//quote-holder-->
               <div class="source-holder">
                   <div class="source-profile">
                       <img src="{{ url('storage/testimonial', $portfolio->testimonial->client_image) }}" alt="image"/>
                   </div>
                   <div class="meta">
                       <div class="name">{{ $portfolio->testimonial->client_name }}</div>
                       <div class="info">{{ $portfolio->testimonial->client_title }}, {{ $portfolio->testimonial->client_company }}</div>
                   </div>
               </div>
           </div>
           @endif
            
        </div>
    </div>
</section>

<section class="promo-section theme-bg-light py-5 text-center">
    <div class="container single-col-max-width">
        <h2 class="title">Want me to help with your project?</h2>
        <p>If you take on freelance work, you can use this section to prompt any potential clients to get in touch with you with their project requirements.</p>
        <div class="text-center"><a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a></div>
    </div><!--//container-->
</section><!--//promo-section-->
@endsection