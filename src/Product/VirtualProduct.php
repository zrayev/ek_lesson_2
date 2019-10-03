<?php


namespace Product;


class VirtualProduct extends AbstractProduct
{
    /**
     * @var string
     */
    public $duration;
    /**
     * @var $integer
     */
    public $date;

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return integer
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    protected function prefixName($name)
    {
        // TODO: Implement prefixName() method.
    }

    public function doSell()
    {
        // TODO: Implement doSell() method.
    }

    public function doBuy()
    {
        // TODO: Implement doBuy() method.
    }

    public function getDiscount()
    {
        // TODO: Implement getDiscount() method.
    }
}
