<?php
class User
{
    public $firstName;
    public $lastName;
    public $email;

    public function __construct($firstName, $lastName, $email)
    {
        // Дополнительно: обрезаем имя и фамилию до 128 символов
        $this->firstName = mb_substr($firstName, 0, 128);
        $this->lastName  = mb_substr($lastName, 0, 128);
        $this->email     = $email;
    }

    public function sayAboutMe()
    {
        echo "Имя и фамилия пользователя: " . $this->firstName . " " . $this->lastName . "<br>";
    }
}
?>