@extends('front.layout.master')
@section('title', 'Blog')
@section('body')



 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Blog</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog area start-->
<div class="blog_page_section blog_fullwidth mt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="blog_wrapper">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog-big1.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html"><i class="fa fa-paper-plane"></i>
                                        Blog image post</a></h4>
                                <div class="blog_meta">
                                    <p>By <a href="#">admin</a> / Date <a href="#">July 16, 2019</a> / Category: <a
                                            href="#">eCommerce</a></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent
                                    ornare.</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Read more</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog-big2.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html"><i
                                            class="fa fa-paper-plane"></i>Libero lorem</a></h4>
                                <div class="blog_meta">
                                    <p>By <a href="#">admin</a> / Date <a href="#">July 16, 2019</a> / Category: <a
                                            href="#">eCommerce</a></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent
                                    ornare.</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Read more</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb blog_thumb_active owl-carousel">
                                <div class="single_blog_thumb">
                                    <a href="#"><img src="front/img/blog/blog-big3.jpg" alt=""></a>
                                </div>
                                <div class="single_blog_thumb">
                                    <a href="#"><img src="front/img/blog/blog-big1.jpg" alt=""></a>
                                </div>
                                <div class="single_blog_thumb">
                                    <a href="#"><img src="front/img/blog/blog-big2.jpg" alt=""></a>
                                </div>
                                <div class="single_blog_thumb">
                                    <a href="#"><img src="front/img/blog/blog-big4.jpg" alt=""></a>
                                </div>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html"><i class="fa fa-paper-plane"></i>
                                        Post with Gallery</a></h4>
                                <div class="blog_meta">
                                    <p>By <a href="#">admin</a> / Date <a href="#">July 16, 2019</a> / Category: <a
                                            href="#">eCommerce</a></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent
                                    ornare.</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Read more</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog-big4.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html"><i class="fa fa-paper-plane"></i>
                                        Post with Audio</a></h4>
                                <div class="blog_meta">
                                    <p>By <a href="#">admin</a> / Date <a href="#">July 16, 2019</a> / Category: <a
                                            href="#">eCommerce</a></p>
                                </div>
                                <div class="blog_aduio_icone">
                                    <audio controls>
                                        <source src="https://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3?1"
                                            type="audio/mp3">
                                    </audio>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent
                                    ornare.</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Read more</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <iframe src="https://www.youtube.com/embed/2Zt8va_6HRk"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html"><i
                                            class="fa fa-paper-plane"></i>Post with Video</a></h4>
                                <div class="blog_meta">
                                    <p>By <a href="#">admin</a> / Date <a href="#">July 16, 2019</a> / Category: <a
                                            href="#">eCommerce</a></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent
                                    ornare.</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Read more</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog-big5.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4 class="post_title"><a href="blog-details.html"><i class="fa fa-paper-plane"></i>
                                        Maecenas ultricies</a></h4>
                                <div class="blog_meta">
                                    <p>By <a href="#">admin</a> / Date <a href="#">July 16, 2019</a> / Category: <a
                                            href="#">eCommerce</a></p>
                                </div>
                                <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras
                                    pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus praesent
                                    ornare.</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Read more</a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <div class="widget_title">
                            <h3>Search</h3>
                        </div>
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit">search</button>
                        </form>
                    </div>
                    <div class="widget_list comments">
                        <div class="widget_title">
                            <h3>Recent Comments</h3>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span> <a href="#">demo</a> says:</span>
                                <a href="blog-details.html">Quisque semper nunc</a>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span><a href="#">admin</a> says:</span>
                                <a href="blog-details.html">Quisque orci porta...</a>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span><a href="#">demo</a> says:</span>
                                <a href="blog-details.html">Quisque semper nunc</a>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span><a href="#">admin</a> says:</span>
                                <a href="blog-details.html">Quisque semper nunc</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget_list widget_post">
                        <div class="widget_title">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog12.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h4><a href="blog-details.html">Blog image post</a></h4>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog13.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h4><a href="blog-details.html">Post with Gallery</a></h4>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog14.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h4><a href="blog-details.html">Post with Audio</a></h4>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="front/img/blog/blog15.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <h4><a href="blog-details.html">Post with Video</a></h4>
                                <span>March 16, 2018 </span>
                            </div>
                        </div>
                    </div>
                    <div class="widget_list widget_categories">
                        <div class="widget_title">
                            <h3>Categories</h3>
                        </div>
                        <ul>
                            <li><a href="#">Audio</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Image</a></li>
                            <li><a href="#">Other</a></li>
                            <li><a href="#">Travel</a></li>
                        </ul>
                    </div>
                    <div class="widget_list widget_tag">
                        <div class="widget_title">
                            <h3>Tag products</h3>
                        </div>
                        <div class="tag_widget">
                            <ul>
                                <li><a href="#">asian</a></li>
                                <li><a href="#">brown</a></li>
                                <li><a href="#">euro</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog area end-->

<!--blog pagination area start-->
<div class="blog_pagination">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pagination">
                    <ul>
                        <li class="current">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">next</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog pagination area end-->

<!--brand area start-->
<div class="brand_area color_five brand__three">
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
