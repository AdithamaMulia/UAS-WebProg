<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Us</title>
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

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.6;
            color: #333; 
        }

        .content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #333; 
        }
        .content p {
            margin-bottom: 20px;
            text-align: center;
        }

        .content p:first-child {
            text-indent: 30px;
        }

        .content p:last-child {
            margin-bottom: 0;
        }

        .center-text {
            text-align: center;
        }

        body{
            overflow: hidden;
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
    
    <div class="content">
        <div class="center-text animated slide-in-bottom">
            <h1 class="text-center bounce-top-icons"> Contact Us </h1>

            
            <p class="animated slide-in-bottom">Hubungi kami melalui kontak di bawah:</p>

            <p class="animated slide-in-bottom">Preschool-TK-SMP-SMA : <strong>Ibu Intan Rahmawati, S.Pd 085779380626</strong></p>

            <p class="animated slide-in-bottom">SD : <strong>Bpk Oyo Setiawan,A.Md/Lia Nita Sari Hp. 087772718559/085966617889</strong></p>

            <p class="animated slide-in-bottom"><strong>Opening Hours</strong></p>

            <p class="animated slide-in-bottom"><strong>Mon-Fri 07:00 - 16:00</strong></p>

            <p class="animated slide-in-bottom"><strong>Saturday 08.00- 12.00</strong></p>

            <br />
            <br />
            <br />
            <br />

        </div>
    </div>

@include('footer')
</body>
</html>
