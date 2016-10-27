<?php
		function build_table($array){
		$html = '<table>';
		$html .= '<tr>';
		foreach($array[0] as $key=>$value){
			$html .= '<th>' . $key . '</th>';
	   	   }
		$html .= '</tr>';

		foreach($array as $key=>$value){
			$html .= '<tr>';
			foreach($value as $key2=>$value2){
				$html .= '<td>' . $value2 . '</td>';
			}
			$html .= '</tr>';
		}

		$html .= '</table>';
		return $html;
	}
$array = array(
	array('Soccer Team'=>'Arsenal FC', 'Manager'=>'Arsene Wenger',
	'Star'=>'Mesut Ozil'),
	array('Soccer Team'=>'Chelsea FC', 'Manager'=>'Antonio Conte',
	'Star'=>'Eden Hazard'),
	array('Soccer Team'=>'Liverpool FC', 'Manager'=>'Jurgen Klopp',
	'Star'=>'Pippo Coutinho')
);

echo build_table($array);
?>
								
