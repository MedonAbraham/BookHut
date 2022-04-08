
function getRating() {
    const ratingValue = document.getElementsByName('review_rating')[i].value;
    for (i = 0; i < document.getElementsByName('review_rating').length; i++) {
        if(document.getElementsByName('review_rating')[i].checked === true) {
            break;
        }
    }
    return ratingValue;
}