function addProduct(id) {
    var modal = document.getElementById('modal_'+id);
    modal.style.display = 'block';
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}


