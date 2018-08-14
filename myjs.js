// JavaScript Document
var can=document.getElementById("canvas1");
var draw=can.getContext("2d");

//var key=false;

//can.addEventListener('mousemove', function(e){
//  p = getEventPosition(e); 
//  if(p.x>=55&&p.x<=170&&p.y>=45&&p.y<=110&&(p.y-0.5833*p.x-12.68)>=-5&&(p.y-0.5833*p.x-12.68)<=5)
//  {
//	  draw.moveTo(135,130);
//draw.lineTo(235,190);
//   draw.strokeStyle = 'rgba(255,0,0,0.5)'; 
//	  draw.stroke();
//  }
//  else if(p.x>=260&&p.x<=365&&p.y>=45&&p.y<=55)
//  {
//	  draw1.strokeStyle = 'rgba(255,0,0,0.5)'; 
//  }
//  else if(p.x>=460&&p.x<=565&&p.y>=43&&p.y<=82&&(p.y+0.302*p.x-217.128)>=-5&&(p.y+0.302*p.x-217.128)<=5)
//  {
//	  draw2.strokeStyle = 'rgba(255,0,0,0.5)'; 
//  }
//  else if(p.x>=660&&p.x<=765&&p.y>=45&&p.y<=139&&(p.y+0.875*p.x-715)>=-5&&(p.y+0.875*p.x-715)<=5)
//  {
//	  draw3.strokeStyle = 'rgba(255,0,0,0.5)'; 
//  }
//  else
//  {
//
//  }
//}, false);

can.addEventListener('click', function(e){
  p = getEventPosition(e); 
  console.log(p); //在控制台可以打印出来点击的位置
  if(p.x>=55&&p.x<=170&&p.y>=45&&p.y<=110&&(p.y-0.5833*p.x-12.68)>=-5&&(p.y-0.5833*p.x-12.68)<=5)
  {
	  window.location.href='release_choose_target.php';
  }
  if(p.x>=260&&p.x<=365&&p.y>=45&&p.y<=55)
  {
	  window.location.href='release_choose_target.php';
  }
  if(p.x>=460&&p.x<=565&&p.y>=43&&p.y<=82&&(p.y+0.302*p.x-217.128)>=-5&&(p.y+0.302*p.x-217.128)<=5)
  {
	  window.location.href='release_choose_target.php';
  }
  if(p.x>=660&&p.x<=765&&p.y>=45&&p.y<=139&&(p.y+0.875*p.x-715)>=-5&&(p.y+0.875*p.x-715)<=5)
  {
	  window.location.href='release_choose_target.php';
  }
}, false);

 function getEventPosition(ev){
        var x, y;
        if (ev.layerX || ev.layerX == 0) {
          x = ev.layerX;
          y = ev.layerY;
        } else if (ev.offsetX || ev.offsetX == 0) { // Opera
          x = ev.offsetX;
          y = ev.offsetY;
        }
        return {x: x, y: y};
      }


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