<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>List</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
  <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

	<style>		
		
		 
		.slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
		.slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
		.slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
		.fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
		.bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}
		
		@-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
		@-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
		@-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}
    
    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1000;
        }

        .navbar {
        position: sticky;
        top: 0;
        z-index: 1000; 
        background-color: #fff; 
        }

	</style>

</head>


<body class="" style="font-family: 'Source Sans Pro', sans-serif;">

@include('navbar')

<div class="h-screen pb-14 bg-right bg-cover" style="background-image: url('{{ asset('img/bg.svg') }}');">
	<div class="w-full container mx-auto p-6">
			
		<div class="w-full flex items-center justify-between">
		
		</div>

	</div>

    <div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center justify-center">
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start h-96">
            <h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Daftar Siswa dan Absensi Kelas {{$class->tingkat}} {{$class->nama_kelas}} </h1>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Data Absensi dan Daftar siswa</p> 
            <div class="flex flex-col md:flex-row w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                <div class="flex flex-col w-full md:w-1/2 lg:w-2/4 mb-4 md:mb-0">
                    <div class="col-lg-4 mb-3 mr-4">
                        <a href="{{ url('/listmurid/' . $class->kelasID) }}" class="card-link no-underline">
                            <div class="card" style="max-width: 100%; border: 2px solid #000; border-radius: 10px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);">
                                <div class="card-body card-text-zoom" style="overflow: auto; padding: 20px;">
                                    <p style="color: black;"><b>Daftar Siswa</b></p>
                                    <br />
                                    <div class="blue-top" style="height: 10px; background-color: #6C8B9F;"></div>
                                    <div class="nested-box" style="margin-top: 10px;  height: calc(100% - 40px);"></div>
                                    <p>Terdapat daftar siswa yang dari kelas-kelas berbeda di sekolah Gracia</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-1/2">
                    <div class="col-lg-4 mb-3 mr-4">
                        <a href="{{ url('/absen/' . $class->kelasID ) }}" class="card-link no-underline">
                            <div class="card" style="max-width: 100%; border: 2px solid #000; border-radius: 10px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);">
                                <div class="card-body card-text-zoom" style="overflow: auto; padding: 20px;">
                                    <p style="color: black;"><b>Daftar Absensi</b></p>
                                    <br />
                                    <div class="blue-top" style="height: 10px; background-color: #6C8B9F;"></div>
                                    <div class="nested-box" style="margin-top: 10px; ; height: calc(100% - 40px);">
                                        <p>Terdapat daftar siswa dan guru dapat melakukan absen setiap harinya</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
</body>
</html>
