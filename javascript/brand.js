// OPEN and CLOSE MODAL-FORM (Add Brand)
var btnBrand = document.getElementById('btn-brand');
var addBrandModal = document.querySelector('.addBrand-modal');
var closebtn = document.querySelector('.modal-closebtn');

  btnBrand.onclick = function(){
    addBrandModal.style.display = "flex";

    closebtn.onclick = function(){
      addBrandModal.style.display = "none";
    }
  }

// 
