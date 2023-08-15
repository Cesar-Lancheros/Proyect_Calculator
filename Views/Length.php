<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Currency Converter</title>
</head>
<body class="bg-info-subtle">

    <?php 
     include('./index.php');
    require "../Logic/LengthConverter.php";
    ?>

    <h1 class="text-center">Length Conversion Calculator</h1>

    <div class="container">
        <form action="" method="POST">
        <div class="row mt-4">
            
        <div class="col-sm-4">
            <div>
                <label for="valor" class="form-label">Value:</label>
                <input type="number" name="valor" class="form-control" value="<?php if(isset($_POST['valor'])) {echo $_POST['valor']; } ?>">
            </div>
        </div>

        <div class="col-sm-4">
            <label for="desde" class="form-control">From: </label>
            <select class="form-control" name="desde" id="">
                <option value="">--Select Type--</option>
                <option value="Milimeter">Milimeter</option>
                <option value="Centimeter">Centimeter</option>
                <option value="Meter">Meter</option>
                <option value="Hectometer">Hectometer</option>
                <option value="Kilometer">Kilometer</option>
            </select>
            </div>    
            
        <div class="col-sm-4">
            <label for="hasta" class="form-control">To: </label>
            <select class="form-control" name="hasta" id="">
                <option value="">--Select Type--</option>
                <option value="Milimeter">Milimeter</option>
                <option value="Centimeter">Centimeter</option>
                <option value="Meter">Meter</option>
                <option value="Hectometer">Hectometer</option>
                <option value="Kilometer">Kilometer</option>
            </select>
            </div>

        </div>

        <div class="row mt-4">
            <div>
                <button type="submit" name="convert" class="btn btn-danger w-100 py-4">Convert</button>
            </div>

        <div class="col-sm-6">
            <div class="mb-3">  
                <label for="resultado" class="form-label">Result</label>
                <input type="text" name="resultado" class="form-control" value="<?php if(isset($resultado)) echo $resultado; ?>">
            </div>
        </div>  
        </div>
    </div>
    </form>

    <?php
        if(isset($_POST['convert'])){
        
            $valor = $_POST['valor'];
            $desde = $_POST['desde'];
            $hasta = $_POST['hasta'];
        }
    ?>
</body>
</html>