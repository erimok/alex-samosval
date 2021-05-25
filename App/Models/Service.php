<?php


namespace App\Models;


final class Service
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title, $content, $price, $excerpt, $image;

    public function __construct(
        int $id,
        string $title,
        string $content,
        string $price,
        ?string $excerpt,
        ?string $image
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->price = $price;
        $this->excerpt = $excerpt;
        $this->image = $image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getExcerpt(): ?string
    {
        return $this->excerpt;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
}