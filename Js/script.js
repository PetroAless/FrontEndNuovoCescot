function biggerFont(){
    let font = parseInt(getComputedStyle(p1).fontSize);
    font+=10;
    p1.style.fontSize=font+"px";
}
function smallerFont(){
    let font = parseInt(getComputedStyle(p1).fontSize);
    font-=10;
    p1.style.fontSize=font+"px";
}
function create_buttons(){
    let bigB = document.createElement("button");
    let smallB = document.createElement("button");
    document.body.prepend(smallB);
    document.body.prepend(bigB);
    bigB.innerHTML="font+";
    smallB.innerHTML="font-";
    
    bigB.addEventListener("click",biggerFont);
    smallB.addEventListener("click",smallerFont);
}

function startJs(){
    let p1 = document.querySelector("#p1");
    create_buttons();
}

document.addEventListener("DOMContentLoaded",startJs);


