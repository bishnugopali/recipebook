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
  
  public function __construct($title = null)
  {
    $this ->setTitle($title);
  }
  
  public function __toString()
  {
    $output= "You are calling a " . __CLASS__ . " object with the title \"";
    $output .= $this->getTitle() . "\"";
    $output .="\n It is stored in " .basename(__FILE__) . " at " . __DIR__ . ".";
    $output .="\nThis display is from line " . __LINE__ . " in method " . __METHOD__;
    $output .="\nThe following methods are available for objects to this class: \n";
    $output .=implode("\n", get_class_methods(__CLASS__));
    return $output;
  }
  
  public function setTitle($title)
  {
    if(empty($title))
    {
      $this->title = null;
    }else
    {
    $this->title =ucwords($title);
    }
  }
  
  public function getTitle()
  {
    return $this->title;
  }
  
  public function addIngredient($item, $amount=null, $measure=null)
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
  
  public function addInstruction($string)
  {
    $this->instructions[] =$string;
  }
  
  public function getInstructions()
  {
    return $this->instructions;
  }
  
  public function addTag($tag)
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

