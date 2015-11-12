<?php
$id = $_REQUEST["id"];
$id = str_ireplace("id-", "", $id);

if($id == 1){
?>
	<h1>Line 1</h1><span id="sv-1">S</span>
	<span class="Sv_Link" id="id-1" style="cursor: pointer">Sv</span>
<?php
}

if($id == 2){
?>
	<h1>Line 2</h1><span id="sv-2">S</span>
	<span class="Sv_Link" id="id-2" style="cursor: pointer">Sv</span>
<?php
}
?>
