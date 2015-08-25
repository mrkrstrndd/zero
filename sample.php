<?php

/*

class Student {
	private $name;
	private $address;


	function __construct($name,$add) {
		$this->name = $name;
		$this->address = $add;
	}

	public function getname() {
		return $this->name;
	}

}

class Room {

	function __construct($var) {
		var_dump($var);
	}
}



$a = new Student('mark', 'iligan');
echo $a->getname();

$room = new Room($a);


*/

abstract class dbObject
{    
    const TABLE_NAME='undefined';
    
    public static function GetAll()
    {
        $c = get_called_class();
        return "SELECT * FROM `".$c::TABLE_NAME."`";
    }    
}

class dbPerson extends dbObject
{
    const TABLE_NAME='persons';
}

class dbAdmin extends dbPerson
{
    const TABLE_NAME='admins';
}

echo dbPerson::GetAll()."<br>";//output: "SELECT * FROM `persons`"
echo dbAdmin::GetAll()."<br>";//output: "SELECT * FROM `admins`"