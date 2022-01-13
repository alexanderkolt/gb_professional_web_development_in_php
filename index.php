<?php
class Materials { //1-3 задания 
    private $id;
    private $title;
    private $price;
    public function __construct ($id, $title, $price) {
        $this->id=$id;
        $this->title=$title;
        $this->price=$price;
    }
    public function view () {
        echo "<h1>$this->id $this->title</h1><p>$this->price </p>";
    }

}

class Tables extends Materials {//4 задание.
    private $form;
    public function __construct($id, $title, $price, $form){
        parent::__construct($id, $title, $price);
        $this->form=$form;
    }
    public function getForm(){
        $this->form;
    }
}
?>
<?php
class A {//5 задание
    public function foo() { 
        static $x = 0;// в данном классе х = 0, а не в экземлярах
        echo ++$x;
    }
}
$a1 = new A();//ввели экземпляр 
$a2 = new A();//ввели другой
$a1->foo();//вызвали функцию и вывелии инкремент 0 т.е. 1
$a2->foo();//вызвали функцию фоо с 1 прибавили 1 и вывели 2
$a1->foo();//вызвали функцию фоо с 2 прибавили 1 и вывели 3
$a2->foo();//вызвали функцию фоо с 3 прибавили 1 и вывели 4
?>
<br>
<?php
class AC {//6 задание
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends AC {//подкласс наследует метод класса
}
$a1 = new AC();//экземпляр класса
$b1 = new B();//экземпляр подкласса
$a1->foo();//вызвали функцию и вывелии инкремент 0 т.е. 1
$b1->foo();//вызвали функцию и вывелии инкремент 0 т.е. 1
$a1->foo();//вызвали функцию фоо с 1 прибавили 1 и вывели 2
$b1->foo();//вызвали функцию фоо с 1 прибавили 1 и вывели 2
?>