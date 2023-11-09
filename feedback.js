document.getElementById('feedback-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const rating = document.getElementById('rating').value;
    const feedback = document.getElementById('feedback').value;

    // You can process the feedback data here, e.g., send it to a server or perform other actions

    alert(`Thank you, ${name}! Your feedback has been submitted.`);
    this.reset();
});
