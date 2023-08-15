<?php
if(isset($_POST['convert'])) {
    $value = floatval($_POST['value']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    
    $conversion_rates = [
        'cubicmillimeters' => 1,
        'cubiccentimeters' => 0.001,
        'cubicdecimeters' => 0.000001,
    ];
    
    $result = $value * ($conversion_rates[$to] / $conversion_rates[$from]);
    
    echo "<p>$value $from is equivalent to $result $to</p>";
}
?>
