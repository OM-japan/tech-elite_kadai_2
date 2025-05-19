<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<main>

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/slide_1.jpg" alt="hanabi"/></div>
            <div class="swiper-slide"><img src="img/slide_2.jpg" alt="festival"/></div>
            <div class="swiper-slide"><img src="img/slide_3.jpg" alt="festival2"/></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"><img src="img/slide-btn-prev.svg" alt="previousbutton"/></div>
        <div class="swiper-button-next"><img src="img/slide-btn-next.svg" alt="nextbutton"/></div>
    </div>

    <h1 class="index1">今年も始まる<span>夏祭り</span></h1>

    <div class="index2-4">
        <h2 id="index2">スケジュール</h2>
        <ul class="service_menu">
            <li id="september_1st" class="active">9月1日</li>
            <li id="september_2nd">9月2日</li>
            <li id="september_3rd">9月3日</li>
        </ul>
        <div class="service_description">
            <p class="september_1st active">9月1日の夏祭り内容</p>
            <p class="september_2nd">9月2日の夏祭り内容</p>
            <p class="september_3rd">9月3日の夏祭り内容</p>
        </div>
    </div>

    <div class="index2-4">
        <h2 id="index3">アクセス</h2>
        <p>〒771-1154 徳島県徳島市応神町東貞方南川渕</p>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9343.879239488788!2d134.51578922625845!3d34.106405841979665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553725a3a5e32cb%3A0x22557ce6f32d295a!2z5b6z5bO25biC5rCR5ZCJ6YeO5bed5YyX5bK46YGL5YuV5bqD5aC077yI5YyX5bK444Kw44Op44Km44Oz44OJ77yJ!5e0!3m2!1sja!2sjp!4v1747533642577!5m2!1sja!2sjp" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="index2-4">
        <h2 id="index4">席予約</h2>
        <form action="confirm.php" method="post"> 
            <div class="Form">
                <div class="Form-Item">
                    <p class="Form-Item-Label">お名前<span class="Form-Item-Label-Required">*必須</span></p>
                    <input type="text" class="Form-Item-Input" placeholder="例）田中太郎" name="name"required>
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label">席の場所<span class="Form-Item-Label-Required">*必須</span></p>
                    <select class="Form-Item-Select" name="seat"required>
                        <option value="" disabled selected>---</option>
                        <option>SS席</option>
                        <option>S席</option>
                        <option>A席</option>
                        <option>B席</option>
                        <option>C席</option>
                    </select>
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label">メールアドレス<span class="Form-Item-Label-Required">*必須</span><span class="Form-Item-Label-emailcheck">  メールアドレスを正しく入力してください</span></p>
                    <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" name="email" required> 
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label">電話番号<span class="Form-Item-Label-NoRequired">*任意</span><span class="Form-Item-Label-telcheck">  電話番号を正しく入力してください</span></p>
                    <input type="tel" class="Form-Item-Input" placeholder="例）00000000000" name="tel">
                </div>
                <div class="Form-Item">
                    <input type="submit" class="Form-Btn" value="送信">
                </div>
        </form>
    </div>
</main>

<?php include ( dirname(__FILE__) . '/footer.php'); ?>