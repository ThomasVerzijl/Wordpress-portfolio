//when page first starts
if (localStorage.getItem("theme")) {
  theme = localStorage.getItem("theme");
  console.log("get theme out of local storage " + theme);
  if (theme === "light") {
    light_mode = true;
  } else {
    light_mode = false;
  }
} else {
  light_mode = true;
  //defealts to light mode when no local storage found.
}

if (light_mode === false) {
  document.body.classList.toggle("dark-mode");
}

//click funtion
document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector(".background-mode");

  if (!button) return;

  button.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
    light_mode = !light_mode;
    if (light_mode === true) {
      document.getElementById("background_text").innerHTML = "light mode";
      theme = "light";
    } else {
      theme = "dark";
      document.getElementById("background_text").innerHTML = "dark mode";
    }
    console.log(light_mode);
    //store to local storage
    localStorage.setItem("theme", theme);
  });
});
