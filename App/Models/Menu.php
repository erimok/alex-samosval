<?php


namespace App\Models;


class Menu
{
    /** @var \App\Models\MenuItem[] */
    protected $menu_items;

    /** @var string */
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setMenuItems(object $menu_item): void
    {
        if (empty($menu_item->name) || empty($menu_item->link))
            return;

        $this->menu_items[] = new MenuItem($menu_item->name, $menu_item->link);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \App\Models\MenuItem[]|null
     */
    public function getMenuItems(): ?array
    {
        return $this->menu_items;
    }
}