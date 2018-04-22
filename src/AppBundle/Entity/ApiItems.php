<?php

namespace AppBundle\Entity;

class ApiItems
{
    /**
     * @var array|null
     */
    private $items = [];

    /**
     * Set items.
     *
     * @param array|null $items
     *
     * @return ApiItems
     */
    public function setItems($items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items.
     *
     * @return array|null
     */
    public function getItems()
    {
        return $this->items;
    }

    public function addItem(ApiUser $item): void
    {
        $this->items[] = $item;
    }

    public function hasItems(): bool
    {
        return count($this->items) > 0;
    }
}
