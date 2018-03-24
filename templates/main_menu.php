    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:63342/modern/"><img class="nav-logo" src="http://localhost:63342/modern/images/logo-new.png" alt="ViVakitchen"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse text-center"><div class="nav-mnu-margin">
                <ul class="nav navbar-nav navbar-m">
                    <?php $inform = array( '/informatsiya/','/informatsiya/vopros-otvet/','/informatsiya/kuhnya-ostrov/','/informatsiya/kuhonnyie-vyityazhki/','/informatsiya/pol-dlya-kuhni/','/informatsiya/proekt-kuhni/' ); ?>
                    <li <?php if($_SERVER['REQUEST_URI']=="/kupit-kuxnyu/"): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/kupit-kuxnyu/">Каталог кухонь</a></li>
                    <li <?php if($_SERVER['REQUEST_URI']=="/mebel/"): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/mebel/">Мебель</a></li>
                    <li <?php if($_SERVER['REQUEST_URI']=="/kuxonnye-shkafy/"): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/kuxonnye-shkafy/">Технический каталог</a></li>
                    <li <?php if(in_array($_SERVER['REQUEST_URI'], $inform)): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/informatsiya/">Информация</a></li>
                    <li <?php if($_SERVER['REQUEST_URI']=="/sotrudnichestvo/"): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/sotrudnichestvo/">Сотрудничество</a></li>
                    <li <?php if($_SERVER['REQUEST_URI']=="/kontaktyi/"): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/kontaktyi/">Контакты</a></li>
                    <li <?php if($_SERVER['REQUEST_URI']=="/o-kompanii/"): ?> class="active" <?php endif; ?>><a href="http://localhost:63342/modern/o-kompanii/">О компании</a></li>
                </ul></div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="panel">
        <div id="callback_form">
            Имя: <input id="name" title="">
            <br>Отдел: <br><select id="item">
                            <option>Кухни/мебель</option>
                            <option>Окна/двери ПВХ</option>
                        </select>
            <br>Телефон: <input id="phone" title="">
            <p id="send">Заказать</p>
        </div>
    </div>
    <a class="trigger" href="#"></a>

    <!--<div class="panel2">
        <div id="callback_form2">
            <br>ViVakitchen устраивает <a href="http://localhost:63342/modern/uslugi/rasprodazha/">распродажу</a> выставочных образцов кухонь.
            <br>
            <br><span class="text_under">Скидка на данные модели кухонь - 40%.</span>
        </div>
    </div>
    <a class="trigger2" href="#"></a>-->