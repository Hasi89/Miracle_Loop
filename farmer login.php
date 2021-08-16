<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}
.container {
    padding: 50px;
  background-color: lightblue;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<form>
  <div class="container">
  <center>  <h1> Farmer Registeration Form</h1> </center>
  <hr>
  <label> Firstname </label> 
<input type="text" name="firstname" placeholder= "Firstname" size="15" required /> 
<label> Middlename: </label> 
<input type="text" name="middlename" placeholder="Middlename" size="15" required /> 
<label> Lastname: </label>  
<input type="text" name="lastname" placeholder="Lastname" size="15"required /> 
<div>
<label> 
<tr>

  <td>District</td>

  <td><select name="District">

  <option value="-1" selected>select..</option>

  <option value="Jaffna">JAFFNA</option>

  <option value="Kilinochchi">KILINOCHCHI</option>

  <option value="Mannar">MANNAR</option>

  <option value="Mullaitivu">MULLAITIVU</option>

  <option value="Vavuniya">VAUNIYA</option>

  <option value="Puttalam">PUTTALAM</option>

  <option value="Kurunegala ">KURUNEGALA</option>

  <option value="Gampaha">GAMPAHA</option>

  <option value="Colombo">COLOMBO</option>

  <option value="Kalutara">KALUTARA</option>

  <option value="Anuradhapura">ANURADHAPURA</option>

  <option value=Polonnaruwa">POLONNARUWA</option>

  <option value="Matale">MATALE</option>

  <option value="Kandy">KANDY</option>

  <option value="Nuwara Eliya">NUWARA ELIYA</option>

  <option value="Kegalle">KEGALLE</option>

  <option value="Ratnapura">RATNAPURA</option>

  <option value="Trincomalee">TRINCOMALEE</option>

  <option value="Batticaloa">BATTICOLOA</option>

  <option value="Ampara">AMPARA</option>

  <option value="Badulla">BADULLA</option>

  <option value="Monaragala">MONARAGALA</option>

  <option value="Hambantota">HAMBANTOTA</option>

  <option value="Matara">MATARA</option>
  
  <option value="Galle">GALLE</option>

   </select></td>

</tr>
</div>
<div>
<label> 
Gender :
</label><br>
<input type="radio" value="Male" name="gender" checked > Male 
<input type="radio" value="Female" name="gender"> Female 
<input type="radio" value="Other" name="gender"> Other

</div>
<label> 
Phone :
</label>
<input type="text" name="country code" placeholder="Country Code"  value="+94" size="2"/> 
<input type="text" name="phone" placeholder="phone no." size="10"/ required> 
Current Address :
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required>