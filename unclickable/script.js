function moveFun(){
    
    pr.style.top = Math.random()*300 +"px";
    pr.style.left = Math.random()*300 + "px";
}
let pr = document.getElementById("unclick");
pr.addEventListener("mouseover",moveFun);