<?php
function createHtmlTable($nbLignes,$nbColonnes){

	if(!empty($_GET)) {

		$table= '<table border="1"><tbody>';

		for($L=0;$L<$nbLignes;$L++){ //Boucle lignes
			$table.= ($L%2==0) ? '<tr>' : '<tr style="font-weight:bold">'; //Une ligne sur deux en gras

			for($C=0;$C<$nbColonnes;$C++){ //Boucle colonnes
				$table.= ($C%2==0) ? '<td>'.$L.'-'.$C.'</td>' : '<td style="background-color:#FF0000">'.$L.'-'.$C.'</td>'; //Une colonne sur deux en rouge
			}

			$table.='<tr>';
		}
		$table.='</tbody></table>';
		return $table;
	}
	return null;

} 