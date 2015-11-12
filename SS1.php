<?php
$id = $_REQUEST["id"];
$id = str_ireplace("id-", "", $id);

if($id == 1){
?>
	<span class="Side_Link2" id="id-1" style="cursor: pointer">1</span><br>
	<span class="Side_Link2" id="id-2" style="cursor: pointer">2</span><br>
	<span class="Side_Link2" id="id-3" style="cursor: pointer">3</span>
<?php
}

if($id == 2){
?>
	<span class="Side_Link2" id="id-4" style="cursor: pointer">4</span><br>
	<span class="Side_Link2" id="id-5" style="cursor: pointer">5</span><br>
	<span class="Side_Link2" id="id-6" style="cursor: pointer">6</span>
<?php
}
?>
