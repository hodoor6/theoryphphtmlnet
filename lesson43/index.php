<?php

header('Content-type: text/html; charset=utf-8');

ini_set('display_error', true);
error_reporting(E_ALL);

//Работа с классами и объектами
//
//1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//
//Cоздайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.


class Worker1
{
	public $name;
	public $age;
	public $salary;


}
// Создание объектов класса
$worker1 = new Worker1();
$worker1->name = 'Иван';
$worker1->age = '25';
$worker1->salary = '1000';

$worker2 = new Worker1;
$worker2->name = 'Вася';
$worker2->age = '26';
$worker2->salary = '2000';
echo 'Cумма зарплат Ивана и Васи:';
echo $worker1->salary + $worker2->salary .'<br>';

echo '<br><hr>';
echo '';
echo $worker1->age + $worker2->age;
echo '<br><hr>';


//class User
//{
//	public $name;
//	public $age;
//
//	//Создаем метод:
//	public function show()
//	{
//		//Имя доступно через $this:
//		return $this->name;
//	}
//}
//
//$user = new User;
//$user->name = 'Коля';
//$user->age = 25;
//
////Вызовем наш метод:
//echo $user->show(); //выведет 'Коля'


//class User
//{
//	public $name;
//	public $age;
//
//	public function getName()
//	{
//		return $this->name;
//	}
//
//	public function show()
//	{
//		//Вызываем один метод внутри другого:
//		return $this->getName();
//	}
//}
//
//$user = new User;
//$user->name = 'Коля1';
//$user->age = 25;
//
////Вызовем наш метод:
//echo $user->show(); //выведет 'Коля'

//class User
//{
//	public $name;
//	public $age;
//
//	public function addYearsToAge($years)
//	{
//		 $this->age + $years;
//		return $this->age;
//
//	}
//}
//
//$user = new User;
//$user->name = 'Коля';
//$user->age = 25;
//
//$user->addYearsToAge(3);
//echo $user->age; //выведет 28
//echo $user->age; //выведет 28

/*class User
{
	private $name;
	private $age;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

}

$user = new User;
$user->setName('Коля');
echo $user->getName(); //выведет 'Коля'*/


//class User
//{
//	private $name;
//	private $age;
//
//	public function getAge()
//	{
//		return $this->age;
//	}
//
//	public function setAge($age)
//	{
//		if ($this->checkAge($age)) {
//			$this->age = $age;
//		}
//	}
//
//	private function checkAge($age)
//	{
//		if ($age < 100) {
//			return true;
//		} else {
//			return true;
//		}
//	}
//
//}
//
//$user = new User;
//$user->setAge(30);
//echo $user->getAge();

//class Worker
//{
//	private $name;
//	private $age;
//	private $salary;
//
//	/**
//	 * @param mixed $name
//	 */
//	public function setName( $name ) {
//		$this->name = $name;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getName() {
//		return $this->name;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getAge() {
//		return $this->age;
//	}
//
//	/**
//	 * @param mixed $age
//	 */
//	public function setAge( $age ) {
//		$this->age = $age;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getSalary() {
//		return $this->salary;
//	}
//
//	/**
//	 * @param mixed $salary
//	 */
//	public function setSalary( $salary ) {
//		$this->salary = $salary;
//	}
//
//private function checkAge ($age){
//		if($age < 100){
//			$this->age = $age;
//		}else{
//			echo 'не меняется'.'<br>';
//		}
//
//
//
//}
//
//
//
//
//
//
//
//
//}
//
//$worker1 = new Worker();
//$worker1->setName('Иван');
//$worker1->setAge( 251);
//$worker1->setSalary(1000);
//
//$worker2 = new Worker;
//$worker2->setName('Вася');
//$worker2->setAge( 26);
//$worker2->setSalary(2000);
//
////echo $worker1->salary + $worker2->salary;
//echo '<br>';
//echo $worker1->getAge() + $worker2->getAge();
//echo '<br>';
//echo $worker1->getSalary() + $worker2->getSalary();
////

