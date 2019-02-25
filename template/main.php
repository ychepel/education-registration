<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="template/css/style.css">
    <title>Школа Б'юті-Консультанта</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-sm logobox">
                <img src="template/img/confident.png" alt="">
            </div>
            <div class="col-sm">
                <img src="template/img/logo.png" alt="" style=" width: 100%">
            </div>
            <div class="col-sm">
                <img src="template/img/connected.png" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm linebox">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <p class="firsttext">Надзвичайно важливою умовою успіху у будь-якій справі є правильний її початок. Від
                    того, як закласти фундамент будинку залежатиме його міцність та надійність. А від того, наскільки
                    правильно розпочати власну справу залежатиме наша впевненість та успіх цієї справи.
                    «Мері Кей» вже більше півстоліття допомагає жінкам по всьому світу бути успішними у веденні
                    власного бізнесу. Бути яскравими. Бути цікавими. Бути доглянутими. Бути неперевершеними. Бути
                    найкращою версією себе.
                </p>
            </div>
            <div class="col-sm-6 ">
                <img src="template/img/MKE.png" alt="" style="width:100%">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm redline">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row welcomebox">
            <div class="col-sm ">
                <h4>Ласкаво просимо до навчального процесу «Школа б’юті-Консультанта «Мері Кей»! </h4>
                <p>Запрошуються до участі Незалежні Консультанти з краси, які підписали Угоду з Компанією у 2018 – 2019 роках та бажають
                    розвиватися разом з «Мері Кей». Проект розрахований на три місяці навчання* та підтримки учасниць,
                    і стартує одночасно у всіх Б'юті Центрах України.</p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm redline">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 ">
                <img src="template/img/girl.png" alt="" style="width:100%">
            </div>
            <div class="col-sm-1 ">

            </div>
            <div class="col-sm-6 ">
                <ul>
                    <li>своєчасна та актуальна інформація про організацію діяльності Незалежного Консультанта з краси;</li>
                    <li>розуміння принципів та напрямку діяльності Компанії;</li>
                    <li>нові знайомства та можливість розвиватися у колі однодумців;</li>
                    <li>мотивація та натхнення для кожної жінки, що бажає глибше зрозуміти світ жіночої краси та
                        бізнесу; </li>
                    <li>правильний фундамент для професіоналізму у сфері жіночого бізнесу.</li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <p><a name="top"></a></p>
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
        <div class="container">
            <div class="row ">
                <div class="col-12 textbox">
                    <h4>Участь у Проекті безкоштовна (за попередньою реєстрацією) </h4>
                    <h5>Між модулями - виконання домашніх завдань та інформаційна підтримка. Видається сертифікат. </h5>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <?php foreach($locationService->getLocationNames() as $key=>$city) {?>
                    <?php if($key%2 == 0): ?>
                        <div class="w-100 d-none d-md-block"></div>
                    <?php endif;?>
                    <div class="col-md-4 col-sm-6">
                        <div class="cityitem">
                            <div class="city_head">
                                <h4>м. <?= $city?></h4>
                            </div>
                            <div class="city_body">
                                <?= $locationService->getLocationDetails($city)['address']?>
                                <p><b>Залишилось місць: <?= $locationService->getEmptySeats($city)?></b></p>
                            </div>
                            <div class="city_footer">
                                <?php if(!$locationService->getEmptySeats($city) && !$dataService->isRegistered($consultantNumber) && $consultant->isRegistrationAllowed()) :?>
                                    <button disabled type="button" class="btn btn-danger">ВІЛЬНИХ МІСЦЬ НЕМАЄ</button>
                                <?php endif;?>
                                <?php if($locationService->getEmptySeats($city) && $dataService->isRegistered($consultantNumber)) :?>
                                    <button disabled type="button" class="btn btn-danger">ВИ ВЖЕ ЗАРЕЄСТРОВАНІ</button>
                                <?php endif;?>
                                <?php if($locationService->getEmptySeats($city) && !$dataService->isRegistered($consultantNumber) && $consultant->isRegistrationAllowed()) :?>
                                    <a href="index.php?registration=<?= $city?><?= isset($_GET['debug']) ? '&debug='.$_GET['debug']: '' ?>" type="button" class="btn btn-danger">ЗАРЕЄСТРУВАТИСЬ</a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm redline">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm blok5">
                <h3>Взявши участь у Школі, ви точно зможете:</h3>
                <div class="pinktext">
                    <p>познайомитися з культурою, філософією та ключовими цінностями Компанії з більш, ніж піввіковою
                        історією</p>
                </div>
                <div class="pinktext">
                    <p>підвищити власну майстерність та стати справжнім б’юті експертом з краси,
                        завойовувати серця клієнток, вести клієнтську базу і підтримувати ефективну комунікацію
                    </p>
                </div>
                <div class="pinktext">
                    <p>навчитися проводити справжній клас з краси як яскраве дійство, з легкістю пропонувати жінкам
                        системи по догляду за шкірою, з успіхом продавати продукцію улюбленого бренду і отримувати
                        задоволення від своєї професії
                    </p>
                </div>
                <div class="pinktext">
                    <p>дізнатися всю необхідну інформацію для успішної кар'єри та розквіту бізнесу з «Мері Кей», для
                        отримання значного доходу та задоволення від щоденних дій
                    </p>
                </div>
                <div class="pinktext">
                    <p>підвищити особисту ефективність, посилити позитивний настрій, особисту мотивацію та впевненість
                        у собі
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm redline">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row footerbox">
            <div class="col-sm-12 align-self-center divregbtn">
                <p><a href="#top"><button type="button lastbutton" class="btn btn-light">ЗАРЕЄСТРУВАТИСЬ</button></a></p>
            </div>
        </div>
    </div>
    <div class="container-fluid blackblock">
        <div class="row ">
            <div class="col-sm-12 ">
                <div class="">
                    <p>* Компанія «Мері Кей» не є навчальним закладом. Всі заходи, що пропонує відвідати Компанія,
                        носять консультативний характер та направлені на розвиток бізнесу Консультантів з краси «Мері
                        Кей».
                        <br>** Кількість місць обмежена
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

</html>