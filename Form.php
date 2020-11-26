<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto serviss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/reset.css" rel="stylesheet">
    <link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
    <script src="./libs/jQuery/jquery2.1.4.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.js"> </script>
    <link rel="stylesheet" href="./css/noformejums1.css">
    <link rel="stylesheet" href= "css/lightbox.min.css">
    <link rel="stylesheet" href= "css/lightbox.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/jquery.min.js"></script>

</head>



<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Serviss</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a class="lang" key="index"  href="index">Sākums</a></li>
            <li><a class="lang" key="gallery" href="atteli">Galerija</a></li>
            <li><a class="lang" key="video" href="video">Video galerija</a></li>
            <li><a class="lang" key="Form" href="Form">Aizpildīšanas forma</a></li>
        </ul>
        <ul class="languages-list navbar-right">
            <button id="lv" class="translate"><li class="languages-item">LV</li></button>
            <button id="eng" class="translate"><li class="languages-item">ENG</li></button>
        </ul>
    </div>
</nav>

<div class='main'>

    <h1 class="lang" key="form">
        Aizpildīšanas forma
    </h1>
    <div class='form'>
        <form action="Form" method="post">
            <div class="form-group">
                <label for="name">Vārds</label>
                <input type="text" class="form-control" id="name"  placeholder="Vārds" name="Vards">
            </div>
            <div class="form-group">
                <label for="2name">Uzvārds</label>
                <input type="text" class="form-control" id="2name"  placeholder="Uzvārds" name="Uzvards">
            </div>
            <div class="form-group">
                <label for="num">Telefona Nummurs</label>
                <input type="text" class="form-control" id="num" placeholder="Tel.Num" name="TelNum">
            </div>
            <div class="form-group">
                <label for="masina">Mašīna kuru vēlaties ņemt uz nomu</label>
                <textarea class="form-control" id="masina" rows="3" name ="Masina"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Apstiprināt</button>


        </form>

        <?php

            //Pasaka "Jūsu pieprasījums tika nosūtīts" kad tiek nospiesta poga
            if(isset($_POST['submit'])){
                //Parāda ko lietotājs ievadīja laukā masina
                echo $_POST['submit'];
            }
        ?>
    </div>

</div>


</body>
</body>
</html>

