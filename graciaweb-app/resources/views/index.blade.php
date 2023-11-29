<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>
      Gracia School
    </title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }

      .navbar {
      position: sticky;
      top: 0;
      z-index: 1000; 
      background-color: #fff; 
     }

     .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1000;
    }
    
    .gradient1 {
    background: linear-gradient(90deg, #edc7b7 0%, #eee2dc 100%); 
    }

    .imgFluid {
      border-radius: 12px; 
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
      height: 100%;
      max-height: 800px;
      width: 100%;
      max-width: 850px;
    }
    .imgFluid1{
      border-radius: 12px; 
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
      height: 100%;
      max-height: 500px;
      width: 100%;
      max-width: 550px;
    }
    </style>
  </head>
  <body class="l" style="font-family: 'Source Sans Pro', sans-serif;">

  @include('navbar')
  <div class="pt-24 gradient1">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center" data-aos="fade-up">
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left" data-aos="fade-right">
        <p class="uppercase tracking-loose w-full">Sekolah Gracia</p>
        <h1 class="my-4 text-5xl font-bold leading-tight mr-4" data-aos="fade-left">
          The Best Education you
          Can Get!!
        </h1>
        <p class="leading-normal text-2xl mb-8" data-aos="fade-up">
          Providing quality education opens doors to a brighter future. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
        </p>
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out mr-4" style="margin-top: -10px" data-aos="zoom-in">
          Lets Begin!!
        </button>
      </div>
      <div class="w-full md:w-3/5 py-6 text-center  " data-aos="fade-left">
      <img src="{{ asset('img') }}/sekolah1.jpg" alt="laptop image" class="imgFluid">
      </div>
    </div>
  </div>

        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
    <linearGradient id="waveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
        <stop offset="0%" style="stop-color: #f7a400" /> 
        <stop offset="50%" style="stop-color: #f3e0e6" /> 
        <stop offset="100%" style="stop-color: #fffacd" /> 
    </linearGradient>
    </defs>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="url(#waveGradient)">
                    <path
                        d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
                    ></path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                    <g transform="translate(719.500000, 131.500000) rotate(180) translate(-719.500000, -131.500000)">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"
                        ></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                    </g>
                </g>
            </g>
        </g>
    </svg>
      </div>
    </div>

    <section class="border-b py-8" style="background: linear-gradient(90deg, #edc7b7 0%, #eee2dc 100%);">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" data-aos="fade-up">
          Kenapa pilih kami?
        </h2>
        <div class="w-full mb-4" data-aos="fade-up">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <section>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 p-6 mt-6 flex flex-col justify-center" data-aos="slide-right">
          <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            Education Matters
          </h3>
          <p class="text-gray-600 mb-8">
            Providing quality education opens doors to a brighter future. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
          </p>
        </div>
        <div class="w-full sm:w-1/2 p-6 mt-6 flex" data-aos="slide-left">
          <img src="{{ asset('img') }}/siswa1.jpg" alt="laptop image" class="imgFluid1 ml-auto">
        </div>
      </div>


    </div>
    </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 p-6 mt-6 flex" data-aos="slide-right">
        <img src="{{ asset('img') }}/join-us.jpg" alt="laptop image" class="imgFluid1 ml-auto">
        </div>


        <div class="w-full sm:w-1/2 p-6 mt-6 flex flex-col-reverse sm:flex-row">
  <div class="w-full sm:w-1/2 p-6 flex flex-col justify-center" data-aos="slide-left">
    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
      Join Us Now!!
    </h3>
    <p class="text-gray-600 mb-8">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
    </p>
  </div>
  </p>
  </div>
  </div>
  </div>
  </div>
  </section>
    <section class="bg-white border-b py-8" style="background: linear-gradient(90deg, #edc7b7 0%, #eddbcc 100%);">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        FACILITIES
        </h2>
        <br />
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow style="background-color: #f0e4da;">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-3">
                Fasilitas Sekolah
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Computer Laboratory
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6" style="background-color: #edded1;">
        <div class="flex items-center justify-start">
          <img src="{{ asset('img') }}/computer.jpg" alt="laptop image" class="imgFluid ml-auto">
        </div>
    </div>

        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow" style="background-color: #f0e4da;">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-3">
              Fasilitas Sekolah
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Science Laboratory
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6" style="background-color: #edded1;">
        <div class="flex items-center justify-start">
        <img src="{{ asset('img') }}/sciencelab.jpg" alt="laptop image" class="imgFluid ml-auto">
        </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow" style="background-color: #f0e4da;">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-3">
              Fasilitas Sekolah
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Music Room
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6" style="background-color: #edded1;">
        <div class="flex items-center justify-start">
        <img src="{{ asset('img') }}/musicroom.jpg" alt="laptop image" class="imgFluid ml-auto">
        </div>
          </div>
        </div>
      </div>
  </section>

  <section id="contact" style="background: linear-gradient(90deg, #eee2dc 0%, #bab2b5 50%); ">
  <div class="contact-container  flex justify-center items-center">
    <div class="contact-content text-center">
      <h2 class="section-title">Contact Us</h2>
      <p class="section-description">We'd love to hear from you.</p>
      <div class="contact-form">
        <h2>Contact Information:</h2>
        <a><i class="fas fa-light fa-phone">    021-5983597</i></a>
        <a href="https://www.instagram.com/schoolgracia/"><i class="fa-brands fa-instagram">    @schoolgracia</i></a>
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

    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");

          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");

          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        if (!checkParent(target, navMenuDiv)) {
          if (checkParent(target, navMenu)) {
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }

    </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
        duration: 900
      });

    </script>
    </body>
  </body>
</html>
