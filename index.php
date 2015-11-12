<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
	
<head>
    <title>3 Test</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<div style="width:20%;background-color:#fff;float:left;height:100%;margin-right:10px;" id="C1">
	<span class="Side_Link" id="id-1" style="cursor: pointer">1</span><br>
	<span class="Side_Link" id="id-2" style="cursor: pointer">2</span>
	<hr>
	<div id="SP">
		<span class="Side_Link2" id="id-1" style="cursor: pointer">1</span><br>
	</div>
</div>

<div style="width:35%;background-color:#fff;float:left;height:100%;margin-right:10px;" id="C2">
	Test2
</div>

<div style="width:35%;background-color:#fff;float:left;height:100%;margin-right:10px;" id="C3">
	Test3
</div>

<script>

$(function () {
			
    $(document).on('click','.Side_Link', function() { 
	    
	    $('#C2').html('Loading');
	            
        $.ajax({
	        
            url: 'SS1.php',
            cache: false,
            data: {
        	    id: $(this).attr("id")
            }
            
        }).done(function(data) {
	        
			$('#C2').html(data);
			
		});
		
    });
    
    $(document).on('click','.Side_Link2', function() { 
    	
    	$('#C3').html('Loading');
    	    
        $.ajax({
	        
            url: 'SS2.php',
            cache: false,
            data: {
        	    id: $(this).attr("id")
            }
            
        }).done(function(data) {
	        
			$('#C3').html(data);
			
		});
		
    });

    $(document).on('click','.Sv_Link', function() { 
    	
    	$('#SP').html('Loading');
    	var sid = $(this).attr("id");
    	    
        $.ajax({
	        
            url: 'SS3.php',
            cache: false,
            data: {
        	    id: $(this).attr("id")
            }
            
        }).done(function(data) {
	       
	        sid = sid.replace("id-", "sv2-");
	        $('#'+sid).html('SV');
			$('#SP').html(data);
			
		});
		
    });
    
});	

</script>

</body>
</html>
