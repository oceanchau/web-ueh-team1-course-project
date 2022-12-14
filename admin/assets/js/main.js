document.getElementById("showMenuVetical").addEventListener("click", (e) => {
  document.getElementById("htmlTag").classList.add("layout-menu-expanded");
  document.querySelector('.overlay').classList.add("d-block");
})
document.querySelector('.overlay').addEventListener("click", (e) => {
  document.getElementById("htmlTag").classList.remove("layout-menu-expanded");
  document.querySelector('.overlay').classList.add("d-none");
})
document.getElementById("imageUrl").addEventListener("change", (e) => {
  const url = e.target.value;
  document.getElementById("reviewImage").src = url;
});

