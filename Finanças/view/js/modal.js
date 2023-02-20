// Get the modal
var modalAdd = document.getElementById("modal-containerAdd");
var modalGive = document.getElementById("modal-containerGive");

// Get the button that opens the modal
const btnAdd = document.getElementById("add");
const btnGive = document.getElementById("give");
const btnCheck = document.getElementById("check");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal Add

btnAdd.addEventListener('click', () => {
  modalAdd.style.display = "block";  
});
// When the user clicks the button, open the modal Give
btnGive.addEventListener('click', () => {
  modalGive.style.display = "block";  
});

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modalAdd.style.display = "none";
  modalGive.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalAdd || event.target == modalGive) {
    modalAdd.style.display = "none";
    modalGive.style.display = "none";
  }
}