const slidePage = document.querySelector(".slidepage");
const nextBtn = document.querySelector(".nextBtn");
const email = document.getElementById("email");
const error = document.querySelector(".error");

nextBtn.addEventListener("click", function(event){
  event.preventDefault();
  // if{email == ""}{
  // 	alert("Name must be filled out");
  // 	error.style.display = "block";
  // 	return false;
  // }
  	slidePage.style.marginLeft = "-25%";
  
});