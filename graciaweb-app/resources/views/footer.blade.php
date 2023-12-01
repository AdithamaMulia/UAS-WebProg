<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    line-height: 1.2;
}

body{
    display: flex;
    flex-direction: column;
    height: 100vh;
    background-color: #bbbbbb;
}


.footer {
    display: flex;
    justify-content: space-between; 
}

.footer-col {
    flex: 2; 
    margin-right: 20px; 
}

.follow-us {
    flex-basis: 200px; 
}
footer{
    display: flex;
    flex-wrap: wrap;
    margin-top: auto;
    background-color: #2d2e33;
    padding: 60px 10%;
}

ul{
    list-style: none;
}

.footer-col{
    width: 25%;
    color: #f1b82d;
}

.footer-col h4{
    position: relative;
    margin-bottom: 30px;
    font-weight: 400;
    font-size: 22px;
    color: #f1bc0d;
    text-transform: capitalize;
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    background-color: #27c0ac;
    height: 2px;
    width: 40px;
}

ul li:not(:last-child){
    margin-bottom: 8px;
}

ul li a{
    display: block;
    font-size: 19px;
    text-transform: capitalize;
    color: #bdb6b6;
    text-decoration: none;
    transition: 0.4s;
}

ul li a:hover{
    color: white;
    padding-left: 2px;
}

.links a{
    display: inline-block;
    height: 44px;
    width: 44px;
    color: white;
    background-color: rgba(40, 130, 214, 0.8);
    margin: 0 8px 8px 0;
    text-align: center;
    line-height: 44px;
    border-radius: 50%;
    transition: 0.4s;
}

.links a:hover{
    color: #4d4f55;
    background-color: white;
}

@media(max-width: 740px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
        text-align: center;
    }

    .footer-col h4::before{
        all: unset;
    }
}

@media(max-width: 555px){
    .footer-col{
        width: 100%;
    }
}

.follow-us {
    margin-left: px; 
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.p{
    font-size:22px
    
}

.s1{
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.p1{
    color:white;
}

.fot1{
    
}

    </style>
</head>
<body>
    <footer class="fot1">
        <div class="footer-col">
            <h4>Address Info</h4>
            <h3> <strong> Gracia </strong> <strong class="s1">School</strong></h3>
            <br/>
            <p class="p1">Jl. Permata Sari A12 No. 7-9, Lippo Karawaci Kel. Binong Kec. Curug Kabupaten Tangerang – BANTEN. Tlp. 021-5983597</p>
        </div>

        <div class="footer-col">
            <h4>products</h4>
            <ul>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>network</h4>
            <iframe
            width="400"
            height="200"
            frameborder="0"
            style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2390491688116!2d106.58492927591405!3d-6.232185561033823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc2c291bb4e9%3A0xd662ff236f7f3022!2sSekolah%20Gracia!5e0!3m2!1sid!2sid!4v1701426278325!5m2!1sid!2sid" 
        ></iframe>
        </div>
        
        <div class="footer-col follow-us">
            <h4>Follow Us</h4>
            <div class="links">
                <a href="https://www.facebook.com/pages/Gracia-School-Lippo-Karawaci/797050130685372"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/schoolgracia/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>