<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>formos</title>
</head>
<body>
<ul>
    <?php
    if(isset($_POST['send'])){
        foreach ($_POST as $key => $item){
            if($key != 'send'){
                echo "<li>$key:$item</li>";
            }
        }
    }
    ?>
</ul>
<div class="container">
    <h2>Duomenų informacija</h2>
    <form method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">El. pašto adresas:*</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Slaptažodis:*</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pakartoti slaptažodį:*</label>
            <div class="col-sm-10">
                <input type="password" class="form-control">
            </div>
        </div>
        <div class="form-check ">
            <input class="form-check-input" type="checkbox" id="gridCheck1" name="sutinkuSuTaisyklemis">
            <label class="form-check-label" for="gridCheck1">
                Sutinku su <a href="url">taisyklemis</a>
            </label>
        </div>

        <br>

    <h2>Pasitikrinkite saskaitos adresą</h2>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lytis*</label>
            <select class="custom-select col-sm-10" name="lytis">
                <option selected>Pasirinkite lytį</option>
                <option name="moteris">Moteris</option>
                <option name="vyras">Vyras</option>
            </select>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Vardas:*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="vardas">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pavardė:*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pavarde">
            </div>
        </div>
        <div class="form-row">
        <label class="col-sm-2 col-form-label">Gatvė, namo(buto) nr.:*</label>
            <div class="form-row">
                <div class="col-7">
                    <input type="text" class="form-control" name="gatve">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="butoNum">
                </div>
            </div>
        </div>
        <br>
        <div class="form-row align-items-center">
        <label class="col-sm-2 col-form-label">Pasto kodas:*</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" name="pastoKodas">
                </div>
                <div class="col">
                    <a href="url">Pasto kodo paieska</a>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row align-items-center">
            <label class="col-sm-2 col-form-label">Miestas:*</label>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" name="miestas">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Šalis:*</label>
            <select class="custom-select col-sm-10" name="salis">
                <option selected>Pasirinkite Sali</option>
                <option name="-">-</option>
                <option name="Lietuva">Lietuva</option>
                <option name="Latvija">Latvija</option>
                <option name="Estija">Estija</option>
                <option name="Amerika">Amerika</option>
            </select>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Telefonas:*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Telefonas">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Papildoma informacija</label>
            <textarea name="zinute" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <p>Prašome užpildyti visus pažymėtus laukus*</p>

        <button type="submit" class="btn btn-secondary" name="send">Registruotis</button>

    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>