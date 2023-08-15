<?php
class MonedaConverter {
    private $currencies = [];

    public function __construct() {
        $this->currencies = [
            'USD' => ['factor' => 0.05, 'name' => 'dólares'],
            'EUR' => ['factor' => 0.04, 'name' => 'euros'],
            'GBP' => ['factor' => 0.035, 'name' => 'libras esterlinas'],
            'JYP' => ['factor' => 0.060, 'name' => 'Yenes Japoneses'],
            'ARS' => ['factor' => 0.02, 'name' => 'Pesos Argentinos'],
            'AUD' => ['factor' => 0.07, 'name' => 'dólares australianos'],
            'MXN' => ['factor' => 0.0025, 'name' => 'pesos mexicanos'],
            'COP' => ['factor' => 0.000015, 'name' => 'pesos colombianos'],
            'CAD' => ['factor' => 0.06, 'name' => 'dólares canadienses'],
            
        ];

            
    }

    public function convert($value, $sourceCurrency, $targetCurrency) {
        if (!isset($this->currencies[$sourceCurrency]) || !isset($this->currencies[$targetCurrency])) {
                    return "Currencie not valid.";
                }

                $factorOrigen = $this->currencies[$sourceCurrency]['factor'];
                $factorDestino = $this->currencies[$targetCurrency]['factor'];
                $result = ($value * $factorOrigen) / $factorDestino;

                return "The result of the convertion is:  $sourceCurrency a $targetCurrency: " . number_format($result, 2) . " {$this->currencies[$targetCurrency]['name']}.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_conversion']) && $_POST['tipo_conversion'] === 'Currency') {
    $value = $_POST['value'];
    $sourceCurrency = $_POST['sourceCurrency'];
    $targetCurrency = $_POST['targetCurrency'];

    $converter = new MonedaConverter();
    $result = $converter->convert($value, $sourceCurrency, $targetCurrency);
    echo "<p>$result</p><br><button type='button' class='btn' href='./Masa.php'> <a href='../Views/Currency.php'>Go back</a></button>
    ";
}
?>
