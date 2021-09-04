<?php 

include "classes/recipe.php";
include "classes/render.php";
include "inc/allrecipes.php";




//toString construct to display title
//echo $recipe1;
//echo new Render();


echo Render::displayRecipe($belgian_waffles);
