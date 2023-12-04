<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <style>
    header {
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
    .nav-links {
      display: none;
      position: absolute;
      background-color: white;
      width: 100%;
      left: 0;
      top: -100%;
      transition: top 0.5s ease;
      padding: 0 1rem;
    }
    .nav-links ul {
      display: flex;
      flex-direction: column;
      align-items: left;
      gap: 1rem;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .nav-links ul li a {
      color: black;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .nav-links ul li a:hover {
      color: #888;
    }
    .nav-links.show {
      display: flex;
      top: 75px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }
   
    @media (max-width: 768px) {
      .nav-links.show {
        display: flex;
        top: 75px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }
    }
  </style>
</head>

<body class="bg-cyan-400">
  <header class="bg-white sticky-top">
    <nav class="flex justify-between items-center w-[92%] h-[75px] mx-auto">
      <div class="flex items-center">
        <a href="<?php echo e(url('/home')); ?>">
          <img class="w-16 cursor-pointer" src="<?php echo e(asset('img/LogoSekolah.png')); ?>">
        </a>
        <p class="ml-2"><strong>Sekolah Gracia</strong></p>
      </div>
      <div class="nav-links" id="navLinks"> 
        <ul class="hidden md:flex md:flex-row flex-col md:items-center gap-7">
          <li>
            <a class="hover:text-gray-500" href="/home">Home</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/kelas">Class List</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="#contact">Contact Us</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/aboutus">About Us</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/listadmin">Admin</a>
          </li>
        </ul>
      </div>

      <div id="navLinks"> 
        <ul class="hidden md:flex md:flex-row flex-col md:items-center gap-7">
          <li>
            <a class="hover:text-gray-500" href="/home">Home</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/kelas">Class List</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/contact">Contact Us</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/aboutus">About Us</a>
          </li>
          <li>
            <a class="hover:text-gray-500" href="/listadmin">Admin</a>
          </li>
        </ul>
      </div>
      <div class="flex items-center gap-6">
        <a href="/logout"><button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Logout</button></a>
        <ion-icon onclick="onToggleMenu()" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
      </div>
    </nav>
  </header>

  <script>
    function onToggleMenu() {
      const navLinks = document.getElementById('navLinks');
      navLinks.classList.toggle('show');
    }

  </script>
</body>
</html>
<?php /**PATH D:\Program Files (x86)\XAMPP\htdocs\Tugas Campus\WEBPROG Real Backup 051123\UAS WebProg\UAS-WebProg\graciaweb-app\resources\views/navbar.blade.php ENDPATH**/ ?>