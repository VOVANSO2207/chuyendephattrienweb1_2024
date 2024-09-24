<?php
declare(strict_types=1);
// Nhúng các file vào
require_once 'classA.php';
require_once 'classB.php';

class Demo {
   
    public function callFunction($X): void {
       
        $methods = [
            C::class => 'f',
            A::class => 'a1',
            B::class => 'b1'
        ];
        $className = get_class($X);
        if (array_key_exists($className, $methods)) {
            // Gọi phương thức 
            $methodName = $methods[$className];
            $X->$methodName();
        } else {
            echo "Kiểu đối tượng hợp lệ.<br>";
        }
    }
    public function typeXReturnY_1(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeXReturnY_2(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeXReturnY_3(): A {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    
    public function typeXReturnY_4(): A {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeXReturnY_5(): A {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeXReturnY_6(): B {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeXReturnY_7(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeXReturnY_8(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeXReturnY_9(): B {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeXReturnY_10(): B {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeXReturnY_11(): C {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeXReturnY_12(): C {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeXReturnY_13(): C {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeXReturnY_14(): C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeXReturnY_15(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    
    public function typeXReturnY_16(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeXReturnY_17(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeXReturnY_18(): I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeXReturnY_19(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeXReturnY_20(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeXReturnY_21(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeXReturnY_22(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeXReturnY_23(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeXReturnY_24(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeXReturnY_25(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
     // Trả về null
     public function typeXReturnY_Null(): ?object {
        echo __FUNCTION__ . "<br>";
        return null;
    }

}

$demo = new Demo();
// $demo->typeXReturnY_1();
// $demo->typeXReturnY_2();
// $demo->typeXReturnY_3();
$demo->typeXReturnY_4();
// $demo->typeXReturnY_5();
// $demo->typeXReturnY_6();
// $demo->typeXReturnY_7();
// $demo->typeXReturnY_8();
// $demo->typeXReturnY_9();
// $demo->typeXReturnY_10();
// $demo->typeXReturnY_11();

// $demo->typeXReturnY_12();
// $demo->typeXReturnY_13();
// $demo->typeXReturnY_14();
// $demo->typeXReturnY_15();
// $demo->typeXReturnY_16();
// $demo->typeXReturnY_17();
// $demo->typeXReturnY_18();
// $demo->typeXReturnY_19();

// $demo->typeXReturnY_20();
// $demo->typeXReturnY_21();
// $demo->typeXReturnY_22();
// $demo->typeXReturnY_23();
// $demo->typeXReturnY_24();
// $demo->typeXReturnY_25();

?>