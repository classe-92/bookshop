<?php

class Book
{
    public $id;
    public $title;
    public $plot;
    public $cover_image;

    public $language;

    public $vote;

    public array $genres = [];
    private $availableFlags = [
        'en',
        'it',
        'es'
    ];
    public function __construct($title, $plot, $cover_image, $language)
    {
        $this->title = $title;
        $this->plot = $title;
        $this->cover_image = $cover_image;
        $this->language = $language;
    }
    // public static function fetchAll($conn)
    // {
    //     $sql = "SELECT * FROM `books`";
    //     $result = $conn->query($sql);
    //     return $result;
    // }

    public function getFlag()
    {
        if (in_array($this->language, $this->availableFlags)) {
            return "<img src='img/$this->language.png' alt='$this->language'>";
        } else {
            return "<span>Unavailable</span>";
        }
    }
}