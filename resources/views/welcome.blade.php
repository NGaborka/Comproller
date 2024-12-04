<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comproller Alpha 0.0.01</title>
    <link href="{{ asset('css/bootstrap-5.3.3/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>

    :root 
    {
        --primary-color: #ff4500;
        --secondary-color: rgba(0,0,0,0.7);
        --transition-speed: 0.8s;
    }

    body 
    {
        background-color: #2c3e50;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
    }

    .slideshow-container 
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100%;
        height: 100%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        z-index: 1;
    }

    .slide 
    {
        position: absolute;
        width: 100%;
        height: 50%;
        opacity: 0;
        transition: opacity var(--transition-speed) ease-in-out,
                    transform var(--transition-speed) ease-in-out;
        transform: scale(0.9) rotateY(45deg);
    }

    .slide.active 
    {
        opacity: 1;
        transform: scale(1) rotateY(0);
        z-index: 1;
    }

    .slide img 
    {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #szoveg 
    {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        background-color: var(--secondary-color);
        color: var(--primary-color);
        padding: 15px;
        border-radius: 10px;
        text-align: center;
        backdrop-filter: blur(10px);
        z-index: 2;
        transition: transform 300ms ease-out;
    }

    #szoveg:hover 
    {
        transform: translate(-50%, -50%) scale(1.05);
    }

    .navigacio 
    {
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: 50%;
        width: 100%;
        z-index: 3;
    }

    .elozo, .kovetkezo 
    {
        background: var(--secondary-color);
        color: white;
        padding: 15px 20px;
        text-decoration: none;
        transition: background 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .elozo:hover, .kovetkezo:hover 
    {
        background: rgba(0, 0, 0, 0.9);
    }

    h1
    {

        font-size: 30px;
        text-align: center;
        color: orangered;
        z-index: 3;
        margin-bottom: 600px;
        font-family: Arial;
        
    }

    </style>
</head>
<body>
    @include('navbarandfooter.nav')
    <script src="{{ asset('css/bootstrap-5.3.3/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="slideshow-container">
        <h1>Comproller</h1>
        <div class="slide active">
            <img src="kepek/kep1.jpg" alt="Első kép">
        </div>
        <div class="slide">
            <img src="kepek/kep2.jpg" alt="Második kép">
        </div>
        <div class="slide">
            <img src="kepek/kep3.jpg" alt="Harmadik kép">
        </div>

        <div class="navigacio">
            <a href="#" class="elozo" onclick="valtas_irany(-1)">&#10094;</a>
            <a href="#" class="kovetkezo" onclick="valtas_irany(1)">&#10095;</a>
        </div>

        <p id="szoveg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis nisi. In ullamcorper, tellus in vehicula lobortis, massa sem maximus purus, 
            vel bibendum eros nulla non quam. Fusce mollis, ex eu lobortis elementum, lorem neque efficitur nisi, a porta ante odio ac turpis. 
            Donec sed viverra massa, sed commodo risus.
        </p>
    </div>
    @include('navbarandfooter.footer')
    <script>

        let aktualis_index = 0;
        let slideok = document.getElementsByClassName("slide");
        let idozito;

        function kezdeti_slideshow() 
        {
            for (let i = 0; i < slideok.length; i++) 
            {
                slideok[i].classList.remove("active");
            }
            
            aktualis_index++;
            
            if (aktualis_index >= slideok.length) 
            {
                aktualis_index = 0;
            }
            
            slideok[aktualis_index].classList.add("active");
            
            idozito = setTimeout(kezdeti_slideshow, 5000);
        }

        function valtas_irany(irany) 
        {
            clearTimeout(idozito);
            
            for (let i = 0; i < slideok.length; i++) 
            {
                slideok[i].classList.remove("active");
            }
            
            aktualis_index += irany;
            
            if (aktualis_index >= slideok.length) 
            {
                aktualis_index = 0;
            }
            
            if (aktualis_index < 0) 
            {
                aktualis_index = slideok.length - 1;
            }
            
            slideok[aktualis_index].classList.add("active");
            
            idozito = setTimeout(kezdeti_slideshow, 5000);
        }

        document.addEventListener("DOMContentLoaded", kezdeti_slideshow);
    </script>
</body>
</html>
