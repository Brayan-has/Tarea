let salir = document.querySelector(".a")

salir.addEventListener("click",(e)=>{
   let seguro = confirm("seguro deseas sali?");

   
   if(seguro)
    {
        window.location.href="../controlador/logOut.controlador.php"
        
    }
    else{
        window.location.href ="./principal.php";
    }
});
