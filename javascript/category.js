
// btnAddBrband - addbrand (MODAL)...................
document.getElementById('btn-category').addEventListener("click", function(){
  document.querySelector(".addCategory-modal").style.display = "flex";
});


// modal form btnclose...
document.querySelector('.modal-closebtn').addEventListener("click", function(){
  document.querySelector(".addCategory-modal").style.display = "none";
});


document.querySelector('.closebtn').addEventListener("click", function(){
  document.querySelector(".txt-error").style.display = "none";
});
