<?php

class pet extends Animal{
  public $name;
  public $birthday;
  public $age;



  public function setProp($name, $birthday, $type= null){
    $this->name = $name;
    $this->birthday = $birthday;
    if($type != null) $this->type = $type;
  }
  
  public function getProp(){
    echo "<div class='container-pet'>";
    echo "<div> Nom : " . $this->name . "</div><div> Date Naissance : " . $this->birthday . "</div><div>Type : " . $this->type . "</div>";
    
  }
  
  //https://www.kodingmadesimple.com/2018/01/php-calculate-age-from-date-of-birth.html#:~:text=PHP%20Function%20to%20Calculate%20Age%20(Procedural%20Way)%3A&text=php%20function%20calculateAge(%24dob,%2C%2016%20days%20old.%20%3F%3E
  Public function age() {
    $this->age = @(date_create($this->birthday)->diff(date_create('today')));
    echo "<div>Age : " . $this->age->format('%y an(s) et %m mois') . "</div>";
    echo "</div>";
    
  }

}



