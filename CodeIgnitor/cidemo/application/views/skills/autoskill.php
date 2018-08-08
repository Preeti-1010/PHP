<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
$(function() {
    $("#skill_input").autocomplete({
        source: "<?php echo base_url('skills/autocompleteData'); ?>",
        select: function( event, ui ) {
            event.preventDefault();
            $("#skill_input").val(ui.item.id);
        }
    });
    $( "#skill_input" ).autocomplete({
    source: [ "PHP", "Python", "Ruby", "JavaScript", "MySQL", "Oracle" ]
   });
    $( "#skill_input" ).autocomplete({
    minLength: 2
   });
 });
</script>
</head>
<body>
<div class="auto-widget">
    <p>Your Skills: <input type="text" id="skill_input"/></p>
</div>
</body>
</html>