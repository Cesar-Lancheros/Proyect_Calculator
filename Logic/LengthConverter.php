<?php

interface UnidadMedida {
    public function convert($valor);
}

class Milimeter implements UnidadMedida {
    public function convert($valor) {
        return $valor / 1000;
    }
}

class Centimeter implements UnidadMedida {
    public function convert($valor) {
        return $valor / 100;
    }
}

class Meter implements UnidadMedida {
    public function convert($valor) {
        return $valor * 1;
    }
}

class Hectometer implements UnidadMedida {
    public function convert($valor) {
        return $valor * 100;
    }
}

class Kilometer implements UnidadMedida {
    public function convert($valor) {
        return $valor * 1000;
    }
}

class Conversor {
    private $unidad;

    public function __construct(UnidadMedida $unidad) {
        $this->unidad = $unidad;
    }

    public function convert($valor) {
        return $this->unidad->convert($valor);
    }
}

if(isset($_POST['convert'])){
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

    $unidad_desde = new $desde();
    $conversor_desde = new Conversor($unidad_desde);

    $unidad_hasta = new $hasta();
    $conversor_hasta = new Conversor($unidad_hasta);

    $calculoDesde = $conversor_desde->convert($valor);
    $calculoHasta = $conversor_hasta->convert($calculoDesde);

    $resultado = number_format($calculoHasta, 3);
}
?>