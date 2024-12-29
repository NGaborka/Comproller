<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="kepek/icon.png">
    <title>Dolgozók</title>
    <style>

        body 
        {
            font-family: Arial, sans-serif;
        }

        img
        {

            width: 15%;
            height: 15%;

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

        #leiras 
        {
            color: #333;
        }

        #extra
        {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
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
    <h1>Dolgozók</h1>
    <img src="kepek/dolgozo.png">

    <div id="extra">
        <div>
            <div id="szoveg">
                <h2>Jelenlegi dolgozóink adatai:</h2>
                <p>

                    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: left;">
                        <thead>
                            <tr>
                                <th>Dolgozó ID</th>
                                <th>Név</th>
                                <th>Email</th>
                                <th>Telefonszám</th>
                                <th>Munkakör</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dolgozok as $dolgozo)
                                <tr>
                                    <td>{{ $dolgozo->DolgozoID }}</td>
                                    <td>{{ $dolgozo->Nev }}</td>
                                    <td>{{ $dolgozo->Email }}</td>
                                    <td>{{ $dolgozo->Telefonszam }}</td>
                                    <td>{{ $dolgozo->Munkakor }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </p>

            </div>
        </div>
        <div>
            <h2>Céges adatok:</h2>
            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: left;">
                <thead>
                    <tr>
                        <th>Kategória</th>
                        <th>Érték</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dolgozók száma</td>
                        <td>{{ $dolgozok->count() }}</td>
                    </tr>
                    <tr>
                        <td>Havi cégkereslet</td>
                        <td>1,200,000 HUF</td>
                    </tr>
                    <tr>
                        <td>EUR-HUF valutaárfolyam</td>
                        <td>387.45 HUF</td>
                    </tr>
                </tbody>
            </table>
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
