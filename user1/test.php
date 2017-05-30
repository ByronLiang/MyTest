<?php
echo "Hello world";
$a = ['apple', 'banana'];
$b = ['watermelon', 'pear'];
echo date('Y-m-d', time());
array_diff($a, $b);
if($c) {
	$a = 190;
}
for ($c = 0; $c < 4; $c++) {
  echo "yooo";
}
function add($a, $b) {
	if ($a == 2) {
  	echo "$a + $b";
	} else {
		echo $b;	
	}
}

class people
{
	private $name;
	private $age;
	public $birth;
	
	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age = 29;
	}

	public static function setName($id)
	{
		return self::where('id', $id);
	}
}
