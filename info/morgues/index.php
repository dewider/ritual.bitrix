<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Морги");
?>

<!--SECTION MORGUES PAGE CONTENT START-->
<section class="morgues_content_wrapper">
        <div class="container">
            <div class="morgues_content">
                <?$APPLICATION->IncludeComponent(
		        		"bitrix:breadcrumb",
		        		"",
		        	Array(),
		        	false
		        );?>
                <h2>Морги Москвы</h2>
                <p class="descr">
                <span class="underline">Моргом называют медицинское учреждение, которое призвано обеспечивать сохранность тел в особых холодильных
                устройствах.</span>Здесь проводится специальная экспертиза причин смерти, после вскрытия тел усопших.
                    Морги Москвы проводят подготовительные процедуры покойного к захоронению. В частности, при необходимости
                    они бальзамируют тело, обмывают его, осуществляют косметические услуги. Тела умерших людей находятся в
                    морге вне зависимости от того, <b>где произошла смерть, и какие причины тому способствовали.</b>
                </p>

                <h6>Актуальная информация о московских моргах</h6>
                <p class="descr">
                    <span class="underline">Если вам необходимы морги в Москве, то ниже представлены контактные данные этих медицинских учреждений.</span>
                    Телефонные номера вам потребуются в том случае, если умер кто-то из близких людей. Ниже имеется ссылка,
                    в которой представлен полный список моргов с адресами и телефонными номерами.
                </p>

                <h6>Московские морги подразделяются на три вида:</h6>
                <ul class="morgues_kinds">
                    <li>
                    <span>
                        Патоанатомические отделения. <span class="underline">Они являются отдельным структурным подразделением медицинских учреждений, где находятся больные люди.</span>
                        Здесь находятся тела тех людей, в чьей смерти нет насильственного характера, и отсутствуют признаки криминала. Тела умерших людей без признаков
                        насильственной смерти помещаются в данный тип моргов.
                    </span>
                    </li>
                    <li>
                    <span>
                        Бюро судебной медицины. <span class="underline">В данное учреждение помещаются тела умерших, когда смерть имела насильственный характер или имеются подозрения в
                            совершении преступного действия.</span>
                    </span>
                    </li>
                </ul>

                <h2>Паталого-анатомические морги</h2>
                <div class="morgues_list_wrapper">
                    <ul class="morgues_list">
                        <li><a href="#">Морги при ГКБ</a></li>
                        <li><a href="#">Морги при ГКБ №3</a></li>
                        <li><a href="#">Морги при ГКБ №4</a></li>
                        <li><a href="#">Морги при ГКБ №5</a></li>
                        <li><a href="#">Морги при ГКБ №6</a></li>
                        <li><a href="#">Морги при ГКБ №7</a></li>
                        <li><a href="#">Морги при ГКБ №8</a></li>
                        <li><a href="#">Морги при ГКБ №9</a></li>
                        <li><a href="#">Морги при ГКБ №12</a></li>
                        <li><a href="#">Морги при ГКБ №19</a></li>
                    </ul>

                    <ul class="morgues_list">
                        <li><a href="#">Морги при ГКБ</a></li>
                        <li><a href="#">Морги при ГКБ №3</a></li>
                        <li><a href="#">Морги при ГКБ №4</a></li>
                        <li><a href="#">Морги при ГКБ №5</a></li>
                        <li><a href="#">Морги при ГКБ №6</a></li>
                        <li><a href="#">Морги при ГКБ №7</a></li>
                        <li><a href="#">Морги при ГКБ №8</a></li>
                        <li><a href="#">Морги при ГКБ №9</a></li>
                        <li><a href="#">Морги при ГКБ №12</a></li>
                        <li><a href="#">Морги при ГКБ №19</a></li>
                    </ul>

                    <ul class="morgues_list">
                        <li><a href="#">Морги при ГКБ</a></li>
                        <li><a href="#">Морги при ГКБ №3</a></li>
                        <li><a href="#">Морги при ГКБ №4</a></li>
                        <li><a href="#">Морги при ГКБ №5</a></li>
                        <li><a href="#">Морги при ГКБ №6</a></li>
                        <li><a href="#">Морги при ГКБ №7</a></li>
                        <li><a href="#">Морги при ГКБ №8</a></li>
                        <li><a href="#">Морги при ГКБ №9</a></li>
                        <li><a href="#">Морги при ГКБ №12</a></li>
                        <li><a href="#">Морги при ГКБ №19</a></li>
                    </ul>
                </div>

                <h2>Судебно-медицинские морги</h2>
                <div class="morgues_list_wrapper">
                    <ul class="morgues_list">
                        <li><a href="#">Морг “Царицыно”</a></li>
                        <li><a href="#">Морг №2</a></li>
                        <li><a href="#">Морг №3</a></li>
                        <li><a href="#">Морг №4</a></li>
                    </ul>

                    <ul class="morgues_list">
                        <li><a href="#">Морг №11</a></li>
                        <li><a href="#">Морг №2</a></li>
                        <li><a href="#">Морг №3</a></li>
                        <li><a href="#">Морг №4</a></li>
                    </ul>

                    <ul class="morgues_list">
                        <li><a href="#">Морг №6</a></li>
                        <li><a href="#">Морг №2</a></li>
                        <li><a href="#">Морг №3</a></li>
                        <li><a href="#">Морг №4</a></li>
                    </ul>
                </div>

                <h2>Другие морги</h2>
                <div class="morgues_list_wrapper">
                    <ul class="morgues_list">
                        <li><a href="#">Морги при ГКБ</a></li>
                        <li><a href="#">Морги при ГКБ №3</a></li>
                        <li><a href="#">Морги при ГКБ №4</a></li>
                        <li><a href="#">Морги при ГКБ №5</a></li>
                        <li><a href="#">Морги при ГКБ №6</a></li>
                        <li><a href="#">Морги при ГКБ №7</a></li>
                        <li><a href="#">Морги при ГКБ №8</a></li>
                        <li><a href="#">Морги при ГКБ №9</a></li>
                        <li><a href="#">Морги при ГКБ №12</a></li>
                        <li><a href="#">Морги при ГКБ №19</a></li>
                    </ul>

                    <ul class="morgues_list">
                        <li><a href="#">Морги при ГКБ</a></li>
                        <li><a href="#">Морги при ГКБ №3</a></li>
                        <li><a href="#">Морги при ГКБ №4</a></li>
                        <li><a href="#">Морги при ГКБ №5</a></li>
                        <li><a href="#">Морги при ГКБ №6</a></li>
                        <li><a href="#">Морги при ГКБ №7</a></li>
                        <li><a href="#">Морги при ГКБ №8</a></li>
                        <li><a href="#">Морги при ГКБ №9</a></li>
                        <li><a href="#">Морги при ГКБ №12</a></li>
                        <li><a href="#">Морги при ГКБ №19</a></li>
                    </ul>

                    <ul class="morgues_list">
                        <li><a href="#">Морги при ГКБ</a></li>
                        <li><a href="#">Морги при ГКБ №3</a></li>
                        <li><a href="#">Морги при ГКБ №4</a></li>
                        <li><a href="#">Морги при ГКБ №5</a></li>
                        <li><a href="#">Морги при ГКБ №6</a></li>
                        <li><a href="#">Морги при ГКБ №7</a></li>
                        <li><a href="#">Морги при ГКБ №8</a></li>
                        <li><a href="#">Морги при ГКБ №9</a></li>
                        <li><a href="#">Морги при ГКБ №12</a></li>
                        <li><a href="#">Морги при ГКБ №19</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
<!--SECTION MORGUES PAGE CONTENT END-->

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect", 
        "AREA_FILE_SUFFIX" => "reference-info", 
        "AREA_FILE_RECURSIVE" => "Y", 
        "EDIT_TEMPLATE" => "standard.php" 
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>