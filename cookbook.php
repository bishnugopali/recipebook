<?php 

include "classes/recipe.php";
include "classes/render.php";

$recipe1=new Recipe();
$recipe1 ->setTitle("my first recipe");
$recipe1 ->setSource("Grandma");
$recipe1 ->addIngredients("egg", 1);
$recipe1 ->addIngredients("flour", 2, "cup");
$recipe1 ->addInstructions("This is step 1.");
$recipe1 ->addInstructions("This is step 2.");
$recipe1 ->addTags("Breakfast");
$recipe1 ->addTags("Main Course");
$recipe1 ->setYield("6 servings");

$recipe2=new Recipe();
$recipe2 ->setTitle("my second recipe");
$recipe2->setSource("Betty Crocker");

echo Render::displayRecipe($recipe1);
