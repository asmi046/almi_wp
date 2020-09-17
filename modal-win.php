<!-- 
    В этом файле описываем все  всплывающие окна
-->

<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">Close</div>
        
        <div class = "modalline" id = "lineIcon">
        </div>
    
        <div class = "modalline" id = "lineMsg">
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="order-modal">
        <div class="box-modal_close arcticmodal-close">Close</div>
        
        <div class = "modalline" id = "lineIcon">
            <form action="">
                <h3 class="popup__title_text">To get a consultation</h3>
                <input type="text" class="inputbox" name="name" placeholder="Name">
                <input type="tel" class="inputbox" name="tel" placeholder="Telephone">
                <a href="#" data-formname = "Main form" class="btn uniSendBtn" value="Send message">Send message</a>
            </form>
        </div>
    
        <div class = "modalline" id = "lineMsg">
        </div>
    </div>
</div>

<div id="popup" class="popup" style="display: none;">

    	<div id="popup__body" class="popup__body box-modal">
       	<div class="box-modal_close arcticmodal-close">Close</div>

       	<div id="popup__content" class="popup__content">
       		<!-- <a href="#" class="popup__close"></a> -->

       	 	<div class="popup__image"></div>
       	 	<div class="popup__content-card">
       	 		<div class="popup__title">
        			<h3 class="popup__title_text">
        				Ask a Question
        			</h3>
        		</div>
        		<form formname = "Форма FAQ" class="popup__form" action="#" method="get" >
							<input class = "inputbox" type="text" name="name" placeholder="Name">
							<input  class = "inputbox" type="text" name="tel" placeholder="Telephone">
							<textarea name="question" placeholder="Question"></textarea>
							<button class="btn" id = "getQestion">Send message</button>
						</form>
					</div>
    		</div>

    	</div>

		</div>

	<!-- Popup-2 -->
<!-- 
	<div id="popupS" class="popup popup-two" style="display: none;">

    <div id="popup__bodyS" class="popup__body box-modal">
      <div class="box-modal_close arcticmodal-close">Close</div>
				<div class="popup__content popup__content-two">
    

       		<div class="popup__color"></div>

       		<div class="block-card">
       			<div class="popup__content-card popup__content-card-two">
        			<div class="popup__title">
        				<h3 class="popup__title_text">
        					Give feedback
        				</h3>
        		</div>
        		<form class="popup__form popup__form_two" action="#" method="get" >
							<input class = "inputbox" type="text" name="name" placeholder="Name">
							<input  class = "inputbox" type="text" name="tel" placeholder="Telephone">
							<textarea name = "reviews" placeholder="Review"></textarea>
							<button class="btn" id = "sendRev">Send message</button>
						</form>
        	</div>
        	<div class="popup__form_right">
						<div class="popup__assess">
							<h3 class="popup__assess_title">Assessement</h3>
							<ul class="star-track">
								<li class="star-empty star-track__item"></li>
								<li class="star-empty star-track__item"></li>
								<li class="star-empty star-track__item"></li>
								<li class="star-empty star-track__item"></li>
								<li class="star-empty star-track__item"></li>
							</ul>
							Product Quality	

							<div class="popup__stars">
								<div class="popup__stars_rating"></div>
								<div class="popup__stars_rating"></div>
								<div class="popup__stars_rating"></div>
								<div class="popup__stars_rating"></div>
								<div class="popup__stars_rating"></div>	
								Brand Quality
							</div>
								<form class="popup__input" action="#" method="get">
									<div id="file-name" class="popup__upload"  placeholder="File.txt">File.txt</div>
									<label id="mylabel"><input id="myfile" type="file" name="file" onchange="getFileName ();">Upload file</label>
								</form>								
								<form class="popup__input" action="#" method="get">
									<div id="file-names" class="popup__upload"  placeholder="File.txt">File.txt</div>
									<label id="mylabel"><input id="myfiles" type="file" name="file" onchange="getFileName ();">Upload file</label>
								</form>
						</div>
					</div>

					</div>

    	</div>
		</div>
	</div> -->

	<div id="popup_2" class="popup popup-two">

<div id="popup__bodyS" class="popup__body box-modal">
  <div class="box-modal_close arcticmodal-close">Close</div>
		<div class="popup__content popup__content-two">
		   
		   <div class="popup__color"></div>

		   <div class="block-card">
			   <div class="popup__content-card popup__content-card-two">
				<div class="popup__title">
					<h3 class="popup__title_text">
						Give feedback
					</h3>
			</div>
			<form class="popup__form popup__form_two" action="#" method="get" >
				<input class = "inputbox" type="text" name="name" placeholder="Name">
				<input  class = "inputbox" type="text" name="tel" placeholder="Telephone">
				<textarea name = "reviews" placeholder="Review"></textarea>
			</form>
		</div>
		<div class="popup__form_right">
					<div class="popup__assess">

						<div class="popup-block__assess">
						<h3 class="popup__assess_title">Assessement</h3>
						
						<div class="popup__stars">
							<div class = "popup__stars_component" id = "prodQ">
								<input type="radio" name="rating" value="5" id="5"><label for="5" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="4" id="4"><label for="4" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="3" id="3"><label for="3" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="2" id="2"><label for="2" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="1" id="1"><label for="1" class = "popup__stars_rating" ></label>
							</div>
							Product Quality
						</div>

						
						<div class="popup__stars">
							<div class = "popup__stars_component" id = "brendQ">
								<input type="radio" name="rating" value="5" id="5"><label for="5" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="4" id="4"><label for="4" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="3" id="3"><label for="3" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="2" id="2"><label for="2" class = "popup__stars_rating" ></label>
								<input type="radio" name="rating" value="1" id="1"><label for="1" class = "popup__stars_rating" ></label>
							</div>
							Brand Quality
						</div>
						</div>	
						<div class="popup-block__form">
							<form class="popup__input" action="#" method="get">
								<div id="file-name" class="popup__upload"  placeholder="File.txt">File.txt</div>
								<label id="mylabel"><input id="myfile" type="file" name="file" onchange="getFileName ();">Upload file</label>
							</form>								
							<form class="popup__input" action="#" method="get">
								<div id="file-names" class="popup__upload"  placeholder="File.txt">File.txt</div>
								<label id="mylabel"><input id="myfiles" type="file" name="file" onchange="getFileName ();">Upload file</label>
							</form>
							</div>

					</div>
				</div>
				<button class="popup__btn popup-2__btn btn">Send message</button>
				</div>

	</div>
	</div>
</div>