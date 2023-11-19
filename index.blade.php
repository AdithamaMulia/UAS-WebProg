<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Sekolah</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="shortcut icon" href="./Img/LogoSekolah.png" type="image">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div class="flex items-center">
                <img class="w-16 cursor-pointer" src="Img/LogoSekolah.png" alt="...">
                <p class="ml-2"><strong>Sekolah Gracia</strong></p>
            </div>
            <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center gap-7">
                    <li>
                        <a class="hover:text-gray-500" href="{{ url('/student-information') }}">Student Information</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="{{ url('/course') }}">Course Overview</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#contact">Contact Us</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="{{ url('/about-us') }}">About Us</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="{{ url('/enroll-now') }}">Enroll Now</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Login</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>




    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The Best Education You can Get.</p>
                <p class="text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, optio labore doloremque veniam voluptatum nobis.</p>
                <button class="sbtn">Learn More</button>
            </div>

            <div class="secondHalf">
                <img src="{{ asset('Img') }}/LogoSekolah.png" alt="">
            </div>
        </div>
    </section>
    <br />
    <br />
    <br />
    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">Good Education Start from Here</p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro in molestias maxime. Iusto rem dolorum necessitatibus, reprehenderit nam, laborum tenetur eius ducimus officia, corrupti adipisci. Perspiciatis, sed excepturi saepe iure incidunt harum reiciendis eius consectetur neque error. Deleniti voluptatum totam accusantium, ipsum quas quidem cupiditate molestias porro, maiores vero praesentium sed dolore placeat delectus harum animi?</p>
        </div>
        <div class="thumbnail">
            <img src="{{ asset('Img') }}/siswa2.jpg" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <section class="section secLeft">
        <div class="paras">
        <p class="sectionTag text-big">Let's Grow together</p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro in molestias maxime. Iusto rem dolorum necessitatibus, reprehenderit nam, laborum tenetur eius ducimus officia, corrupti adipisci. Perspiciatis, sed excepturi saepe iure incidunt harum reiciendis eius consectetur neque error. Deleniti voluptatum totam accusantium, ipsum quas quidem cupiditate molestias porro, maiores vero praesentium sed dolore placeat delectus harum animi?</p>
        </div>
        <div class="thumbnail">
            <img src="{{ asset('Img') }}/sekolah1.jpg" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">Join Us!!!</p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro in molestias maxime. Iusto rem dolorum necessitatibus, reprehenderit nam, laborum tenetur eius ducimus officia, corrupti adipisci. Perspiciatis, sed excepturi saepe iure incidunt harum reiciendis eius consectetur neque error. Deleniti voluptatum totam accusantium, ipsum quas quidem cupiditate molestias porro, maiores vero praesentium sed dolore placeat delectus harum animi?</p>
        </div>
        <div class="thumbnail">
            <img src="{{ asset('Img') }}/join-us.jpg" alt="laptop image" class="imgFluid hack">
        </div>
    </section>
    <br/>
    <br/>
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="contact-content">
                <h2 class="section-title">Contact Us</h2>
                <p class="section-description">We'd love to hear from you. Please fill out the form below.</p>
                <div class="contact-form">
                    <h2>Contact Information:</h2>
                    <a><i class="fas fa-light fa-phone">    021-5983597</i></a>
                    <a href="https://www.instagram.com/schoolgracia/"><i class="fa-brands fa-instagram">    @schoolgracia</i></a>
                    <br/>
                </div>
                <div class="contact-hours">
                    <p>Opening Hours</p>
                    <p>Mon-Fri 07:00 - 16:00</p>
                    <p>Saturday 08.00- 12.00</p>
                </div>
                <br/>
                <br/>
                <i class="fas fa-light fa-location-dot">    Jl. Permata Sari A12 No. 007-009 Kelurahan Binong, Kecamatan Curug, Kabupaten Tangerang, Provinsi Banten</i>
            </div>
        </div>
    </section>

    <br/>
    <br/>
    <br/>


    <footer class="background">
        <p class="text-footer">Copyright &copy;Sekolah Gracia 2023</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://kit.fontawesome.com/cf0b085d13.js" crossorigin="anonymous"></script>

    <script>
        AOS.init();
    </script>
    <script src="./js/app.js"></script>
</body>
</html>
