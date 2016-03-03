<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Контакты
            <small>Отдела Математики и Информатики</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Главная</a>
            </li>
            <li class="active">Контакты</li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-md-8">
        <?$APPLICATION->IncludeComponent("bitrix:map.google.view", "omimap",
            Array(
            "KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
                "INIT_MAP_TYPE" => "NORMAL",	// Стартовый тип карты
                "MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",	// Данные, выводимые на карте
                "MAP_WIDTH" => "600",	// Ширина карты
                "MAP_HEIGHT" => "500",	// Высота карты
                "CONTROLS" => array(	// Элементы управления
                    0 => "LARGE_MAP_CONTROL",
                    1 => "MINIMAP",
                    2 => "HTYPECONTROL",
                    3 => "SCALELINE",
                ),
                "OPTIONS" => array(	// Настройки
                    0 => "ENABLE_SCROLL_ZOOM",
                    1 => "ENABLE_DBLCLICK_ZOOM",
                    2 => "ENABLE_DRAGGING",
                ),
                "MAP_ID" => "",	// Идентификатор карты
            ),
            false
        );?>
        <!-- Embedded Google Map
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        -->
    </div>
    <!-- Contact Details Column -->
    <div class="col-md-4">
        <h3>Адрес и контактная информация</h3>
        <p>
            367000 г. Махачкала, респ. Дагестан<br>ул. М.Гаджиева, 45, кабинет 133<br>
        </p>
        <p><i class="fa fa-phone"></i>
            <abbr title="Phone"><b>Телефон</b></abbr>: (8722) 68-22-11</p>
        <p><i class="fa fa-envelope-o"></i>
            <abbr title="Email"><b>Email</b></abbr>: <a href="mailto:math.dag@mail.ru">math.dag@mail.ru</a>
        </p>
        <p><i class="fa fa-clock-o"></i>
            <abbr title="Hours"><b>Время работы</b></abbr>: Понедельник - Пятница<br>с 9:00 до 18:00</p>
        <ul class="list-unstyled list-inline list-social-icons text-center">
            <li>
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->

<br><hr>

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
    <div class="col-md-8">
        <h3>Связаться с нами</h3>
        <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Ваше имя (ФИО):</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Номер телефона:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Сообщение:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary btn-lg">
                <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Отправить
            </button>
        </form>
    </div>
</div>





<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jqBootstrapValidation.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/contact_me.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>