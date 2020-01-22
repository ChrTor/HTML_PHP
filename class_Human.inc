<?php
class Human
{

  var $FirstName;
  var $SurName;
  var $Holding;
  var $Verb;

  function __construct($Name, $SurName, $Holding, $Verb)
  {
    $this->FirstName = $Name;
    $this->SurName = $SurName;
    $this->Holding = $Holding;
    $this->Verb = $Verb;
    // code...
  }
  function setName($_newName){
    $this->FirstName = $_newName;
  }
  function getName(){
    return  $Name;
  }

  function setSurName($_newSurName){
    $this->SurName = $_newSurName;
  }
  function getSurName(){
    return $SurName;
  }

  function setHolding($_newHolding){
    $this->Holding = $_newHolding;
  }
  function getHolding(){
    return $Holding;
  }

  function setVerb($_newVerb){
    $this->Verb = $_newVerb;
  }
  function getVerb(){
    return $Verb;
  }
}
?>
