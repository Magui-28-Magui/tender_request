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
