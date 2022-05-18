<?php
require_once('database.php');
class User{
    public $id;
    public $firstname;
    public $lastname;
    public $password;
    public $course;
    public $college;
    public $year;
    public $email;

    public function create()
	{
	global $database;
	$q="insert into users(Firstname,Lastname,email,Course,Year,College,Password) values(?,?,?,?,?,?,?)";
	    $result=$database->query($q,array($this->firstname,$this->lastname,$this->email,$this->course,$this->year,$this->college,password_hash($this->password,PASSWORD_DEFAULT)));
	    return  $result;
	}
    public static function find_user_by_email($email)
	{
		global $database;
		$q='select * from users where email=?';
		$result=$database->query($q,array($email));
		$row=$result->fetch();
		return self::getObject($row);
	}
    public static function getObject($row)
	{
		$user=new User();
		foreach ($row as $key => $value) {
		if($user->checkKey($key))
				{
				$user->{$key}=$value;
				}
			}
		return $user;
	}

	public  function checkKey($key)
	{
		$properties=get_object_vars($this);
		return array_key_exists($key, $properties);
	}
    public function check_email_already_exists()
	{
		global $database;
		$q="select * from users where email=?";
		$result=$database->query($q,array($this->email));
		if($result->rowCount()>0)
		{
			return true;
		}
		else
		{
			return false;
        }
    }
    public static  function verifyLogin($email,$password)
	{
		global $database;
		$q="select * from users where email=?";
		$result=$database->query($q,array($email));
		if($result->rowCount()>0)
		{
			$row=$result->fetch();
			if(password_verify((string)$password,(string)$row['Password']))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
}
?>