<?php 

include  "new.php" ;

class AnotherClass{

    protected $var ="Hello ! Today is Tuesday" ;
}

class DelwarIT extends AnotherClass  {
 public $hello = "Welcome To DelwarIT" ;

 public function Myfunction(){
  echo "wow " ;

 }

 public function another(){
    echo "How are you ?" ;

    $obj= new AnotherClass ;
    return $obj->var;

  
   }

}










?>