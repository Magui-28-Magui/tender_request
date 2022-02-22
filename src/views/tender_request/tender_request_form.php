<div class="container mt-4">
    <div class="row">
        <div class="bg-white shadow p-3">
            <h1 class="display-5 mb-4">Tender request form</h1>
            <form action="">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Step 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Step 2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Step 3</button>
                    </li>
                </ul>
                <!-- -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="date_requested">Date requested</label>
                                <input type="date" class="form-control" id="date_requested">
                            </div>
                            <div class="col-md mb-4">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" class="form-control" id="customer_name" placeholder="Customer name">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="customer_service_rep">Customer Service Rep</label>
                                <input type="text" class="form-control" id="customer_service_rep" placeholder="Customer Service Rep">
                            </div>
                            <div class="col-md mb-4">
                                <label for="sales_rep">Sales Rep</label>
                                <input type="text" class="form-control" id="sales_rep" placeholder="Sales Rep">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="tender_number">Tender Number</label>
                                <input type="text" class="form-control" id="tender_number" placeholder="Tender Number">
                            </div>
                            <div class="col-md mb-4">
                                <label for="customer_number">Customer Number</label>
                                <input type="text" class="form-control" id="customer_number" placeholder="Customer Number">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="bid_due_date">Bid Due Date</label>
                                <input type="date" class="form-control" id="bid_due_date">
                            </div>
                            <div class="col-md mb-4">
                                <label for="award_date">Award Date</label>
                                <input type="date" class="form-control" id="award_date">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="penalties">Penalties</label>
                                <input type="text" class="form-control" id="penalties" placeholder="Penalties">
                            </div>
                            <div class="col-md mb-4">
                                <label for="is_penalty">If yes, What is penalty?</label>
                                <input type="text" class="form-control" id="is_penalty" placeholder="If yes, What is penalty?">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="won_lost">Won/Lost</label>
                                <input type="text" class="form-control" id="won_lost" placeholder="Won/Lost">
                            </div>
                            <div class="col-md mb-4">
                                <label for="delivery_specifications">Delivery Specifications</label>
                                <input type="text" class="form-control" id="delivery_specifications" placeholder="Delivery Specifications">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="pertinent_notes">Pertinent Notes</label>
                                <textarea class="form-control" rows="3" id="pertinent_notes" placeholder="Pertinent Notes"></textarea>
                            </div>
                            <div class="col-md mb-4"></div>
                        </div>
                        <div class="col-md-6 mb-4"></div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="button">Next step</button>
                        </div>
                    </div>
                    <!-- -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="item">Item</label>
                                <input type="text" class="form-control" id="item" placeholder="Item">
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
                    </div>
                    <!-- -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="delivery_number">Delivery Number</label>
                                <input type="text" class="form-control" id="delivery_name" placeholder="Delivery Number">
                            </div>
                            <div class="col-md mb-4">
                                <div class="d-grid gap-2 d-md-flex mt-3 justify-content-md-end">
                                    <button class="btn btn-success" type="button">Add Delivery</button>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="month_start">Month Start</label>
                                <input type="month" class="form-control" id="month_start" placeholder="Month Start">
                            </div>
                            <div class="col-md mb-4">
                                <label for="month_end">Month End</label>
                                <input type="month" class="form-control" id="month_end" placeholder="Month End">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="total">Total</label>
                                <input type="text" class="form-control" id="total" placeholder="Total">
                            </div>
                            <div class="col-md mb-4">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Quantity">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md mb-4">
                                <label for="mmw_date">MMW Date</label>
                                <input type="date" class="form-control" id="mmw_date" placeholder="MMW Date">
                            </div>
                            <div class="col-md mb-4">
                                <label for="etr">ETR</label>
                                <input type="text" class="form-control" id="etr" placeholder="ETR">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4"></div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-default me-md-2" type="button">Previus</button>
                            <button class="btn btn-primary" type="button">Finish</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>