<?php include 'head.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home1.css">
	<title>Donate</title>
</head>
<body>
	<div class="text">
		<h1><u>Donation:</u></h1>
		<script type="text/javascript">
    function EnableDisableTextBox(ddlModels) {
        var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
        var txtOther = document.getElementById("txtOther");
        txtOther.disabled = selectedValue == 9 ? false : true;
        if (!txtOther.disabled) {
            txtOther.focus();
        }
    }
</script>
<form action="" method="post">
 		<label for="type">Select type of thing you want to Donate:</label>
<select id = "ddlModels" name="type" onchange = "EnableDisableTextBox(this)">
		<option value="1"selected>Type of donation </option>
 		<option value="2">Clothes</option>
 		<option value="3">Food</option>
 		<option value="4">Stationary</option>
 		<option value="5">Utensils</option>
 		<option value="6">Toys</option>
 		<option value="7">Toys</option>
 		<option value="8">Toys</option>
 		<option value="9">Money</option>
    
</select>
Amount You Want to Donate:
<input type="text" id="txtOther" name="type" disabled="disabled" />
<input type="submit" value="Submit" onclick="myalert()"><br>
	</form>
	</div>
	<script type="text/javascript">
       function myalert() {
                alert("Welcome to to our portal\n " + 
                "Thanks for Donation & Helping Us."); 
            }
</script>
<style type="text/css">
		.text h1{
			margin-left: 35%;
		}
	</style>
	<style type="text/css">
		input[type=text], select {
			  width:100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			}
			input[type=submit] {
			  width: 40%;
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: 12px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  margin :2px;

			}
			input[type=submit]:hover {
			  background-color: green;
			}
	</style>
</body>
</html>
<?php include 'footer.php';?>