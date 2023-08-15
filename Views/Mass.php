<!DOCTYPE html>
<html>
<head>
    <title>Mass Unit Conversion Calculator</title>
</head>
<body class="bg-info-subtle">
    <?php
        include('../Views/index.php');
    ?>
    <h1 class="d-flex justify-content-center">Mass Unit Conversion Calculator</h1>
    <br>
    <div class="container">
    <form method="post" action="../Logic/MassConverter.php">
        <label for="value">Enter the value:</label>
        <input type="number" step="any" name="value" required><br><br>
        
        <label for="from">From:</label>
        <select name="from">
            <option value="grams">Grams</option>
            <option value="kilograms">Kilograms</option>
            <option value="pounds">Pounds</option>
            <option value="ounces">Ounces</option>
            <option value="tonnes">Tonnes</option>
        </select><br><br>
        
        <label for="to">To:</label>
        <select name="to">
            <option value="grams">Grams</option>
            <option value="kilograms">Kilograms</option>
            <option value="pounds">Pounds</option>
            <option value="ounces">Ounces</option>
            <option value="tonnes">Tonnes</option>
        </select><br><br>
        
        <input class="btn btn-success" type="submit" name="convert" value="Convert">
    </form>
    </div>
</body>
</html>
