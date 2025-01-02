<!DOCTYPE html>
<html lang="hu">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="kepek/icon.png">

    <title>Comproller - Rólunk</title>

    <style>

        *
        {

            text-decoration: none;

        }

        #jprofil
        {

            border: none;
            width: 100px;
            height: 100px;
            border-radius: 60px;
            cursor: none;

        }

        #fel
        {

            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            width: 20%;
            padding: 20px;

        }

        #nav_logo
        {

            border: none;
            width: 100px;
            height: 100px;
            border-radius: 60px;
            cursor: none;

        }

        #nav_icon
        {

            width: 40px;
            height: 40px;
            border: 2px solid black;
            border-radius: 60px;

        }

        body
        {

            background-image: url("kepek/hatterek/hatter.jpg");
            background-repeat: no-repeat;
            background-color: grey;
            font-family: arial;
            color: red;

        }

        img
        {

            border-radius: 30px;
            width: 15%;
            height: auto;
            border: 2px solid black;
            transition: transform 1.1;

        }

        img:hover
        {

            transform: scale(1.05);            

        }

        #kozepre
        {

            display: grid;
            place-items: center;

        }

        #leiras
        {

            background-color: rgba(255, 255, 255, 0.623);
            border-radius: 10px;
            font-size: 20px;
            padding: 10px;
            display: grid;
            justify-items: left;
            align-items: left;
            gap: 5px;

        }

        nav,#footer
        {

            background-color: rgba(255, 255, 255, 0.623);
            border-radius: 10px;
            font-size: 13px;
            padding: 10px;

        }

        nav
        {

            width: 90%;
            display:flex;
            justify-content: space-between;
            text-align: center;

        }

        table
        {

            border: 2px solid black;

        }

        #jdatum,#jido
        {

            background-color:rgba(182, 208, 226, 0.47);
            border-radius: 40px;

        }

        #datumok
        {

            background-image: url("kepek/datum.PNG");
            width: 40%;
            height: 60%;
            text-align: center;
            color: black;
            border-radius: 10px;
            font-size: 30px;
            padding: 30px;
            border: 2px solid black;

        }

        button
        {

            background-color: black;
            border-radius: 30px;
            opacity: 0.5;
            color: white;
            font-size: 20px;
            cursor: pointer;
            padding: 15px;

        }

    </style>

</head>

<body>

    <div id="kozepre">

        <nav>
            <a><img src="kepek/nav_iconok/nav_logo.PNG" id="nav_logo"><br></a>
            <a href="{{ url('/') }}"> <img src="kepek/nav_iconok/fooldal.png" id="nav_icon"><br>Főloldal</a> 
            <a href="{{ url('/kapcsolat') }}"> <img src="kepek/nav_iconok/telefon.png" id="nav_icon"><br>Kapcsolat</a> 
            <a href="{{ url('/profil') }}"> <img src="kepek/nav_iconok/profil.png" id="nav_icon"><br>Profil</a> 
            <a href="{{ url('/rolunk') }}"> <img src="kepek/nav_iconok/rolunk.png" id="nav_icon"><br>Rólunk</a> 
            <a href="{{ url('/dolgozok') }}"> <img src="kepek/nav_iconok/dolgozok.png" id="nav_icon"><br>Dolgozók</a>
            <a><img src="kepek/nav_iconok/felhasznalo.PNG" id="jprofil"><br></a>
        </nav>

        <p>---</p>

        <div id="leiras">

                <h2>Jelenlegi dolgozóink adatai:</h2>
                <p>

                    <table>
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

                <h2>Céges adatok:</h2>
                <table>
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

        <p>---</p>

        <div id="datumok">

            <p id="jdatum">2000-01-01</p><br>

            <p id="jido">10:00:00</p>

        </div>

        <a href="#" id="fel"><img src="kepek/fel.PNG"></a>

        <footer id="footer">
            <a href="{{ url('/') }}">Főloldal</a> |
            <a href="{{ url('/kapcsolat') }}">Kapcsolat</a> |
            <a href="{{ url('/profil') }}">Profil</a> |
            <a href="{{ url('/rolunk') }}">Rólunk</a> |
            <a href="{{ url('/dolgozok') }}">Dolgozók</a>
        </footer>

    </div>

        <script>

            window.onload = function() 
            {
                if (sessionStorage.getItem("profilkep")) 
                {
                    document.getElementById("jprofil").src = sessionStorage.getItem("profilkep");
                }
            }

            let datum = new Date();

            let ev = datum.getFullYear();
            let honap = datum.getMonth();
            honap++;
            let nap = datum.getDate();

            let jdatum = document.getElementById("jdatum");

            jdatum.innerHTML = ev + "-" + honap + "-" + nap;

            function ido()
            {

                let jido = document.getElementById("jido");

                datum = new Date();

                let ora = datum.getHours();
                let perc = datum.getMinutes();
                let mp = datum.getSeconds();

                jido.innerHTML = ora + ":" + perc + ":" + mp;

            }

            setInterval(ido,1000);    

        </script>

</body>

</html>