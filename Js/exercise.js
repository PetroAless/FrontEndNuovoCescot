function backColor(){
    let dvs = document.querySelectorAll(".importante");
    dvs.forEach(el => {
        el.style.backgroundColor = "lightgrey";
    });
}

function js(){
    let btn = document.createElement("button");
    btn.setAttribute("id","trigger");
    btn.innerText="avvia";
    btn.addEventListener("click",backColor);
    document.body.append(btn);
        
    let cls = document.createAttribute("class");
    cls.value="importante";
    
    let dvn;
    for(let i=0;i<10;i++){
        dvn = document.createElement("div");
        dvn.setAttribute("class","importante");
        dvn.innerHTML="div nel for";
        document.body.append(dvn);
    }
}
addEventListener("DOMContentLoaded",js);