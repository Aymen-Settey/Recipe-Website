const u = document.getElementById("signUp");
const i = document.getElementById("signIn");
const c = document.getElementById("container");

u.addEventListener("click", () => {
  c.classList.add("right-panel-active");
});
i.addEventListener("click", () => {
  c.classList.remove("right-panel-active");
});
