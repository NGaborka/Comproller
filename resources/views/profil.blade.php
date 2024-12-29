<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="kepek/icon.png">
    <title>Profil</title>
    <style>

        body 
        {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #profil_container 
        {
            margin: 50px auto;
            max-width: 600px;
            border: 2px solid #007acc;
            border-radius: 10px;
        }

        #profilkep 
        {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #007acc;
            margin-bottom: 20px;
        }

        #file_input 
        {
            display: block;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #007acc;
            border-radius: 5px;
        }

        #mentes 
        {
            background-color: #007acc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #mentes:hover 
        {
            background-color: #005f99;
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

        .input_csoport
        {
            text-align: center;
            margin-bottom: 20px;
        }

        .input_csoport label 
        {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input_csoport input, .input_csoport select 
        {
            width: 80%;
            padding: 8px;
            border: 2px solid #007acc;
            border-radius: 5px;
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
<div id="profil_container">
    <h1>Profilkép beállítása</h1>
    <input type="file" id="file_input" accept="image/*">

    <div class="input_csoport">
        <label for="nev">Teljes név:</label>
        <input type="text" id="nev" placeholder="Teljes név">
    </div>
    <div class="input_csoport">
        <label for="szuletesi_ev">Születési év:</label>
        <input type="number" id="szuletesi_ev" placeholder="Születési év">
    </div>
    <div class="input_csoport">
        <label for="email">Email:</label>
        <input type="text" id="email" placeholder="Email">
    </div>
    <div class="input_csoport">
        <label for="telefonszam">Telefonszám:</label>
        <input type="text" id="telefonszam" placeholder="Telefonszám">
    </div>
    <div class="input_csoport">
        <label for="nem">Nem:</label>
        <select id="nem">
            <option value="">Válasszon nemet</option>
            <option value="ferfi">Férfi</option>
            <option value="no">Nő</option>
            <option value="egyeb">Egyéb</option>
        </select>
    </div>
    <div class="input_csoport">
        <label for="nemzetiseg">Nemzetiség:</label>
        <input type="text" id="nemzetiseg" placeholder="Nemzetiség">
    </div>
    <button id="mentes">Mentés</button>
</div>

<script>

    let profilkep = document.getElementById("profilkep");
    let file_input = document.getElementById("file_input");
    let mentes = document.getElementById("mentes");

    window.onload = function () 
    {
        let kep = sessionStorage.getItem("profilkep");
        if (kep) profilkep.src = kep;

        let id_tomb = ["nev", "szuletesi_ev", "email", "telefonszam", "nem", "nemzetiseg"];
        id_tomb.forEach(function (id) 
        {
            let elem = document.getElementById(id);
            let ertek = sessionStorage.getItem(id);
            if (ertek) elem.value = ertek;
        });
    };

    file_input.onchange = function () 
    {
        let file = file_input.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (esemeny) 
            {
                profilkep.src = esemeny.target.result;
                sessionStorage.setItem("profilkep", esemeny.target.result);
            };
            reader.readAsDataURL(file);
        }
    };

    mentes.onclick = function () 
    {
        let id_tomb = ["nev", "szuletesi_ev", "email", "telefonszam", "nem", "nemzetiseg"];
        let valid = true;

        id_tomb.forEach(function (id) 
        {
            let elem = document.getElementById(id);
            if (!elem.value.trim()) 
            {
                valid = false;
                alert(`A(z) ${id} mező kitöltése kötelező!`);
            } 
            else 
            {
                sessionStorage.setItem(id, elem.value.trim());
            }
        });

        if (valid) alert("Az adatok sikeresen mentve!");
    };

</script>

</body>
</html>