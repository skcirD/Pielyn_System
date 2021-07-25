
// btnAddBrband - addbrand (MODAL)...................
document.getElementById('btn-brand').addEventListener("click", function(){
  document.querySelector(".addBrand-modal").style.display = "flex";
});


// modal form btnclose...
document.querySelector('.modal-closebtn').addEventListener("click", function(){
  document.querySelector(".addBrand-modal").style.display = "none";
});


document.querySelector('.closebtn').addEventListener("click", function(){
  document.querySelector(".txt-error").style.display = "none";
});



// closeModal();
// function closeModal(){
//   var modal = document.querySelector('.modal-closebtn');
//   var modal2 = document.querySelector(".addBrand-modal");
//
//   modal.addEventListener("click", function(){
//     modal2.style.display = "none";
//   });
// }
