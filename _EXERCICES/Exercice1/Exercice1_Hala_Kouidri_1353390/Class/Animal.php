<?php

abstract class Animal {
  protected $type = "Chat";

  abstract public function setProp($name, $birthday, $type);
  abstract public function getProp();

}
?>