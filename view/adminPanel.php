<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin panel</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>
    <body>

    <div class="container">
        <div class="col-md-10">
            <br>
            Администратор - ...
            <br>
            <ul class="nav nav-tabs pt-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Текст "Обо мне"</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Добавить фото</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Записи готевой</a>
                </li>
                <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Страницы сайта
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php">Главная</a>
                    <a class="dropdown-item" href="photography.php">Галерея</a>
                    <a class="dropdown-item" href="guestbook.php">Гостевая книга</a>
                    <a class="dropdown-item" href="about.php">Обо мне</a>
                </div>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form  method="post" action="formHandlers/adminPanel.php">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <textarea  rows="14" class="form-control" name="message"><?php echo $about[0]['text']; ?></textarea>
                                <input type="submit" class="btn btn-primary mt-3" value="Сохранить">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form enctype="multipart/form-data" method="post" action="formHandlers/adminPanel.php">
                      <div class="form-group">
                        <input type="file" name="newFile" class="form-control-file" id="exampleFormControlFile1">
                        <input type="submit" class="btn btn-primary mt-3" value="Добавить фото" name="addFile">
                      </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <?php foreach ($guestbookRecord->getAllMsg() as $msgObj) { ?>

                        <?php echo $msgObj->getDate(); ?> - <?php echo $msgObj->getMsg(); ?>
                        <form method="post" action="formHandlers/adminPanel.php">
                            <div class="form-group">
                                <input type="hidden" class="form-control-file" name="id" value="<?php echo $msgObj->getId(); ?>" id="exampleFormControlFile1">
                                <input type="submit" class="btn btn-primary mt-3" value="Удалить запись" name="deleteRec">
                            </div>
                        </form><hr>

                    <?php } ?>
                </div>
            </div>

        </div>
    </div>

        <script src="js/utils.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>