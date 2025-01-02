<!DOCTYPE html>
<html lang="hu">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="kepek/icon.png">
    <title>Comproller - Profil</title>

    <style>

        *
        {

            text-decoration: none;

        }

        #fel
        {

            display: flex;
            justify-content: center;
            align-items: center;
            cursor: cursor;
            width: 20%;
            padding: 20px;

        }

        #jprofil,#lprofil
        {

            border: none;
            width: 100px;
            height: 100px;
            border-radius: 60px;
            cursor: none;

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
            transition: transform 0.3s ease-in-out;

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

            background-image: url("kepek/profil_leiras.jpg");
            background-color: rgba(255, 255, 255, 0.600);
            background-blend-mode: overlay;
            border-radius: 10px;
            font-size: 30px;
            padding: 60px;
            color: black;
            border: 2px solid black;

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

        input
        {

            width: 80%;

        }

        #a_form
        {

            display: none;

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

            <div>

                <h1>Profil adatok:</h1><br>

                <img src="kepek/testkepek/1.PNG" id="lprofil"><br>

                <p id="lnemek"></p><br>

                <p id="lemailcim"></p><br>

                <p id="lprofil_leiras"></p><br>

                <p id="llink1"></p><br>

                <p id="llink2"></p><br>

                <p id="llink3"></p>

            </div>

            <button type="button" onclick="megjelenit()" id="modositos_gomb">Módositás</button>

           <form id="a_form">

                <label>Profil kép:</label><br>
                <input type="file" accept="image/*" id="profilkep"><br>

                <label>Nem:</label><br>

                <select id="nemek">

                    <option value="-">--Válassz nemet--</option><br>
                    <option value="Férfi">Férfi</option><br>
                    <option value="Nő">Nő</option><br>
                    <option value="Egyéb">Egyéb</option><br>

                </select><br>

                <label>Email cím:</label><br>
                <input type="email" placeholder="valaki@gmail.com" id="emailcim"><br>

                <label>Profil leírás:</label><br>
                <textarea placeholder="Profil leírás ide... (opcionális)" id="profil_leiras" rows="4" cols="50"></textarea><br>

                <label>Linkek:</label><br>
                <input type="url" placeholder="Első link... (opcionális)" id="link1"><br>
                <input type="url" placeholder="Második link... (opcionális)" id="link2"><br>
                <input type="url" placeholder="Harmadik link... (opcionális)" id="link3"><br>

                <button type="button" onclick="kvegignez()">Kép mentése</button>
                <button type="button" onclick="vegignez()">Mentés</button>

           </form>

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

            let megjelenitve = false;

            function megjelenit()
            {

                if (megjelenitve == false)
                {
                    let a_form = document.getElementById("a_form");

                    a_form.style.display = "grid";

                    let modositos_gomb = document.getElementById("modositos_gomb");

                    modositos_gomb.textContent = "Vissza";

                    megjelenitve = true;
                }
                else if (megjelenitve == true)
                {

                    a_form = document.getElementById("a_form");

                    a_form.style.display = "none";

                    modositos_gomb = document.getElementById("modositos_gomb");

                    modositos_gomb.textContent = "Módositás";

                    megjelenitve = false;

                }

            }

            let a_form = document.getElementById("a_form");

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

            window.onload = function() 
            {
                if (sessionStorage.getItem("profilkep")) 
                {
                    document.getElementById("jprofil").src = sessionStorage.getItem("profilkep");
                    document.getElementById("lprofil").src = sessionStorage.getItem("profilkep");
                }

                if (sessionStorage.getItem("profil_leiras")) 
                {
                    document.getElementById("lprofil_leiras").textContent = sessionStorage.getItem("profil_leiras");
                }

                if (sessionStorage.getItem("nemek")) 
                {
                    document.getElementById("lnemek").textContent = sessionStorage.getItem("nemek");
                }

                if (sessionStorage.getItem("emailcim")) 
                {
                    document.getElementById("lemailcim").textContent = sessionStorage.getItem("emailcim");
                }

                if (sessionStorage.getItem("link1")) 
                {
                    document.getElementById("llink1").textContent = sessionStorage.getItem("link1");
                }

                if (sessionStorage.getItem("link2")) 
                {
                    document.getElementById("llink2").textContent = sessionStorage.getItem("link2");
                }

                if (sessionStorage.getItem("link3")) 
                {
                    document.getElementById("llink3").textContent = sessionStorage.getItem("link3");
                }
            };

            function kvegignez() 
            {
                let profilkep = document.getElementById("profilkep");
                
                let file = profilkep.files[0];

                if (!file) 
                {
                    alert("Nincs kiválasztva fájl profilképhez!");
                    return;
                }

                let olvaso = new FileReader();
                
                olvaso.onload = function (i) 
                {
                    document.getElementById("jprofil").src = i.target.result;
                    document.getElementById("lprofil").src = i.target.result;
                    sessionStorage.setItem("profilkep", i.target.result);

                    alert("Profilkép frissítve!");
                };

                olvaso.readAsDataURL(file);

            }

            function vegignez()
            {

                    let nemek = document.getElementById("nemek");
                    let emailcim = document.getElementById("emailcim");
                    let profil_leiras = document.getElementById("profil_leiras");
                    let link1 = document.getElementById("link1");
                    let link2 = document.getElementById("link2");
                    let link3 = document.getElementById("link3");

                    let lnemek = document.getElementById("lnemek");
                    let lemailcim = document.getElementById("lemailcim");
                    let lprofil_leiras = document.getElementById("lprofil_leiras");
                    let llink1 = document.getElementById("llink1");
                    let llink2 = document.getElementById("llink2");
                    let llink3 = document.getElementById("llink3");

                    if (nemek.value == "-" || !emailcim.value.includes("@"))
                    {

                        alert("Hiányos adatok!");
                        return;

                    }
                    else
                    {

                        sessionStorage.setItem("nemek",nemek.value);
                        lnemek.textContent = nemek.value;
                        sessionStorage.setItem("emailcim",emailcim.value);
                        lemailcim.textContent = emailcim.value;

                        if (profil_leiras != "")
                        {

                            sessionStorage.setItem("profil_leiras",profil_leiras.value);
                            lprofil_leiras.textContent = profil_leiras.value;
                            
                        }

                        if (link1 != "" && link1.value.includes("."))
                        {

                            sessionStorage.setItem("link1",link1.value);
                            llink1.textContent = link1.value;

                        }

                        if (link2 != "" && link2.value.includes("."))
                        {

                            sessionStorage.setItem("link2",link2.value);
                            llink2.textContent = link2.value;

                        }

                        if (link3 != "" && link3.value.includes("."))
                        {

                            sessionStorage.setItem("link3",link3.value);
                            llink3.textContent = link3.value;

                        }

                    }

            }

            a_form.reset();

        </script>

</body>

</html>