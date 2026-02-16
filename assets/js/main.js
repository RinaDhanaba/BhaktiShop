document.addEventListener("DOMContentLoaded", () => {
  const searchToggle = document.querySelector("#searchToggle");
  const profileToggle = document.querySelector("#profileToggle");
  const closeBtns = document.querySelectorAll(".close-btn");
  const overlay = document.querySelector(".overlay");

  const openSidebar = (id) => {
    document.querySelector(id).classList.add("open");
    overlay.style.display = "block";
  };

  const closeAll = () => {
    document
      .querySelectorAll(".sidebar")
      .forEach((s) => s.classList.remove("open"));
    overlay.style.display = "none";
  };

  searchToggle.addEventListener("click", () => openSidebar("#searchSidebar"));
  profileToggle.addEventListener("click", () => openSidebar("#profileSidebar"));

  closeBtns.forEach((btn) => btn.addEventListener("click", closeAll));
  overlay.addEventListener("click", closeAll);

  // Reveal Animation on Scroll
  const observerOptions = { threshold: 0.1 };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  }, observerOptions);

  document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));
});
