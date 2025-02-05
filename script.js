function editProduct(id, name, price, description) {
    document.getElementById("product-id").value = id;
    document.getElementById("product-name").value = name;
    document.getElementById("product-price").value = price;
    document.getElementById("product-description").value = description;

    document.getElementById("add-button").style.display = "none";
    document.getElementById("update-button").style.display = "block";
}

function showSnackbar() {
    var snackbar = document.getElementById("snackbar");
    snackbar.className = "snackbar show";
    setTimeout(() => snackbar.className = snackbar.className.replace("show", ""), 3000);
}
