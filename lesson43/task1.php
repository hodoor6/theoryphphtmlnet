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


class Worker
{
	public $name;
	public $age;
	public $salary;


}
// Создание объектов класса
$worker1 = new Worker();
$worker1->name = 'Иван';
$worker1->age = '25';
$worker1->salary = '1000';

$worker2 = new Worker;
$worker2->name = 'Вася';
$worker2->age = '26';
$worker2->salary = '2000';

echo 'Cумма зарплат Ивана и Васи:';
echo $worker1->salary + $worker2->salary .'<br>';
echo '<br><hr>';
echo 'сумму возрастов Ивана и Васи.';
echo $worker1->age + $worker2->age;
echo '<br><hr>';

