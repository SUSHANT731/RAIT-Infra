finaltext = "System Tracker";

// declare all characters
const characters =
  "!#$%&'()*+,-./:;<=>?@[]^_`{|}~ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

iterations = finaltext.length + 20;
function randomstr() {
  n = Math.random();
  n = n * characters.length;
  n = Math.floor(n);
  out = characters[n];
  return out;
}

var text = [];
for (i = 0; i < finaltext.length; i++) {
  t = [];
  text.push(t);
}

for (i = 0; i < finaltext.length; i++) {
  t = text[i];
  for (j = 0; j < iterations - 20 * Math.random(); j++) {
    t.push(randomstr());
  }
  t.push(finaltext[i]);
}
//////////////////////////////////////////////////////////////////////////////
// here we have ready arrays of random characters ending in expected letter///
//////////////////////////////////////////////////////////////////////////////
counter = 0;

const elemout = document.getElementById("output");

for (i = 0; i < finaltext.length; i++) {
  const outputpart = document.createElement("div");
  outputpart.classList.add("letters");
  elemout.appendChild(outputpart);
  outputlist = document.getElementsByClassName("letters");
}

function change() {
  for (i = 0; i < finaltext.length; i++) {
    ft = text[i];
    if (counter < ft.length) {
      outputlist[i].innerHTML = ft[counter];
    } else {
      outputlist[i].innerHTML = ft[ft.length - 1];
    }
  }

  counter++;
}

const inst = setInterval(change, 100);

var preloader = document.getElementById("loading");
  function myfunction() {
  preloader.style.display = "none";
}



function toggleHide(){
  let btn=document.getElementById('button');
  let show=document.getElementById('show');
  show.style.display="flex";
  // console.log(show);
}

function toggleShow(){
  let close=document.getElementsByClassName('close');
  let visi=document.getElementById('show');
  visi.style.display="none";

}


function toggleHide1(){
  let btn=document.getElementById('button1');
  let show=document.getElementById('show1');
  show.style.display="block";
  // console.log(show);
}

function toggleShow1(){
  // let close=document.getElementsByClassName('close2');
  let one=document.getElementById('show1');
  one.style.display="none";

}

///////////////////////////////////////// registration starts////////////////////////////////////////////////////////// 
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
/////////////////////////////////////////////////// registration ends //////////////////////////////////////////////////

