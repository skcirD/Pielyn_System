
openAddBrandModal();
closeBrandModal();
closeErrorMesg();
closeSuccessMesg();


// ..........................................MY FUNCTIONS......................................................

// OPEN BRAND MODEL
function openAddBrandModal(){
  var btnBrand = document.getElementById('btn-brand');
  var addBrandModal = document.querySelector('.addBrand-modal');

  btnBrand.onclick = function(){
    addBrandModal.style.display = "flex";
  }
}

// close BRAND MODAL
function closeBrandModal(){
  var modalCloseBtn = document.querySelector('.modal-closebtn');
  var addBrandModal = document.querySelector('.addBrand-modal');

  modalCloseBtn.onclick = function(){
    addBrandModal.style.display = "none";
  }
}

function closeErrorMesg(){
  var txtError = document.querySelector('.txt-error');
  var btnCloseError = document.querySelector('.closebtn');


  btnCloseError.onclick = function(){
    txtError.style.display = "none";
  }
}

function closeSuccessMesg(){
  var txtSuccess = document.querySelector('.txt-addSuccess');
  var btnCloseError = document.querySelector('.closebtns');


  btnCloseError.onclick = function(){
    txtSuccess.style.display = "none";
  }
}
