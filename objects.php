<?php

class team
{

    protected $name;
    protected $members=[];


    public function __construct($name,$members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }


    public static function start(...$params)
    {
        return new static(...$params);
    } 

    public function name()
    {
        return $this->name;
    }


    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
       $this->members[] = $name;
    }

    public function cancel()
    {

    }


    public function manager()
    {
         
    }


}


class Member 
{
    protected $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function lastViewed()
    {

    }
}


$aname = Team::start('Acme',[
   new Member('Amin Esmkhani'),
   new Member('Ehsan Esmkhani'),
   new Member('Ehsan Esmkhani'),
]);

$sectron = new Team('Sectron');
$sectron = new Team('Foo');

var_dump($aname->members());