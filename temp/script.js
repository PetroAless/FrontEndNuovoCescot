var colorArray = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
		  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
		  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
		  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
		  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
		  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
		  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
		  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
		  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
		  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'];
function rand(min,max){
    return Math.floor((Math.random()*(max-min+1)+min));
}

var article = document.getElementsByTagName("article");
var section = document.getElementsByTagName("section");

var aWidth=article[0].offsetWidth;
var sWidth=section[0].offsetWidth;

var aHeight=article[0].offsetHeight;
var sHeight=section[0].offsetHeight;

var speed=0.6;
var x=0;
var x1=speed;
var y=0;
var y1=speed;

function move (){
    if(parseInt(article[0].style.left)>sWidth-(aWidth+10)){
        x1=-speed;
        article[0].style.backgroundColor=colorArray[rand(0,49)];
    }
    if(parseInt(article[0].style.left)<0){
        x1=speed;
        article[0].style.backgroundColor=colorArray[rand(0,49)];
    }
    x+=x1;
    article[0].style.left=x+"px";
    

    if(parseInt(article[0].style.top)>sHeight-(aHeight+10)){
        y1=-speed;
        article[0].style.backgroundColor=colorArray[rand(0,49)];
    }
    if(parseInt(article[0].style.top)<0){
        y1=speed;
        article[0].style.backgroundColor=colorArray[rand(0,49)];
    }
    y+=y1;
    article[0].style.top=y+"px";
    

}
setInterval(move, 1);
