<?php
//Step 1:
class Student{   
   private $id;

   //---------------constructor---------------//
   function __construct($_id){
	   $this->id=$_id;
	
   }
}

// inheritance / create a new class 
class ChildrenStudent extends Student{
  private $name; 

  function __construct($_id, $_name) {
    // Call the parent class constructor
    parent::__construct($_id, $_name);
    $this->id=$_id;
    $this->name = $_name;
}

  // private static $file_path="data.txt"; 


  //---------------csv function-------------------//
   public function csv(){
    return $this->id.",".$this->name.PHP_EOL;  //End Of Line
    }
    
    //-----------save function-----------------//
    public function save(){
      
          // $students=file(self::$file_path);  	   
          $students=file("data.txt");  	
          // print_r($students);   

        // file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
        file_put_contents("data.txt",$this->csv(),FILE_APPEND);


           
      
    }//end save	
        
    
    //---------------display_students-------------//
    
    public static function display_students(){
      
      //  $students=file(self::$file_path);
       $students=file("data.txt");
     
     echo "<b>ID | Name</b><br/>";
     foreach($students as $student){
            list($id,$name)=explode(",",trim($student));
            echo "$id | $name<br/>";   
       }
         
     
    }   

    
}

?>