<?php
class Category
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}