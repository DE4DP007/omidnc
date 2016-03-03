<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об Отделе Математики и Информатики");?>



    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about/header.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </h1>

            <ol class="breadcrumb">
                <li><a href="index.html">Главная</a>
                </li>
                <li class="active">Об Отделе</li>
            </ol>

        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-6">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/about/largeimage.php",
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
        <div class="col-md-6">
            <h2>
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about/headtext.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h2>
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about/maintext.php",
                    Array(),
                    Array("MODE"=>"html")
                );?>
        </div>
    </div>
    <!-- /.row -->


    <hr>

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about/infohead.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h2>
        </div>
        <div class="col-md-12">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/about/infotext.php",
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
    </div>
    <!-- /.row -->

    <hr>


    <!-- Team Members -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about/emphead.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h2>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->



    <!-- Our Customers -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about/botthead.php",
                    Array(),
                    Array("MODE"=>"text")
                );?>
            </h2>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>