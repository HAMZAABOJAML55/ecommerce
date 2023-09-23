
@extends('layouts.app')

@section('content')
<section id="services" class="services"  style="margin-top : 200px">
      <div class="container">


        <div class="row">

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="selectCategory">النماذج</a></h4>
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="selectCategory">الفيديوهات</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>

          </div>

          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="selectCategory">الملفات</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>

          </div>

        </div>

      </div>
    </section>
    <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">انشاء</h4>
                        <p class="lead mb-0">
                            Tigercompany مكتب
                            <br />
                            رئيس مجلس الاداره
                            <br />
                            فتحي خليل
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">تواصل معنا عبر</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">منصة جابر</h4>
                        <p class="lead mb-0">هي منصة تعليمية متكاملة في اختبار القدرات العامة ، تسعى المنصة لتوفير الدورات التعليمية مع معلمين متخصصين في مجال الاختبار
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    @endsection
