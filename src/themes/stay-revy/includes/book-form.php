<div class="layout__banner-check-in w-100 text-center position-absolute z-index-lvl-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <form target="_blank" method="post" action="https://stayrevy.kigobook.com/properties/" class="check-in__form text-white p-1 position-relative"
                      id="checkInForm">
                    <div class="block__tint-overlay position-absolute"></div>
                    <div class="row align-items-end position-relative z-index-lvl-1">
                        <div class="col-12 col-md-4 datePickW check-in__form-group">
                            <label class="text-uppercase check-in__form-label" for="checkInAndOut">Check in
                                - check out</label>
                            <input type="text" class="form-control text-center" id="checkInAndOut"
                                   placeholder="Please choose…" value="" required>
                        </div>
                        <input class="d-none" name="guests" type="hidden" value="" id="setGuest">
                        <div class="col-12 col-md check-in__form-group">
                            <label class="text-uppercase check-in__form-label"
                                   for="numberOfAdults">Adults</label>
                            <input class="form-control" type="number" name="adults" id="numberOfAdults" autocomplete="off">
                        </div>
                        <div class="col-12 col-md check-in__form-group">
                            <label class="text-uppercase check-in__form-label" for="numberOfChildren">Children</label>
                            <input class="form-control mb-1 mb-md-0" type="number" name="children" id="numberOfChildren" autocomplete="off">
                        </div>
                        <div class="col-12 col-md-5">
                            <!-- <a href="https://stayrevy.kigobook.com/properties/" target="_blank" class="btn btn-primary mb-0 w-100">CHECK AVAILABILITY</a>-->
                            <button class="btn btn-primary mb-0 w-100 px-0" type="submit">CHECK ALL PROPERTIES</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>