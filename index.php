<?php
  $movie = "Hook";
  $old_favorite = $movie;

  echo "I'm a fickle person, my favorite movie used to be $movie.";
  
  $movie = "The Lost Boys";
  
  echo "\nBut now my favorite is $movie.";
  
  echo "\nI still like ${old_favorite}.";