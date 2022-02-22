<div class="row g-2">
    <div class="col-md mb-4"></div>
    <div class="col-md mb-4">
        <div class="d-grid gap-2 d-md-flex mt-3 justify-content-md-end">
            <button class="btn btn-success" type="button">Add Item</button>
        </div>
    </div>
</div>
<div class="row g-2">
    <div class="col-md mb-4">
        <label for="browser">Choose a part number from the list:</label>
        <input class="form-control" list="pn" name="pn" id="pn2" placeholder="Choose a part number from the list">

        <datalist id="pn">
            <option value="Edge">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
        </datalist>
    </div>
    <div class="col-md mb-4">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Description">
    </div>
</div>
<div class="row g-2">
    <div class="col-md mb-4">
        <label for="item">Item Family</label>
        <input type="text" class="form-control" id="item_family" placeholder="Item Family">
    </div>
    <div class="col-md mb-4">
        <label for="sales_group">Sales Group</label>
        <input type="text" class="form-control" id="sales_group" placeholder="Sales Group">
    </div>
</div>
<div class="row g-2">
    <div class="col-md mb-4">
        <label for="sales_price">Sales Price</label>
        <input type="number" class="form-control" id="sales_price" placeholder="Sales Price">
    </div>
    <div class="col-md mb-4">
        <label for="um">UM</label>
        <input type="text" class="form-control" id="um" placeholder="UM">
    </div>
</div>
<div class="col-md-6 mb-4"></div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-default me-md-2" type="button">Previous</button>
    <button class="btn btn-primary" type="button">Next step</button>
</div>