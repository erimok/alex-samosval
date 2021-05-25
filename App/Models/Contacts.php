<?php


namespace App\Models;


class Contacts
{
    /**
     * @var string[]
     */
    protected $phones;

    /**
     * @var string
     */
    protected $primary_phone, $email, $address, $name, $id;

    public function __construct(
        string $id,
        string $name,
        string $address,
        string $email,
        array $phones,
        string $primary_phone
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->phones = $phones;
        $this->primary_phone = $primary_phone;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getPhones(): array
    {
        return $this->phones;
    }

    public function getPrimaryPhone(): string
    {
        return $this->primary_phone;
    }
}