<!DOCTYPE html>
<html>
<head>
<title>Create Form Dynamically And Increment Value</title>
<script  type="text/javascript">
var i = 0; /* Set Global Variable i */
function increment(){
i += 1; /* Function for automatic increment of field's "Name" attribute. */
}
function removeElement(parentDiv, childDiv){
if (childDiv == parentDiv){
alert("The parent div cannot be removed.");
}
else if (document.getElementById(childDiv)){
var child = document.getElementById(childDiv);
var parent = document.getElementById(parentDiv);
parent.removeChild(child);
}
else{
alert("Child div has already been removed or does not exist.");
return false;
}
}

function nameFunction(){
var r = document.createElement('span');
var y = document.createElement("INPUT");
y.setAttribute("type", "file");
y.setAttribute("placeholder", "Name");
var g = document.createElement("IMG");
g.setAttribute("src", "delete.png");
increment();
y.setAttribute("Name", "mainSong[]");
r.appendChild(y);
g.setAttribute("onclick", "removeElement('myForm','id_" + i + "')");
r.appendChild(g);
r.setAttribute("id", "id_" + i);
document.getElementById("myForm").appendChild(r);
}

function resetElements(){
document.getElementById('myForm').innerHTML = '';
}
</script>
</head>
<body>
<div class="main_content">

<div class="two">
<h4>Frequently Used Form Fields</h4><button onclick="nameFunction()">Name</button>
</div>

<div class="three">
<h2>Your Dynamic Form!</h2>
<form action="" id="mainform" method="get" name="mainform">
<span id="myForm"></span>
<input type="file" class="form-control" name="mainSong[]">

</form>
</div>

</div>
</body>
</html>