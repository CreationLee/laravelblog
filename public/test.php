<?php
class test{
    function __construct(){
        
    }
    function index(){
        echo 36345;
    }
}

class index{
    protected $controller;
    function __construct(test $controller){
        $this->controller=$controller;
        var_dump($this->controller);
    }
    function index(){
        echo 3333;
    }
}
$test=new test();
$index=new index($test);
$index->index();    