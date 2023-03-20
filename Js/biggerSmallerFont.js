//func to make the p1 font bigger
function biggerFont(){
    let font = parseInt(getComputedStyle(p1).fontSize);//get previous fontsize and take int
    font+=10;
    p1.style.fontSize=font+"px";//set new fontsize
}
//make font smaller
function smallerFont(){
    let font = parseInt(getComputedStyle(p1).fontSize);
    font-=10;
    p1.style.fontSize=font+"px";
}
function create_buttons(){
    let bigB = document.createElement("button");
    let smallB = document.createElement("button");
    document.body.prepend(smallB);//prepend to put as first element
    document.body.prepend(bigB);
    bigB.innerHTML="font+";
    smallB.innerHTML="font-";
    
    bigB.addEventListener("click",biggerFont);//setting funcs for 2 buttons
    smallB.addEventListener("click",smallerFont);
}

function startJs(){//starting function
    let p1 = document.querySelector("#p1");//prepare p1
    create_buttons();
}

document.addEventListener("DOMContentLoaded",startJs);


