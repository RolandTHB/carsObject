<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 13:58
 */

class MotoException extends Exception
{
    private $allowedMark = ["Kawasaki","Yamaha","Honda"];
    public function __construct(Moto $moto)
    {
        if (!in_array($moto->getMarque(), $this->allowedMark)) {
            throw new Exception("La moto n'est pas au catalogue",500
            );
        }
    }

}