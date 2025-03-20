@extends('layouts.app')
@section('title','Books Management')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

                <div class="col-12 d-flex justify-content-between">
                    <h3 class="mb-0">Book Management</h3>

                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertBookModal">
                        Add New
                    </button>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Book ID</th>
                            <th scope="col">Book Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock Quantity</th>
                            <th scope="col">Author ID</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody id="bookList"></tbody>
                    </table>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row"></div>
        </div>
        <!--end::Container-->
    </div>

    @include('components.booksComponent.addNewBooks')
    @include('components.booksComponent.updateBookComponent')
    @include('components.deleteModal')
    <!--end::App Content-->
@endsection

@section('script')
    <script>

        // Fetch all books
        async function getBooks() {
            let URL = "https://bs-api.sobuj.net/view/books/readBook.php";
            let response = await axios.get(URL);
            let tableData = document.getElementById("bookList");

            try {
                //show loading message
                tableData.innerHTML = "<tr><td colspan='7'>Loading.....</td></tr>";

                //Fetch API from authors
                let response = await axios.get(URL);
                let books = response.data;

                //Clear loading message
                tableData.innerHTML = "";


                //If no data exists .. show a text

                if (!books.length) {
                    tableData.innerHTML =
                        "<tr><td colspan='7'>No Author found</td></tr>";
                    return;
                }


                //Append data to table

                books.forEach((book) => {
                    let row = document.createElement("tr");
                    row.innerHTML = `
                    <td>${book['book_id']}</td>
                    <td>${book['title']}</td>
                    <td>${book['price']}</td>
                    <td>${book['stock_quantity']}</td>
                    <td>${book['author_id']}</td>
                    <td><button class="btn btn-success update-btn" data-id="${book["book_id"]}">Update</button></td>
                    <td><button class="btn btn-danger delete-btn" data-id="${book["book_id"]}">Delete</button></td>
                `;
                    tableData.appendChild(row);
                });

                //Add event listner for update data fetch
                document.querySelectorAll(".update-btn").forEach((btn) => {
                    btn.addEventListener("click", function () {
                        goToUpdate(this.dataset.id);
                    });
                });

                //Add event listner for delete data fetch
                document.querySelectorAll(".delete-btn").forEach((btn) => {
                    btn.addEventListener("click", function () {
                        deleteBook(this.dataset.id);
                    });
                });
            } catch (error) {
                console.error("Error for book:", error);
                tableData.innerHTML =
                    "<tr><td colspan='5'>Failed to load book, try again</td></tr>";
            } finally {
                console.log("book fetch atte completed");
            }

        }
        getBooks();



        //Add new book
        async function addBook() {
            let URL = "https://bs-api.sobuj.net/view/books/insertBook.php";
            let bookName = document.getElementById("bookNameID").value.trim();
            let bookPrice = document.getElementById("bookPriceID").value.trim();
            let bookStock = document.getElementById("bookStockID").value.trim();
            let bookAuthor = document.getElementById("bookAuthorID").value.trim();


            try {
                //Validate
                if (!bookName || !bookPrice || !bookStock || !bookAuthor) {
                    alert("All data required");
                    return;
                }

                //Append Data
                let formData = new FormData();
                formData.append("title", bookName);
                formData.append("price", bookPrice);
                formData.append("stock_qty", bookStock);
                formData.append("author_id", bookAuthor);


                //send the request
                let response = await axios.post(URL, formData);

                //Check API response
                if (response.status === 200) {
                    alert("Book successfully inserted");
                    document.getElementById("bookNameID").value = "";
                    document.getElementById("bookPriceID").value = "";
                    document.getElementById("bookStockID").value = "";
                    document.getElementById("bookAuthorID").value = "";


                    //Close Modal
                    let addmodal = bootstrap.Modal.getInstance(
                        document.getElementById("insertBookModal")
                    );
                    addmodal.hide();

                    //Refresh the list
                    getBooks();
                } else {
                    alert("Failed to add Book");
                }
            } catch (error) {
                console.error("Erors for adding Book", error);
                alert("Failed, try again");
            } finally {
                console.log("Book add att completed");
            }
        }





        let editBookID = null;
        //Get update data details
        async function goToUpdate(bookID) {
            let URL = `https://bs-api.sobuj.net/view/books/getBookById.php?book_id=${bookID}`;

            try {
                let response = await axios.get(URL);
                let bookData = response.data;

                if (bookData) {
                    //populate data
                    document.getElementById("edtbookID").value = bookData.book_id;
                    document.getElementById("edtbookNameID").value = bookData.title;
                    document.getElementById("edtbookPriceID").value = bookData.price;
                    document.getElementById("edtbookStockID").value = bookData.stock_quantity;
                    document.getElementById("edtbookAuthorID").value = bookData.author_id;
                    editBookID = bookID;

                    //show modal
                    let editModal = new bootstrap.Modal(
                        document.getElementById("updateBookModal")
                    );
                    editModal.show();
                } else {
                    alert("Book not found");
                }
            } catch (error) {
                console.error("Text", error);
                alert("Book load failed");
            }
        }


        async function updateBook() {
            let URL = "https://bs-api.sobuj.net/view/books/updateBook.php";
            let bookID = document.getElementById("edtbookID").value.trim();
            let bookName = document.getElementById("edtbookNameID").value.trim();
            let bookPrice = document.getElementById("edtbookPriceID").value.trim();
            let bookStock = document.getElementById("edtbookStockID").value.trim();
            let bookAuthor = document.getElementById("edtbookAuthorID").value.trim();

            console.log([bookID, bookName, bookPrice, bookStock, bookAuthor]);

            try {
                //Validate
                if (!bookID || !bookName || !bookPrice || !bookStock || !bookAuthor) {
                    alert("All data required");
                    return;
                }

                //Append Data
                let formData = new FormData();
                formData.append("book_id", bookID);
                formData.append("title", bookName);
                formData.append("price", bookPrice);
                formData.append("stock_qty", bookStock);
                formData.append("author_id", bookAuthor);


                //send the request
                let response = await axios.post(URL, formData);

                //Check API response
                if (response.status === 200) {
                    alert("Book successfully Updated");


                    //Close Modal
                    let modal = bootstrap.Modal.getInstance(
                        document.getElementById("updateBookModal")
                    );
                    modal.hide();

                    //Refresh the list
                    getBooks();
                } else {
                    alert("Failed to Update book");
                }
            } catch (error) {
                console.error("Erors for update book", error);
                alert("Failed, try again");
            } finally {
                console.log("Book update att completed");
            }
        }


        // Delete Book
        let deleteBookID = null;

        function deleteBook(bookID) {
            deleteBookID = bookID;
            let deleteModal = new bootstrap.Modal(
                document.getElementById("deleteBookModal")
            );
            deleteModal.show();
        }


        // Final order delete
        async function deleteBookFinally() {
            const URL = "https://bs-api.sobuj.net/view/books/deleteBook.php";

            try {
                // Check if the deleteOrder is valid
                if (!deleteBookID) {
                    alter("Invalid Book ID");
                    return;
                }

                // Prepare data to send the API
                let formData = new FormData();
                formData.append("book_id", deleteBookID);


                // send the delete request
                let response = await axios.post(URL, formData);

                // check api response
                if (response.status === 200) {
                    alert("Book deleted successfully");

                    // hide the modal
                    let modal = bootstrap.Modal.getInstance(
                        document.getElementById("deleteBookModal")
                    );
                    modal.hide();

                    // refresh the order list
                    getBooks();
                } else {
                    console.log("failed to delete");
                }
            } catch (e) {
                console.log("Error in deleting Book", e);
            } finally {
                console.log("Book deleted");
            }
        }




    </script>
@endsection
