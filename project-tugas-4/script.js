const form = document.getElementById("form");
const username = document.getElementById("username");
const alamat = document.getElementById("alamat");
const umur = document.getElementById("umur");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

form.addEventListener("submit", function (event) {
   event.preventDefault();

   if (username.value === "") {
      alert("Silahkan masukkan username anda!");
      return;
   }

   const emailValue = email.value;
   const emailPattern = /\S+@\S+\.\S+/;

   if (!emailPattern.test(emailValue)) {
      alert("Mohon masukkan alamat email yang valid!");
      return;
   }

   if (email.value === "") {
      alert("Silahkan masukkan email anda!");
      return;
   }

   if (password.value === "") {
      alert("Silahkan masukkan password anda!");
      return;
   }

   if (password2.value !== password.value) {
      alert("Konfirmasi password harus sama dengan password sebelumnya!");
      return;
   }

   alert("Data berhasil ditambahkan");

   username.value = "";
   alamat.value = "";
   umur.value = "";
   email.value = "";
   password.value = "";
   password2.value = "";
});
