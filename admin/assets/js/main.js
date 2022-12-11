document.getElementById("imageUrl").addEventListener("change", (e) => {
  const url = e.target.value;
  document.getElementById("reviewImage").src = url;
  console.log(url);
});
