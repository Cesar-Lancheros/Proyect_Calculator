<!DOCTYPE html>
<html>
<head>
    <title>Volume Conversion Calculator</title>
</head>
<body class="bg-info-subtle">
    <?php
        include('../Views/index.php');
        require('../Logic/VolumeConverter.php')
    ?>
    <h1 class="d-flex justify-content-center">Volume Conversion Calculator</h1>
    <br>
    <div class="container">
    <form method="post" action="">
        <label for="value">Enter the value:</label>
        <input type="number" step="any" name="value" required><br><br>
        
        <label for="from">From:</label>
        <select name="from">
            <option value="cubicmillimeters">Cubic Millimeters</option>
            <option value="cubiccentimeters">Cubic Centimeters</option>
            <option value="cubicdecimeters">Cubic Decimeters</option>
        </select><br><br>
        
        <label for="to">To:</label>
        <select name="to">
            <option value="cubicmillimeters">Cubic Millimeters</option>
            <option value="cubiccentimeters">Cubic Centimeters</option>
            <option value="cubicdecimeters">Cubic Decimeters</option>
        </select><br><br>       
        <input type="submit" name="convert" value="Convert">
    </form>
    </div>
</body>
</html>
