const humburger = document.getElementById("humburger");

humburger.addEventListener("click", function () {
  const sidebar = document.querySelector(".aside-sidebar");

  sidebar.classList.toggle("active");
});
