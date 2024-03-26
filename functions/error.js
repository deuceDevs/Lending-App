let form = document.getElementById("myForm");
let lenderName = document.getElementById("lenderName");
let lenderAddress = document.getElementById("lenderAddress");
let contact = document.getElementById("lenderContactNo");
let FBAdd = document.getElementById("lenderFBAdd");
let comakerName = document.getElementById("comakerName");
let comakerAdd = document.getElementById("comakerAdd");
let lenderNameError = document.querySelector(".lenderNameError");
let lenderAddError = document.querySelector(".addressError");
let contactError = document.querySelector(".contactError");
let fbError = document.querySelector(".fbError");
let cmError = document.querySelector(".cmError");
let cmaError = document.querySelector(".cmaError");

function validateInput(e, input, errorDiv, errorMessage) {
  switch (input.id) {
    case "lenderName":
      if (input.value == "") {
        lenderNameError.innerHTML = errorMessage;
      } else {
        lenderNameError.innerHTML = "";
      }
      break;
    case "lenderAddress":
      if (input.value == "") {
        lenderAddError.innerHTML = errorMessage;
      } else {
        lenderAddError.innerHTML = "";
      }
      break;
    case "lenderContactNo":
      if (input.value == "") {
        contactError.innerHTML = errorMessage;
      } else {
        contactError.innerHTML = "";
      }
      break;
    case "lenderFBAdd":
      if (input.value == "") {
        fbError.innerHTML = errorMessage;
      } else {
        fbError.innerHTML = "";
      }
      break;
    case "comakerName":
      if (input.value == "") {
        cmError.innerHTML = errorMessage;
      } else {
        cmError.innerHTML = "";
      }
      break;
    case "comakerAdd":
      if (input.value == "") {
        cmaError.innerHTML = errorMessage;
      } else {
        cmaError.innerHTML = "";
      }
      break;
  }
}
form.addEventListener("submit", (e) => {
  if (e.submitter && e.submitter.name == "submit") {
    validateInput(e, lenderName, lenderNameError, "Enter lender's name.");
    validateInput(e, lenderAddress, lenderAddError, "Enter lender's address.");
    validateInput(e, contact, contactError, "Enter lender's number.");
    validateInput(e, FBAdd, fbError, "Enter lender's facebook address.");
    validateInput(e, comakerName, cmError, "Enter comaker's name.");
    validateInput(e, comakerAdd, cmaError, "Enter comaker's address.");

    let hasErrors =
      lenderNameError.innerHTML ||
      lenderAddError.innerHTML ||
      contactError.innerHTML ||
      fbError.innerHTML ||
      cmError.innerHTML ||
      cmaError.innerHTML;
    if (hasErrors) {
      e.preventDefault();
    }
  }
});
