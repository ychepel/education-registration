<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" href="template/css/style.css">
    <title>Школа Б'юті-Консультанта</title>
</head>

<body>

<div class=" myblockreg">

    <div class="container-fluid ">
        <div class="row justify-content-md-center">
            <div class="col-sm-4 align-self-center">
                <div class="box-1">
                    <div>
                        <h3>Модуль 1</h3>
                    </div>
                    <p>16 березня (субота) <br>10:30 – 16:30</p>
                </div>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="box-2">
                    <div>
                        <h3>Модуль 2</h3>
                    </div>
                    <p>13 квітня (субота) <br> 10:30 – 16:30</p>
                </div>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="box-3">
                    <div>
                        <h3>Модуль 3</h3>
                    </div>
                    <p>18 травня (субота)<br> 10:30 – 16:30</p>

                </div>
            </div>
        </div>
        <div class="row justify-content-md-center regform">
            <div class="col-md-6 col-lg-6 col-sm-12 textbox align-self-center">
                <div class="col"><img src="template/img/logo.png" alt="" style=" width: 30%"></div>
                <h4>Форма реестрації </h4>
                <?= $city ?>

                <form action="index.php" method="POST">
                    <input type="hidden" name="city" value="<?= $city ?>">
                    <input type="hidden" name="consultantNumber" value="<?= $consultant->number ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Прізвище, Ім'я</label>
                        <input type="text" class="form-control" value="<?= $consultant->name ?>" disabled>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">№ Консультанта</label>
                        <input type="text" class="form-control" value="<?= $consultant->number ?>" disabled>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Телефон</label>
                        <input type="text" class="form-control number-only" name="phoneNumber" required maxlength="12">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ІПН (податковий номер)</label>
                        <input type="text" class="form-control number-only" name="taxId"
                               value="<?= $consultant->taxId ?>" required maxlength="12">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Так, я розумію що реєструючись на
                            всі три навчальні модулі. Планую бути на кожному.</label>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col col-sm-12">

                        </div>
                        <div class="col-md-auto col-sm-12 textbox align-self-center buttonreg">
                            <button type="submit" class="btn btn-danger "
                                    name="register" <?= $dataService->isRegistered($consultant->number) ? 'disabled' : '' ?>>
                                <?= $dataService->isRegistered($consultant->number) ? 'Ви вже зарреєстровані' : 'Зареєструватись' ?>
                            </button>
                        </div>
                        <div class="col col-sm-12">

                        </div>
                    </div>


                </form>
            </div>

        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

<script>
    $(function () {
        $('.number-only').bind('keyup paste', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>

</html>