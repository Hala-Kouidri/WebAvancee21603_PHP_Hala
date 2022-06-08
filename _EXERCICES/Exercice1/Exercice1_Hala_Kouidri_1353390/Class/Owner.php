<?php

class Owner {
  private $name;
  private $address;
  private $zipCode;
  private $phone;
  private $email;

  public function __construct($name, $address, $zipCode, $phone, $email)
  {
    $this->name = $name;
    $this->address = $address;
    $this->zipCode = $zipCode;
    $this->phone = $phone;
    $this->email = $email;
  }     

  public function __destruct()
  {
    echo "<div class='container'>";
    echo "<div>Propriétaire : " . $this->name . "</div><div>Adresse : " . $this->address . "</div><div>Code Postal : " . $this->zipCode . "</div><div>Téléphone : " . $this->phone . "</div><div>Courriel : " . $this->email . "</div>";
    echo "</div>";
  }
}
?>