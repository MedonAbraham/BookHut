function removeBook($ISBN) {
    var i = $ISBN.parentNode.parentNode.rowIndex;
    document.getElementById("listOfBooks").deleteRow(i);
}

