<!-- 
    В этом файле описываем все  всплывающие окна
-->

<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
        
        <div class = "modalline" id = "lineIcon">
        </div>
    
        <div class = "modalline" id = "lineMsg">
        </div>
    </div>
</div>
<div style="display: none;">
    <div class="box-modal" id="order-modal">
        <div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
        
        <div class = "modalline" id = "lineIcon">
            <form action="">
                <h2>Получить консультацию</h2>
                <input type="text" class="inputbox" name="name" placeholder="Name">
                <input type="tel" class="inputbox" name="tel" placeholder="Telephone">
                <a href="#" class="btn uniSendBtn" value="Send message">Send message</a>
            </form>
        </div>
    
        <div class = "modalline" id = "lineMsg">
        </div>
    </div>
</div>