<?php
class Student
{
	public $name;
	public $gender;
	public $age;
	
	
	public function __construct($name="",$gender="",$age=0)
	{
		$this->name=$name;
		$this->gender=$gender;
		$this->age=$age;
		
		echo "<br>student constructor called";
	}
	
	public function __destruct()
	{
		echo '<br>object deleted';
	}
	
	function get_name()
	{
		echo '<br>'.$this->name;
	}
	
	function set_name($name)
	{
		$this->name=$name;
	}
	function save_student()
	{
		//insert code goes here
		return 10;
	}
	
	
}
 class bca_student extends Student{
	 
	 public function __construct()
	 {
		 echo '<br>bca object created';
	 }
	 function get_name()
	{
		echo '<br>get name of child class called';
	}
 }

//$s=new Student('aniket','male',20);
//$s1=new Student();
//$s1->name='demo';
//$s->set_name('abc');
//$s->get_name();


$b=new bca_student();
$b->name='aniket';
$b->get_name();
?>