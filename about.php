<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="الصفحة الرئيسية | قالب الأعمال - Wuilt Website Builder">
    <link rel="icon" type="png" href="./images/B 3rab.jpeg">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/aos.css">
    <!-- Boostrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="./css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@300;400;600;900&display=swap" rel="stylesheet">
    <!-- Swiper js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.css"
        integrity="sha512-Chxzu1hIgdTWzvBYD6rifXuhsG91mXCtYP/hKHSHPRyYUluMJt3PVEE6k4ThFrE4l0NVnq9dfYSj7mEubGCTvw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>سجل كمتطوع </title>
</head>

<body class="rtl">
    <!-- To Top -->
    <div class="toTop position-fixed text-white text-center">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    <!-- Header -->
    <header class="w-100">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#">
                <img src="./images/B 3rab.jpeg" alt="" class="logo">
            </a>
            <label class="hamburger">
                <input type="checkbox">
                <svg viewBox="0 0 32 32" class="">
                    <path class="line line-top-bottom" ;=""
                        d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                    </path>
                    <path class="line C" d="M7 16 27 16"></path>
                </svg>
            </label>
            <nav>
                <ul class="d-flex align-items-center gap-4">
                    <li>
                        <a href="./index.php" class="text-white position-relative">الرئيسية</a>
                    </li>
                    <li>
                        <a href="./services.html" class="text-white position-relative">أعمالنا</a>
                    </li>
                    <li>
                        <a href="./partners.html" class="text-white position-relative">مكتبتنا</a>
                    </li>
                    </li>
                    <li>
                        <a href="about.php" class="text-white position-relative active">سجل كمتطوع </a>
                    </li>
                    <li>
                        <a href="./contact.html" class="text-white position-relative">من نحن</a>
                    </li>
                </ul>
            </nav>
            <div class="language-picker language-picker--hide-label js-language-picker"
                data-trigger-class="li4-btn li4-btn--subtle js-tab-focus">
                <form action="" class="language-picker__form">
                    <label for="language-picker-select">Select your language</label>
                    <select name="language-picker-select" id="language-picker-select">
                        <option lang="ar" value="arabic" selected>Arabic</option>
                        <option lang="en" value="english">English</option>
                    </select>
                </form>
            </div>
        </div>
    </header>

    <!-- About Company -->

    <div class="heading position-relative">
        <h1 class="position-relative text-center fw-bold">التسجيل في الأنشطة والمبادرات</h1>
        <p class="text-center text-white mb-0 mt-4 px-3 position-relative">لعمل التطوعي يعود بالفائدة على المتطوع نفسه
            والجهة التي يتطوع لها والمجتمع بشكل عام

            فرصة تطوعية لعمل أنشطة وفعاليات (توعوية وتثقيفية وترفيهية ) لمختلف المراكز والمدارس والتي تهدف الى دعم
            الطلاب نفسياً وتوعيتهم في مختلف المجالات .

            يرجى تعبئة النموذج في حال توفرت الشروط اللازمة لدى المتطوع : لديه روح التطوع ومساعدة الأخرين ، متخصص في
            المجالات التربوية طلاب وخريجيين مرحب بهم .</p>
    </div>


    <section class="contact">
        <div class="container position-relative d-flex align-items-center flex-column">
            <h2 class="fw-bold text-center" data-aos="fade-in">أترك لنا بيانات الإتصال الخاصة بك لنتواصل معك </h2>
            <div class="login-box w-100" data-aos="fade-up">
                <form action="./endpoint/add-user.php" method="POST">
                    <div class="user-box position-relative">
                        <label for="firstName" onclick="clear"> الاسم الرباعي
                        </label>
                        <br> <br>
                        <input type="text" class="form-control" id="firstName" name="first_name"
                            onclick="clearField('firstName')">
                    </div>
                    <div class="user-box position-relative">
                        <label for="lastName"> التخصص / مجال العمل
                        </label> <br> <br>
                        <input type="text" class="form-control" id="lastName" name="last_name">
                    </div>
                    <div class="user-box position-relative">
                        <label>ما هو دافعك للتطوع</label> <br> <br>
                        <input type="text" required="" class="form-control" id="email" name="email">
                    </div>
                    <div class="user-box position-relative">

                        <label for="registerabuzir">هل أنت متفرغ دائماً / أذكر الأيام المناسبة لك للتطوع ؟
                        </label> <br> <br>
                        <input type="text" class="form-control" id="registerabuzir" name="abuzir">

                    </div>
                    <div class="user-box position-relative">

                        <label for="registerUsername"> المحافظة </label> <br> <br>
                        <input type="text" class="form-control" id="registerrawan" name="rawan">
                    </div>
                    <div class="user-box position-relative">

                        <label for="contactNumber">رقم الهاتف </label> <br> <br>
                        <input type="number" class="form-control" id="contactNumber" name="contact_number"
                            maxlength="11">
                    </div>
                    <div class="user-box position-relative">
                        <label for="registerPassword"> اكتب المجال الذي ترعب بالتطوع به : </label> <br> <br>
                        <select type="text" class="form-control" id="registerPassword" name="password">
                            <option value="option1"> مدرب</option>
                            <option value="option2"> التأليف التربوي</option>
                            <option value="option3"> "صانع محتوى "مصور فيديوهات</option>
                            <option value="option4"> متطوع ميداني مع الاطفال </option>
                        </select>

                    </div>

                    <p class="registrationForm" onclick="showLoginForm()">
                        <- Back</p>
                            <button type="submit" class="btn btn-dark login-register form-control">Register</button>
                </form>
            </div>
        </div>

    </section>



    <script>
    // Constant variables
    const loginForm = document.getElementById('loginForm');
    const registrationForm = document.getElementById('registrationForm');

    // Hide registration form
    registrationForm.style.display = "none";


    function showRegistrationForm() {
        registrationForm.style.display = "";
        loginForm.style.display = "none";
    }

    function showLoginForm() {
        registrationForm.style.display = "none";
        loginForm.style.display = "";
    }
    </script>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>






    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="Heading position-relative" data-aos="fade-in">
                <h1 class="text-center"> بعض من تعليقاتكم الرائعة </h1>
            </div>
            <div class="row gap-sm-0 gap-5">
                <div class="column p-3 col-lg-4 col-sm-6 d-flex flex-column  position-relative bg-white">
                    <div class="card h-100 border-0 p-3 rounded-3" data-aos="slide-up" data-aos-duration="800">
                        <div class="image rounded-pill position-absolute">
                            <img class="w-100 h-100 rounded-pill"
                                src="https://scontent.famm3-3.fna.fbcdn.net/v/t1.18169-9/11899876_1681623005403710_3987822117153825624_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=be3454&_nc_eui2=AeHTPi2fIVKE0kdfl19AB_MlfoNC0VOqFtl-g0LRU6oW2S1Ac178hpf8-Nt3NCj0e9OZkLV1OHJJEVqT5cWYsDNU&_nc_ohc=pTDyQ7ChLz8AX-HpXp3&_nc_ht=scontent.famm3-3.fna&oh=00_AfDlrpMRjhBtpkXiTES77vJxunaT_HJcOekP_fZSCiD90w&oe=65DA19AE"
                                alt="">
                        </div>
                        <h3 class="text-capitalize mb-2 fw-bold mb-3 lh-base">Amera M Abed
                            <span class="text-black-50 d-block fw-bolder fst-italic fs-5"> </span>
                        </h3>
                        <p class="lh-base text-black-50"> <span class="fw-bold text-black">
                            </span> يعطيك العافية مدربتنا الرائعة أماني💐
                        </p>
                    </div>
                </div>
                <div class="column p-3 col-lg-4 col-sm-6 d-flex flex-column  position-relative bg-white">
                    <div class="card h-100 border-0 p-3 rounded-3" data-aos="slide-up" data-aos-duration="1000">
                        <div class="image rounded-pill position-absolute">
                            <img class="w-100 h-100 rounded-pill"
                                src="https://scontent.famm3-3.fna.fbcdn.net/v/t39.30808-1/387828879_10218981974379352_4793295308599461826_n.jpg?stp=dst-jpg_p240x240&_nc_cat=107&ccb=1-7&_nc_sid=5740b7&_nc_eui2=AeGgkhDCsioOQdl1hkjcWA-eivjNjb9Z0QKK-M2Nv1nRAkYVKjdRIcMoVGiXo65Rpz2m-fRNyoJdKLKDAa12pt3E&_nc_ohc=nsFjABKR2RcAX8BYQPc&_nc_ht=scontent.famm3-3.fna&oh=00_AfAHv7zspuj4hGmscuNT01QGiqvt7oNoJH1uB0V6fvWb5w&oe=65B7E165"
                                alt="">
                        </div>
                        <h3 class="text-capitalize mb-2 fw-bold mb-3 lh-base">Ibrahim <span class="d-block">Moh'd
                                Tabazeh </span>
                        </h3>
                        <p class="lh-base text-black-50"> <span class="fw-bold text-black"> </span> نقطة مهمه ، ابدعتِ
                            👌

                        </p>
                    </div>
                </div>
                <div class="column p-3 col-lg-4 col-sm-6 d-flex flex-column  position-relative bg-white">
                    <div class="card h-100 border-0 p-3 rounded-3" data-aos="slide-up" data-aos-duration="1200">
                        <div class="image rounded-pill position-absolute">
                            <img class="w-100 h-100 rounded-pill"
                                src="https://scontent.famm3-3.fna.fbcdn.net/v/t39.30808-6/398370618_6804940882908389_6245772789174776462_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeGafxS0LurKa5zVlTRSdE5IH2QspWRoDh4fZCylZGgOHg_v0LZDcjqe5GBH52iYu2pN7DwKFJVn4NY1PuURh4e4&_nc_ohc=4O2kzvSw5vgAX_ryoS-&_nc_zt=23&_nc_ht=scontent.famm3-3.fna&oh=00_AfAsdh7TDfCjQbe6rWhqHDgN-N2QqMv1VsnO5HDlW9WyAA&oe=65B84E77"
                                alt="">
                        </div>
                        <h3 class="text-capitalize mb-2 fw-bold mb-3 lh-base">Zaheera <span class="d-block"> Al-qawasmi
                                Al-qawasmi</span>
                        </h3>
                        <p class="lh-base text-black-50">
                            موفقة وجد ماراح تخطر ببال احد<span class="fw-bold text-black">
                            </span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">

            <div class="row gap-sm-0 gap-5">
                <div class="column p-3 col-lg-4 col-sm-6 d-flex flex-column  position-relative bg-white">
                    <div class="card h-100 border-0 p-3 rounded-3" data-aos="slide-up" data-aos-duration="800">
                        <div class="image rounded-pill position-absolute">
                            <img class="w-100 h-100 rounded-pill"
                                src="https://scontent.famm3-2.fna.fbcdn.net/v/t39.30808-1/379057164_322981576808275_1880490565836395420_n.jpg?stp=dst-jpg_s320x320&_nc_cat=106&ccb=1-7&_nc_sid=5740b7&_nc_eui2=AeGUlh6X--lDg1lsfrsGFeKogJEZRWunsjWAkRlFa6eyNXnHTfJyxtOAqyStTQmwsn1Xle-ShriJCN5SVIiVzihY&_nc_ohc=9f3KHBjigIoAX-FmKk7&_nc_ht=scontent.famm3-2.fna&oh=00_AfAy_xwhQshYQ-6cDpk9YC5ggyBXDbdYcJKk79vUq6oueg&oe=65BBEC4F"
                                alt="">
                        </div>
                        <h3 class="text-capitalize mb-2 fw-bold mb-3 lh-base">Anwar Saleh
                            <span class="text-black-50 d-block fw-bolder fst-italic fs-5"> </span>
                        </h3>
                        <p class="lh-base text-black-50"> <span class="fw-bold text-black">
                            </span> بلتوفيق يا عمري 🤍
                        </p>
                    </div>
                </div>
                <div class="column p-3 col-lg-4 col-sm-6 d-flex flex-column  position-relative bg-white">
                    <div class="card h-100 border-0 p-3 rounded-3" data-aos="slide-up" data-aos-duration="1000">
                        <div class="image rounded-pill position-absolute">
                            <img class="w-100 h-100 rounded-pill"
                                src="https://scontent.famm3-1.fna.fbcdn.net/v/t39.30808-6/387739020_6072906059477584_8522532471805417336_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeHUf2GdphRFd9TGkdWEiQ8RF8CGMihQba8XwIYyKFBtry9s2-1Vhr1iz6O3Cej4mzIVNFu0_zEw6VYsclRVX50y&_nc_ohc=Z3YeyRJfOLoAX9se7ft&_nc_zt=23&_nc_ht=scontent.famm3-1.fna&oh=00_AfDJVc2dzxs3B6RVmYC_L4i8WMLWKtBfLOjWPsqIld9X0A&oe=65BB914D"
                                alt="">
                        </div>
                        <h3 class="text-capitalize mb-2 fw-bold mb-3 lh-base">Hamzeh Al-Alawneh <span class="d-block">
                            </span>
                        </h3>
                        <p class="lh-base text-black-50"> <span class="fw-bold text-black"> </span>

                            اول شي يعطيكي الف عافيه يارب رند
                            تاني شي حكيتي عن موضوع جداً حساس واعتقد بوقت كتير مهم وفكرتك بالطرح بهيك موضوع كتير حلو صح
                            اوجزتي فابدعتي
                            الموضوع بده لسى شرح اكتر وكتير ناس عم يتسائلوا هلا بعد هدا الموضوع والطرح انه ايش الطريقة
                            الصحيحة للتواصل مع طفلي
                            ننتظر منك فيديو تاني توضحي فيه اكتر
                            استمري على ما تقدمي

                        </p>
                    </div>
                </div>
                <div class="column p-3 col-lg-4 col-sm-6 d-flex flex-column  position-relative bg-white">
                    <div class="card h-100 border-0 p-3 rounded-3" data-aos="slide-up" data-aos-duration="1200">
                        <div class="image rounded-pill position-absolute">
                            <img class="w-100 h-100 rounded-pill" src="./images/partner11.png" alt="">
                        </div>
                        <h3 class="text-capitalize mb-2 fw-bold mb-3 lh-base">Reyam
                            <span class="d-block"> Alqaissy</span>
                        </h3>
                        <p class="lh-base text-black-50">
                            انا بتعلم كل يوم من خلال تعاملي مع الأطفال اشياء جديدة عادي 😍😍❤️❤️<span
                                class="fw-bold text-black">
                            </span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="position-relative" dir="ltr">
        <div
            class="container d-flex justify-content-between align-items-center flex-column flex-lg-row flex-md-row gap-4">
            <a href="#" class="logo">
                <img src="./images/B 3rab.jpeg" alt="">
            </a>
            <div class="links text-center text-md-end text-lg-end">
                <h3 class="mb-3 fw-bold">روابط سريعة</h3>
                <ul>
                    <li class="mb-2">
                        <a href="./index.php" class="text-white d-inline-block">الرئيسية</a>
                    </li>
                    <li class="mb-2">
                        <a href="./services.html" class="text-white d-inline-block">أعمالنا</a>
                    </li>
                    <li class="mb-2">
                        <a href="./partners.html" class="text-white d-inline-block">مكتبتنا</a>
                    </li>
                    <li class="mb-2">
                        <a href="./about.php" class="text-white d-inline-block">سجل كمتطوع </a>
                    </li>
                    <li class="mb-2">
                        <a href="./contact.html" class="text-white d-inline-block"> من نحن</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Speed dial menu -->
    <button
        class="speed-dial d-flex justify-content-center align-items-center position-fixed border-0 rounded-pill text-center text-white"><svg
            fill="rgb(35, 41, 388)" height="34" width="34" viewBox="0 0 24 24" style="padding-top: 4px;">
            <path
                d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z">
            </path>
            <path d="M0 0h24v24H0z" fill="none"></path>
        </svg></button>

    <div class="speed-dial-popup position-fixed">
        <a href="https://web.facebook.com/YALANETGHAYARTV/?_rdc=1&_rdr"
            class="speed-dial-option d-flex justify-content-center align-items-center rounded-pill text-white text-decoration-none">
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/yala_tv/?igshid=YmMyMTA2M2Y%3D"
            class="speed-dial-option d-flex justify-content-center align-items-center rounded-pill text-white text-decoration-none">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://web.whatsapp.com/"
            class="speed-dial-option d-flex justify-content-center align-items-center rounded-pill text-white text-decoration-none">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="https://www.youtube.com/@TV-dq7oj"
            class="speed-dial-option d-flex justify-content-center align-items-center rounded-pill text-white text-decoration-none">
            <i class="fa-brands fa-youtube"></i>
        </a>
    </div>
    <!-- Swiper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"
        integrity="sha512-0N/5ZOjfsh3niel+5dRD40HQkFOWaxoVzqMVAHnmAO2DC3nY/TFB7OYTaPRAFJ571IRS/XRsXGb2XyiFLFeu1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function getLanguageUrl(option) {
        return './en/about.html';
    };
    </script>
    <script src="./js/aos.js"></script>
    <script src="./js/Swiper.js"></script>
    <script src="./js/lang.js"></script>
    <!-- Main Javascript File -->
    <script src="./js/main.js"></script>
</body>

</html>