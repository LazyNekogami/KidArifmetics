/**
 * 
 */
var span = document.getElementById("span");
var text = document.getElementById("text");
var a,b,c;
var button = document.getElementById("ok");
var right = document.getElementById("right");
var total = document.getElementById("total");
var submit = document.getElementById("submit");
right.textContent = 0;
total.textContent = 0;

function generate(){
	total.textContent = (+total.textContent+1);
	a = Math.floor( Math.random()*100);
	b = Math.floor( Math.random()*100);
	c = a+b;
	span.textContent = a+"+"+b+"="+"(temporary "+c+")";
}

function isRight(){
	if(10 > +total.textContent){
		if(text.value == c){
			right.value = (+right.value+1);
		};
		generate();
	}
	else{
//		alert('hidding things!');
//		submit.setAttribute('hidden', 'false');
//		button.setAttirbute('hidden', 'ture');
	}
};

generate();
button.onclick = isRight;