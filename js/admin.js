document.getElementById("addItem").style.display = "none";
document.getElementById("addItemButton").addEventListener("click", function(){
    document.getElementById("addItem").style.display = "";
});
document.getElementById("cancelAddItem").addEventListener("click", function(){
    document.getElementById("addItem").style.display = "none";
});