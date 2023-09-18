<?php
class User{

  private $data;
 
  public function __construct($data = []){
    $this->data = $data;
    
  }
    
  public function export(){
      var_dump($this->data);
      
  }
      
  public function data(){
       return $this->data;
   }
}
    
    
class DataExporter{
  
    protected $user;
    
    public function __construct(User $user){
        $this->user = $user;
    }
    
    public function exportToExcel(){
        echo var_dump($this->user->data()). "Excel Format";
    }
    
    public function exportToJSON(){
        echo json_encode($this->user->data());
     }
}
$user = new User($data = ['Jexter']);
$exporter = new DataExporter($user);
$exporter->exportToExcel();
$exporter->exportToJSON();
?>
  
