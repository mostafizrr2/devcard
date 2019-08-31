<header class="header text-center">
    <div class="force-overflow">
        <h1 class="blog-name pt-lg-4 mb-0">
            <a href="{{ route('public.about') }}">Mostafiz Rahman</a>
        </h1>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto"
                     src="https://scontent.fcgp5-1.fna.fbcdn.net/v/t1.0-9/37397539_423095721541961_1038679205644075008_n.jpg?_nc_cat=102&_nc_oc=AQlaHEjtbHtumUP0HXk0JXM4RcZ7NxWanVpJ7rK7ZsTQUGmsMkH1_ssjS1ZyahGFLao&_nc_ht=scontent.fcgp5-1.fna&oh=31d266f3044776f18984803230121641&oe=5DCABFC9" alt="image">

                    <div class="bio mb-3">
                        Hi, my name is Mostafiz Rahman and I'm a senior software engineer. Welcome to my
                        personal website!
                    </div>
                    <!--//bio-->
                    <ul class="social-list list-inline py-2 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->
                    <hr>
                </div>
                <!--//profile-section-->

                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('public.about') }}">
                            <i class="fas fa-user fa-fw mr-2"></i>About Me
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.portfolio') }}">
                            <i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.resume') }}">
                            <i class="fas fa-file-alt fa-fw mr-2"></i>Resume
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.blog') }}">
                            <i class="fas fa-blog fa-fw mr-2"></i>Blog
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.services') }}">
                            <i class="fas fa-briefcase fa-fw mr-2"></i>Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.contact') }}">
                            <i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact
                        </a>
                    </li>
  
                </ul>

                <div class="my-2 mt-4">
                    <a class="btn btn-primary" href="{{ route('public.hire') }}" target="_blank">
                        <i class="fas fa-paper-plane mr-2"></i>Hire Me
                    </a>
                </div>


                <div class="dark-mode-toggle text-center w-100">
                    <hr class="mb-4">
                    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Dark Mode</h4>

                    <input class="toggle" id="darkmode" type="checkbox">
                    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>

                </div>
                <!--//dark-mode-toggle-->

            </div>
        </nav>
    </div>
    <!--//force-overflow-->
</header>