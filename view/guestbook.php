<div id="colorlib-main">
    <div class="hero-wrap pb-3 pt-3" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-10 text">
                <div class="desc"><h1 class="text text-center">Гостевая книга</h1></div>

                <?php foreach ($data['guestbook']->getAllMsg() as $msgObj) {?>

                <!--<div class="media border box my-1 pl-0 p-1">
                     <img class="d-flex mr-3 img-thumbnail" width="70px" src="/HomeWork/img/no-user-image.gif" alt="image">-->
                         <div class="media-body">
                             <div class="row">
                                 <h5 class="col flex-item-md-between mt-1 pt-1 text-info"><?php echo $msgObj->getName(); ?></h5>
                                 <p class="col text-secondary flex-item-md-between text-right mt-1 pt-1 mb-0 text-muted"><small><?php echo $msgObj->getDate(); ?></small></p>
                             </div>
                             <?php echo $msgObj->getMsg(); ?>
                             <hr>
                         </div>
                <?php } ?>

                <form action="formHandlers/addGbMsg.php" method="POST" class="col-md-6 pl-0">

                    <div class="form-group col-md-6 pl-0 pb-4">
                        <label for="formGroupExampleInput">Ваше имя</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="You name" name="name">
                    </div>

                    <div class="form-group col-md-6 pl-0">
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ваше сообщение</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">Отправить</button>

                </form>

            </div>
    </div>
</div>