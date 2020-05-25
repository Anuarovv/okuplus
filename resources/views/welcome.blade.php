<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OKUPLUS - Education System</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <!-- <h1 class="text-light"><a href="">OKUPLUS</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href=""><img src="/img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Главная</a></li>
                <!-- <li><a href="#features">App Features</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#faq">F.A.Q</a></li>
                <li><a href="#contact">Contact Us</a></li>

                <li class="get-started"><a href="#features">Get Started</a></li> -->
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Вы вошли в систему</a></li>
                    @else
                <li><a data-toggle="modal" data-target="#loginModal"class="nav-link btn btn-outline-dark" href="/login">Войти</a></li>
                    @if (Route::has('register'))
                <li><a data-toggle="modal" data-target="#registerModal" class="nav-link btn btn-primary mx-2" href="/register">Регистрация</a></li>
                    @endif
                    @endauth
                @endif
                 {{--   @if (Route::has('login'))
                            @auth
                                  <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                                  <li><a href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                   <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                    @endif--}}


            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                <div>
                    <h1>OKUPLUS - online education system</h1>
                    <h2>Платформа для онлайн образования</h2>
                    <a href="#" class="get-started"><i class="bx bxl-play-store"></i> Начать</a>
                    <!-- <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> -->
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>Возможности</h2>
                <p>Мы можем предложить вам отличные решения для вашего бизнеса</p>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-shield"></i>
                                <h4>ОТКРЫВАЙТЕ ДОСТУП</h4>
                                <p>К урокам и заданиям по удобному вам расписанию: все уроки сразу, в фиксированные даты, в зависимости от даты регистрации на курсе</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-images"></i>
                                <h4>СОЗДАВАЙТЕ ПЛАТНЫЕ И БЕСПЛАТНЫЕ КУРСЫ</h4>
                                <p>Доступ к курсу предоставляется студентам автоматически в момент покупки, или бесплатной регистрации</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>ГЕЙМИФИКАЦИЯ</h4>
                                <p>Геймифицируйте обучение: проверяйте домашние задания, выставляйте оценки, добавляйте таблицу успеваемости в курс и награждайте лучших учеников</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-receipt"></i>
                                <h4>АНАЛИЗИРУЙТЕ</h4>
                                <p>Продажи, активность и успеваемость студентов в автоматических отчетах</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="/img/details-4.png" class="img-fluid" alt="">
                    <!-- <img src="/img/features.svg" class="img-fluid" alt=""> -->
                </div>
            </div>

        </div>
    </section> <!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <!-- <section id="details" class="details">
         <div class="container">

             <div class="row content">
                 <div class="col-md-4" data-aos="fade-right">
                     <img src="/img/details-1.png" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-8 pt-4" data-aos="fade-up">
                     <h3>ОТКРЫВАЙТЕ ДОСТУП</h3>
                     <p class="font-italic">
                         К урокам и заданиям по удобному вам расписанию:
                     </p>
                     <ul>
                         <li><i class="icofont-check"></i> Все уроки сразу</li>
                         <li><i class="icofont-check"></i> В фиксированные даты</li>
                         <li><i class="icofont-check"></i> В зависимости от даты регистрации на курсе</li>
                     </ul>
                     <p>
                       с любовью, okuplus - онлайн образовательная платформа
                     </p>
                 </div>
             </div>

             <div class="row content">
                 <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                     <img src="/img/details-2.png" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                     <h3>СОЗДАВАЙТЕ ПЛАТНЫЕ И БЕСПЛАТНЫЕ КУРСЫ</h3>
                     <p class="font-italic">
                         Доступ к курсу предоставляется студентам автоматически в момент покупки, или бесплатной регистрации.
                     </p>
                 </div>
             </div>

             <div class="row content">
                 <div class="col-md-4" data-aos="fade-right">
                     <img src="/img/details-3.png" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-8 pt-5" data-aos="fade-up">
                     <h3>ГЕЙМИФИКАЦИЯ</h3>
                     <p>Геймифицируйте обучение:</p>
                     <ul>
                         <li><i class="icofont-check"></i> Проверяйте домашние задания</li>
                         <li><i class="icofont-check"></i> Выставляйте оценки</li>
                         <li><i class="icofont-check"></i> Добавляйте таблицу успеваемости и награждайте лучших учеников</li>
                     </ul>
                     <p>
                         с любовью, okuplus - онлайн образовательная платформа
                     </p>
                 </div>
             </div>

             <div class="row content">
                 <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                     <img src="/img/details-4.png" class="img-fluid" alt="">
                 </div>
                 <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                     <h3>АНАЛИЗИРУЙТЕ</h3>
                     <p class="font-italic">
                         Продажи, активность и успеваемость студентов в автоматических отчетах.
                     </p>
                 </div>
             </div>

         </div>
     </section> --> <!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
        <div class="container">

            <div class="section-title">
                <h2>Gallery</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="owl-carousel gallery-carousel" data-aos="fade-up">
                <a href="/img/gallery/gallery-1.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-1.png" alt=""></a>
                <a href="/img/gallery/gallery-2.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-2.png" alt=""></a>
                <a href="/img/gallery/gallery-3.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-3.png" alt=""></a>
                <a href="/img/gallery/gallery-4.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-4.png" alt=""></a>
                <a href="/img/gallery/gallery-5.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-5.png" alt=""></a>
                <a href="/img/gallery/gallery-6.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-6.png" alt=""></a>
                <a href="/img/gallery/gallery-7.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-7.png" alt=""></a>
                <a href="/img/gallery/gallery-8.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-8.png" alt=""></a>
                <a href="/img/gallery/gallery-9.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-9.png" alt=""></a>
                <a href="/img/gallery/gallery-10.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-10.png" alt=""></a>
                <a href="/img/gallery/gallery-11.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-11.png" alt=""></a>
                <a href="/img/gallery/gallery-12.png" class="venobox" data-gall="gallery-carousel"><img src="/img/gallery/gallery-12.png" alt=""></a>
            </div>

        </div>
    </section> -->
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
         <div class="container">

             <div class="section-title">
                 <h2>Testimonials</h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

                 <div class="testimonial-wrap">
                     <div class="testimonial-item">
                         <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                         <h3>Saul Goodman</h3>
                         <h4>Ceo &amp; Founder</h4>
                         <p>
                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                             Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                         </p>
                     </div>
                 </div>

                 <div class="testimonial-wrap">
                     <div class="testimonial-item">
                         <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                         <h3>Sara Wilsson</h3>
                         <h4>Designer</h4>
                         <p>
                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                             Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                         </p>
                     </div>
                 </div>

                 <div class="testimonial-wrap">
                     <div class="testimonial-item">
                         <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                         <h3>Jena Karlis</h3>
                         <h4>Store Owner</h4>
                         <p>
                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                             Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                         </p>
                     </div>
                 </div>

                 <div class="testimonial-wrap">
                     <div class="testimonial-item">
                         <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                         <h3>Matt Brandon</h3>
                         <h4>Freelancer</h4>
                         <p>
                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                             Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                         </p>
                     </div>
                 </div>

                 <div class="testimonial-wrap">
                     <div class="testimonial-item">
                         <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                         <h3>John Larson</h3>
                         <h4>Entrepreneur</h4>
                         <p>
                             <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                             Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                         </p>
                     </div>
                 </div>

             </div>

         </div>
     </section> --> <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>ТАРИФЫ</h2>
                <p>Сравните возможности тарифов и выберите наиболее подходящий</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box" data-aos="fade-right">
                    <h3>Базовый</h3>
                    <h4>30 000₸<span>в месяц</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Базовая платформа для курсов</li>
                        <li><i class="bx bx-check"></i> CRM система</li>
                        <li><i class="bx bx-check"></i> Аналитика</li>
                        <li><i class="bx bx-check"></i>Тех. поддержка 24/7</li>
                        <!-- <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li> -->
                    </ul>
                    <a href="#" class="get-started-btn">Начать</a>
                </div>

                <div class="col-lg-4 box featured" data-aos="fade-up">
                    <h3>Идеальный</h3>
                    <h4>300 000₸<span>в год</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Флагманская платформа</li>
                        <li><i class="bx bx-check"></i> CRM + ERP системы</li>
                        <li><i class="bx bx-check"></i> Подключение POWER BI</li>
                        <li><i class="bx bx-check"></i> Тех.поддержка 24/7</li>
                    </ul>
                    <a href="#" class="get-started-btn">Начать</a>
                </div>

                <div class="col-lg-4 box" data-aos="fade-left">
                    <h3>Супер +</h3>
                    <h4>40 000₸<span>в месяц</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Флагманская платформа</li>
                        <li><i class="bx bx-check"></i> CRM + ERP системы</li>
                        <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bx bx-check"></i> Подключение POWER BI</li>
                        <li><i class="bx bx-check"></i> Тех. поддержка 24/7</li>
                    </ul>
                    <a href="#" class="get-started-btn">Начать</a>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">

                <h2>ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>

            </div>

            <div class="accordion-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Как начать пользоваться платформой? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                            <p>
                                1. Отправляете нам заявку на почту support@okuplus.kz
                            </p>
                            <p>
                                2. Мы вам скидываем полную инструкцию в PDF формате
                            </p>
                            <p>
                                3. Оплачиваете тарифный план
                            </p>
                            <p>
                                4. Наша тех. поддержка подключит платформу на ваш домен с хостингом
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Что такое ERP? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                            <p>
                                ERP (англ. Enterprise Resource Planning, планирование ресурсов предприятия) — организационная стратегия интеграции производства и операций, управления трудовыми ресурсами,
                                финансового менеджмента и управления активами,
                                ориентированная на непрерывную балансировку и
                                оптимизацию ресурсов предприятия посредством
                                специализированного интегрированного пакета
                                прикладного программного обеспечения,
                                обеспечивающего общую модель данных и процессов для всех сфер деятельности. ERP-система — конкретный программный пакет, реализующий стратегию ERP
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Нужен ли программист для подключения платформы? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                            <p>
                                Чтобы вы успешно начали пользоваться нашей платформой для онлайн курсов, не требуется наличия программиста.
                                Наша техническая поддержка сделает всю рутинную работу за ВАС!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Что такое POWER BI? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                            <p>
                                Power BI — это комплексное программное обеспечение бизнес-анализа (BI) компании Microsoft,
                                объединяющее несколько программных продуктов, имеющих общий технологический и визуальный
                                дизайн, соединителей (шлюзов), а также web-сервисов.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
         <div class="container">

             <div class="section-title">
                 <h2>Contact</h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="row">

                 <div class="col-lg-6">
                     <div class="row">
                         <div class="col-lg-6 info" data-aos="fade-up">
                             <i class="bx bx-map"></i>
                             <h4>Address</h4>
                             <p>A108 Adam Street,<br>New York, NY 535022</p>
                         </div>
                         <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                             <i class="bx bx-phone"></i>
                             <h4>Call Us</h4>
                             <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                         </div>
                         <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                             <i class="bx bx-envelope"></i>
                             <h4>Email Us</h4>
                             <p>contact@example.com<br>info@example.com</p>
                         </div>
                         <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                             <i class="bx bx-time-five"></i>
                             <h4>Working Hours</h4>
                             <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                         <div class="form-group">
                             <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                             <div class="validate"></div>
                         </div>
                         <div class="form-group">
                             <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                             <div class="validate"></div>
                         </div>
                         <div class="form-group">
                             <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                             <div class="validate"></div>
                         </div>
                         <div class="form-group">
                             <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                             <div class="validate"></div>
                         </div>
                         <div class="mb-3">
                             <div class="loading">Loading</div>
                             <div class="error-message"></div>
                             <div class="sent-message">Your message has been sent. Thank you!</div>
                         </div>
                         <div class="text-center"><button type="submit">Send Message</button></div>
                     </form>
                 </div>

             </div>

         </div>
     </section> -->
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <!-- <div class="footer-newsletter" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
                     <h3>Appland</h3>
                     <p>
                         A108 Adam Street <br>
                         New York, NY 535022<br>
                         United States <br><br>
                         <strong>Phone:</strong> +1 5589 55488 55<br>
                         <strong>Email:</strong> info@example.com<br>
                     </p>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
                     <h4>Useful Links</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                     <h4>Our Services</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                     <h4>Our Social Networks</h4>
                     <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                     <div class="social-links mt-3">
                         <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                         <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                         <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                         <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                         <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                     </div>
                 </div>

             </div>
         </div>
     </div> -->

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>OKUPLUS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
            Designed by <a href="https://desigo.kz/">DesiGo</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="loginModalLabel">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                @include('auth.login-element')
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
     aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="registerModalLabel">Register</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                @include('auth.register-element')
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>
<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/vendor/venobox/venobox.min.js"></script>
<script src="/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="/js/main.js"></script>

</body>

</html>
