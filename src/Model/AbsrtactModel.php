<?php
namespace Model;


abstract class AbsrtactModel 
{
	protected $db;
	
	protected function getDb()
	{
		return $this->db;
	}
	
	public function setDb($db)
	{
		$this->db = $db;
	}
}

