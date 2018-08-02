// JavaScript Document
var can=document.getElementById("canvas1");
var draw=can.getContext("2d");
/*画一条直线*/   
draw.moveTo(135,130);
draw.lineTo(235,190);
draw.stroke();

draw.moveTo(335,130);
draw.lineTo(435,130);
draw.stroke();

draw.moveTo(535,155);
draw.lineTo(635,130);
draw.stroke();

draw.moveTo(735,215);
draw.lineTo(835,130);
draw.stroke();