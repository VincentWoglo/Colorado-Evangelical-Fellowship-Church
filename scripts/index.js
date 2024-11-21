const navigation_menu = document.querySelector(".navigation-section");

function handleScroll() {
    const isPageScrolled = window.pageYOffset > 26;
    
    navigation_menu.classList.toggle("navigation-scroll", isPageScrolled);
}

window.addEventListener("scroll", handleScroll);