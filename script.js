/* Background Images Change */
var imgHome = [" url('img/hero3.png')",
"url('UrbanImg/img.png')"];

var x = 1;


function displayNextImage() {
  x = (x === imgHome.length - 1) ? 0 : x + 1;
  document.getElementById("hero").style.backgroundImage = imgHome[x];
}

function changeImage() {
  setInterval(displayNextImage, 6000);
}

/*Responsive navbar*/
const nav = document.getElementById('navbar');
const close = document.getElementById('close');
const bar = document.getElementById('bar');

if(bar){
bar.addEventListener('click', () => {
nav.classList.add('active');
  })

}
 if (close){
close.addEventListener('click', () => {
  nav.classList.remove('active');
})
}


// Single Product page

var MainImg = document.getElementById("MainImg");
var smalling = document.getElementsByClassName("small-img");

smalling[0].onclick = function(){
  MainImg.src = smalling[0].src;
}

smalling[1].onclick = function(){
  MainImg.src = smalling[1].src;
}

smalling[2].onclick = function(){
  MainImg.src = smalling[2].src;
}
smalling[3].onclick = function(){
  MainImg.src = smalling[3].src;
 
}

