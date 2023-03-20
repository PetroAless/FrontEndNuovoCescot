function alignLeft(){
    let divs = document.getElementsByClassName("content");
    for(let i = 0; i < divs.length; i++){
        with(divs[i]){
            style.marginRight = "auto";
            style.marginLeft = "0";
        }
    }
}
function alignMiddle(){
    let divs = document.getElementsByClassName("content");
    for(let i = 0; i < divs.length; i++){
        divs[i].style.margin = "auto";
    }
    
}
function alignRight(){
    let divs = document.getElementsByClassName("content");
    for(let i = 0; i < divs.length; i++){
        with(divs[i]){
            style.marginLeft = "auto";
            style.marginRight = "0";
        }
        
    }
    
}
function js(){
    leftButton = document.getElementById("left");
    midButton = document.getElementById("middle");
    rightButton = document.getElementById("right");

    leftButton.addEventListener("mouseover",alignLeft);
    midButton.addEventListener("mouseover",alignMiddle);
    rightButton.addEventListener("mouseover",alignRight);
}
document.addEventListener("DOMContentLoaded",js);