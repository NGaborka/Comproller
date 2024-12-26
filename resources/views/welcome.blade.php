<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="kepek/icon.png">
    <title>Comproller</title>
    <style>

        body 
        {
            font-family: Arial, sans-serif;
        }

        #nav 
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007acc;
            padding: 5px;
            border-radius: 30px;
        }
        #nav a 
        {
            color: white;
            text-decoration: none;
            padding: 5px 15px;
        }
        #nav a:hover 
        {
            background-color: #005f99;
        }

        #profilkep       
        {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            border: 2px solid white;
        }

        #container 
        {
            padding: 32px;
            text-align: center;
        }

        h1 
        {
            color: #007acc;
        }

        .vetites 
        {
            width: 80%;
            max-width: 600px;
            margin: 16px auto;
            border: 2px solid #007acc;
            border-radius: 8px;
        }

        .vetites img 
        {
            width: 100%;
            display: none;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .vetites img.aktiv
        {
            display: block;
            opacity: 1;
        }

        #leiras 
        {
            color: #333;
        }

        #extra
        {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 400px;
            align-items: flex-start;
            margin-top: 32px;
        }

        #extra img 
        {
            max-width: 300px;
            border: 2px solid #007acc;
            border-radius: 8px;
        }

        #extra #szoveg 
        {
            max-width: 600px;
            text-align: left;
            margin-left: 32px;
        }

        #also
        {
            background-color: #007acc;
            color: white;
            padding: 16px;
            text-align: center;
            border-radius: 30px;
        }

        #also a 
        {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
        }

        #also a:hover 
        {
            background-color: #005f99;
        }

        #felgomb 
        {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007acc;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #felgomb:hover 
        {
            background-color: #005f99;
        }

    </style>
</head>
<body>

<nav id="nav">
    <a href="{{ url('/') }}">Kezdőlap</a>
    <a href="{{ url('/rolunk') }}">Rólunk</a>
    <a href="{{ url('/kapcsolat') }}">Kapcsolat</a>
    <a href="{{ url('/profil') }}">Profil</a>
    <a href="{{ url('/dolgozok') }}">Dolgozók</a>
    <div>
        <img src="kepek/felhasznalo.JPG" id="profilkep">
    </div>
</nav>
<div id="container">
    <h1>Üdvözöljük a Comproller oldalján!</h1>
    <p>Ez az oldal segít a cég menedzselésében és a fontos információk kezelésében.</p>
    <div class="vetites">
        <img src="kepek/kep1.jpg" class="aktiv"> 
        <img src="kepek/kep2.jpg">
        <img src="kepek/kep3.jpg">
    </div>
    <div id="leiras">
        <p>Itt találhatók a legfrissebb hírek és információk a cégünkről. Maradjon naprakész a legújabb fejlesztésekkel és eseményekkel kapcsolatban.</p>
    </div>

    <div id="extra">
        <div>
            <img src="kepek/ceg.jpg">
            <div id="szoveg">
                <h2>Cégünk története</h2>
                <p>Cégünk több mint 20 éve van jelen a piacon, és elkötelezettek vagyunk a minőségi szolgáltatások nyújtása iránt. Innovatív megoldásainkkal és szakértő csapatunkkal segítjük ügyfeleinket a siker elérésében.</p>
                <p>Folyamatosan fejlődünk és bővítjük szolgáltatásainkat, hogy megfeleljünk a változó piaci igényeknek. Célunk, hogy hosszú távú, sikeres együttműködést alakítsunk ki partnereinkkel.</p>
            </div>
        </div>
        <div>
            <img src="kepek/leiras.jpg">
            <div id="szoveg">
                <h2>Megbízhatóságunk</h2>
                <p>Cégünk egyik legfontosabb értéke a megbízhatóság. Mindig arra törekszünk, hogy ügyfeleink elvárásainak megfeleljünk, és biztosítsuk számukra a legmagasabb szintű szolgáltatást.</p>
                <p>Proaktív szemléletmóddal és precíz munkavégzéssel dolgozunk, hogy hosszú távú, eredményes kapcsolatokat alakítsunk ki ügyfeleinkkel.</p>
            </div>
        </div>
    </div>
    <a href="#" id="felgomb">Vissza a tetejére</a>
</div>

<div id="also">
    <a href="#">Adatvédelmi nyilatkozat</a>
    <a href="#">Felhasználási feltételek</a>
    <a href="#">Kapcsolat</a>
</div>

<script>

    let profilkep = document.getElementById("profilkep");

    window.onload = function() 
    {
        let eleres = sessionStorage.getItem("profilkep");
        if (eleres) 
        {
            profilkep.src = eleres;
        }
        kovetkezo();
    };

    let jelenlegi = 0;
    let kepek = document.querySelectorAll('.vetites img');
    function kovetkezo()   
    {
        kepek[jelenlegi].classList.remove('aktiv');
        jelenlegi = (jelenlegi + 1) % kepek.length;
        kepek[jelenlegi].classList.add('aktiv');
    }

    setInterval(kovetkezo, 3000);

</script>

</body>
</html>