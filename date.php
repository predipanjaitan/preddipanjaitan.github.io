<?php
	function idDate($tgl){
		$date	= substr($tgl,8,2);
		$month 	= monthName(substr($tgl,5,2));
		$year 	= substr($tgl,0,4);
		return $date.' '.$month.' '.$year;		 
	}
	
	function enDate($tgl){
		$date	= substr($tgl,0,2);
		$month 		= substr($tgl,3,2);
		$year 		= substr($tgl,6,4);
		return $year.'-'.$month.'-'.$date;		 
	}
	
	function monthName($bln){
		switch ($bln){
			case 1: 
				return "Januari";
			break;
			case 2:
				return "Februari";
			break;
			case 3:
				return "Maret";
			break;
			case 4:
				return "April";
			break;
			case 5:
				return "Mei";
			break;
			case 6:
				return "Juni";
			break;
			case 7:
				return "Juli";
			break;
			case 8:
				return "Agustus";
			break;
			case 9:
				return "September";
			break;
			case 10:
				return "Oktober";
			break;
			case 11:
				return "November";
			break;
			case 12:
				return "Desember";
			break;
		}
	} 
?>