<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Калькулятор");
?>

<!--SECTION CALCULATOR PAGE CONTENT START-->
<section class="calculator_page_content_wrapper">
    <div class="container">
        <?$APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"",
			Array(),
			false
		);?>
        <h2>Рассчитать стоимость похорон</h2>
        <div class="calculator_page_content">
            <h4>Гроб</h4>
            <div class="content_list">
                <div class="content_item">
                    <h6>Материал</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Композиция на крышку гроба</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Похоронный комплект в гроб</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Комплект одежды для усопшего</h4>
            <div class="content_list">
                <div class="content_item">
                    <h6>Материал</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Венки</h4>
            <div class="content_list">
                <div class="content_item">
                    <h6>Венок</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Лента на венок</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Венок в изголовье</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Крест</h4>
            <div class="content_list">
                <div class="content_item">
                    <h6>Материал</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Табличка</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4>Организация</h4>
            <div class="content_list">
                <div class="content_item">
                    <h6>Ритуальный лифт (сингуматор)</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Доставка предметов ритуала</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Перевозка к месту захоронения</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="content_list">
                <div class="content_item">
                    <h6>Оформление заказа</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Похоронная бригада</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
                <div class="content_item">
                    <h6>Сбор документов</h6>

                    <div class="select_wrapper">
                        <select class="funeral_calculator">
                            <option value=""></option>
                            <option>Выбор номер один</option>
                            <option>Выбор номер два</option>
                            <option>Выбор номер три</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="calculator_page_info">
            <div class="btn_wrapper">
                <button class="btn">Оформить заказ</button>
            </div>
            <div class="price">
                <span>Итого:</span> 21 990
                <i class="fa fa-rub" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
<!--SECTION CALCULATOR PAGE CONTENT END-->

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