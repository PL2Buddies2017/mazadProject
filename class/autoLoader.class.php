<?php
      function my_autoloader($class){require_once 'class/' . $class  . '.class.php';}
      spl_autoload_register('my_autoloader');