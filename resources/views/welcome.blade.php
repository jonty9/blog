<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <h1 color="#222222" align="center">Form </h1>
    <br>
    
    	<form action="showform" method="POST" >
    		@csrf
    <label> Name
    	<input type="text" name="name">
    </label>
    <br>
    <label> Date of birth
    	<input type="date" name="dob">
    </label>
    <br>
    <label> Gender:
    	<label for="Male">Male</label>
    	<input type="radio" name="gender" value="Male"> 
    	<label for="Female">Female</label>
    	<input type="radio" name="gender" value="Female">
 	</label>
 	<br>
 	<input type="submit" name="submit" value="Submit Form">
</form>
    
</body>
</html>