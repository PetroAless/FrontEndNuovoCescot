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
    let pn;
    let str1="div numero ";
    for(let i=0;i<10;i++){
        dvn = document.createElement("div");
        pn = document.createElement("p");
        dvn.setAttribute("class","importante");
        pn.innerHTML=str1+i;
        document.body.append(dvn);
        dvn.appendChild(pn);
    }
}
addEventListener("DOMContentLoaded",js);