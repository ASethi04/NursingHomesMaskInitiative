/**
 * Checks if Enter Zip input is only a number
 */
const isNumber = evt => {
    var charCode = evt.which ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
    return true;
};

/**
 * Takes input and filters the graph based on input
 */
const filterLocations = () => {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue, thead;
    var oneVal = false;
    thead = document.getElementsByTagName("thead");
    input = document.getElementById("enterZip__form");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                oneVal = true;
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (oneVal === false) {
        for (i = 0; i < thead.length; i++) {
            thead[i].style.display = "none";
        }
    } else {
        for (i = 0; i < thead.length; i++) {
            thead[i].style.display = "revert";
        }
    }
};

/**
 * Takes user's lang and log if they allow it and then
 * finds their zip code using an API and filters the
 * table based on their zip code and scrolls into view
 */
function showPosition() {
    document.getElementById("scrollLocation").scrollIntoView(true);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            fetch(
                "https://us1.locationiq.com/v1/reverse.php?key=f27ddff8f0c0bf&lat=" +
                    position.coords.latitude +
                    "&lon=" +
                    position.coords.longitude +
                    "&format=json"
            ) // Call the fetch function passing the url of the API as a parameter
                .then(function(response) {
                    if (response.status !== 200) {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Status Code: " + response.status,
                            showClass: {
                                popup:
                                    "animate__animated animate__fadeIn animate__faster "
                            },
                            hideClass: {
                                popup:
                                    "animate__animated animate__fadeOut animate__faster"
                            },
                            confirmButtonColor: "#4b2073"
                        });
                        return;
                    }

                    // Examine the text in the response
                    response.json().then(function(data) {
                        postalCode = data.address.postcode;
                        input = document.getElementById("enterZip__form");
                        input.value = postalCode;
                        filterLocations();
                    });
                })
                .catch(function(err) {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Status Code: " + err,
                        showClass: {
                            popup:
                                "animate__animated animate__fadeIn animate__faster "
                        },
                        hideClass: {
                            popup:
                                "animate__animated animate__fadeOut animate__faster"
                        },
                        confirmButtonColor: "#4b2073"
                    });
                });
        });
    } else {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Sorry, your browser doesn't not support HTML5 Geolocation",
            showClass: {
                popup: "animate__animated animate__fadeIn animate__faster "
            },
            hideClass: {
                popup: "animate__animated animate__fadeOut animate__faster"
            },
            confirmButtonColor: "#4b2073"
        });
    }
}

/**
 * Changes the underline in the navbar when you click a
 * page link that is outside of the navbar
 * @param {*} page Page name
 */
const changeNavBar = evt => {
    var links = document.querySelectorAll(".nav__links li a");
    var target = "/" + evt;
    for (var i = 0; i < links.length; i++) {
        if (
            !links[i].classList.contains("current") &&
            links[i].classList.contains("active")
        ) {
            links[i].classList.remove("active");
            links[i].classList.add("not-active");
        }

        if (links[i].getAttribute("href") === target) {
            links[i].classList.remove("not-active", "current");
            links[i].classList.add("active", "current");
        }
    }
};
