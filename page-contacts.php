<?php

/*
* Template Name: Контакты
*/
get_header('contacts');?>
       <main class="main">
            <div class="inner">
                <div id="map"></div>
                <form class="feedback clearfix rL">
                    <div class="form-contaner">
                        <h3 class="form-name">Feedback </h3>
                        <span class="form-text">
                            Leave a request and our specialists will answer all your questions
                        </span>
                        <div class="field-box rL">
                            <input type="text" class="inputbox" placeholder="Name">
                            <input type="tel" class="inputbox" placeholder="Telephone">
                            <input type="submit" class="btn" value="Send message">
                        </div>
                    </div>
                    <div class="feedback__decor feedback__decor__headhpones">
                        <img src="img/headphones.png" alt="pets" class="spacer">
                    </div>
                </form>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();
