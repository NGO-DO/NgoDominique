document.addEventListener("DOMContentLoaded", function(){
    let elem = document.getElementById("1").getElementsByID("2").getElementById("3");
    elem.onclick=function(){
        elem.onclick.console.log("bonjour");
    }
})