<?php


namespace App\Models;


class CallToAction
{
    /**
     * @var string
     */
    protected $heading, $subheading;

    public function __construct(string $heading, string $subheading)
    {
        $this->heading = $heading;
        $this->subheading = $subheading;
    }

    public function getHeading(): string
    {
        return $this->heading;
    }

    public function getSubheading(): string
    {
        return $this->subheading;
    }
}