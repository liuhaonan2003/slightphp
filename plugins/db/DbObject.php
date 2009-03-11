<?php
/*
  +----------------------------------------------------------------------+
  | PHP Version 5                                                        |
  +----------------------------------------------------------------------+
  | Copyright (c) 1997-2008 The PHP Group                                |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.01 of the PHP license,      |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.php.net/license/3_01.txt                                  |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Authors: Hetal <hetao@hetao.name>                                    |
  |          SlightPHP <admin@slightphp.com>                             |
  |          http://www.slightphp.com                                    |
  +----------------------------------------------------------------------+
*/



abstract class DbObject{
	abstract function init($params=array());
	abstract function setCount($count);
	abstract function setPage($page);
	abstract function setLimit($limit);
	abstract function setGroupby($groupby);
	abstract function setOrderby($orderby);
	abstract function select($table,$condition="",$item="*",$groupby="",$orderby="",$leftjoin="");
	abstract function selectOne($table,$condition="",$item="*",$groupby="",$orderby="",$leftjoin="");
	abstract function update($table,$condition="",$item="");
	abstract function delete($table,$condition="");
	abstract function insert($table,$item="",$isreplace=false,$isdelayed=false,$update=array());
	abstract function query($sql,$countsql="");

}
?>