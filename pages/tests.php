<?php

include 'functions.php';

class Test extends PHPUnit_Framework_TestCase
{
	public function testMySQLConnection() {
	  global $mysqli;
	  $this->assertEquals($mysqli->connect_error,NULL);
	}

	public function testEscape() {
    $result = escape("<script>alert('attacked')</script>");
	  $this->assertEquals($result,"&lt;script&gt;alert(&#039;attacked&#039;)&lt;/script&gt;");
  	}

	public function testCheckAccess_True() {
		$this->assertEquals(checkAccess(1,1),1);
	}

	public function testCheckAccess_False() {
		$this->assertEquals(checkAccess(5,1),0);
	}
}

?>
