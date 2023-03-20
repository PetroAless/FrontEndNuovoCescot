var divCount = 0;
function creaDiv(){
    let dvn;
    let pn;
    let str1="div numero ";
    for(let i=0;i<10;i++){
        dvn = document.createElement("div");
        document.body.append(dvn);
        pn = document.createElement("p");
        pn.innerHTML=str1+divCount;
        dvn.appendChild(pn);
        divCount++;
    }
}
function setClass(){
    let dvn = document.getElementsByTagName("div");;
    for(let i=0;i<dvn.length;i++){
        dvn[i].classList.add("importante");
    }
}
function js(){
    let btn = document.createElement("button");
    btn.setAttribute("id","trigger");
    btn.innerText="crea div";
    btn.addEventListener("click",creaDiv);
    document.body.append(btn);

    btn = document.createElement("button");
    btn.innerText="set classe";
    btn.addEventListener("click",setClass);
    document.body.append(btn);

}
addEventListener("DOMContentLoaded",js);