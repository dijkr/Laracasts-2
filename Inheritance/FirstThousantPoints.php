<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        // FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);
}


class FirstThousandPoint extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }
}

// $test = new AchievementType();
// echo $test->name();
// echo $test->icon();

$test1 = new ReachTop50();
echo $test1->qualifier('user');

$test2 = new FirstBestAnswer();
// echo $test2->icon();