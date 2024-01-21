<?php
class mobil {
    //properties
    public $name;
    public $color;

    //method
    function set_name($name){
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

}
$Avanza = new mobil();
$pajero = new mobil();
$Avanza->set_name('mobil');
$pajero->set_name('mobil');

echo $Avanza->get_name();
echo "<br>";
echo $pajero->get_name();
?>