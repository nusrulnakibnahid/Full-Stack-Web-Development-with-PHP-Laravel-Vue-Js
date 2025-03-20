<!-- Add Book Modal -->
<div class="modal fade modal-lg" id="insertBookModal" tabindex="-1" aria-labelledby="insertBookModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="insertBookModalLabel">
                    Add New Book
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="bookNameID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" id="bookPriceID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock Quantity</label>
                    <input type="text" class="form-control" id="bookStockID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Author_ID</label>
                    <input type="text" class="form-control" id="bookAuthorID" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button onclick="addBook()" type="button" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