//class User
//{
//	private $name;
//	private $age;
//
//	public function getAge()
//	{
//		return $this->age;
//	}
//
//	public function setAge($age)
//	{
//		if ($age < 600) {
//			$this->age = $age;
//			return true;
//		} else {
//			return false;
//		}

//		if ($this->checkAge($age)) {
//			$this->age = $age;
//		}
//	}

//	private function checkAge($age)
//	{
//		if ($age < 100) {
//			return true;
//		} else {
//			return false;
//		}
//	}
//
//}
//
//$user = new User;
//$user->setAge(200);
//echo $user->getAge();

//class Worker {
//	private $name;
//		private $salary;
//
//
//public function __construct($name,$salary) {
//	$this->name = $name;
//		$this->salary= $salary;
//
//
//}
//
//	/**
//	 * @return mixed
//	 */
//	public function getName() {
//		return $this->name;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getAge() {
//		return $this->age;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getSalary() {
//		return $this->salary;
//	}
//
//}
//

//$worker = new Worker( 'Дима', 25,1000);
//
//echo $worker->getSalary() * $worker->getAge();

//
//ini_set("display_errors", 1);
//error_reporting(E_ALL);
//
//$user = new Worker('Дима',25);
//echo '<br>';
//echo $user->getName();
//echo '<br>';
//echo $user->getSalary();


//class Worker
//{
//	private $name;
//	private $salary;
//	private $age;
//	public function __construct($name, $salary)
//	{
//		$this->name = $name;
//		$this->salary = $salary;
//	}
//	public function getName()
//	{
//		return $this->name;
//	}
//	public function getSalary()
//	{
//		return $this->salary;
//	}
//	public function getAge()
//	{
//		return $this->age;
//	}
//	public function setAge($age)
//	{
//		$this->age = $age;
//	}
//}
//$worker = new Worker('Дима',1000);
//$worker -> setAge(25);
//echo $worker->getSalary() * $worker->getAge();


//class Worker {
//	private $name;
//	private $age;
//	private $salary;
//
//	/**
//	 * @param mixed $name
//	 */
//	public function setName( $name )
//	{
//		$this->name = $name;
//	}
//
//	public function getName()
//	{
//		return $this->name;
//	}
//
//
//	public function setAge($age)
//	{
//		if($this->checkAge($age)) {
//			$this->age = $age;
//		}
//	}
//
//	public function getAge()
//	{
//		return $this->age;
//
//	}
//
//	public function setSalary($salary) {
//		$this->salary=$salary;
//	}
//
//	public function getSalary() {
//		return $this->salary;
//	}
//
//	private function checkAge($age){
//		if($age > 1 and $age <100){
//			$this->age = $age;
//
//		}
//		else{
//echo 'нет';
//		}
//
//	}
//}
////
////
//$worker = new Worker;
//$worker -> setName('Иван');
//$worker->setAge( '20' );
//$worker->setSalary( 1000 );
//$worker1 = new Worker;
//$worker1 -> setName('Вася');
//$worker1->setAge( 26 );
//$worker1->setSalary( 2000 );
//echo $worker->getAge().'<br>';
//echo $worker->getAge() + $worker1->getAge();
//echo $worker->getSalary() + $worker1->getSalary();


//class Worker{
//	private $name;
//	private $salary;
//	function __construct($name,$age)
//		{
//			echo $age;
//			$this->name = $name;
//}
//
//	/**
//	 * @return mixed
//	 */
//	public function getName() {
//		return $this->name;
//	}
//
//	/**
//	 * @return mixed
//	 */
//	public function getSalary() {
//		return $this->salary;
//	}
//
//}
//
//$dima = new Worker('Дима',25);
//echo $dima->getName();
//echo $dima->getSalary(100);


//$sumParams =$dima->getSalary() + $age;


