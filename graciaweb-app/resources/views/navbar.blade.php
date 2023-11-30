    <?php ?>

    <style>

        header {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

    </style>
    <header class="bg-white sticky-top">
    <nav class="flex justify-between items-center w-[92%] h-[75px] mx-auto">
        <div class="flex items-center">
            <a href="{{ url('/home') }}">
                <img class="w-16 cursor-pointer" src="Img/LogoSekolah.png" alt="...">
            </a>
            <p class="ml-2"><strong>Sekolah Gracia</strong></p>
        </div>
        <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center gap-7">
            <li>
                    <a class="hover:text-gray-500" href="{{ url('/home') }}">Home</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/kelas') }}">Class List</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="#contact">Contact Us</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/aboutus') }}">About Us</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/enroll-now') }}">Enroll Now</a>
                </li>
                <li>
                    <a class="hover:text-gray-500" href="{{ url('/listadmin') }}">Admin</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <a href="/logout"><button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Logout</button></a>
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>
    </header>
