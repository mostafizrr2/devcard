@extends('public')


@section('title', 'About Me')

@section('content')

<section class="about-me-section p-3 p-lg-5 theme-bg-light">
    <div class="container">
        <div class="profile-teaser media flex-column flex-lg-row">

            <div class="media-body">
                <h2 class="name font-weight-bold mb-1">{{ $profile->my_name }}</h2>
                <div class="tagline mb-3">{{ $profile->my_title }}</div>
                <div class="bio mb-4">
                    {{ $profile->my_brief_description }}
                </div>
                <!--//bio-->
                <div class="mb-4">
                    <a class="btn btn-primary mr-2 mb-3" href="portfolio.html"><i
                            class="fas fa-arrow-alt-circle-right mr-2"></i><span
                            class="d-none d-md-inline">View</span> Portfolio</a>
                    <a class="btn btn-secondary mb-3" href="resume.html">
                        <i class="fas fa-file-alt mr-2"></i>
                        <span class="d-none d-md-inline">View</span> Resume
                    </a>
                </div>
            </div>
            <!--//media-body-->
            <img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0"
            src="{{ url('storage/about_image', $profile->my_about_image) }}" alt="{{ $profile->my_name }}">
        </div>
    </div>
</section>
<!--//about-me-section-->

<section class="overview-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-3">{{ $profile->my_working_title }}</h2>
        <div class="section-intro mb-5">
            {{ $profile->my_working_description }}
        </div>
        <div class="row">

            @foreach ($works as $item)
                <div class="item col-6 col-lg-3">
                    <div class="item-inner text-center">
                        <div class="item-icon">
                            <img src="{{ url('storage/work', $item->image) }}" alt="{{ $item->title }}">
                        </div>
                        <h3 class="item-title">{{ $item->title }}</h3>
                        <div class="item-desc">
                            {{ $item->description }}
                        </div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
            @endforeach


        </div>
        <!--//row-->
        <div class="text-center py-3">
            <a href="{{ route('public.services') }}" class="btn btn-primary">
                <i class="fas fa-arrow-alt-circle-right mr-2"></i>
                Services &amp; Pricing
            </a>
        </div>

    </div>
    <!--//container-->
</section>

<div class="container">
    <hr>
</div>

<section class="testimonials-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
        <div class="testimonial-carousel owl-carousel owl-theme">

            @foreach ($testimonials as $item)
            <div class="item">
                <div class="quote-holder">
                    <blockquote class="quote-content">
                        {{ $item->client_message }}
                    </blockquote>
                    <i class="fas fa-quote-left"></i>
                </div>
                <!--//quote-holder-->
                <div class="source-holder">
                    <div class="source-profile">
                        <img class="img" style="border-radius:50%" src="{{ url('storage/testimonial', $item->client_image) }}" alt="image" />
                    </div>
                    <div class="meta pt-0">
                        <div class="name">{{ $item->client_name }}</div>
                        <div class="info">{{ $item->client_title }}</div>
                        <div class="info">
                            <a target="_blank" href="{{ ($item->client_url != null) ? $item->client_url : '#' }}">
                                {{ $item->client_company }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--//testimonial-carousel-->
    </div>
    <!--//container-->
</section>
<!--//testimonials-section-->

<div class="container">
    <hr>
</div>

<section class="featured-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="devcard/assets/images/project/project-1.jpg" class="card-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="project.html" class="theme-link">Project
                                        Heading</a></h5>
                                <p class="card-text">Project intro lorem ipsum dolor sit amet, consectetuer
                                    adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient
                                    montes.</p>
                                <p class="card-text"><small class="text-muted">Client: Google</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="project.html"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="project.html">
                                <i class="fas fa-eye mr-2"></i>View Case Study
                            </a>
                        </div>
                    </div>
                    <!--//link-mask-->
                </div>
                <!--//card-->
            </div>
            <!--//col-->
            <div class="col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="devcard/assets/images/project/project-2.jpg" class="card-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="project.html" class="theme-link">Project
                                        Heading</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                    ridiculus mus. </p>
                                <p class="card-text"><small class="text-muted">Client: Dropbox</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="project.html"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="project.html">
                                <i class="fas fa-eye mr-2"></i>View Case Study
                            </a>
                        </div>
                    </div>
                    <!--//link-mask-->
                </div>
                <!--//card-->
            </div>
            <!--//col-->
            <div class="col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="devcard/assets/images/project/project-3.jpg" class="card-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="project.html" class="theme-link">Project
                                        Heading</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                    ridiculus mus. </p>
                                <p class="card-text"><small class="text-muted">Client: Google</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="project.html"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="project.html">
                                <i class="fas fa-eye mr-2"></i>View Case Study
                            </a>
                        </div>
                    </div>
                    <!--//link-mask-->
                </div>
                <!--//card-->
            </div>
            <!--//col-->
            <div class="col-md-6 mb-5">
                <div class="card project-card">
                    <div class="row no-gutters">
                        <div class="col-lg-4 card-img-holder">
                            <img src="devcard/assets/images/project/project-4.jpg" class="card-img" alt="image">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="project.html" class="theme-link">Project
                                        Heading</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                    ridiculus mus. </p>
                                <p class="card-text"><small class="text-muted">Client: Uber</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="link-mask">
                        <a class="link-mask-link" href="project.html"></a>
                        <div class="link-mask-text">
                            <a class="btn btn-secondary" href="project.html">
                                <i class="fas fa-eye mr-2"></i>View Case Study
                            </a>
                        </div>
                    </div>
                    <!--//link-mask-->
                </div>
                <!--//card-->
            </div>
            <!--//col-->
        </div>
        <!--//row-->
        <div class="text-center py-3">
            <a href="{{ route('public.portfolio') }}" class="btn btn-primary">
                <i class="fas fa-arrow-alt-circle-right mr-2"></i>View Portfolio
            </a>
        </div>
    </div>
    <!--//container-->
</section>
<!--//featured-section-->

<div class="container">
    <hr>
</div>

<section class="latest-blog-section p-3 p-lg-5">
    <div class="container">
        <h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card blog-post-card">
                    <img class="card-img-top" src="devcard/assets/images/blog/blog-post-thumb-card-1.jpg" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><a class="theme-link" href="blog-post.html">Top 3 JavaScript
                                Frameworks</a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient...</p>
                        <p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published 2 days ago</small>
                    </div>
                </div>
                <!--//card-->
            </div>
            <!--//col-->
            <div class="col-md-4 mb-5">
                <div class="card blog-post-card">
                    <img class="card-img-top" src="devcard/assets/images/blog/blog-post-thumb-card-2.jpg" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><a class="theme-link" href="blog-post.html">About Remote
                                Working</a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient...</p>
                        <p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published a week ago</small>

                    </div>
                </div>
                <!--//card-->
            </div>
            <!--//col-->
            <div class="col-md-4 mb-5">
                <div class="card blog-post-card">
                    <img class="card-img-top" src="devcard/assets/images/blog/blog-post-thumb-card-3.jpg" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><a class="theme-link" href="blog-post.html">A Guide to Becoming a
                                Full-Stack Developer</a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                            parturient...</p>
                        <p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published 3 weeks ago</small>
                    </div>
                </div>
                <!--//card-->
            </div>
            <!--//col-->
        </div>
        <!--//row-->
        <div class="text-center py-3">
            <a href="{{ route('public.blog') }}" class="btn btn-primary">
                <i class="fas fa-arrow-alt-circle-right mr-2"></i>View Blog
            </a>
        </div>
    </div>
    <!--//container-->

</section>
<!--//latest-blog-section-->

@endsection