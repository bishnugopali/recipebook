<?php

class Recipe{
  private $title;
  private $ingredients = array();
  private $instructions =array();
  private $yield;
  private $tag= array();
  //public $source = "Bishnu";
  
  private $measurements =array(
    "tsp",
    "tbsp",
    "oz",
    "lb",
    "fl oz",
    "cup",
    "pint",
    "quart",
    "gallon"
  );
  
  public function setTitle($title)
  {
    $this->title =ucwords($title);
  }
  
  public function getTitle()
  {
    return $this->title;
  }
  
  public function addIngredients($item, $amount=null, $measure=null)
  {
    //check if amount is float
    if($amount != null && !is_float($amount) && !is_int($amount)){
        exit("The amount must be a float: " . gettype($amount) . " $amount given");
    }
    //check type of measurement
    if($measure !=null && !in_array(strtolower($measure), $this->measurements))
    {
      exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
    }
    
    $this->ingredients[] = array(
        "item"=>ucwords($item),
        "amount"=>$amount,
        "measure"=>strtolower($measure)
    );
  }
  
  public function getIngredients()
  {
    return $this->ingredients;
  }
  
  public function addInstructions($string)
  {
    $this->instructions[] =$string;
  }
  
  public function getInstructions()
  {
    return $this->instructions;
  }
  
  public function addTags($tag)
  {
    $this->tag[]=strtolower($tag);
  }
  
  public function getTags()
  {
    return $this->tag;
  }
  
  
  public function setYield($yield)
  {
    $this->yield=$yield;
  }
  public function getYield()
  {
    return $this->yield;
  }
  
  public function setSource($source)
  {
    $this->source=$source;
  }
  
  public function getSource()
  {
    return $this->source;
  }
  

  
}

