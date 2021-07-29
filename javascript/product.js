
// btnAddBrband - addbrand (MODAL)...................
document.getElementById('btn-product').addEventListener("click", function(){
  document.querySelector(".addProduct-modal").style.display = "flex";
});


// modal form btnclose...
document.querySelector('.modal-closebtn').addEventListener("click", function(){
  document.querySelector(".addProduct-modal").style.display = "none";
});


document.querySelector('.closebtn').addEventListener("click", function(){
  document.querySelector(".txt-error").style.display = "none";
});
