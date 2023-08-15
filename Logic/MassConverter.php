<?php
if(isset($_POST['convert'])) {
    $value = floatval($_POST['value']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    
    $conversion_rates = [
        'grams' => 1,
        'kilograms' => 0.001,
        'pounds' => 0.00220462,
        'ounces' => 0.03527396,
        'tonnes' => 0.000001
    ];
    
    $result = $value * ($conversion_rates[$to] / $conversion_rates[$from]);
    
    echo "<p>$value $from is equivalent to $result $to</p><br><button type='button' class='btn' href='./Masa.php'> <a href='../Views/Mass.php'>Go back</a></button>";
}
?>
