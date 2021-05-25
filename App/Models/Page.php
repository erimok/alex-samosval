<?php


namespace App\Models;


use App\Service\DataBase;

class Page
{
    /**
     * @var Meta
     */
    private $meta;

    /**
     * @var \App\Models\Service[]
     */
    private $services;

    /**
     * @var \App\Models\CallToAction
     */
    private $cta;

    /**
     * @var \App\Models\Menu
     */
    private $menu;

    /**
     * @var \App\Models\Contacts
     */
    private $contacts;

    /**
     * @var \App\Service\DataBase
     */
    private $db;

    public function __construct()
    {
        $this->db = DataBase::getInstance();

        $this->setMeta();
        $this->setServices();
        $this->setCta();
        $this->setContacts();
        $this->setMenu();
    }

    protected function setMeta(): void
    {
        if (!property_exists($this->db->getData(), 'meta')) return;

        $meta = $this->db->getData()->meta;

        $this->meta = new Meta($meta->title, $meta->description, $meta->keywords);
    }

    /**
     * @return \App\Models\Meta
     */
    public function getMeta(): Meta
    {
        return $this->meta;
    }

    protected function setServices(): void
    {
        if (!property_exists($this->db->getData(), 'services')) return;

        foreach ($this->db->getData()->services as $service) {
            $this->services[] = new Service(
                $service->id,
                $service->title,
                $service->content,
                $service->price,
                $service->excerpt,
                $this->db->url . $service->image,
//                $service->logo
            );
        }
    }

    /**
     * @return \App\Models\Service[]|null
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    protected function setCta(): void
    {
        if (!property_exists($this->db->getData(), 'cta')) return;

        $cta = $this->db->getData()->cta;

        $this->cta = new CallToAction($cta->heading, $cta->subheading);
    }

    public function getCta(): ?CallToAction
    {
        return $this->cta;
    }

    protected function setContacts(): void
    {
        if (!property_exists($this->db->getData(), 'contacts')) return;

        $contacts = $this->db->getData()->contacts;

        $this->contacts = new Contacts(
            $contacts->id ?? '',
            $contacts->name ?? '',
            $contacts->address ?? '',
            $contacts->email ?? '',
            $contacts->phones ?? [],
            $contacts->primary_phone ?? ''
        );
    }

    /**
     * @return \App\Models\Contacts
     */
    public function getContacts(): Contacts
    {
        return $this->contacts;
    }

    protected function setMenu(): void
    {
        if (!property_exists($this->db->getData(), 'menu')) return;

        $menu_data = $this->db->getData()->menu;
        $this->menu = new Menu($menu_data->name);

        foreach ($menu_data->menu_items as $item) {
            $this->menu->setMenuItems($item);
        }
    }

    /**
     * @return \App\Models\Menu
     */
    public function getMenu(): Menu
    {
        return $this->menu;
    }
}