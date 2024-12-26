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
</div>

<script>

    window.onload = function() 
    {
        if (sessionStorage.getItem("profilkep")) 
        {
            document.getElementById("profilkep").src = sessionStorage.getItem("profilkep");
        }
    };

    let file_input = document.getElementById("file_input");

    file_input.onchange = function () 
    {
        let file = file_input.files[0];
        let reader = new FileReader();
        reader.onload = function (i) 
        {
            document.getElementById("profilkep").src = i.target.result;
            sessionStorage.setItem("profilkep", i.target.result);
            alert("A profilkép sikeresen mentve!");
        };
        if (file) 
        {
            reader.readAsDataURL(file);
        }
    };

</script>


</body>
</html>