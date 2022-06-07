<?php

namespace App\ValueObjects;

use App\Models\uslugi;
use Closure;
use Illuminate\Support\Collection;

class Cart
{
    private Collection $items;

    /**
     * @param Collection|null $items
     */
    public function __construct(Collection $items = null)
    {
        $this->items = $items ?? Collection::empty();
    }

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function hasItems(): bool
    {
        return $this->items->isNotEmpty();
    }

    public function getQuantity(): int
    {
        return $this->items->sum(function ($item) {
            return $item->getQuantity();
        });
    }

    public function getSum(): float
    {
        return $this->items->sum(function ($item) {
            return $item->getSum();
        });
    }

    public function addItem(uslugi $uslugi): Cart
    {
        $items = $this->items;
        $item = $items->first($this->isuslugiIdSameAsItemuslugi($uslugi));
        if (!is_null($item)) {
            $items = $this->removeItemFromCollection($items, $uslugi);
            $newItem = $item->addQuantity($uslugi);
        } else {
            $newItem = new CartItem($uslugi);
        }
        $items->add($newItem);
        return new Cart($items);
    }

    public function removeItem(uslugi $uslugi): Cart
    {
        $items = $this->removeItemFromCollection($this->items, $uslugi);
        return new Cart($items);
    }

    private function removeItemFromCollection(Collection $items, uslugi $uslugi): Collection
    {
        return $items->reject($this->isuslugiIdSameAsItemuslugi($uslugi));
    }

    private function isuslugiIdSameAsItemuslugi(uslugi $uslugi): Closure
    {
        return function ($item) use ($uslugi) {
            return $uslugi->id == $item->getuslugiId();
        };
    }
}
