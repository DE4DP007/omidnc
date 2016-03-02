<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отдел Математики и Информатики ДНЦ РАН");?>



    <!-- Marketing Icons Section -->
    <div class="row" id="nirnapr">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/mainhead1.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h1>
        </div>
        <div class="col-lg-12">
            <p  class="text-justify">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/maintext1.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </p>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/mainhead1.1.php",
                            Array(),
                            Array("MODE"=>"html")
                        );?>
                    </h4>
                </div>
                <div class="panel-body text-right">
                    <p class="text-justify">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/maintext1.1.php",
                            Array(),
                            Array("MODE"=>"text")
                        );?>
                    </p>
                    <br>
                    <a href="#" class="btn btn-default">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/mainhead1.2.php",
                            Array(),
                            Array("MODE"=>"html")
                        );?>
                    </h4>
                </div>
                <div class="panel-body text-right">
                    <p class="text-justify">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/maintext1.2.php",
                            Array(),
                            Array("MODE"=>"text")
                        );?>
                    </p>
                    <br>
                    <a href="#" class="btn btn-default">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/mainhead1.3.php",
                            Array(),
                            Array("MODE"=>"html")
                        );?>
                    </h4>
                </div>
                <div class="panel-body text-right">
                    <p class="text-justify">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/maintext1.3.php",
                            Array(),
                            Array("MODE"=>"text")
                        );?>
                    </p>
                    <br>
                    <a href="#" class="btn btn-default">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/mainhead2.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h2>
        </div>
        <div class="col-md-6">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/maintext2.php",
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/700x450" alt="">
        </div>

        <div class="col-md-12">
            <p class="text-justify">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/maintext2.1.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </p>
        </div>

    </div>
    <!-- /.row -->



    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/mainhead3.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="portfolio-item.html">
                <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
            </a>
        </div>
    </div>
    <!-- /.row -->






<?/*
<p>
Наша компания существует на Российском рынке с 1992 года. За это время «Мебельная компания» прошла большой путь от маленькой торговой фирмы до одного из крупнейших производителей корпусной мебели в России.
</p><p>
«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
<h3>Наша продукция</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"IBLOCK_BINDING" => "section",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
<h3>Наши услуги</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "3",
	"IBLOCK_BINDING" => "element",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
</p>

*/?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>