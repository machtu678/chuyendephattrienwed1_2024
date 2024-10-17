<?php
declare(strict_types=1);

include ('./I.php');
include ('./C.php');
include ('./A.php');
include ('./B.php');


class demo{
    //A
    public function typeAReturnA() : A{
        echo __FUNCTION__ ."</br>";
        return new A();
    }
    public function typeBReturnA() : B{
        echo __FUNCTION__ ."</br>";
        return new A();
    }
    public function typeCReturnA() : C{
        echo __FUNCTION__ ."</br>";
        return new A();
    }
    public function typeIReturnA() : I{
        echo __FUNCTION__ ."</br>";
        return new A();
    }
    public function typeNullReturnA() : null{
        echo __FUNCTION__ ."</br>";
        return new A();
    }
//B
    public function typeAReturnB() : A{
        echo __FUNCTION__ ."</br>";
        return new B();
    }
    public function typeBReturnB() : B{
        echo __FUNCTION__ ."</br>";
        return new B();
    }
    public function typeCReturnB() : C{
        echo __FUNCTION__ ."</br>";
        return new B();
    }
    public function typeIReturnB() : I{
        echo __FUNCTION__ ."</br>";
        return new B();
    }
    public function typeNullReturnB() : null{
        echo __FUNCTION__ ."</br>";
        return new B();
    }
    //C
    public function typeAReturnC() : A{
        echo __FUNCTION__ ."</br>";
        return new C();
    }
    public function typeBReturnC() : B{
        echo __FUNCTION__ ."</br>";
        return new C();
    }
    public function typeCReturnC() : C{
        echo __FUNCTION__ ."</br>";
        return new C();
    }
    public function typeIReturnC() : I{
        echo __FUNCTION__ ."</br>";
        return new C();
    }
    public function typeNullReturnC() : null{
        echo __FUNCTION__ ."</br>";
        return new C();
    }
    //I
    public function typeAReturnI() : A{
        echo __FUNCTION__ ."</br>";
        return new I();
    }
    public function typeBReturnI() : B{
        echo __FUNCTION__ ."</br>";
        return new I();
    }
    public function typeCReturnI() : C{
        echo __FUNCTION__ ."</br>";
        return new I();
    }
    public function typeIReturnI() : I{
        echo __FUNCTION__ ."</br>";
        return new I();
    }
    public function typeNullReturnI() : null{
        echo __FUNCTION__ ."</br>";
        return new I();
    }
    //Null
    public function typeAReturnNull() : A{
        echo __FUNCTION__ ."</br>";
        return null;
    }
    public function typeBReturnNull() : B{
        echo __FUNCTION__ ."</br>";
        return null;
    }
    public function typeCReturnNull() : C{
        echo __FUNCTION__ ."</br>";
        return null;
    }
    public function typeIReturnNull() : I{
        echo __FUNCTION__ ."</br>";
        return null;
    }
    public function typeNullReturnNull() : null{
        echo __FUNCTION__ ."</br>";
        return null;
    }
}
$demo = new demo();
//A
$demo->typeAReturnA();
$demo->typeBReturnA();
$demo->typeCReturnA();
$demo->typeIReturnA();
$demo->typeNullReturnA();
//B
$demo->typeAReturnB();
$demo->typeBReturnB();
$demo->typeCReturnB();
$demo->typeIReturnB();
$demo->typeNullReturnB();
//C
$demo->typeAReturnC();
$demo->typeBReturnC();
$demo->typeCReturnC();
$demo->typeIReturnC();
$demo->typeNullReturnC();
//I
$demo->typeAReturnI();
$demo->typeBReturnI();
$demo->typeCReturnI();
$demo->typeIReturnI();
$demo->typeNullReturnI();
//Null
$demo->typeAReturnNull();
$demo->typeBReturnNull();
$demo->typeCReturnNull();
$demo->typeIReturnNull();
$demo->typeNullReturnNull();
