@extends('user.anggota.layouts.main')

@section('container')
<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1>EBOOK</h1>
          </div>
        </div>
      </div>
    </div>
</section>
    <!--course section start-->
    <section class="section-padding page" >
        <div class="course-top-wrap mb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                    </div>

                    <div class="col-lg-4">
                        <div class="topbar-search">
                            <form method="get" action="#">
                                <input type="text"  placeholder="Search our courses" class="form-control">
                                <label><i class="fa fa-search"></i></label>
                            </form>
                        </div>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h4 class="widget-title">Kategori Ebook</h4>
                        <br>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">APAPL</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">APHPi</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Biografi / Autobiografi</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Buku Islam</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">E-Library SIGARDA INDONESIA</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">FIKSI</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">IELTS</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Bahasa Indonesia</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">PKK</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Sejarah Indonesia</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Reading Comprehension</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Speaking</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">TAB</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">Tautan Buku Pelajaran</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">TKJ</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">TOEFL</a>
                        <a href="{{ url('/user/anggota/tampilan/detail_ebook') }}">TOEIC</a>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row ">
                    <div class="course-item col-lg-6 col-md-6">
                        <div class="single-course style-2 bg-shade border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5">
                                    <div class="course-thumb" style="background:url(/../../assets/user/images/ebook/dilan-1990.jpg)">
                                        <span class="category">Ebook</span>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="course-content py-4 pt-xl-0">
                                        <h3 class="course-title"> <a href="#">Data Competitive Strategy law & Organization </a> </h3>
                                        <div class="course-meta d-flex align-items-center">
                                            <div class="author">
                                                <img src="/../../assets/user/images/course/course-2.jpg" alt="" class="img-fluid">
                                              <a href="#">Josephin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-item  col-lg-6 col-md-6">
                        <div class="single-course style-2 bg-shade border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5">
                                    <div class="course-thumb" style="background:url(/../../assets/user/images/ebook/dilan-1991.jpg)">
                                        <span class="category">Ebook</span>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="course-content py-4 pt-xl-0">
                                        <h3 class="course-title"> <a href="#">Data Competitive Strategy law & Organization </a> </h3>
                                        <div class="course-meta d-flex align-items-center">
                                            <div class="author">
                                                <img src="/../../assets/user/images/course/course-2.jpg" alt="" class="img-fluid">
                                              <a href="#">Josephin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-item  col-lg-6 col-md-6">
                        <div class="single-course style-2 bg-shade border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5">
                                    <div class="course-thumb" style="background:url(/../../assets/user/images/ebook/jingga&senja.jpg)">
                                        <span class="category">Ebook</span>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="course-content py-4 pt-xl-0">
                                        <h3 class="course-title"> <a href="#">Data Competitive Strategy law & Organization </a> </h3>
                                        <div class="course-meta d-flex align-items-center">
                                            <div class="author">
                                                <img src="/../../assets/user/images/course/course-2.jpg" alt="" class="img-fluid">
                                              <a href="#">Josephin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-item col-lg-6 col-md-6">
                        <div class="single-course style-2 bg-shade border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xl-5">
                                    <div class="course-thumb" style="background:url(/../../assets/user/images/ebook/harry-potter.jpg)">
                                        <span class="category">Ebook</span>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="course-content py-4 pt-xl-0">
                                        <h3 class="course-title"> <a href="#">Data Competitive Strategy law & Organization </a> </h3>
                                        <div class="course-meta d-flex align-items-center">
                                            <div class="author">
                                                <img src="/../../assets/user/images/course/course-2.jpg" alt="" class="img-fluid">
                                              <a href="#">Josephin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--course-->
        {{-- </section> --}}
        <!--course-->

    </section>
    <!--course section end-->

@endsection
