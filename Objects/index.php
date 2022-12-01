<?php


class Team
{

    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(... $params)
    {
        var_dump($params);
        die();
        return new static(... $params);
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
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}


$dijklabs = Team::start('dijkplus', [
    new Member('Ronald van Dijk'),
    new Member('Daniel van der Tuin'),
    new Member('Marcel Vonk'),
    new Member('Sandra van der Berg'),
]);




