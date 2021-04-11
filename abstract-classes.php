<?php


abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A_Z]/',' $0',$class));
    }


    public function icone()
    {
       return strtolower(str_replace(' ','-',$this->name())).'.png';
    }

   abstract public function qualifier($user);
}


class FirstThousandPoints extends AchievementType
{

}