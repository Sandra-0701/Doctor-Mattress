// Mobile sidebar toggle
document
    .getElementById("sidebarToggle")
    ?.addEventListener("click", function () {
        const sidebar = document.querySelector(".hidden.md\\:flex");
        sidebar.classList.toggle("hidden");
    });

document.addEventListener("DOMContentLoaded", function () {
    // Get current path and extract the route name
    const currentPath = window.location.pathname;
    const routeMatch = currentPath.match(/\/admin\/([^\/]+)/);
    const currentRoute = routeMatch ? routeMatch[1] : "dashboard";

    // Find all nav items
    const navItems = document.querySelectorAll(".nav-item");

    // Remove active class from all items first
    navItems.forEach((item) => {
        item.classList.remove("bg-gray-100", "text-primary");
    });

    // Add active class to current route
    const activeItem = document.querySelector(
        `.nav-item[data-route="${currentRoute}"]`
    );
    if (activeItem) {
        activeItem.classList.add("bg-gray-100", "text-primary");
    }
});

// Product Modal Handling
document.addEventListener("DOMContentLoaded", function () {
    // Modal elements
    const addModal = document.getElementById("addProductModal");
    const openModalBtn = document.getElementById("openAddModal");
    const closeModalBtn = document.getElementById("closeAddModal");
    const cancelModalBtn = document.getElementById("cancelAddModal");
    const saveProductBtn = document.getElementById("saveProduct");

    // Open add modal
    openModalBtn.addEventListener("click", function () {
        addModal.classList.remove("hidden");
    });

    // Close add modal
    function closeAddModal() {
        addModal.classList.add("hidden");
    }

    closeModalBtn.addEventListener("click", closeAddModal);
    cancelModalBtn.addEventListener("click", closeAddModal);

    // Save product
    saveProductBtn.addEventListener("click", function () {
        alert("Product saved successfully!");
        closeAddModal();
        document.getElementById("productForm").reset();
    });
});
