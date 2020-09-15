<form class="feedback clearfix rL">  
    <div class="form-contaner">
        <h3 class="form-name">Feedback </h3>
        <span class="form-text">
            Leave a request and our specialists will answer all your questions
        </span>
        <div class="field-box rL">
            <input type="text" class="inputbox" name="name" placeholder="Name">
            <input type="tel" class="inputbox" name="tel" placeholder="Telephone">
            <a href="#" class="btn uniSendBtn" value="Send message">Send message</a>
        </div>
    </div>
    <div class="feedback__decor feedback__decor__pets"> 
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/enimal.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/enimal.png" alt="pets" class="spacer">
        </picture>
    </div>
</form>