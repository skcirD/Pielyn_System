
// btnAddBrband - addbrand (MODAL)...................
document.getElementById('btn-brand').addEventListener("click", function(){
  document.querySelector(".addBrand-modal").style.display = "flex";
});


// modal form btnclose...
document.querySelector('.modal-closebtn').addEventListener("click", function(){
  document.querySelector(".addBrand-modal").style.display = "none";
});

// close alert error message
document.querySelector('.closebtn').addEventListener("click", function(){
  document.querySelector(".txt-error").style.display = "none";
});
// Close alert susscess mesg
document.querySelector('.closebtn').addEventListener("click", function(){
  document.querySelector(".txt-addSuccess").style.display = "none";
});
