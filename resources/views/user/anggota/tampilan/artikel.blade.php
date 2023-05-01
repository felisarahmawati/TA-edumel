@extends('user.anggota.layouts.artikel_main')

@section('container')

<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>Artikel Saya</h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Artikel</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<div class="page-wrapper">
	<div class="container">
        <div class="col-12 text-end">
            <div class="mt-2 text-end">
                <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold rounded-pill px-2 shadow btn-sm">Tambah +</a>
            </div>
            <br>
        </div>
		<div class="row">
			<div class="col-lg-8 col-xl-8">
				<div class="row">
					<div class="col-xl-6">
                        <div class="blog-item mb-30">
                            <div class="post-thumb">
                                <a href="blog-single.html"><img src="/../../assets/user/images/blog/blog1.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="post-author">by Admin</span>
                                    <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2021</span>
                                    <span class="post-comments"><i class="far fa-comments"></i>15 </span>
                                </div>
                                <h3 class="post-title"> <a href="blog-single.html">The Challenge Of Global Learning In Public Education</a></h3>

                                <p>Amet consectetur adipisicing elit. Libero repudiandae provident quas necessitatibus placeat provident elit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="blog-item mb-30">
                            <div class="post-thumb">
                                <a href="blog-single.html"><img src="/../../assets/user/images/blog/blog2.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="post-author">by Admin</span>
                                    <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2021</span>
                                    <span class="post-comments"><i class="far fa-comments"></i>15 </span>
                                </div>

                                <h3 class="post-title"> <a href="blog-single.html">Google Ads certifications: Are they worth it?</a></h3>

                                <p>Amet consectetur adipisicing elit. Libero repudiandae provident quas necessitatibus placeat provident elit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="blog-item mb-30">
                            <div class="post-thumb">
                                <a href="blog-single.html"><img src="/../../assets/user/images/blog/blog3.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="post-author">by Admin</span>
                                    <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2021</span>
                                    <span class="post-comments"><i class="far fa-comments"></i>15 </span>
                                </div>
                                <h3 class="post-title"> <a href="blog-single.html">Engage your ommunity like never before </a></h3>
                                <p>Amet consectetur adipisicing elit. Libero repudiandae provident quas necessitatibus placeat provident elit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="blog-item mb-30">
                            <div class="post-thumb">
                                <a href="blog-single.html"><img src="/../../assets/user/images/blog/blog2.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="post-author">by Admin</span>
                                    <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2021</span>
                                    <span class="post-comments"><i class="far fa-comments"></i>15 </span>
                                </div>

                                <h3 class="post-title"> <a href="blog-single.html">How to manage Facebook ads for clients the right way</a></h3>
                                <p>Amet consectetur adipisicing elit. Libero repudiandae provident quas necessitatibus placeat provident elit</p>
                            </div>
                        </div>
                    </div>
				</div>

        		<nav class="blog-page-navigation">
					<ul class="pagination">
						<li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a class="active" href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</nav>
      		</div>

            <div class="col-lg-4 col-xl-4">
				<div class="blog-sidebar mt-5 mt-lg-0">
                    <div class="widget widget-search">
                        <form role="search" class="search-form">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="widget widget_latest_post">
                        <h4 class="widget-title">Latest Posts</h4>
                        <div class="recent-posts">
                            <div class="single-latest-post">
                                <div class="widget-thumb">
                                    <a href="blog-single.html"><img src="/../../assets/user/images/blog/sm3.png" alt="" class="img-fluid"></a>
                                </div>
                                <div class="widget-content">
                                    <h5> <a href="blog-single.html">Custom Platform for an Audit Insurance</a></h5>
                                    <span><i class="fa fa-calendar-times"></i>10 april 2021</span>
                                </div>
                            </div>

                            <div class="single-latest-post">
                                <div class="widget-thumb">
                                    <a href="blog-single.html"><img src="/../../assets/user/images/blog/sm2.png" alt="" class="img-fluid"></a>
                                </div>
                                <div class="widget-content">
                                    <h5> <a href="blog-single.html">World’s most famous app developers</a></h5>
                                    <span><i class="fa fa-calendar-times"></i>10 april 2021</span>
                                </div>
                            </div>
                            <div class="single-latest-post">
                                <div class="widget-thumb">
                                    <a href="blog-single.html"><img src="/../../assets/user/images/blog/sm3.png" alt="" class="img-fluid"></a>
                                </div>
                                <div class="widget-content">
                                    <h5> <a href="blog-single.html">Be a top rated marketer</a></h5>
                                    <span><i class="fa fa-calendar-times"></i>10 april 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget_categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                        <li class="cat-item"><a href="#">Web Design</a>(4)</li>
                        <li class="cat-item"><a href="#">Wordpress</a>(14)</li>
                        <li class="cat-item"><a href="#">Marketing</a>(24)</li>
                        <li class="cat-item"><a href="#">Design & dev</a>(6)</li>
                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h4 class="widget-title">Tags</h4>
                        <a href="#">Design</a>
                        <a href="#">Development</a>
                        <a href="#">UX</a>
                        <a href="#">Marketing</a>
                        <a href="#">Tips</a>
                        <a href="#">Tricks</a>
                        <a href="#">Ui</a>
                        <a href="#">Free</a>
                        <a href="#">Wordpress</a>
                        <a href="#">bootstrap</a>
                        <a href="#">Tutorial</a>
                        <a href="#">Html</a>
                    </div>
                </div>
      		</div>
		</div>
	</div>
</div>



@endsection
