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
    .br{
      background: linear-gradient(90deg, #edc7b7 0%, #eee2dc 100%); 
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
      </div>
    </div>

    <section class="br">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
      </section>

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
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow" style="background-color: #f0e4da;">
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
  
  @include('footer')

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

      function toggleNavbar() {
      var navbar = document.querySelector('.navbar');
      navbar.classList.toggle('hidden');
    }function toggleNavbar() {
      var navbar = document.querySelector('.navbar');
      navbar.classList.toggle('hidden');
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
