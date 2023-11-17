// RECAPTCHA
function cargarScriptRecatpcha() {
  var scriptTag = document.createElement("script");
  scriptTag.setAttribute(
    "src",
    "https://www.google.com/recaptcha/api.js?render=6Ldj668nAAAAAGRaMc9yZ0XSG2ULi-qE6vhvK__-"
  );
  document.getElementsByTagName("head")[0].appendChild(scriptTag);
}

function cargarrecaptcha2() {
  grecaptcha.ready(function () {
    grecaptcha
      .execute("6Ldj668nAAAAAGRaMc9yZ0XSG2ULi-qE6vhvK__-", {
        action: "homepage",
      })
      .then(function (token) {
        let inputs = document.querySelectorAll(".g-recaptcha-response");

        inputs.forEach((input) => {
          input.value = token;
        });
      });
  });
}

(() => {
  setTimeout(() => {
    cargarScriptRecatpcha();
  }, 3500);
  setTimeout(() => {
    cargarrecaptcha2();
  }, 4500);
})();
