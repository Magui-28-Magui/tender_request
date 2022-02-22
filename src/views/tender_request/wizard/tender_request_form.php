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
                <div class="tab-content" id="pills-tabContent">
                    <!-- TENDER FORM -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php require_once('tender_form.php'); ?>
                    </div>
                    <!-- ITEM FORM -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <?php require_once('item_form.php'); ?>
                    </div>
                    <!-- DELIVERY FORM -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <?php require_once('delivery_form.php'); ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    window.onload = function(element) {
        let find_item = document.querySelector("#pn");
        let url = "http://localhost/martech/tender_request/tender_request/functions/get_items.php"


        fetch(url, {
                method: 'GET',
            })
            .then(res => res.text())
            .then((html) => {
                find_item.innerHTML = html;
            })
            .catch((e) => {
                console.log(e);
            });
    };
</script>