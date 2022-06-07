<?php

namespace App\ValueObjects;

use App\Models\uslugi;

class CartItem
{
    private int $uslugiId;
    private string $name;
    private float $price;
    private int $quantity = 0;

    /**
     * @param uslugi $uslugi
     * @param int $quantity
     */
    public function __construct(uslugi $uslugi, int $quantity = 1)
    {
        $this->uslugiId = $uslugi->id;
        $this->name = $uslugi->name;
        $this->price = $uslugi->price;
        $this->imagePath = $uslugi->image_path;
        $this->quantity += $quantity;
    }

    /**
     * @return int
     */
    public function getuslugiId(): int
    {
        return $this->uslugiId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string|null
     */
    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function getSum(): float
    {
        return $this->price * $this->quantity;
    }

    public function getImage(): string
    {
        return !is_null($this->imagePath) ? asset("storage/" . $this->imagePath) : config("shop.defaultImage");
    }

    public function addQuantity(uslugi $uslugi): CartItem
    {
        return new CartItem($uslugi, ++$this->quantity);
    }
}
