function addReview() {
    const reviewsContainer = document.getElementById('reviewsContainer');
    const reviewTemplate = document.querySelector('.review').cloneNode(true);
    reviewsContainer.appendChild(reviewTemplate);
}

function submitForm() {

}