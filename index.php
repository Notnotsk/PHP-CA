<?php
  
  function printStringReturnNumber()
  {
    echo "Page not found\n";
    return 404;
  }
  $my_num = printStringReturnNumber();
  echo $my_num;