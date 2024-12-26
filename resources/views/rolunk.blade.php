<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="kepek/icon.png">
    <title>Rólunk</title>
    <style>

        body 
        {
            font-family: Arial, sans-serif;
        }

        img
        {

            width: 20%;
            height: 20%;

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
    <h1>Cég információk</h1>
    <img src="kepek/icon.png">
    <div id="leiras">
        <p> Comproller egy vezető menedzsment tanácsadó cég, amely vállalatok megfigyelésére és irányítására specializálódott.
    </div>

    <div id="extra">
        <div>
            <div id="szoveg">
                <h2>Szolgáltatásaink:</h2>
                <p>

                    <b>Munkavállalói teljesítmény nyomon követése:</b><br>

                    <br>

                    <i>
                        -Bérstruktúrák elemzése: Segítünk optimalizálni a bérstruktúrákat és biztosítani a versenyképes fizetéseket.<br>
                        <br>
                        -Szervezeti hatékonyság növelése: Javítjuk a vállalati folyamatokat és struktúrákat a hatékonyság érdekében.<br>
                        <br>
                        -Változásmenedzsment: Támogatjuk a szervezeti változások sikeres végrehajtását és elfogadását.
                    </i>           

                </p>

                    <br><b>Értékeink:</b><br>

                    <br>

                    <i>
                        -Innováció: Folyamatosan keressük az új és jobb megoldásokat.<br>
                        <br>
                        -Ügyfélközpontúság: Ügyfeleink igényei állnak minden tevékenységünk középpontjában.<br>
                        <br>
                        -Szakértelem: Magasan képzett szakembereink biztosítják a legjobb eredményeket.<br>
                        <br>
                        -Integritás: Minden tevékenységünkben a legmagasabb etikai normákat követjük.
                    </i>

                </p>
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

</script>

</body>
</html>