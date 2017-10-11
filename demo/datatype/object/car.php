<?php

  /**
    __LINE__  表示使用当前行号。
    __FILE__  表示文件的完整路径和文件名。 如果它在include中使用，则返回包含文件的名称。
    __DIR__ 表示文件的完整目录路径。 等同于dirname(__file__)。 除非它是根目录，否则它没有尾部斜杠。 它还解析符号链接。
    __FUNCTION__  表示使用它的函数名称。如果它在任何函数之外使用，则它将返回空白。
    __CLASS__ 表示使用它的函数名称。如果它在任何函数之外使用，则它将返回空白。
    __TRAIT__ 表示使用它的特征名称。 如果它在任何函数之外使用，则它将返回空白。 它包括它被声明的命名空间。
    __METHOD__  表示使用它的类方法的名称。方法名称在有声明时返回。
    __NAMESPACE__ 表示当前命名空间的名称。

  */
  
  class Car
  {
      var $color;
      function __construct($color="green") {
        $this->color = $color;
      }
      function what_color() {
        echo "<br>****Class name is [", __CLASS__, "] code line is ",__LINE__,"****";
        echo "<br>****Method name is  [", __METHOD__, "] code line is ",__LINE__,"****";
        return $this->color;
      }
  }

  function print_vars($obj) {
      echo "<br>****function name is  [", __FUNCTION__, "] code line is ",__LINE__,"****<br>";
     foreach (get_object_vars($obj) as $prop => $val) {
       echo "\t$prop = $val\n";
     }
  }

  // instantiate one object
  $herbie = new Car("white");

  // show herbie properties
  echo "\herbie: Properties\n";
  print_vars($herbie);

  $herbie->what_color();
?>