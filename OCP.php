<?php
interface AuthenticableInterface{
    public function login();
    
    public function logout();
 }
 
 class User implements AuthenticableInterface{
 
  protected $data;
  public function __construct(){
  
  }
  
  public function login(){
      echo "Logged In!";
      
  }
  
  public function logout(){
      echo "Log out!";
     
  }
}

$user =  new User();
$user->login();
?>
