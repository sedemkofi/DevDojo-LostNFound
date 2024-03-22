<<<<<<< HEAD


=======
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); 
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("dateSeen").setAttribute("max", today);

document.getElementById("addItem").style.display = "none";
document.getElementById("addItemButton").addEventListener("click", function(){
    document.getElementById("addItem").style.display = "";
});
document.getElementById("cancelAddItem").addEventListener("click", function(){
    document.getElementById("addItem").style.display = "none";
});



