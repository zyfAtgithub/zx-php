<?php
    class Person {  
        var $name;      // Java: private String name;  
        var $age;  
        var $sex;  
      
        function say() {  
            echo "我的名字是：", $this->name;  
        }  
    }  
      
    // $p1 = new Person;   // Java: Person person = new Person;  
    // $p1->name = "lisi"; // Java: person.name = "lisi";  
    // $p1->say();         // Java: person.say();  
?>