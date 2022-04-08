function getAllBooks() {
    const booksDataElement = document.getElementById('list-of-books');
    booksDataElement.innerHTML = '';
    fetch('http://localhost/homepage')
        .then(result => result.json())
        .then((out) => {
            displayBooks(out);
        })
        .catch((err) => console.error(err))
}


function displayBooks(data) {
    const articlesDataElement = document.getElementById('list-of-books');
    data.forEach(
        book => {
            articlesDataElement.innerHTML +=
                `<div class="col-lg-4 mb-3">
                    <div class="card book-card ">
                        <img src="../pictures/Covers/${book.ISBN}.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body-books">
                            <h5 class="card-title" id="bookTitle">${book.title}</h5>
                            <p class="card-subtitle"> ${book.author}</p>
                            <p class="card-subtitle"> ${book.published_year} | ${book.language} | ${book.genre}  </p>
                            <p class="card-subtitle"> ${book.ISBN}</p>
                            <form method="post">
                                <button type="submit" id="bookDetails" name="bookISBN" value=${book.ISBN} formaction="bookDetails" class="link-dark"> More Info  </button>
                            </form>
                            <br/>
                        </div>
                       
                        <form method="post">
                        <div class="card-footer">
                            <button type="submit" id="addToReading" name="addToReading" value="<?php echo $detail->ISBN?>" formaction="homepage" class="btn btn-outline-primary btn-sm">+ Reading</button>
                            <button type="submit" id="addToFinished" name="addToFinished" value="<?php echo $detail->ISBN?>" formaction="homepage" class="btn btn-outline-success btn-sm">Finished</button>
                            <button type="submit" id="addToWant" name="addToWant" value="<?php echo $detail->ISBN?>" formaction="homepage" class="btn btn-outline-secondary btn-sm">Want to read</button>
                        </div>

                        </form>
                           
                    </div>

                </div>
`;
        }
    )
}