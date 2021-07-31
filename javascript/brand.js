
// btnAddBrband - addbrand (MODAL)...................
document.getElementById('btn-brand').addEventListener("click", function(){
  document.querySelector(".addBrand-modal").style.display = "flex";
  document.getElementById("btn-addBrand").disabled = false;

document.querySelector('.input-brand').placeholder = "Enter brand name";

  document.getElementById("btn-updateBrand").disabled = true;
  document.getElementById("btn-updateBrand").style.background = "gray";

  document.getElementById("btn-addBrand").style.background = "#008c96a4";
  document.getElementById("btn-addBrand").addEventListener('mouseenter', () =>
    document.getElementById("btn-addBrand").style.background = "#006870");
    document.getElementById("btn-addBrand").addEventListener('mouseleave', () =>
      document.getElementById("btn-addBrand").style.background = "#008c96a4");

});

// for(i = 0; i<document.querySelectorAll('.update').length; i++){
//   document.querySelectorAll('.update')[i].addEventListener("click", function(){
//         document.getElementById("btn-addBrand").disabled = true;
//         document.getElementById("btn-updateBrand").disabled = false;
//         document.getElementById("btn-addBrand").style.background = "gray";
//         document.querySelector(".addBrand-modal").style.display = "flex";
//
//         document.querySelector('.input-brand').placeholder = brand;
//
//         document.getElementById("btn-updateBrand").style.background = "#008c96a4";
//         document.getElementById("btn-updateBrand").addEventListener('mouseenter', () =>
//           document.getElementById("btn-updateBrand").style.background = "#006870");
//           document.getElementById("btn-updateBrand").addEventListener('mouseleave', () =>
//             document.getElementById("btn-updateBrand").style.background = "#008c96a4");
//   });
// }

nameOfBrand();
function nameOfBrand(){
  for(i = 0; i<document.querySelectorAll('.update').length; i++){

    brandName(i);

  }
}

function brandName(n){
      document.querySelectorAll('.update')[n].addEventListener("click", function(){
        var brand = document.querySelectorAll('.brandName')[n].innerHTML;
        document.querySelector('.input-brand').placeholder = brand;
                document.getElementById("btn-addBrand").disabled = true;
                document.getElementById("btn-updateBrand").disabled = false;
                document.getElementById("btn-addBrand").style.background = "gray";
                document.querySelector(".addBrand-modal").style.display = "flex";



                document.getElementById("btn-updateBrand").style.background = "#008c96a4";
                document.getElementById("btn-updateBrand").addEventListener('mouseenter', () =>
                  document.getElementById("btn-updateBrand").style.background = "#006870");
                  document.getElementById("btn-updateBrand").addEventListener('mouseleave', () =>
                    document.getElementById("btn-updateBrand").style.background = "#008c96a4");
      });
}

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


// BTN UPDATE - to show addbrand modal............
// for(i = 0; i<document.querySelectorAll('.brandName')[i].length; i++){
//   var brandName = document.querySelectorAll(".brandName")[i].innerHTML;
//
//   alert(branName);
// }
