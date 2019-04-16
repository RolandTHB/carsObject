<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 13:57
 */

class VoitureException extends Exception
{

    private $allowedMark = ["Audi","Renault"];
    public function __construct(Voiture $voiture)
    {
        if (!in_array($voiture->getMarque(), $this->allowedMark)) {
            throw new Exception("La voiture n'est pas au catalogue",500
            );
        }
    }


}