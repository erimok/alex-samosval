<?php


namespace App\Service;


class DataBase
{
    private $data;

    /**
     * @var \App\Service\DataBase
     */
    private static $instance;

    protected function __construct() { }
    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
            self::$instance->getDataBaseContent();
        }

        return self::$instance;
    }

    protected function getDataBaseContent(): void
    {
        $data = file_get_contents(DATABASE, FILE_USE_INCLUDE_PATH);

        if ($data) {
            $this->data = json_decode($data);
        }
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}