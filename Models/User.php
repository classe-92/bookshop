<?php
include __DIR__ . '/Address.php';

/**
 * Summary of User
 */
class User
{
    private int $id;
    public string $name;
    public string $surname;
    public $email;
    public string $password;

    public $address;

    public string $state = 'Italy';
    /**
     * Summary of __construct
     * @param string $name
     * @param string $surname
     * @param mixed $email
     * @param string $password
     */
    public function __construct(string $name, string $surname, $email, string $password, Address $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
    }

    /**
     * Summary of setId
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    //getter
    public function getId()
    {
        return $this->id * 100;
    }

    /**
     * Summary of getFullName
     * @return string
     */
    public function getFullName(): string
    {
        return "<h3>$this->name $this->surname</h3>";
    }

}