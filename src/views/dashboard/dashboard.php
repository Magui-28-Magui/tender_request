<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-raised border-start bg-primary border-4">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-between text-white align-items-center mb-2">
                        <div class="me-2">
                            <div class="display-5 text-white">Total Requests</div>
                            <div class="card-text"><?php echo getRequests(); ?></div>
                        </div>
                        <div class="icon-circle bg-white-50 text-white"><i class="material-icons">space_dashboard</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-raised border-start bg-secondary border-4">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-between text-white align-items-center mb-2">
                        <div class="me-2">
                            <div class="display-5 text-white">Won</div>
                            <div class="card-text">
                                <?php echo getRequestsWon(); ?>
                            </div>
                        </div>
                        <div class="icon-circle bg-white-50 text-white"><i class="material-icons">space_dashboard</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-raised border-start bg-info border-4">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-between text-white align-items-center mb-2">
                        <div class="me-2">
                            <div class="display-5 text-white">Lost</div>
                            <div class="card-text">
                                <?php echo getRequestsLost(); ?>
                            </div>
                        </div>
                        <div class="icon-circle bg-white-50 text-white"><i class="material-icons">space_dashboard</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row gx-2 mb-5">
        <div class="card card-raised col-lg-4 gx-5">
            <div class="card-header bg-transparent px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-4">
                        <h2 class="card-title mb-0">Chart</h2>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-lg btn-icon" type="button"><i class="material-icons">download</i></button>
                        <button class="btn btn-lg btn-icon" type="button"><i class="material-icons">print</i></button>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <canvas style="" id="requestChart"></canvas>
            </div>
        </div>




        <div class="card card-raised col-lg-8">
            <div class="card-header bg-transparent px-4 gx-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-4">
                        <h2 class="card-title mb-0">Recent Request</h2>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-lg btn-icon" type="button"><i class="material-icons">download</i></button>
                        <button class="btn btn-lg btn-icon" type="button"><i class="material-icons">print</i></button>
                    </div>
                </div>

            </div>
            <div class="card-body p-4">
                <!-- Simple DataTables example-->
                <table id="datatablesSimple" class="text-center table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">Request ID</th>
                        <th class="text-center">Tender Date</th>
                        <th class="text-center">Items</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>R7</td>
                        <td>2/18/22</td>
                        <td>30</td>
                        <td>
                            <a href="" class="btn btn-raised-primary">
                                <i class="material-icons icon-sm me-1 text-light">search</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>R8</td>
                        <td>2/17/22</td>
                        <td>30</td>
                        <td>
                            <a href="" class="btn btn-raised-primary">
                                <i class="material-icons icon-sm me-1 text-light">search</i>
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
