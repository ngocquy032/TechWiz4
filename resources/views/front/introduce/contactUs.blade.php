@extends('front.layout.master')
@section('title', 'ContactUs')
@section('body')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Contact Us</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--contact map start-->
    <div class="contact_map mt-100">
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.4730493459388!2d105.77972177500047!3d21.028825087776802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab86cece9ac1%3A0xa9bc04e04602dd85!2zRlBUIEFwdGVjaCBIw6AgTuG7mWkgLSBI4buHIFRo4buRbmcgxJDDoG8gVOG6oW8gTOG6rXAgVHLDrG5oIFZpw6puIFF14buRYyBU4bq_IChTaW5jZSAxOTk5KQ!5e1!3m2!1svi!2s!4v1691601480878!5m2!1svi!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>contact us</h3>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                            est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                            formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : No 8 Ton That Thuyet Street Ha Noi City</li>
                            <li><i class="fa fa-phone"></i> <a mailto:href="#">demo@example.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0123456789">0123456789</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>Tell us your project</h3>
                        <form id="contact-form" method="POST" action="front/mail.php">
                            <p>
                                <label> Your Name (required)</label>
                                <input name="name" placeholder="Name *" type="text">
                            </p>
                            <p>
                                <label> Your Email (required)</label>
                                <input name="email" placeholder="Email *" type="email">
                            </p>
                            <p>
                                <label> Subject</label>
                                <input name="subject" placeholder="Subject *" type="text">
                            </p>
                            <div class="contact_textarea">
                                <label> Your Message</label>
                                <textarea placeholder="Message *" name="message" class="form-control2"></textarea>
                            </div>
                            <button type="submit"> Send</button>
                            <p class="form-messege"></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact area end-->

    <!--brand area start-->
    <div class="brand_area brand__three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand6.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="front/img/brand/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->


@endsection
