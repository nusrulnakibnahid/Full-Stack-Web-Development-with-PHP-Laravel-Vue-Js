<!-- Update Book Modal -->
<div class="modal fade modal-lg" id="updateBookModal" tabindex="-1" aria-labelledby="updateBookModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateBookModalLabel">
                    Add New Book
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Book ID</label>
                    <input type="text" class="form-control" id="edtbookID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="edtbookNameID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" id="edtbookPriceID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock Quantity</label>
                    <input type="text" class="form-control" id="edtbookStockID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Author_ID</label>
                    <input type="text" class="form-control" id="edtbookAuthorID" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button onclick="updateBook()" type="button" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </div>
</div>