//class Worker//класс
//  {
//	        private $name;
//       private $salary;
//      //создаю методы
//        public function __construct($name,$salary)//конструктор
//       {
//		           $this->name=$name;
//		          $this->salary=$salary;
//		        }
//      public function getName()//возврощает содержимое этого свой-ва
//       {
//		          return $this->name;
//        }
//        public function getSalary()//возврощает содержимое этого свой-ва
//        {
//		          return $this->salary;
//        }
//}
//
//$user = new Worker('Дима',25);
//	echo '<br>';
//	echo $user->getName();
//	echo '<br>';
//	echo $user->getSalary();


class Worker
{
	private $name;
	private $salary;
	public function __construct()
	{
		$this->name = "Дима";
		$this->salary = 1000;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getSalary()
	{
		return $this->salary;
	}
}
$worker = new Worker();
$worker->age = 25;
echo "Сума возраста и сумма зарплаты составляет: ".($worker->getSalary()+$worker->age).'</br>';
echo '</br><hr>';

//===================================================


//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.

//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
//
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
// Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.

/**
 * Class User
 */
class User {
	/**
	 * @var
	 */
	protected $name;
	protected $age;

	/**
	 * @param mixed $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

		/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}


	/**
	 * @return mixed
	 */
	public function getAge() {
	return $this->age;
}/**
 * @param mixed $age
 */
public function setAge( $age ) {
	$this->age = $age;
}
}

//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.

class Worker extends User{
	/**
	 * @var
	 */
	private $salary;

	/**
	 * @return mixed
	 */
	public function getSalary() {
		return $this->salary;
	}

	/**
	 * @param mixed $salary
	 */
	public function setSalary( $salary ) {
		$this->salary = $salary;
	}


}
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.

$nameIvan = new Worker;
$nameIvan->setName( 'Иван' );
$nameIvan->setAge( 25 );
$nameIvan->setSalary( 1000 );

$nameVasya = new Worker;
$nameVasya->setName( 'Вася' );
$nameVasya->setAge( 26 );
$nameVasya->setSalary( 2000 );
// Вычисляем сумму зарплат
$sumSalary = $nameIvan->getSalary() + $nameVasya->getSalary();
// выводим сумму;
echo $sumSalary.'<br>'.'<hr>';


//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

class Student extends User{
	private $stipend;
	private $course;

	/**
	 * @return mixed
	 */
	public function getStipend() {
		return $this->stipend;
	}

	/**
	 * @param mixed $stipend
	 */
	public function setStipend( $stipend ) {
		$this->stipend = $stipend;
	}

	/**
	 * @return mixed
	 */
	public function getCourse() {
		return $this->course;
	}

	/**
	 * @param mixed $course
	 */
	public function setCourse( $course ) {
		$this->course = $course;
	}

}

// Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).






class Driver extends Worker{
private $drivingExperience;
private $drivingCategory;

public function __construct($drivingExperience,$drivingCategory) {
	$this->drivingExperience = $drivingExperience;
	$this->drivingCategory = $drivingCategory;
		}

	/**
	 * @return mixed
	 */
	public function getDrivingCategory() {
		return $this->drivingCategory;
	}

	/**
	 * @param mixed $drivingCategory
	 */
	public function setDrivingCategory( $drivingCategory ) {
		$this->drivingCategory = $drivingCategory;
	}

	/**
	 * @return mixed
	 */
	public function getDrivingExperience() {
		return $this->drivingExperience;
	}

	/**
	 * @param mixed $drivingExperience
	 */
	public function setDrivingExperience( $drivingExperience ) {
		$this->drivingExperience = $drivingExperience;
	}


}

$driver = new Driver(10,'A','B','C');
$driver->setName( 'Петя');
//$driver->setSalary( '2000');
$driver->setDrivingCategory( 'A','B','C');

echo $driver->getDrivingExperience();
echo $driver->getDrivingCategory();




