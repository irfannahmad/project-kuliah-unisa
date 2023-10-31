$(document).ready(function () {
   $("#form").submit(function (event) {
      event.preventDefault();

      var usernameValue = $("#username").val();
      var alamatValue = $("#alamat").val();
      var umurValue = $("#umur").val();
      var emailValue = $("#email").val();
      var passwordValue = $("#password").val();
      var password2Value = $("#password2").val();

      if (usernameValue === "") {
         alert("Silahkan masukkan username anda!");
         return;
      }

      var emailPattern = /\S+@\S+\.\S+/;

      if (!emailPattern.test(emailValue)) {
         alert("Mohon masukkan alamat email yang valid!");
         return;
      }

      if (emailValue === "") {
         alert("Silahkan masukkan email anda!");
         return;
      }

      if (passwordValue === "") {
         alert("Silahkan masukkan password anda!");
         return;
      }

      if (password2Value !== passwordValue) {
         alert("Konfirmasi password harus sama dengan password sebelumnya!");
         return;
      }

      alert("Data berhasil ditambahkan");

      $("#username, #alamat, #umur, #email, #password, #password2").val("");
   });
});
