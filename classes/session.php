<?php

/**
 * Created by PhpStorm.
 * User: carmen.haav
 * Date: 26.01.2017
 * Time: 14:34
 */
class session
{// class begin
	// class variables
	var $sid = false; // session id
	var $vars = false;
	var $http = false;
	var $db = false;
	var $anonymous = true;
	var $timeout = 1800;

	// class methods
	function __construct(&$http, &$db)
	{
		$this->http = &$http;
		$this->db = &$db;
		$this->sid = $http->get('sid');
		$this->createSession();
	}// construct

	// create session
	function createSession($user = false){
		// anonymous session
		if($user == false){
			$user = array(
				'user_id' => 0,
				'role_id' => 0,
				'username' => 'Anonymous'
			);
		}
		// create session id number
		$sid = md5(uniqid(time().mt_rand(1,1000)));

		// insert data to database
		// serialize - puts out like text
		$sql = 'insert into session set '.
			'sid='.fixDb($sid).', '.
			'user_id='.fixDb($user['user_id']).', '.
			'user_data='.fixDb(serialize($user)).', '.
			'login_ip='.fixDb(REMOTE_ADDR).', '.
			'created=now()';
		$this->db->query($sql);

		// setup session id number
		$this->sid = $sid;
		$this->http->set('sid', $sid);

	}// createSession

	// delete session data from database
	function clearSessions(){
		$sql = 'delete from session '.
			'where '.
			time().' - UNIX_TIMESTAMP(changed) > '.
			$this->timeout;
		$this->db->query($sql);
	}// clearSessions

	// control session
	function checkSession(){
		$this->clearSessions();
		if ($this->sid === false and $this->anonymous){
			$this->createSession();
		}
		if ($this->sid !== false){
			// get data about this session
			$sql = 'select * from session where '.
				'sid='.fixDb($this->sid);
			$res = $this->db->getArray($sql);
			if($res == false){
				if($this->anonymous){
					$this->createSession();
				}
				else{
					$this->sid = false;
				}
			}
		}
	}// checkSession

}// class end
?>