// *****************************login*******************************
let form = document.querySelector('#form2');
// console.log(form.user);

//Ecouter la modification de username
form.user.addEventListener('change', function () {
  validname(this);
});

//Ecouter la modification de Password
form.pass.addEventListener('change', function () {
  validpass(this);
});

//Ecouter la modification de Formulaire
form.addEventListener('submit', function (e) {
  
  if (validname(form.user) && validpass(form.pass)) {
   form.submit();
   
  }
  else e.preventDefault();
});

// *****************Validation username****************
const validname = function (inputeUsername) {
  let nameRegex = new RegExp('^[a-zA-Z]{3,20}$', 'g');
  let testuser = nameRegex.test(inputeUsername.value);
  let msg = document.getElementById('mgs');
  let valid = false;
  if (testuser) {
    msg.innerHTML = `<p Il style="color:#008000;">Votre Nom Valide</p>`;
    return true;
  } else {
    msg.innerHTML = `<p Il style="color:red;">Il faut entrer au moins trois caractères et être uniquement alphanumérique!!</p>`;
    return false;
  }
}; 
// *****************Validation Password****************
const validpass = function (inputePassword) {
  let passRegex = new RegExp('^().{6,16}$', 'g');
  let testuser = passRegex.test(inputePassword.value);
  let msg = document.getElementById('pasw');
  if (testuser) {
    msg.innerHTML = `<p Il style="color:#008000;">Votre Password Valide</p>`;
    return true;
  } else {
    msg.innerHTML = `<p Il style="color:red;">Il faut entrer au moins Six caractères !!</p>`;
    return false;
  }
};

//   ^ représente le caractère de départ de la string.
// (?=.*[0-9]) représente un chiffre qui doit apparaître au moins une fois.
// (?=.*[az]) représente un alphabet minuscule qui doit apparaître au moins une fois.
// (?=.*[AZ]) représente un alphabet majuscule qui doit apparaître au moins une fois.
// (?=.*[@#$%^&-+=()] représente un caractère spécial qui doit apparaître au moins une fois.
// (?=\\S+$) les espaces blancs ne sont pas autorisés dans toute la string.
// .{8, 20} représente au moins 8 caractères et au plus 20 caractères.
// $ représente la fin de la string.
// *****************************login*******************************

