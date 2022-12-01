<?php

class AchievementsType
{
    public function name()
    {
        // Achievement Type
    }

    public function difficulty()
    {
        return 'intermediate';
    }


    public function icon()
    {

    }
}

class FirstThousandPoints extends AchievementsType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        return 'Welcome Aboard!';
    }
}

$welcome = (new FirstThousandPoints())->name();
echo $welcome;