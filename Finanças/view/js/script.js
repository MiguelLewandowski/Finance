// Get the modal
var modal = document.getElementById("modal-container");

// Get the button that opens the modal
const btnAdd = document.getElementById("add");
const btnGive = document.getElementById("give");
const btnCheck = document.getElementById("check");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal

btnAdd.addEventListener('click', () => {
  modal.style.display = "block";  
});

btnGive.addEventListener('click', () => {
  modal.style.display = "block";  
});


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}