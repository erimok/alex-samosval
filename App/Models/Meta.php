<?php


namespace App\Models;


final class Meta
{
    /**
     * @var string
     */
    private $title, $description, $keywords;

    public function __construct(string $title, string $description, string $keywords)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setKeywords($keywords);
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getKeywords(): string
    {
        return $this->keywords;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}