<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
class Fruit
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
        // primeira ação executada no sistema
    }

    function __destruct()
    {
        echo "<br>The fruit is {$this->name} and the color {$this->color}";
        // última ação executada no sistema - usado para finalizar algo no programa ou destruir alguma variavel
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit('Apple');
$banana = new Fruit('Banana');

$apple->set_color('Red');

echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

$banana->set_color('Yellow');

echo "<br> ----------------------- <br>";
echo $banana->get_name();
echo "<br>";
echo $banana->get_color();
echo "<br>";

echo ($banana instanceof Fruit) ? "<br> $banana->name é uma fruta" : "Não é uma fruta.";
// pergunta se o $banana é uma instancia de uma fruta, se for verdade cai na primeira frase se não ele mostra a segunda frase
?>

<body>

</body>

</html>