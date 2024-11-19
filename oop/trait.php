<?php

trait TraitOne {
    public function saySomething() {
        echo "Hello from TraitOne\n";
    }
}

trait TraitTwo {
    public function saySomething() {
        echo "Hello from TraitTwo\n";
    }
}

class MyClass {
    use TraitOne, TraitTwo {
        TraitTwo::saySomething insteadof TraitOne;  // Use saySomething from TraitTwo
        TraitOne::saySomething as sayFromTraitOne;   // Alias TraitOne's saySomething
    }
}

$obj = new MyClass();
$obj->saySomething();  // Output: Hello from TraitTwo
$obj->sayFromTraitOne();  // Output: Hello from TraitOne

?>