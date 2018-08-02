@extends('shop.master')

@section('content')
            <!-- ================== Intro section default ================== -->

        <section class="our-team">
            <div class="container">

                <!-- === Our team header === -->

                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1 class="h2 title">Meet our team</h1>
                        <div class="text">
                            <p>Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>
                        </div>
                    </div>
                </div>

                <!-- === Our team === -->

                <div class="team">

                    <div class="row">

                        <!-- === team member === -->

                        <div class="col-sm-3">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">Lea Nils</h3>
                                        <h6 class="title">Director</h6>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/user-5.jpg') }}" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-phone"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- === team member === -->

                        <div class="col-sm-3">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">Nora Star</h3>
                                        <h6 class="title">Architect</h6>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/user-4.jpg') }}" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- === team member === -->

                        <div class="col-sm-3">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">Jenna Hale</h3>
                                        <h6 class="title">Quality director</h6>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/user-3.jpg') }}" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- === team member === -->

                        <div class="col-sm-3">
                            <article>
                                <div class="details details-text">
                                    <div class="inner">
                                        <h3 class="title">Glen Jordan</h3>
                                        <h6 class="title">Supervisor</h6>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/user-4.jpg') }}" alt="" />
                                </div>
                                <div class="details details-social">
                                    <div class="inner">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                    <!--/row-->
                    <!-- === button more === -->

                    <div class="wrapper-more">
                        <a href="contact.html" class="btn btn-clean-dark">Contact us</a>
                    </div>
                </div>
                <!--/team-->
            </div>
        </section>

        <!-- ================== Banner ================== -->

        <section class="banner" style="background-image:url( {{ asset('custom/assets/images/gallery-7.jpg') }} )">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1 class="h2 title">We love our work</h1>
                        <div class="text">
                            <p>
                                Lorem ipsum folor sit amet, consenuer adispicing elit mast. Curarbitur tristique lacinia mi, vitae consector oido efficitur nec. Phasellus velit felis, fermentum in enim. Lorem ipsum dolor sit amet, censectur adispcing elit curabitur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================  Cards ======================== -->

        <section class="cards">

            <!-- === cards header === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">Design of interiors</h2>
                        <div class="text">
                            <p>Our services team produces interior design solutions</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="row">

                    <!-- === item === -->

                    <div class="col-md-8">
                        <figure>
                            <figcaption style="background-image:url( {{ asset('custom/assets/images/blog-7.jpg') }} )">
                                <img src="{{ asset('custom/assets/images/blog-1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Interior design</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url( {{ asset('custom/assets/images/blog-2.jpg') }} )">
                                <img src="{{ asset('custom/assets/images/blog-2.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">3D Modeling</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url( {{ asset('custom/assets/images/blog-3.jpg') }} )">
                                <img src="{{ asset('custom/assets/images/blog-3.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Arhitect serives</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url( {{ asset('custom/assets/images/blog-4.jpg') }} )">
                                <img src="{{ asset('custom/assets/images/blog-4.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Manufacturing</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url( {{ asset('custom/assets/images/blog-5.jpg') }} )">
                                <img src="{{ asset('custom/assets/images/blog-5.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Planning</a>
                        </figure>
                    </div>

                </div>
                <!--/row-->

            </div>
            <!--/container-->
        </section>

        <!-- ========================  History ======================== -->

        <section class="history">
            <div class="container">

                <!-- === History header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">A bit of history</h1>
                            <div class="text">
                                <p>Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- === row item === -->

                <div class="row row-block">
                    <div class="col-md-5 history-image" style="background-image:url( {{ asset('custom/assets/images/blog-3.jpg') }} )">
                        <div class="history-title">
                            <h2 class="title">1930</h2>
                            <p>The begining</p>
                        </div>
                    </div>
                    <div class="col-md-7 history-desc">
                        <div class="h5 title">This is how it's began</div>
                        <p>
                            Bust master shore what the sainted store tell stood sitting word thy unbrokenquit tossed more beguiling to rare stood take. Sent that maiden entrance door the and i to if me entrance the startled yore the sainted velvet raven still bird cushioned more
                            then quoth and just a lenore back
                        </p>
                        <p>
                            Leave till the and let nameless lenore the followed or shorn wide mystery quoth agreeing the lore myself soul its nevermore lenore mortals this the still plainly thereat on thinking the door above a have of hesitating longer i and that as mefilled now
                            lord marvelled me i of be.
                        </p>
                    </div>
                </div>

                <!-- === row item === -->
                <div class="row row-block">
                    <div class="col-md-5 history-image" style="background-image:url( {{ asset('custom/assets/images/blog-4.jpg') }} )">
                        <div class="history-title">
                            <h2 class="title">1935</h2>
                            <p>Firs 5 years</p>
                        </div>
                    </div>
                    <div class="col-md-7 history-desc">
                        <div class="h5 title">Love at the first sight</div>
                        <p>
                            Bust master shore what the sainted store tell stood sitting word thy unbrokenquit tossed more beguiling to rare stood take. Sent that maiden entrance door the and i to if me entrance the startled yore the sainted velvet raven still bird cushioned more
                            then quoth and just a lenore back
                        </p>
                    </div>
                </div>

                <!-- === row item === -->
                <div class="row row-block">
                    <div class="col-md-5 history-image" style="background-image:url( {{ asset('custom/assets/images/blog-5.jpg') }} )">
                        <div class="history-title">
                            <h2 class="title">1940</h2>
                            <p>Furniture color palette</p>
                        </div>
                    </div>
                    <div class="col-md-7 history-desc">
                        <div class="h5 title">There are designers out there</div>
                        <p>
                            Bust master shore what the sainted store tell stood sitting word thy unbrokenquit tossed more beguiling to rare stood take. Sent that maiden entrance door the and i to if me entrance the startled yore the sainted velvet raven still bird cushioned more
                            then quoth and just a lenore back
                        </p>
                        <p>
                            Leave till the and let nameless lenore the followed or shorn wide mystery quoth agreeing the lore myself soul its nevermore lenore mortals this the still plainly thereat on thinking the door above a have of hesitating longer i and that as mefilled now
                            lord marvelled me i of be.
                        </p>
                    </div>
                </div>

                <!-- === row item === -->
                <div class="row row-block">
                    <div class="col-md-5 history-image" style="background-image:url( {{ asset('custom/assets/images/blog-6.jpg') }} )">
                        <div class="history-title">
                            <h2 class="title">1950</h2>
                            <p>Employer of the year</p>
                        </div>
                    </div>
                    <div class="col-md-7 history-desc">
                        <div class="h5 title">We love our employees</div>
                        <p>
                            Bust master shore what the sainted store tell stood sitting word thy unbrokenquit tossed more beguiling to rare stood take. Sent that maiden entrance door the and i to if me entrance the startled yore the sainted velvet raven still bird cushioned more
                            then quoth and just a lenore back
                        </p>
                        <p>
                            Leave till the and let nameless lenore the followed or shorn wide mystery quoth agreeing the lore myself soul its nevermore lenore mortals this the still plainly thereat on thinking the door above a have of hesitating longer i and that as mefilled now
                            lord marvelled me i of be.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================  Banner ======================== -->

        <section class="banner" style="background-image:url( {{ asset('custom/assets/images/gallery-2.jpg') }} )">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="title">Our story</h2>
                        <p>
                            We believe in creativity as one of the major forces of progress. With this idea, we traveled throughout country to find exceptional artisans and bring their unique handcrafted objects to connoisseurs everywhere.
                        </p>
                        <p>
                            You’ve finally reached this point in your life- you’ve bought your first home, moved into your very own apartment, moved out of the dorm room or you’re finally downsizing after all of your kids have left the nest.
                        </p>
                        <p><a href="#" class="btn btn-clean">Read full story</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================  Blog Dark ======================== -->

        <section class="blog blog-block">

            <div class="container">

                <!-- === blog header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title">Interior ideas</h2>
                            <div class="text">
                                <p>Keeping things minimal</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === blog item === -->

                    <div class="col-sm-4">
                        <article>
                            <a href="article.html">
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/project-1.jpg') }}" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="date">28 Mart 2017</div>
                                    <div class="title">
                                        <h2 class="h3">Creating the Perfect Gallery Wall </h2>
                                    </div>
                                    <div class="description">
                                        <p>You’ve finally reached this point in your life- you’ve bought your first home, moved into your very own apartment, moved out of the dorm room or you’re finally downsizing after all of your kids have left the nest.</p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>

                    <!-- === blog item === -->

                    <div class="col-sm-4">
                        <article>
                            <a href="article.html">
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/project-2.jpg') }}" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="date">25 Mart 2017</div>
                                    <div class="title">
                                        <h2 class="h3">Making the Most Out of Your Kids Old Bedroom</h2>
                                    </div>
                                    <div class="description">
                                        <p>You’ve finally reached this point in your life- you’ve bought your first home, moved into your very own apartment, moved out of the dorm room or you’re finally downsizing after all of your kids have left the nest.</p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>

                    <!-- === blog item === -->

                    <div class="col-sm-4">
                        <article>
                            <a href="article.html">
                                <div class="image">
                                    <img src="{{ asset('custom/assets/images/project-3.jpg') }}" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="date">28 Mart 2017</div>
                                    <div class="title">
                                        <h2 class="h3">Have a look at our new projects!</h2>
                                    </div>
                                    <div class="description">
                                        <p>You’ve finally reached this point in your life- you’ve bought your first home, moved into your very own apartment, moved out of the dorm room or you’re finally downsizing after all of your kids have left the nest.</p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>

                </div>
                <!--/row-->
                <!--button more-->
                <div class="wrapper-more">
                    <a href="ideas.html" class="btn btn-main">View all posts</a>
                </div>

            </div>
            <!--/container-->
        </section>


        <!-- ======================== Quotes ======================== -->

        <section class="quotes quotes-slider" style="background-image:url( {{ asset('custom/assets/images/gallery-2.jpg') }} )">
            <div class="container">
                <div class="row">

                    <div class="quote-carousel">

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('custom/assets/images/user-3.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>Jenna Hale</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('custom/assets/images/user-1.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>Glen Jordan</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('custom/assets/images/user-4.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>Lea Nils</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>

                        <!-- === quoute item === -->

                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('custom/assets/images/user-5.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>Nora Star</h4>
                                <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                            </div>
                            <div class="more">
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/quote-carousel-->
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </section>
@endsection