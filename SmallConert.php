<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Concert</title>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
<div class="contaner">

	<form method="post" action="SmallConertResult.php">

	<div class="row">     <!--the fist row -->
		<div class="col-md-1"> </div>
		<div class="col-md-10">
	      <lable class="checkbox-inline"><input type="checkbox" name="a1" id="a1" value="A1">A1</lable>
 
    	  <lable class="checkbox-inline"><input type="checkbox" name="a2" id="a2" value="A2">A2</lable>
      
	      <lable class="checkbox-inline"><input type="checkbox" name="a3" id="a3" value="A3">A3</lable>
	   </div>
	</div> <!-- close the fist row -->
     

	<div class="row"> <!--the second row -->
		<div class="col-md-1"> </div>
        <div class="col-md-10">
	      <lable class="checkbox-inline"><input type="checkbox" name="b1" id="b1" value="B1">B1</lable>
        
    	  <lable class="checkbox-inline"><input type="checkbox" name="b2" id="b2" value="B2">B2</lable>
          <lable class="checkbox-inline"><input type="checkbox" name="b3" id="b3" value="B3">B3</lable>
	   </div>
	</div> <!-- close the second row -->

	<div class="row">    <!--the third row -->
		<div class="col-md-1"> </div>
		<div class="col-md-10">
	      <lable class="checkbox-inline"><input type="checkbox" name="c1" id="c1" value="C1">C1</lable>
       
    	  <lable class="checkbox-inline"><input type="checkbox" name="c2" id="c2" value="C2">C2</lable>
       
	      <lable class="checkbox-inline"><input type="checkbox" name="c3" id="c3" value="C3">C3</lable>
	   </div>
	</div>  <!-- close the third row -->
     
     <div class="row">
     	<div class="col-md-1"> </div>

		<input class="btn btn-primary" type="submit" value="Buy now!">
     </div>
	


</div>
	
</body>
</html>
