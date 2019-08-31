@extends('public')
@section('content')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container single-col-max-width">
        <header class="blog-post-header">
            <h2 class="title mb-2">Why Every Developer Should Have A Blog</h2>
            <div class="meta mb-3"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
        </header>
        
        <div class="blog-post-body">
            <figure class="blog-banner">
                <a href="https://made4dev.com/"><img class="img-fluid" src="devcard/assets/images/blog/blog-post-banner.jpg" alt="image"></a>
                <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com/?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
            </figure>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
            
            <h3 class="mt-5 mb-3">Code Block Example</h3>
            <p>You can get more info at <a href="https://highlightjs.org/" target="_blank">https://highlightjs.org/</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>
            <pre>
                <code>
                    function $initHighlight(block, cls) {
                    try {
                    if (cls.search(/\bno\-highlight\b/) != -1)
                    return process(block, true, 0x0F) +
                            ` class="${cls}"`;
                    } catch (e) {
                    /* handle exception */
                    }
                    for (var i = 0 / 2; i < classes.length; i++) {
                    if (checkCondition(classes[i]) === undefined)
                    console.log('undefined');
                    }
                    }

                    export  $initHighlight;
                </code>
            </pre>
            <h3 class="mt-5 mb-3">Typography</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <h5 class="my-3">Bullet Points:</h5>
            <ul class="mb-5">
                <li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
                <li class="mb-2">Aenean commodo ligula eget dolor.</li>
                <li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
            </ul>
            <ol class="mb-5">
                <li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
                <li class="mb-2">Aenean commodo ligula eget dolor.</li>
                <li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
            </ol>
            <h5 class="my-3">Quote Example:</h5>
            <blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
                <p class="mb-2">You might not think that programmers are artists, but programming is an extremely creative profession. It's logic-based creativity.</p>
                <footer class="blockquote-footer">John Romero</footer>
            </blockquote>
            
            <h5 class="my-3">Table Example:</h5>
            <table class="table table-striped my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            
            <h5 class="mb-3">Embed A Tweet:</h5>
            
            <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">1969:<br>-what&#39;re you doing with that 2KB of RAM?<br>-sending people to the moon<br><br>2017:<br>-what&#39;re you doing with that 1.5GB of RAM?<br>-running Slack</p>&mdash; I Am Devloper (@iamdevloper) <a href="https://twitter.com/iamdevloper/status/926458505355235328?ref_src=twsrc%5Etfw">November 3, 2017</a></blockquote>
            <script async src="../../../../platform.twitter.com/widgets.js" charset="utf-8"></script>


            
            <h3 class="mt-5 mb-3">Video Example</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hnCmSXCZEpU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					
            </div>
            
        </div>
            
        <nav class="blog-nav nav nav-justified my-5">
            <a class="nav-link-prev nav-item nav-link rounded-left" href="index-2.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
        </nav>
        
        <div class="blog-comments-section">
            <div id="disqus_thread"></div>
            <script>
                /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
                    *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
                    *  PLATFORM OR CMS.
                    *  
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
                    *  https://disqus.com/admin/universalcode/#configuration-variables
                    */
                /*
                var disqus_config = function () {
                    // Replace PAGE_URL with your page's canonical URL variable
                    this.page.url = PAGE_URL;  
                    
                    // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    this.page.identifier = PAGE_IDENTIFIER; 
                };
                */
                
                (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                    var d = document, s = d.createElement('script');
                    
                    // IMPORTANT: Replace 3wmthemes with your forum shortname!
                    s.src = '../../../../3wmthemes.disqus.com/embed.js';
                    
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>
                Please enable JavaScript to view the 
                <a href="https://disqus.com/?ref_noscript" rel="nofollow">
                    comments powered by Disqus.
                </a>
            </noscript>
        </div><!--//blog-comments-section-->
        
    </div><!--//container-->
</article>

<section class="promo-section theme-bg-light py-5 text-center">
    <div class="container single-col-max-width">
        <h2 class="title">Promo Section Heading</h2>
        <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
        <figure class="promo-figure">
            <a href="https://made4dev.com/" target="_blank"><img class="img-fluid" src="devcard/assets/images/promo-banner.jpg" alt="image"></a>
        </figure>
    </div><!--//container-->
</section><!--//promo-section-->
@endsection