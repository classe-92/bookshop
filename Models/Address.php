<?php
/** Class Address
 * Define an address class
 * 
 * @author cleli <email>
 */
class Address
{
    public string $street;
    public int $number;
    public string $city;
    public string $state;
    public string $zipcode;

    /**
     * Construtor
     *
     * @param string $street
     * @param integer $number
     * @param string $city
     * @param string $state
     * @param string $zipcode
     */
    public function __construct(string $street, int $number, string $city, string $state, string $zipcode)
    {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;

    }
    /**
     * @method  printAddress()
     * @return string
     */
    public function printAddress(): string
    {
        return "<span> $this->street, $this->number $this->city  $this->state $this->zipcode</span>";
    }
}