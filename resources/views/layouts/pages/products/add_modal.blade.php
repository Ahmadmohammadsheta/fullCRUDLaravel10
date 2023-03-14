  <!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <form action="" method="post" id="modal_form">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">{{ __('Add New Product Modal') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="error_container">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ __('Name') }}</label>
                        <input name="name" value="" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ __('Price') }}</label>
                        <input name="sale_price" value="" type="text" class="form-control @error('sale_price') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    @error('sale_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add_product" class="btn btn-primary add_product">Save Product</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
