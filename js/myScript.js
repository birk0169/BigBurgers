function toggleLogin(){
    var element=document.querySelector(".login");
    if(element.classList.contains("hide")){
        element.classList.remove("hide");
    }
    else{
        element.classList.add("hide");
    }
}

document.getElementById("toggle-login").addEventListener("click", function(event){
    event.preventDefault()
    toggleLogin();
});