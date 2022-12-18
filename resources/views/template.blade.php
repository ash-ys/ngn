<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <title>Document</title>
</head>

<body>
    <div class="heading">
        <div class="info">Call Us: +977 61 402070 / 402071
        </div>
        <ul>
            <li class="top-menu"><a href="https://ngn.org.np/downloads">Downloads</a></li>
            <li class="top-menu1"><a href="https://ngn.org.np/downloads">Career</a></li>
            <li class="top-menu2"><a href="https://ngn.org.np/downloads">Contact Us</a></li>
        </ul>
    </div>
    <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="Naulo Ghumti Nepal">
    </div>
    <div class="location">Pokhara-17,Sitapaila</div>
    <div class="location1">Head Office: 061-402070, 061-402071<br>
        Female Rehabilitation :<br>
        061- 402069, 9745289578
    </div>

    <div class="location2">Prithvi Chowk</div>
    <div class="location3">Linkages Project for HIV/STI Testingp
        061-402068
    </div>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="http://localhost:8000/">Home</a></li>
            <li><a href="http://localhost:8000/about">About Us</a></li>
            <li><a href="http://localhost:8000/projects">Projects</a></li>
            <li><a href="http://localhost:8000/news">News and events</a></li>
            <li><a href="">Reports</a></li>
            <li><a href="">Our team</a></li>
            <li><a href="">Photo gallery</a></li>
        </ul>
    </div>

    <!-- pageko content -->
    @yield('content1')

    <div style="position: absolute;
                width: 1519px;
                height: 300px;
                left: 0px;
                top: 1317px;

                background: url(.jpg), #343434;
                border-radius: 0px;">

        <div class="address">ADDRESS</div>
        <div class="alladdress">Naulo Ghumti Nepal<br>
            Pokhara-17, Sitapaila, Nepal<br>
            P.O Box : 387<br>
            +977 61 402070 / 402071<br>
            +977 61 402069<br>
            nauloghumti@ngn.org.np
        </div>

        <div class="project">OUR PROJECT</div>

        <div class="allproject">Integrated Community Development Project<br>
            Counseling, Treatment and Drug Rehabilitation Center (CTRC)<br>
            Suspension Bridge Program<br>
            +977 61 402070 / 402071<br>
            EpiC Project<br>
            TT for New Life (TNL) Project
        </div>
        <div class="latest">LATEST NEWS</div>
        <div class="alllatest">Naulo Ghumti Nepal's 21st AGM & 11th Convention.<br>
            Table Tennis Basic Orientation to Drug Rehabilitation Personnel.<br>
            Interaction program on Gender Based Violence to mark 16 Days of Activism against Gender-Based Violence.<br>
            Joint Monitoring Visit by Nepal Government Home Ministry and District Administrative Office, Kaski<br>
            Relief support to Rural Municipalities during pandemic COVID-19<br>
        </div>
        <h1 class="naulo">2022-naulo ghumti nepal </h1>
    </div>

</body>

</html>