<?php
require_once("../SlightPHP.php");

$slight=new SlightPHP;

$slight->setDebug(true);
$slight->setSplitFlag("-_");
$slight->setDefaultZone("zone");
$slight->setAppDir(".");
$slight->setPluginsDir("../plugins");	
/*
drop table if exists test;
CREATE TABLE `test` (
  `id` int not null primary key auto_increment,
  `name` varchar(30) default NULL,
  `password` varchar(30) default NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
*/
$slight->loadPlugin("SDb");
$db = SDb::getDbEngine("pdo_mysql");
if(!$db){
	die("DbEngine not exits");
}
$db->init(array(
	"host"=>"localhost",
	"user"=>"root",
	"password"=>"",
	"database"=>"test")
);
//插入记录
print_r($db->insert($table = "test",$items=array("name"=>"testName","password"=>"testPassword")));
exit;
//检索一个
//print_r($db->selectOne($table = "test",$condition=array(),$items=array("name")));
//按条件检索一个
print_r($db->selectOne($table = "test",$condition=array("id"=>1),$items=array("*")));
//搜索全部
$db->setLimit(2);
$db->setCount(true);
print_r($db->select($table = "test",$condition=array("id=2","password"=>"testPassword"),$items=array("*")));
$db->update($table="test",$condition=array("id=2"),$updates=array("password"=>"xx"));
$db->delete($table="test",$condition=array("id=2"));
//$db->update($table="test",$condition=array("id=2"),$updates=array("password=xxx"));
exit;
//按页检索
$db->setPage(2);
$db->setLimit(5);
//是否算总数
$db->setCount(true);
print_r($db->select($table = "test",$condition=array(),$items=array("*")));

?>
