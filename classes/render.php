<?php

class Render
{
  public static function listIngredients($ingredients)
  {
    $output = "";
    foreach($ingredients as $ing){
      $output .=$ing["amount"] . " " . strtolower($ing["measure"]) . " " . strtolower($ing["item"]);
      $output .="\n";
    }
    return $output;
  }
  
  public static function displayRecipe($recipe)
  {
    $output="";
    $output .= $recipe->getTitle(). " by " . $recipe->getSource();
    $output .="\n";
    $output .=implode(", ", $recipe->getTags());
    $output .="\n\n";
    $output .=self::listIngredients($recipe->getIngredients());
    $output .="\n";
    $output .=implode("\n", $recipe->getInstructions());
    $output .="\n";
    return $output;
  
  }

}