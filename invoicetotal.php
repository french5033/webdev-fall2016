<?php

$customer_type = filter_input(INPUT_POST, "customer_type");
if C
if R
dropdown box
?>

<!DOCTYPE html>
<html><head>
<title> Invoice Total Calculator </title>
<link rel = "stylesheet" type = "test/css" href ="main.css"/>
</head>

<body><main>
<h1> Invoice Total Calculator </h1>
<p> Enter the values below and click "Calculate" </p>

<form action ="." method = "post">
<div id = "data" >
<label> Customer type: </label>
<input type="text" name = "type" value = "<?php echo htmlspecialchars($customer_type); ?>"><br>
<label> invoice subtotal </label>
<input type="text" name = "type" value = "<?php echo htmlspecialchars($invoice_subtotal); ?>"><br>

<label> discount percent </label>
<input type="text" name = "type" value = "<?php echo htmlspecialchars($discount_percent); ?>"><br>

<label> discount amount </label>
<input type="text" name = "type" value = "<?php echo htmlspecialchars($discount_amount); ?>"><br>
 
<label> invoice total </label>
<input type="text" name = "type" value = "<?php echo htmlspecialchars($invoice_total); ?>"><br

<div id="buttons" >
<label> &nbsp;</label>
<input type="submit" value="Calculate" id="calculate_button"> <br>
</div>

</main>
</body>
</html>