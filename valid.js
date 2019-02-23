
function myFunction(x)
			{
			x.style.background="yellow";
			}


//name
function validName()
{
var name = document.getElementById("Name").value;
if(name == "")
{
document.getElementById("valName").innerHTML = "Name Required";
return false;
}
if(!isNaN(name))
{
document.getElementById("valName").innerHTML = "Only Characters are allowed";
return false;
}
else
{
document.getElementById("valName").innerHTML = "";
}
}
//contact
function validCont()
{
var cont = document.getElementById("Cont").value;
if(cont == "")
{
document.getElementById("valCont").innerHTML = "Contact Required";
return false;
}
if(isNaN(cont))
{
document.getElementById("valCont").innerHTML = "Only numbers are allowed";
return false;
}
if(cont.length !=10)
{
document.getElementById("valCont").innerHTML = "Incorrect contact";
}
else
{
document.getElementById("valCont").innerHTML = "";
}
}

//email
function validEmail()
{
var mail = document.getElementById("Email").value;
if(mail == "")
{
document.getElementById("valEmail").innerHTML = "Email Required";
return false;
}
else
{
document.getElementById("valEmail").innerHTML = "";
}
}
//password
function validPass()
{
var pass = document.getElementById("Pass").value;
if(pass == "")
{
document.getElementById("valPass").innerHTML = "Password Required";
valPass.style.color = "red";
progress.value = "0";
return false;
}
if(pass.length <=3)
{
document.getElementById("valPass").innerHTML = "Weak";
valPass.style.color = "red";
progress.value = "30";
return false;
}
if(pass.length >3 && pass.length <8)
{
document.getElementById("valPass").innerHTML = "Medium";
valPass.style.color = "yellow";
progress.value = "60";
return false;
}
if(pass.length >=8)
{
document.getElementById("valPass").innerHTML = "Strong";
valPass.style.color = "green";
progress.value = "100";
return false;
}
else
{
document.getElementById("valPass").innerHTML = "";
}
}

function val()
{
//skill
var skill = document.getElementsByName("sk[]");
var flag = 0, i;
for(i = 0;i<skill.length;i++)
{
if(skill[i].checked)
{
flag =1;
break;
}
}
if(flag == 0)
{
valSkill.innerHTML = "Select skill"
return false;
}
else
{
valSkill.innerHTML = ""
}
//city
var c = document.getElementById("city").value;
if(c == "Select City")
{
document.getElementById("valcity").innerHTML = "select a city";
return false;
}
else
{
document.getElementById("valcity").innerHTML = "";
}

//gender
var gen = document.getElementsByName("rk[]");
var flag = 0;
if(gen[0].checked || gen[1].checked)
{
flag =1;
}
if(flag == 0)
{
valGen.innerHTML = "Select skill";
return false;
}
else
{
valGen.innerHTML = "";
}
}
//city other
function Other()
{
var c = document.getElementById("city").value;
if(c == "Others")
{
ot.style.display = "block";
}
else
{
ot.style.display = "none";
}
}








