<?php


class AchievementType
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
}


class FirstThousandPoints extends AchievementType
{

    public function qualifier()
    {

    }

}

class FirstBestAnswer extends AchievementType
{

    public function qualifier()
    {

    }

}



$achievement = new  FirstBestAnswer();

echo $achievement->name();