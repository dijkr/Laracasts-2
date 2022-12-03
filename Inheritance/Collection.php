<?php

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key)); {
        }
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}


    $videos = new VideosCollection([
    new Video('Deviator', 48),
    new Video('Thowie', 116),
    new Video('Prifbam', 98),
]);
// echo $collection->sum('length');

echo $videos->length();
