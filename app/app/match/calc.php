<?php
class calc{
    public function zbytek(int $x, int $y){ //Vypočítá zbytek po dělení x,y.
        return $x % $y;
    }
    public function suma(int $x, int $y){ //Vypočítá součet x,y.
        return $x + $y;
    }
    public function rozdil(int $x, int $y){ //Vypočítá rozdíl x,y.
        return $x - $y;
    }
    public function podil(int $x, int $y){ //Vypočítá podíl x,y.
        return $x / $y;
    }
    public function nasobeni(int $x, int $y){ //Vypočítá násobek x,y.
        return $x * $y;
    }
}
    