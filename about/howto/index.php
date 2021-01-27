<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Организация похорон");
?>
	<!--SECTION FUNERAL ORGANIZATION PAGE INFO CONTENT START-->
<!-- section open tag and title in header.php-->
        <div class="funeral_organization_page_info">
            <div class="info_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/serv.png" alt="image">
            </div>
            <div class="info_item">
                <p>
                    Известие о смерти близкого человека всегда застает врасплох.
                    Беда нарушает привычное течение дел и душевное равновесие родственников усопшего.
                    Возникает множество проблем и вопросов, связанных с оформлением и организацией похорон.
                    Справиться с ними, находясь в состоянии отчаяния, нелегко.
                    <b>Специалисты нашей ритуальной службы помогут в тяжёлую минуту и выполнят свою работу безупречно.</b>
                    Организация похорон пройдет четко, без спешки и суеты.
                </p>

                <p>
                    Профессиональная организация похорон – это возможность для родственников умершего переложить
                    все организационные вопросы на плечи представителя нашей службы.
                    <b>Специалисты агентства «Горслужба-Ритуал» готовы взять на себя абсолютно все хлопоты.</b> В городской
                    специализированной службе Ritual.ru данная услуга предоставляется бесплатно и круглосуточно.
                </p>

                <div class="btn_wrapper">
                    <button class="btn">Вызов ритуального агента ОНЛАЙН</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION FUNERAL ORGANIZATION PAGE INFO CONTENT END-->

<!--SECTION SERVICE PAGE FUNERAL ARRANGEMENTS START-->
<section class="service_page_arrangements_wrapper">
    <div class="container">
        <h2>Порядок организации похорон</h2>
        <div class="service_page_arrangements">
            <div class="advantages_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/s1.png" alt="icon">
                <h2>Консультация</h2>
            </div>
            <div class="advantages_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/s2.png" alt="icon">
                <h2>Оформление<br> документов</h2>

            </div>
            <div class="advantages_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/s3.png" alt="icon">
                <h2>Подготовка<br>
                    к церемонии</h2>

            </div>
            <div class="advantages_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/s4.png" alt="icon">
                <h2>Панихида</h2>
            </div>
            <div class="advantages_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/s5.png" alt="icon">
                <h2>Захоронение<br>
                    кремация</h2>
            </div>
            <div class="advantages_item">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/s6.png" alt="icon">
                <h2>Поминовение</h2>
            </div>
        </div>
    </div>
</section>
<!--SECTION SERVICE PAGE FUNERAL ARRANGEMENTS END-->

<!--SECTION MAIN SERVICES PAGE PRICE START-->
<section class="service_page_price_wrapper">
    <div class="container">
        <div class="prices_contract_wrapper">
            <div class="prices_content">
			<?$APPLICATION->IncludeComponent(
			    "bitrix:main.include",
			    "",
			    Array(
			        "AREA_FILE_SHOW" => "sect", 
			        "AREA_FILE_SUFFIX" => "services-list", 
			        "AREA_FILE_RECURSIVE" => "Y", 
			        "EDIT_TEMPLATE" => "standard.php" 
			    )
			);?>
            </div>
            <div class="contract_content">
                <a href="/calculator" class = "contract_item">
                    <div class="image_wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/calculator.png" alt="icon">
                    </div>
                    <div class="text_wrapper">
                        <h4>
                            РАСЧЕТ стоимости
                            РИТУАЛЬНЫх УСЛУГ
                        </h4>
                        <p>
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh
                            vel velit auctor aliquet. Aenean
                        </p>
                    </div>
                </a>
                <h2>
                    Наши агенты незамедлительно
                    займутся всем необходимым.
                    Они готовы:

                </h2>
                <ul class="features">
                    <li><span>Организовать отправку тела морг;</span></li>
                    <li><span>Подготовить все необходимые документы;</span></li>
                    <li><span>Обеспечить бальзамирование, если на это будет воля родственников;</span></li>
                    <li><span>Организовать погребение или кремацию;</span></li>
                    <li><span>Обеспечить транспортом процессию;</span></li>
                    <li><span>Организовать поминальный обед.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--SECTION MAIN SERVICES PAGE PRICE END-->

<!--SECTION SERVICE PAGE TEXT CONTENT START-->
<section class="service_page_text_wrapper">
    <div class="container">
        <h2>Пользуйтесь услугами опытных профессионалов</h2>
        <p>
            При организации достойных похорон наши агенты готовы предложить различные тарифы.
            <b>Выбор любого из них гарантирует отсутствие необходимости беспокоиться о решении
                каких-либо вопросов.</b> С нашей помощью вы сможете приобрести гроб и любую другую
            ритуальную продукцию. Похороны – это горький и печальный процесс для родственников
            умершего, поэтому мы стараемся избавить их от любых хлопот. Мы никогда не навязываем
            услуги и предлагаем клиентам самостоятельно выбрать только те, которые они сочтут
            необходимыми.
        </p>
        <p>
            <span class="underline">Наши агенты готовы незамедлительно выехать к вам для консультации, которая
            предоставляется на бесплатной основе.</span> Агентство «Горслужба-Ритуал» располагает
            всем необходимым, чтобы обеспечить достойные проводы усопшего в последний путь.
            Для сопровождения похорон мы готовы представить любой необходимый автотранспорт.
            Родственники и близкие умершего будут доставлены и к месту захоронения (кремации),
            и к месту поминального обеда.
        </p>
    </div>
</section>
<!--SECTION SERVICE PAGE TEXT CONTENT END-->

<!--SECTION SERVICE PAGE CONTRACT START-->
<section class="service_page_contract_wrapper">
    <div class="container">
        <div class="service_page_contract">
            <div class="contract_text">
                <h4>Посмотрите отзывы о нашей работе</h4>
                <p>
                    Краткое описание предложения
                </p>
            </div>
            <div class="contract_action">
                <button class="btn">
                    Посмотреть отзывы
                </button>
            </div>
        </div>
    </div>
</section>
<!--SECTION SERVICE PAGE CONTRACT END-->

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect", 
        "AREA_FILE_SUFFIX" => "advantages", 
        "AREA_FILE_RECURSIVE" => "Y", 
        "EDIT_TEMPLATE" => "standard.php" 
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>