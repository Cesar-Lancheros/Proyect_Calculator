<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Currency Conversion Calculator</title>
</head>
<body class="bg-info-subtle">
<?php
    include('./index.php');
   require('../Logic/CurrencyConverter.php');
   ?>
    <h1 class="d-flex justify-content-center">Currency Conversion Calculator</h1>
    <br>
    <div class="container">
    <form method="post" action="../Logic/CurrencyConverter.php">
        <label>Enter the amount:</label>
        <input type="number" name="value" step="0.01" required>
        <br> <br>
        <label>Select the currency of origin:</label>
        <select name="sourceCurrency">
            <option value="USD">American Dolar (USD)</option>
            <option value="EUR">Euros (EUR)</option>
            <option value="GBP">British Pounds (GBP)</option>
            <option value="JYP">Japanese Yen (JYP)</option>
            <option value="ARS">Argentine pesos (ARS)</option>
            <option value="AUD">Australian Dollars (AUD)</option>
            <option value="MXN">Mexican Pesos (MXN)</option>
            <option value="COP">Colombian Pesos (COP)</option>
            <option value="CAD">Canadian Dollars (CAD)</option>
            
        </select>
        <br> <br>
        <label>Select the destination currency:</label>
        <select name="targetCurrency">
            <option value="USD">American Dolar (USD)</option>
            <option value="EUR">Euros (EUR)</option>
            <option value="GBP">British Pounds (GBP)</option>
            <option value="JYP">Japanese Yen (JYP)</option>
            <option value="ARS">Argentine pesos (ARS)</option>
            <option value="AUD">Australian Dollars (AUD)</option>
            <option value="MXN">Mexican Pesos (MXN)</option>
            <option value="COP">Colombian Pesos (COP)</option>
            <option value="CAD">Canadian Dollars (CAD)</option>
           
        </select>
        <br>
         <br>
        <button class="btn btn-success p-2 m-3" type="submit" name="tipo_conversion" value="Currency">Convert</button>
        <button class="btn btn-secondary p-2 m-3" type="reset">Re-Start</button>
    </form>
    </div>
    
</body>
</html>

