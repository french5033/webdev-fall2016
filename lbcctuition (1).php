<?php
    // get the data from the form
    
    $resident_or_not = filter_input(INPUT_POST, 'resident_or_not');
    
     $num_of_units = filter_input(INPUT_POST, 'num_of_units');
     
     $csc = filter_input(INPUT_POST, 'csc');
     
     $parking = filter_input(INPUT_POST, 'parking');
     
     $total = filter_input(INPUT_POST, 'total');
     if ($resident_or_not = 'Resident' && $csc ="yes" && $parking = "yes" )
     	$total = 19 + ($num_of_units * 46) + 20 + 30;
     if ($resident_or_not = 'Resident' && $csc = "no" && $parking = "yes") 
     	$total = 46 + 19 + ($num_of_units * 46) + 30;
     	
     if ($resident_or_not = 'Non-Resident')
     	$total = 19 + ($num_of_units * 305) + 20 + 30;
     
?>
<!DOCTYPE html>
<html>
<head>
    <title> LBCC Tuition Calculator </title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>

	<h1 style="text-align: center;"> LBCC Tuition Calculator </h1>
        
        <label> Are you a resident of California? :  </label>
        <span><?php echo htmlspecialchars($resident_or_not); ?></span>
        
        <br><br>
        
        <label> Number of Units : </label>
        <span><?php echo htmlspecialchars($num_of_units); ?></span>
        <br>
        
        <p> Student Health Fee: <b> $19 </b> (for all registered students) </p>
        
        <br> 
        
        <p> <b> Optional Fees: </b> </p>

        <label> College Services Card: </label>
  	<span><?php echo htmlspecialchars($csc); ?></span>
        
        <br> <br> 
        
        
        <label> Parking Permit:  </label>
  	<span><?php echo htmlspecialchars($parking); ?></span>
  	
  	<br> <br>
  	
  	<label> <h2> Total: $ <span><?php echo htmlspecialchars($total); ?></span> </h2> </label>
  	
  	<br><br>
       
    </main>
</body>
</html>