<div class="layout__banner-check-in w-100 text-center position-absolute z-index-lvl-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <form id="thesearchbutton" class="search-widget grid-m-m search-fancy properties-simple"
                      action="https://stayrevy.kigobook.com/properties/" method="get" autocomplete="off" data-abide="">
                    <div data-abide-error="" class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i></p>
                    </div>


                    <div class="wrapper checkin ">
                        <label for="checkin_field">Check in - Check out</label>
                        <div class="input">
                            <input class="search-checkin flatpickr-input" title="Check in - Check out" type="hidden"
                                   id="checkin_field" placeholder="Check in - Check out" value="" required=""><input
                                class="search-checkin flatpickr-input form-control input"
                                placeholder="Check in - Check out" required="" tabindex="0" type="text"
                                readonly="readonly">
                            <input type="hidden" class="master-input" name="checkin" value="">
                            <input type="hidden" class="master-input" name="checkout" value="">
                        </div>
                        <div id="checkDatesFilterDropdown" class="filterDropdown" style="">
                            <div
                                class="flatpickr-calendar rangeMode animate multiMonth fancy-flatpickr checkin fancy-search-widget"
                                tabindex="-1" style="width: 2px;">
                                <div class="flatpickr-months"><span class="flatpickr-prev-month disabled"><svg
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path
                                                d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span>
                                    <div class="flatpickr-month">
                                        <div class="flatpickr-current-month"><span class="cur-month">July </span>
                                            <div class="numInputWrapper"><input class="numInput cur-year" type="text"
                                                                                pattern="\d*" tabindex="-1"
                                                                                aria-label="Year" data-min="2020"
                                                                                data-max="2022"><span
                                                    class="arrowUp"></span><span class="arrowDown"></span></div>
                                        </div>
                                    </div>
                                    <div class="flatpickr-month">
                                        <div class="flatpickr-current-month"><span class="cur-month">August </span>
                                            <div class="numInputWrapper"><input class="numInput cur-year" type="text"
                                                                                pattern="\d*" tabindex="-1"
                                                                                aria-label="Year" data-min="2020"
                                                                                data-max="2022"><span
                                                    class="arrowUp"></span><span class="arrowDown"></span></div>
                                        </div>
                                    </div>
                                    <span class="flatpickr-next-month"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            viewBox="0 0 17 17"><g></g><path
                                                d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span>
                                </div>
                                <div class="flatpickr-innerContainer">
                                    <div class="flatpickr-rContainer">
                                        <div class="flatpickr-weekdays">
                                            <div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span
                                                    class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span
                                                    class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                                            </div>
                                            <div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span
                                                    class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span
                                                    class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                                            </div>
                                        </div>
                                        <div class="flatpickr-days" tabindex="-1" style="width: 2px;">
                                            <div class="dayContainer"><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="June 28, 2020">28</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="June 29, 2020">29</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="June 30, 2020">30</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 1, 2020">1</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 2, 2020">2</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 3, 2020">3</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 4, 2020">4</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 5, 2020">5</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 6, 2020">6</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 7, 2020">7</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 8, 2020">8</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 9, 2020">9</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 10, 2020">10</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 11, 2020">11</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 12, 2020">12</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 13, 2020">13</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 14, 2020">14</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 15, 2020">15</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 16, 2020">16</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 17, 2020">17</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 18, 2020">18</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 19, 2020">19</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 20, 2020">20</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 21, 2020">21</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 22, 2020">22</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 23, 2020">23</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 24, 2020">24</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 25, 2020">25</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 26, 2020">26</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 27, 2020">27</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 28, 2020">28</span><span
                                                    class="flatpickr-day disabled"
                                                    aria-label="July 29, 2020">29</span><span
                                                    class="flatpickr-day today disabled unavailable"
                                                    aria-label="July 30, 2020" aria-current="date" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-42"
                                                    data-original-title="Checkout only">30</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="July 31, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-43"
                                                    data-original-title="Checkout only">31</span><span
                                                    class="flatpickr-day nextMonthDay hidden disabled unavailable"
                                                    aria-label="August 1, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-44"
                                                    data-original-title="Checkout only">1</span></div>
                                            <div class="dayContainer"><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="July 26, 2020">26</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="July 27, 2020">27</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="July 28, 2020">28</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled"
                                                    aria-label="July 29, 2020">29</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled unavailable"
                                                    aria-label="July 30, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-45"
                                                    data-original-title="Checkout only">30</span><span
                                                    class="flatpickr-day prevMonthDay hidden disabled unavailable"
                                                    aria-label="July 31, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-46"
                                                    data-original-title="Checkout only">31</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 1, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-47"
                                                    data-original-title="Checkout only">1</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 2, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-48"
                                                    data-original-title="Checkout only">2</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 3, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-49"
                                                    data-original-title="Checkout only">3</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 4, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-50"
                                                    data-original-title="Checkout only">4</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 5, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-51"
                                                    data-original-title="Checkout only">5</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 6, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-52"
                                                    data-original-title="Checkout only">6</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 7, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-53"
                                                    data-original-title="Checkout only">7</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 8, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-54"
                                                    data-original-title="Checkout only">8</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 9, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-55"
                                                    data-original-title="Checkout only">9</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 10, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-56"
                                                    data-original-title="Checkout only">10</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 11, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-57"
                                                    data-original-title="Checkout only">11</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 12, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-58"
                                                    data-original-title="Checkout only">12</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 13, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-59"
                                                    data-original-title="Checkout only">13</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 14, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-60"
                                                    data-original-title="Checkout only">14</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 15, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-61"
                                                    data-original-title="Checkout only">15</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 16, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-62"
                                                    data-original-title="Checkout only">16</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 17, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-63"
                                                    data-original-title="Checkout only">17</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 18, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-64"
                                                    data-original-title="Checkout only">18</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 19, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-65"
                                                    data-original-title="Checkout only">19</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 20, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-66"
                                                    data-original-title="Checkout only">20</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 21, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-67"
                                                    data-original-title="Checkout only">21</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 22, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-68"
                                                    data-original-title="Checkout only">22</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 23, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-69"
                                                    data-original-title="Checkout only">23</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 24, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-70"
                                                    data-original-title="Checkout only">24</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 25, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-71"
                                                    data-original-title="Checkout only">25</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 26, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-72"
                                                    data-original-title="Checkout only">26</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 27, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-73"
                                                    data-original-title="Checkout only">27</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 28, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-74"
                                                    data-original-title="Checkout only">28</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 29, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-75"
                                                    data-original-title="Checkout only">29</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 30, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-76"
                                                    data-original-title="Checkout only">30</span><span
                                                    class="flatpickr-day disabled unavailable"
                                                    aria-label="August 31, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-77"
                                                    data-original-title="Checkout only">31</span><span
                                                    class="flatpickr-day nextMonthDay hidden disabled unavailable"
                                                    aria-label="September 1, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-78"
                                                    data-original-title="Checkout only">1</span><span
                                                    class="flatpickr-day nextMonthDay hidden disabled unavailable"
                                                    aria-label="September 2, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-79"
                                                    data-original-title="Checkout only">2</span><span
                                                    class="flatpickr-day nextMonthDay hidden disabled unavailable"
                                                    aria-label="September 3, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-80"
                                                    data-original-title="Checkout only">3</span><span
                                                    class="flatpickr-day nextMonthDay hidden disabled unavailable"
                                                    aria-label="September 4, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-81"
                                                    data-original-title="Checkout only">4</span><span
                                                    class="flatpickr-day nextMonthDay hidden disabled unavailable"
                                                    aria-label="September 5, 2020" data-tooltipped=""
                                                    aria-describedby="tippy-tooltip-82"
                                                    data-original-title="Checkout only">5</span></div>
                                        </div>
                                    </div>
                                    <div class="innerControls no-border">
                                        <button type="button" class="btnClear">Clear</button>
                                        <button type="button" class="btnApply">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="wrapper guests fancy-guests"><label for="theguests">Guests</label><input
                            class="guests-trigger" type="text" value="Guests" data-reset="1 Guest" readonly="">
                        <input class="guests-hidden" name="guests" type="hidden" value="1" data-reset="1">
                        <div class="guestsFilterDropdown filterDropdown">
                            <div class="flex-container">
                                <div>Adults</div>
                                <div class="counter-element">
                                    <i class="fa fa-minus disabled-button"></i>
                                    <input id="adults_field" class="entityCounter master-input" name="adults"
                                           type="text" value="1" data-reset="1" data-min="1" data-max="10"
                                           readonly="readonly">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                            <div class="flex-container"
                            "="">
                            <div>Children<label>Ages 2-12</label></div>
                            <div class="counter-element">
                                <i class="fa fa-minus disabled-button"></i>
                                <input id="children_field" class="entityCounter master-input" name="children"
                                       type="text" value="0" data-reset="0" data-min="0" data-max="10"
                                       readonly="readonly">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>

                        <div id="guestsFilterActionButtons" class="filterDropdownControls">
                            <button type="button" class="btnClear">Clear</button>
                            <button type="button" class="btnApply">Apply</button>
                        </div>

                    </div>

            </div>
            <div class="wrapper submit">
                <button class="button search-submit color-bg-primary default-btn rounded-btn flat-btn"><i
                        class="hide-for-small-only fa fa-fw fa-search"></i> <span class="search-text">Search</span>
                </button>
            </div>

            </form>

        </div>
    </div>
</div>
</div>