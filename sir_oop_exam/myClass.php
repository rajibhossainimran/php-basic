<?php
class Trainees{
    public $id ;
    public $name ;
}
// inheritance class Trainee to Trainees 
class Trainee extends Trainees{
    private $batch;

    function __construct($_id,$_name,$_batch){
        $this->id=$_id;
        $this->name=$_name;
        $this->batch=$_batch;
    }
    // data combined function 
    function combine(){
        return $this->id.",".$this->name.",".$this->batch.PHP_EOL;
    }
    // data save function 
    function save(){
        file_put_contents("data.txt",$this->combine(),FILE_APPEND);
    }

    // data display function 
    static function display(){
        $myArr = file("data.txt");
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
       echo "<tr><th>ID</th><th>Name</th><th>Batch</th></tr>"; // Table headers
       
       foreach ($myArr as $student) {
           list($id, $name,$batch) = explode(",", trim($student));
           echo "<tr><td>$id</td><td>$name</td><td>$batch</td></tr>"; // Table rows for each student
       }
       
       echo "</table>";

    }
}

?>