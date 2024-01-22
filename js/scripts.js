// Auto Text Changer Functionality

const textTyper = document.querySelector(".textTyper");

const autoTextChanger = () => {
  setTimeout(() => {
    textTyper.innerHTML = " Potentiel";
  }, 0);

  setTimeout(() => {
    textTyper.innerHTML = " Créativité";
  }, 5000);

  setTimeout(() => {
    textTyper.innerHTML = "Talents";
  }, 10000);

  setTimeout(() => {
    textTyper.innerHTML = "Compétence";
  }, 15000);
};

autoTextChanger();
setInterval(autoTextChanger, 20000);

//slider photo Changer
let i=0; 

let images= [];
let timer= 3000;

//list of images
images[0]='http://www.isikef.rnu.tn/Fr/upload/1494860081.jpg'
images[1]='https://lh3.googleusercontent.com/p/AF1QipMuwkwpauHyF0ti6e7CexVRWMaikHCJFWgKSZ7H=s1360-w1360-h1020';
images[2]='http://www.isikef.rnu.tn/Fr/upload/1522939853.jpg';
images[3]='https://lh3.googleusercontent.com/p/AF1QipMFWBE0J0GpRpJUH6hUo731cwELWHKNCK8EKmwg=s1360-w1360-h1020';
images[4]='https://lh3.googleusercontent.com/p/AF1QipNRpP2Dhkn5wC_EHvbGkg9dsXx9ierdlnehYncg=s1360-w1360-h1020';



//function that will change the image
function changeImage(){
  document.home_slider.src=images[i];
  if(i < images.length -1){
    i++;
  }else{
    i= 0;
  }
  setTimeout(changeImage,timer);
}

window.onload= changeImage;


//about section 

// Makeshift carousel function that gets invoked with the Index to start it off, then the callback increments the index to recursively invoke the same function. Works even in IE11!
var testimonialItems = document.querySelectorAll(".item label");
var time;
function cycleTestimonials(index) {
   time = setTimeout(function() {
    var evt;
    if (document.createEvent){
      //If browser = IE, then polyfill
      evt = document.createEvent('MouseEvent');
      evt.initMouseEvent('click', true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
    } else {
      //If Browser = modern, then create new MouseEvent
      evt = new MouseEvent("click", {
            view: window,
            bubbles: true,
            cancelable: true,
            clientX: 20
          });
    }
    var ele = "." + testimonialItems[index].className;
    var ele2 = document.querySelector(ele)
    ele2.dispatchEvent(evt);
    index++; // Increment the index
    if (index >= testimonialItems.length) {
      index = 0; // Set it back to `0` when it reaches `3`
    }
    cycleTestimonials(index); // recursively call `cycleTestimonials()`
    document.querySelector(".testimonials").addEventListener("click", function() {
      clearTimeout(time); //stop the carousel when someone clicks on the div
    });
  }, 2000); //adjust scroll speed in miliseconds
}
//run the function
cycleTestimonials(0);



//formation 
let tabs = document.querySelectorAll(".tabs h3");
let tabContents = document.querySelectorAll(".tab-content div");

tabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabContents.forEach((content) => {
      content.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tabContents[index].classList.add("active");
    tabs[index].classList.add("active");
  });
});


//event 
$(document).ready(function(){
  $(".event-slider").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000, //2000ms = 2s;
    autoplayHoverPause: true,
  });})
  


//se connecter
const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});



// Récupération des éléments HTML pour les boutons de connexion et d'inscription
const loginBtn = document.getElementById('loginBtn');
const signupBtn = document.getElementById('signupBtn');

// Fonction pour masquer les boutons
function hideButtons() {
  loginBtn.style.display = 'none';
  signupBtn.style.display = 'none';
}

// Vérification de l'état de l'authentification
firebase.auth().onAuthStateChanged((user) => {
  if (user) {
    // Utilisateur connecté, masquer les boutons
    hideButtons();
  } else {
    // Utilisateur déconnecté, afficher les boutons
    loginBtn.style.display = 'block';
    signupBtn.style.display = 'block';
  }
});
