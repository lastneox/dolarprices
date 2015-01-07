<?php

namespace Neox\DolarPricesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 */
class Prices
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $datePrice;

    /**
     * @var float
     */
    private $value;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datePrice
     *
     * @param \DateTime $datePrice
     * @return Prices
     */
    public function setDatePrice($datePrice)
    {
        $this->datePrice = $datePrice->format("Y-m-d");

        return $this->getDatePrice();
    }

    /**
     * Get datePrice
     *
     * @return \DateTime 
     */
    public function getDatePrice()
    {
        return $this->datePrice->format("Y-m-d");
    }

    /**
     * Set value
     *
     * @param float $value
     * @return Prices
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
    }
}
