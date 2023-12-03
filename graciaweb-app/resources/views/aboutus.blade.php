<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>About Us</title>
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
            text-align: justify;
        }

        .content p:first-child {
            text-indent: 30px;
        }

        .content p:last-child {
            margin-bottom: 0;
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
        <div class="interesting-content">
            <h1> History </h1>

            <p>Motto Sekolah Gracia adalah “The Best Education You can Get” artinya sekolah Gracia selalu berusaha memberikan yang terbaik dalam mendidik siswa baik dalam akademik, pembentukan karakter dan menggali potensi yang dimiliki siswa sehingga siswa menjadi anak yang berakhlak mulia, disiplin, cerdas, terampil, aktif, kreatif, berwawasan luas dan mandiri.</p>

            <p>Sekolah Gracia adalah sekolah umum yang memiliki keanekaragaman dalam memberikan pendidikan agama sehingga terdapat Agama Islam, Kristen Protestan, Kristen Katolik, dan Buddha dari tingkat TK sampai dengan tingkat SMA.</p>

            <p>Pada awalnya Gracia membuka 2 kelas tingkat Preschool pada tanggal 5 Juni 2000 berlokasi di Jl.Cendana Golf No.32-Lippo Karawaci dengan terdiri dari 4 guru dan 20 siswa.</p>

            <p>Gracia mengalami peningkatan jumlah siswa tingkat preschool sehingga memerlukan ruang belajar dimana kapasitas kelas sudah tidak memadai dengan jumlah siswa yang semakin meningkat.</p>
            
            <p>Pada tahun 2003-2005  Gracia pindah ke Ruko Little Asia No.888-890, Lippo Karawaci untuk dapat membuka 5 kelas untuk Preschool dan TK  dan waktu belajar pun dibagi menjadi 3 kali dalam sehari sehingga dapat memberikan yang mengoptimalkan proses belajar mengajar untuk siswa Preschool. </p>

            <p>Gracia mulai melakukan pembangunan Gedung sekolah di tahun 2006 berlokasi di Jl.Permata Sari A12 No.9 untuk tingkat Preschool, TK dan SD (Sekolah Dasar) terdiri dari  23 ruang belajar siswa, ruang guru, perpustakaan, laboratorium IPA dan Komputer, ruang audio visual,  lapangan olahraga/bermain, lapangan parkir, kantin dengan guru-guru berpengalaman mendidik siswa sejak tahun 2000. Gedung Sekolah selesai dibangun pada tahun 2007 dan semua kelas penuh secara bertahap dari kelas Preschool, TK dan SD.</p>

            <p>Orangtua siswa pun memberikan support agar Sekolah Gracia membuka tingkat SMP sehingga dimulai pembangunan Gedung sekolah di tahun 2012 berlokasi di Jl.Permata Sari A12 No.8 untuk tingkat SMP (Sekolah Menengah Pertama) terdiri dari 11 kelas belajar dan semua kelas penuh secara bertahap.</p>

            <p>Gracia membuka tingkat SMA (Sekolah Menengah Pertama) di tahun 2015 berlokasi di Jl.Permata Sari A12 No.7 untuk jurusan IPA&IPS terdiri dari 9 kelas belajar.

            <p>TK Gracia memberikan pelajaran Baca, Tulis dan Hitung di kelas K-I dan K-II (4-6 tahun) sehingga lulusan TK Gracia diharapkan sudah dapat membaca, menulis dan berhitung baik dalam Bahasa Indonesia maupun dalam Bahasa Inggris. Selain akademik yang diberikan setiap hari di sekolah, siswa diberikan pelajaran dancing, drawing, art&craft sehingga potensi dan bakat siswa dapat semakin meningkat dan berkembang dan dapat mengikuti lomba-lomba yang diadakan di luar sekolah.</p>

            <p>Kurikulum Gracia adalah kurikulum Nasional yang selalu mendapatkan bimbingan dan arahan dari Dinas Pendidikan Provinsi Banten/Kabupaten Tangerang sehingga siswa diwajibkan tetap mengikuti Ujian Nasional dan Ujian Sekolah Berstandar Nasional yang merupakan persyaratan mendapatkan Ijasah secara resmi dari Dinas Pendidikan dan dapat melanjutkan ke jenjang lebih tinggi dimanapun siswa akan melanjutkan di kemudian hari.</p>

            <p>Selain Kurikulum Nasional, Gracia mengadopsi Kurikulum dari Singapura untuk beberapa bidang studi seperti: Mathematics, Science, English, Physics, Biology dan Chemistry sehingga potensi siswa akan semakin berkembang dan meningkat dalam bidang matematika dan IPA dalam Bahasa lain yaitu Bahasa Inggris.</p>

            <p>Dalam hal kebahasaan, selain Bahasa Indonesia dan Bahasa Inggris maka Gracia memberikan bidang studi Bahasa Mandarin dimana kita ketahui Bersama bahwa Bahasa Mandarin menjadi Bahasa yang dibutuhkan. </p>

            <p>Dalam menggali potensi dalam bidang musik maka Gracia telah memfasilitasi ruang Band untuk siswa yang memiliki bakat dapat membentuk group Band Gracia.</p>

            <p>Pembentukan karakter siswa  diberikan dalam bentuk pembiasaan kegiatan seperti saling berbagi, sabar menunggu antrian, dan juga tidak lupa untuk selalu menghormati&menghargai baik dalam perkataan maupun perbuatan kepada sesama teman dan orang yang lebih tua diajarkan di semua usia siswa Gracia.</p>
            
            <br/>
        </div>
    </div>

@include('footer')
</body>
</html>
