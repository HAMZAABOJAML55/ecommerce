@extends('layouts.app')

@section('content')
  <!-- Masthead-->
  <header class="masthead bg-white text-white text-center">

  <div class="row">

    <div class="img-index col-4 offset-md-1 women_img">

 <img decoding="async" class="women_img leaf wow fadeInDown drdt-ignore-dark " data-wow-delay="0.4s" src="assets/img/index2.png" alt="منصة جابر" >
    <div class="iconss  ">
        <img id="icon-1"  src="assets/img/icon_shape.png" alt="">
        <img id="icon-2" src="assets/img/student-icon.png" alt="">
    </div>
</div>

<div class="container d-flex align-items-center flex-column bg-white col-6">
                <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-5" src="assets/img/index3.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">منصة جابر</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="p-color  text-dark h6">هي منصة تعليمية متكاملة في اختبار القدرات العامة ، تسعى المنصة لتوفير الدورات التعليمية مع معلمين متخصصين في مجال الاختبار وتوفير النماذج والاختبارات الالكترونية على الموقع الالكتروني</p>
                <a class="btn  btn-xl btn-outline-dark login-ptn"  width="59" height="59" href="{{ route('login') }}" >{{ __('الدخول الي المنصة ') }}</a>


 </div>
 </div>
</div>

</header>
            <!-- Whatsapp-channel -->
            <div class="whats">
            <div class="chaty-channel Whatsapp-channel single active chaty-tooltip pos-right has-on-hover" id="Whatsapp-0-channel" data-id="Whatsapp-0" data-widget="0" data-channel="Whatsapp">
                <a href="https://wh.ms//966570634462" target="_blank" rel="nofollow noopener" aria-label="Whatsapp" class="pos-right has-on-hover" data-form="chaty-form-0-Whatsapp" data-hover="Whatsapp">

                <span class="chaty-icon channel-icon-Whatsapp">
                    <span class="chaty-svg">

                <svg width="59" height="59" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#49E670"></circle>

                    <path d="M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z" transform="translate(12.9597 12.9597)" fill="#FAFAFA"></path>

                    <path d="M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z" transform="translate(7.7758 7.77582)" fill="white" stroke="white" stroke-width="0.2"></path>

                </svg>
            </span>
        </span>

        <span class="on-hover-text btn btn-primary  text-li ">Whatsapp</span>
    </a>
</div>
</div>
<!-- end Whatsapp-channel -->
<section class="page-section bg-white text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <!-- <h2 class="page-section-heading text-center text-uppercase text-white">About</h2> -->
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"  style="max-width: 35rem;"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line" style="max-width: 35rem;"></div>
                </div>

                <div class="section-title">
          <h2>مميزات المنصة</h2>
        </div>
                <!-- About Section Content-->
                <div class="row">
          <div class=" img-about col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1 "><img src="assets/img/teacher-2.png" alt=""></div>

                    <div class="col-xl-5 offset-xl-0 col-lg-5 offset-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                        <div class="icon-about">
                            <img id="icon-1" src="assets/img/icon_shape.png" alt="">
                            <img id="icon-2" src="assets/img/teacher-icon.png" alt="">
                        </div>

                        <ul class="text-dark blockquote">
                        <li><p class="p-color  text-dark h6 "><strong>إنشاء مجموعات دراسية جماعية للطلبة والتواصل المباشر معهم من خلال الفيديوهات المسجلة او حصص البث المباشر.</strong></p> </li>

                        <li><p class="p-color text-dark h6"><strong>الدعم الفني للحصص التعليمية قبل واثناء وبعد الحصة الدراسية.
إدارة الدروس أونلاين وتوفير الدعم الفني للحصص التعليمية قبل واثناء وبعد الحصه الدراسية.</strong></p> </li>

                        <li><p class="p-color text-dark h6"><strong>توفر المنصة التدريب للمدرسين مما يطور من مهاراتهم للقيام بعملية التعليم عن بعد</strong></p></li>
                        </ul>
                        <!-- About Section Button-->
                        <div class="text-center mt-4">
                <a class="btn  btn-xl btn-outline-dark login-ptn"  width="59" height="59" href="{{ route('login') }}" >{{ __('سجل معنا الان') }}</a>
                </div>
             </div>
          </div>
            </div>
        </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services" >
      <div class="container">
      <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"  style="max-width: 35rem;"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line" style="max-width: 35rem;"></div>
</div>
        <div class="section-title">
          <h2>ماذا نقدم </h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="select">ابدا من الصفر</a></h4>
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>
          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="select">نماذج حديثه</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>

          </div>

          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="select">تاسيس</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>

          </div>
          <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="select">الدورات</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, minus voluptatibus. Nobis, qui </p>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->





    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>تواصل معنا</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="offset-lg-3 col-lg-7 mt-5  mt-lg-0 d-flex align-items-stretch">
            <div class="info">
              <!-- <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div> -->

              <div class="email">
                <i class="bi bi-envelope "></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+966 57 063 4462</p>
              </div>
<!--
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->

            </div>

          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

           <!-- Footer-->
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
                        <h4 class="text-uppercase mb-4">روابط السوشيال الخاصه بنا</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://wh.ms//966570634462"><i class="fab fa-fw fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://youtube.com/@MGM-xy7cd?si=3w626aqev1jCc7UJ"><i class="fab fa-fw fa-youtube"></i></a>

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
