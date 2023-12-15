<?php

class Orador
{
    public $id_orador;
    public $nombre;
    public $apellido;
    private $mail;
    public $tema;
    public $fecha_alta;

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}

$oradores = array();
$i = 0;

while ($fila = mysqli_fetch_array($consulta)) {
    $oradores[$i] = new Orador();

    $oradores[$i]->id_orador = $fila['id_orador'];
    $oradores[$i]->nombre = $fila['nombre'];
    $oradores[$i]->apellido = $fila['apellido'];
    $oradores[$i]->setMail($fila['mail']);
    $oradores[$i]->tema = $fila['tema'];
    $oradores[$i]->fecha_alta = $fila['fecha_alta'];

    $i++;
}

?>