function gebi(i){

return document.getElementById(i);

}
function drag(e2){

function mou(e2){

o.style.left=e2.pageX-x0+px+"px";o.style.top=e2.pageY-y0+py+"px";

document.addEventListener("mouseup", upm, true);

}

function upm(e2){

document.removeEventListener("mousemove", mou, true);

document.removeEventListener("mouseup", upm, true);
}
o=document.getElementById(this.id);

x0=e2.pageX;y0=e2.pageY;
px=parseInt(o.style.left);
py=parseInt(o.style.top);
document.addEventListener("mousemove", mou, true);
document.addEventListener("mouseup", upm, true);}
gebi('iddetuelementoquequieresdragear').onmousedown=drag;
