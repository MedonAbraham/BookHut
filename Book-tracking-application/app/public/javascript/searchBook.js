function searchBook(bookTitle) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "searchBook", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let books = JSON.parse(xhr.response);
                var html = "";

                books.forEach((book) => {
                    html += `<div class="card book-card ">
                       <img src="../view/pictures/Covers/${book.ISBN} .jpg" class="card-img-top img-fluid" alt="...">
                       <div class="card-body-books">
                           <h5 class="card-title"> ${book.title} </h5>
                           <p class="card-subtitle"> ${book.description} ?></p>
                           <p class="card-subtitle"> ${book.author} | ${book.language} | ${book.genre}  </p>
                           <p class="card-subtitle"> ISBN: ${book.ISBN} </p>
                           <a href="bookDetails"> More Info </a>
                           <br/>
                       </div>
                       <div class="card-footer">

                            <button type="submit" class="btn btn-outline-primary btn-sm">+ Reading</button>
                            <button type="submit" class="btn btn-outline-success btn-sm">Want to read</button>
                            <button type="submit" class="btn btn-outline-secondary btn-sm">Finished</button>
                       </div>
                   </div>`
                });

                document.getElementById("booksContainer").innerHTML = html;
                }
            }
        }
        xhr.send(`searchString=bookTitle`);

}
