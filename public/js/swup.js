const swup = new Swup({
    plugins: [new SwupSlideTheme()],
});

/**
 * Slides out the menu when you press menu on mobile/small screens
 * And ensures it works after Swup transition
 */
const navSlide = () => {
    const menu = document.querySelector(".menu");
    const nav = document.querySelector(".nav__links");
    const navLinks = document.querySelectorAll(".nav__links li");

    menu.addEventListener("click", () => {
        //toggle
        nav.classList.toggle("nav--active");

        //animate
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 400ms ease-out forwards ${
                    index / 10 + 0.3
                }s`;
            }
        });

        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].addEventListener("click", (evt) => {
                if (nav.classList.contains("nav--active")) {
                    nav.classList.toggle("nav--active");
                }
                navLinks.forEach((link, index) => {
                    if (link.style.animation) {
                        link.style.animation = "";
                    }
                });
            });
        }
    });
};

/**
 * Checks if user scrolled and if so, changes the nav to w/o padding and sticky
 */
const stickyNav = () => {
    window.addEventListener("scroll", function () {
        if (window.scrollY == 0) {
            var nav = document.getElementsByClassName("nav");
            for (var i = 0; i < nav.length; i++) {
                nav[i].classList.remove("scrolling");
            }
        } else {
            var nav = document.getElementsByClassName("nav");
            for (var i = 0; i < nav.length; i++) {
                nav[i].classList.add("scrolling");
            }
        }
    });
};

/**
 * Add active and not-active classes to nav links
 */

const hoverNavEffects = () => {
    var links = document.querySelectorAll(".nav__links li a");

    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("current");
    }

    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", (evt) => {
            var target = evt.target || evt.srcElement;
            if (target.id !== "loginButton" && target.id !== "registerButton") {
                target.classList.remove("not-active", "current");
                target.classList.add("active", "current");
            }
            for (var j = 0; j < links.length; j++) {
                if (
                    !links[j].classList.contains("current") &&
                    links[j].classList.contains("active") &&
                    links[j].id !== "loginButton" &&
                    links[j].id !== "registerButton"
                ) {
                    links[j].classList.remove("active");
                    links[j].classList.add("not-active");
                }
            }
        });
    }
};

/**
 * Creates Sweet Alert and animates it
 */
const otherInfoAlert = () => {
    const links = document.getElementsByClassName("moreInformation");
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", (evt) => {
            var event = evt.target || evt.srcElement;

            Swal.fire({
                title: "Other Information",
                html: event.getAttribute("data-text"),
                showClass: {
                    popup: "animate__animated animate__fadeIn animate__faster ",
                },
                hideClass: {
                    popup: "animate__animated animate__fadeOut animate__faster",
                },
                confirmButtonColor: "#4b2073",
            });
        });
    }
};

const reloadLogout = () => {
    const logout = document.getElementsByClassName("logoutButton");
    for(var i = 0; i < logout.length; i++) {
    logout[i].addEventListener("click", () => {
        console.log("YE");
        location.reload();
        return false;
    });
}
};

const init = () => {
    stickyNav();
    navSlide();
    hoverNavEffects();
    otherInfoAlert();
    reloadLogout();
};

const replaceContent = () => {
    hoverNavEffects();
    navSlide();
    otherInfoAlert();
    reloadLogout();
};

init();

swup.on("contentReplaced", init);

swup.on("willReplaceContent", replaceContent);
