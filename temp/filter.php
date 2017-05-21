



<div id="main_categors">
    <ul class="ul_categors">
        <span class="head-categor"><b>Настольные игры:</b></span>
        <li>Приключенческие</li>
        <li>Карточные</li>
        <li>Головоломки</li>
        <li>Экономические</li>
        <li>Стратегические</li>
        <li>Игры для вечеринок</li>
        <li>Хоррор</li>
    </ul>
    <ul class="ul_accessuars">
        <span class="head-categor"><b>Аксессуары:</b></span>
        <li>Кубики</li>
        <li>Фишки</li>
        <li>Протекторы</li>

    </ul>
</div>


<div id="all_items">
<?include 'content.php'?>
</div>



<div id="main_filters">

    <div class="filter_price">
        <span class="span_filter_cena"><b>Цена:</b></span>
    </div>



    <p>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>
    <div id="slider-range"></div>

    <div class="filter_ppl">
        <span class="span_filter_cena"><b>Количество игроков:</b></span>

        <select class="select-filter_ppl" name="" id="">
            <option value="">Не выбрано</option>
            <option value="">1 человек</option>
            <option value="">2 человека</option>
            <option value="">3 человека</option>
            <option value="">4 человека</option>
            <option value="">5 человек</option>
            <option value="">6 человек</option>
            <option value="">7 человек</option>
            <option value="">8 и более человек</option>

        </select>
    </div>


    <div class="filter_age">
        <span class="span_filter_cena"><b>Возраст:</b></span>
        <p>
            <input type="text" id="amount2" readonly style="border:0; color:#f6931f; font-weight:bold;">
        </p>
        <div id="slider-range2"></div>
    </div>


    <button class="access_filters">Применить фильтры</button>

</div>