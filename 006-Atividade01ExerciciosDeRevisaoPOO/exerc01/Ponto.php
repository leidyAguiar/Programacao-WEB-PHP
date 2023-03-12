<?php
class Ponto {

    private int $x;
    private int $y;
    static int $contador = 0;

    function __construct(int $x, int $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::$contador++;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public static function getContador()
    {
        return self::$contador;
    }
    public function distanciaPonto(Ponto $ponto)
    {
        $dx = $this->x - $ponto->getX();
        $dy = $this->y - $ponto->getY();
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
    public function distanciaCoordenadas(int $x, int $y)
    {
        $dx = $this->x - $x;
        $dy = $this->y - $y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
    public static function distanciaPontos(int $x1, int $y1, int $x2, int $y2)
    {
        $dx = $x1 - $x2;
        $dy = $y1 - $y2;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
    public function __toString()
    {
        return "X: {$this->x} | Y: {$this->y}";
    }
}

$p1 = new Ponto(1, 2);
$p2 = new Ponto(4, 6);

echo "Coordenadas de p1: (" . $p1->getX() . ", " . $p1->getY() . ")";
echo "<br /><br />";
echo "Coordenadas de p2: (" . $p2->getX() . ", " . $p2->getY() . ")";
echo "<br /><br />";
echo "Número de objetos criados: " . Ponto::getContador();
echo "<br /><br />";

echo "Distância entre p1 e p2: " . $p1->distanciaPonto($p2);
echo "<br /><br />";
echo "Distância entre p1 e (5, 7): " . $p1->distanciaCoordenadas(5, 7);
echo "<br /><br />";
echo "Distância entre (1, 2) e (4, 6): " . Ponto::distanciaPontos(1, 2, 4, 6);
echo "<br /><br />";