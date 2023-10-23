const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

form.addEventListener("submit", (e) => {
   e.preventDefault();

   validateInputs();
});

const setError = (element, message) => {
   const inputControl = element.parentElement;
   const errorDisplay = inputControl.querySelector(".error");

   errorDisplay.innerText = message;
   inputControl.classList.add("succes");
   inputControl.classList.remove("error");
};

const isValidEmail = (email) => {};

const validateInputs = () => {
   const usernameValue = username.value.trim();
   const emailValue = email.value.trim();
   const passwordValue = password.value.trim();
   const password2Value = password2.value.trim();

   if (usernameValue === "") {
      setError(username, "Tolong tuliskan username anda!");
   } else {
      setSucces(username);
   }

   if (emailValue === "") {
      setError(email, "Tolong tuliskan email anda!");
   } else if (!isValidEmail(emailValue)) {
      setError(email, "Berikan");
   }
};
