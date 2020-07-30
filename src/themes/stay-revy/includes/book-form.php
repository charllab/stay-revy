<div class="layout__banner-check-in w-100 text-center position-absolute z-index-lvl-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <form method="post" class="check-in__form text-white p-1 position-relative"
                      id="checkInForm">
                    <div class="block__tint-overlay position-absolute"></div>
                    <div class="row align-items-end position-relative z-index-lvl-1">
                        <div class="col-12 col-md-4 datePickW check-in__form-group">
                            <label class="text-uppercase check-in__form-label" for="checkInAndOut">Check in
                                - check out</label>
                            <input type="text" class="form-control text-center" id="checkInAndOut"
                                   placeholder="Please choose…" value="" required>
                        </div>
                        <div class="col-12 col-md check-in__form-group">
                            <label class="text-uppercase check-in__form-label"
                                   for="numberOfAdults">Adults</label>
                            <select class="custom-select" name="adults" id="numberOfAdults">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-12 col-md check-in__form-group">
                            <label class="text-uppercase check-in__form-label" for="numberOfChildren">Children</label>
                            <select class="custom-select" name="children" id="numberOfChildren">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-5">
                            <a href="https://stayrevy.kigobook.com/properties/" target="_blank" class="btn btn-primary mb-0 w-100">CHECK AVAILABILITY</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>