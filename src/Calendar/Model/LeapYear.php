<?php
namespace Calendar\Model;
class LeapYear{
	public function isLeapYear($year = null)
	{
		if(null == $year){
			$year = data('Y');
			var_dump($year);
		}
		return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
	}
}
