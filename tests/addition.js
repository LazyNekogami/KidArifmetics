/**
 * 
 */
var span = document.getElementById("span");
var text = document.getElementById("text");
var a,b,c;
var button = document.getElementById("ok");
var right = document.getElementById("right");
var total = document.getElementById("total");
right.textContent = 0;
total.textContent = 0;

document.ready(function(){
	generate();
	button.onclick = isRight;
});


function generate(){
	total.textContent = (+total.textContent+1);
	a = Math.floor( Math.random()*100);
	b = Math.floor( Math.random()*100);
	c = a+b;
	span.textContent = a+"+"+b+"="+"(temporary "+c+")";
}

function isRight(){
	if(10 > +total.textContent){
		if(text.textContent)
	}	
}