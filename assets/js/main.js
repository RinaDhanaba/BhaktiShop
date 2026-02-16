document.addEventListener("DOMContentLoaded", () => {
  // Selectors
  const searchToggle = document.querySelector("#searchToggle");
  const profileToggle = document.querySelector("#profileToggle");
  const cartToggle = document.querySelector("#cartToggle");

  const closeBtns = document.querySelectorAll(".close-btn");
  const overlay = document.querySelector(".overlay");

  // Generic Open Function
  const openSidebar = (id) => {
    // Close others first
    document
      .querySelectorAll(".sidebar")
      .forEach((s) => s.classList.remove("open"));

    document.querySelector(id).classList.add("open");
    overlay.style.display = "block";

    // Prevent body scroll
    document.body.style.overflow = "hidden";
  };

  // Generic Close Function
  const closeAll = () => {
    document
      .querySelectorAll(".sidebar")
      .forEach((s) => s.classList.remove("open"));
    overlay.style.display = "none";
    document.body.style.overflow = "auto";
  };

  // Event Listeners
  if (searchToggle)
    searchToggle.addEventListener("click", () => openSidebar("#searchSidebar"));
  if (profileToggle)
    profileToggle.addEventListener("click", () =>
      openSidebar("#profileSidebar"),
    );
  if (cartToggle)
    cartToggle.addEventListener("click", () => openSidebar("#cartSidebar")); // NEW

  closeBtns.forEach((btn) => btn.addEventListener("click", closeAll));
  overlay.addEventListener("click", closeAll);

  // [Rest of animation code]
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

// navigation

document.addEventListener("DOMContentLoaded", function () {
  const mobileToggle = document.getElementById("mobileMenuToggle");
  const navLinks = document.getElementById("navLinks");
  const closeMobile = document.getElementById("closeMobileMenu");
  const overlay = document.querySelector(".overlay");
  const searchToggle = document.getElementById("searchToggle");
  const searchDropdown = document.getElementById("searchDropdown");
  const accountWrapper = document.querySelector(".account-wrapper");
  const accountDropdown = document.getElementById("accountDropdown");
  const cartToggle = document.getElementById("cartToggle");
  const cartSidebar = document.getElementById("cartSidebar");
  const closeButtons = document.querySelectorAll(".close-btn");

  // Function to close all menus
  function closeAllMenus() {
    // Close mobile menu
    if (navLinks) {
      navLinks.classList.remove("active");
    }

    // Close cart sidebar
    if (cartSidebar) {
      cartSidebar.classList.remove("open");
    }

    // Close dropdowns
    if (searchDropdown) {
      searchDropdown.classList.remove("active");
    }
    if (accountDropdown) {
      accountDropdown.classList.remove("active");
    }

    // Hide overlay
    if (overlay) {
      overlay.style.display = "none";
    }

    // Enable body scroll
    document.body.style.overflow = "";
    document.body.classList.remove("menu-open");
  }

  // Function to open mobile menu
  function openMobileMenu() {
    if (navLinks) {
      navLinks.classList.add("active");
      if (overlay) {
        overlay.style.display = "block";
      }
      document.body.style.overflow = "hidden";
      document.body.classList.add("menu-open");

      // Close other open elements
      if (cartSidebar) cartSidebar.classList.remove("open");
      if (searchDropdown) searchDropdown.classList.remove("active");
      if (accountDropdown) accountDropdown.classList.remove("active");
    }
  }

  // Function to open cart sidebar
  function openCartSidebar() {
    if (cartSidebar) {
      cartSidebar.classList.add("open");
      if (overlay) {
        overlay.style.display = "block";
      }
      document.body.style.overflow = "hidden";
      document.body.classList.add("menu-open");

      // Close other open elements
      if (navLinks) navLinks.classList.remove("active");
      if (searchDropdown) searchDropdown.classList.remove("active");
      if (accountDropdown) accountDropdown.classList.remove("active");
    }
  }

  // Mobile Menu Toggle
  if (mobileToggle) {
    mobileToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      openMobileMenu();
    });
  }

  // Close mobile menu
  if (closeMobile) {
    closeMobile.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeAllMenus();
    });
  }

  // Handle mega menu toggle on mobile
  const hasMegaItems = document.querySelectorAll(".has-mega");

  function handleMegaMenuClick(e) {
    if (window.innerWidth <= 1024) {
      e.preventDefault();
      const currentItem = this;

      // Close other mega menus
      hasMegaItems.forEach((item) => {
        if (item !== currentItem) {
          item.classList.remove("active");
        }
      });

      // Toggle current mega menu
      currentItem.classList.toggle("active");
    }
  }

  hasMegaItems.forEach((item) => {
    const link = item.querySelector("a");
    if (link) {
      link.removeEventListener("click", handleMegaMenuClick);
      link.addEventListener("click", handleMegaMenuClick);
    }
  });

  // Search Dropdown Toggle
  if (searchToggle && searchDropdown) {
    searchToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      // Toggle search dropdown
      searchDropdown.classList.toggle("active");

      // Close account dropdown if open
      if (accountDropdown) {
        accountDropdown.classList.remove("active");
      }

      // Don't show overlay for search dropdown
    });
  }

  // Account Dropdown Hover/Click
  if (accountWrapper && accountDropdown) {
    if (window.innerWidth > 1024) {
      // Desktop: hover
      accountWrapper.addEventListener("mouseenter", function () {
        accountDropdown.classList.add("active");
      });

      accountWrapper.addEventListener("mouseleave", function () {
        accountDropdown.classList.remove("active");
      });
    } else {
      // Mobile: click
      const accountIcon = document.getElementById("profileToggle");
      if (accountIcon) {
        accountIcon.addEventListener("click", function (e) {
          e.preventDefault();
          e.stopPropagation();

          // Toggle account dropdown
          accountDropdown.classList.toggle("active");

          // Close search dropdown if open
          if (searchDropdown) {
            searchDropdown.classList.remove("active");
          }

          // Don't show overlay for account dropdown
        });
      }
    }
  }

  // Cart Sidebar Toggle
  if (cartToggle && cartSidebar) {
    cartToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      openCartSidebar();
    });
  }

  // Close buttons functionality
  closeButtons.forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeAllMenus();
    });
  });

  // Close on overlay click
  if (overlay) {
    overlay.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeAllMenus();
    });
  }

  // Close on ESC key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeAllMenus();
    }
  });

  // Click outside to close dropdowns (but not overlay for these)
  document.addEventListener("click", function (e) {
    // Close search dropdown if click outside
    if (searchDropdown && searchDropdown.classList.contains("active")) {
      if (
        !e.target.closest(".search-wrapper") &&
        !e.target.closest("#searchDropdown")
      ) {
        searchDropdown.classList.remove("active");
      }
    }

    // Close account dropdown if click outside (mobile)
    if (window.innerWidth <= 1024) {
      if (accountDropdown && accountDropdown.classList.contains("active")) {
        if (
          !e.target.closest(".account-wrapper") &&
          !e.target.closest("#accountDropdown")
        ) {
          accountDropdown.classList.remove("active");
        }
      }
    }
  });

  // Handle window resize
  window.addEventListener("resize", function () {
    // Close all menus on resize
    closeAllMenus();

    // Reset mega menu click handlers based on new screen size
    if (window.innerWidth > 1024) {
      // Desktop: remove active class from mega menus
      hasMegaItems.forEach((item) => {
        item.classList.remove("active");
      });
    }
  });

  // Initialize - check if we need to adjust anything on page load
  if (window.innerWidth > 1024) {
    // Desktop: ensure mega menus are not active
    hasMegaItems.forEach((item) => {
      item.classList.remove("active");
    });
  }
});
