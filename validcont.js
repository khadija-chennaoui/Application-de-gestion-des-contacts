// *****************************table contact*******************************

let form = document.querySelector('#form3');
console.log(form.nam); 
// Ecouter la modification de name
form.nam.addEventListener('change', function () {
  validname(this);
});

//Ecouter la modification de Phone
form.phone.addEventListener('change', function () {
  validphone(this);
});
// //Ecouter la modification de email
form.email.addEventListener('change', function () {
    validemail(this);
  });
// //Ecouter la modification de adress
form.adrs.addEventListener('change', function () {
    validadrs(this);
  });
// //Ecouter la modification de Formulaire
form.addEventListener('submit', function (e) {
  
  if (validname(form.nam) && validphone(form.phone) && validemail(form.email) &&  validadrs(form.adrs)){
   form.submit();
  }
  else e.preventDefault();
});

// *****************Validation name****************
const validname = function (name) {
  let nameRegex = new RegExp('^[a-zA-Z ]{3,20}$', 'g');
  let testuser = nameRegex.test(name.value);
  let msg = document.getElementById('msg');
  let valid = false;
  if (testuser) {
    msg.innerHTML = `<p Il style="color:#008000;">Votre Nom Valide</p>`;
    return true;
  } else {
    msg.innerHTML = `<p Il style="color:red;">Il faut entrer au moins trois caractères et être uniquement alphanumérique!!</p>`;
    return false;
  }
}; 
// // *****************Validation phone****************
const validphone = function (phone) {
  let passRegex = new RegExp('^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$', 'g');
  let testuser = passRegex.test(phone.value);
  let msg = document.getElementById('mrg');
  if (testuser) {
    msg.innerHTML = `<p Il style="color:#008000;">Phone Valide</p>`;
    return true;
  } else {
    msg.innerHTML = `<p Il style="color:red;"> ne doit autoriser que ces caractéres  +-() 1234567890 !!</p>`;
    return false;
  }
};
// // *****************Validation email****************
const validemail = function (email) {
    let passRegex = new RegExp('^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$', 'g');
    let testuser = passRegex.test(email.value);
    let msg = document.getElementById('emil');
    if (testuser) {
      msg.innerHTML = `<p Il style="color:#008000;">Email Valide</p>`;
      return true;
    } else {
      msg.innerHTML = `<p Il style="color:red;"> Email non valide  !!</p>`;
      return false;
    }
  };
// // *****************Validation Address****************

const validadrs = function (adrs) {
    let nameRegex = new RegExp('^().{10,200}$', 'g');
    let testuser = nameRegex.test(adrs.value);
    let msg = document.getElementById('ad');
    let valid = false;
    if (testuser) {
      msg.innerHTML = `<p Il style="color:#008000;">Address Valide</p>`;
      return true;
    } else {
      msg.innerHTML = `<p Il style="color:red;">Il faut entrer au moins dix caractères !!</p>`;
      return false;
    }
       
    }

//   ^ représente le caractère de départ de la string.
// (?=.*[0-9]) représente un chiffre qui doit apparaître au moins une fois.
// (?=.*[az]) représente un alphabet minuscule qui doit apparaître au moins une fois.
// (?=.*[AZ]) représente un alphabet majuscule qui doit apparaître au moins une fois.
// (?=.*[@#$%^&-+=()] représente un caractère spécial qui doit apparaître au moins une fois.
// (?=\\S+$) les espaces blancs ne sont pas autorisés dans toute la string.
// .{8, 20} représente au moins 8 caractères et au plus 20 caractères.
// $ représente la fin de la string.
// *****************************login*******************************

