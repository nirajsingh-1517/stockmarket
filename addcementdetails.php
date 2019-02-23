<center>
<div style= "height:500px;width:500px;background-color:#d35537; margin:60px; padding:20px;border-radius:25px;margin-top:-10px">
<form action="add-cementproces.php" method="post" onsubmit ="return val()">

<table border="0" cellspacing="10" cellpadding="5">
<h1 style="color:white">ADD CEMENT DETAILS</h1>
<tr>
<td style="color:white;font-size:30px">Cement Name:</td>
<td><input type="text" id="name" name="name" onblur="validName()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valName" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">About Cement:</td>
<td><input type="text" id="about" name="about" onblur="validCont()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valCont" style="color:white"></span></td>
</tr>


<tr>
<td style="color:white;font-size:30px">Share Value:</td>
<td><input type="number" id="rate" name="rate" onblur="validEmail()" onfocus="myFunction(this)" class="sh"></td>
<td><span id="valEmail" style="color:white"></span></td>
</tr>


<!--<tr>
<td style="color:white;font-size:30px">Bank Logo:</td>
<td><input type="file" id="logo" name="logo" onblur="validimage()" onfocus="myFunction(this)" class="sh" style="width:190px;background-color:white"></td>
<td><span id="valCard" style="color:white"></span></td>
</tr>-->




<tr>
<td><input type="Submit" value="SAVE" class="an"></td>
<td><input type="reset" value="Cancel" class="an"></td>
</tr>
</table>
</center>
</form>
</div>

</body>