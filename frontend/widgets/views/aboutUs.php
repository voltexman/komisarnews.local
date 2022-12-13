<?php

use yii\helpers\Url;
use yii\helpers\Html;
use rmrevin\yii\ionicon\Ion;
use frontend\widgets\Subscribers;

?>

<section id=why-choose-us class=section>
    <div class="container">
        <header class=section-heading>
            <h2>Шукаєте кому вигідно продати волосся?</h2>
            <span>Наша компанія завжди готова купити волосся дорого!</span>
        </header>
        <div class="section-content">
            <p class="text-justify">Жителі багатьох міст можуть продати волосся особисто нам в руки! Подаруєте собі
                настрій, не бійтеся мінятися і удосконалюватися, продаючи свої коси, ви робите благу справу і заробляєте
                додаткові гроші на потрібні покупки. Звертайтеся за консультацією прямо зараз за номером телефону, ми
                завжди готові відповісти на будь-які питання і запропонувати вам європейські ціни. Наша компанія завжди
                готова запропонувати найвищу ціну за натуральний слов'янський зріз від <b>40 см</b>, а також кращий
                сервіс і обслуговування. Ми є професіоналами своєї справи і поважаємо кожного нашого клієнта, тому
                гарантуємо максимум задоволення від співпраці.</p>
        </div>
    </div>
</section>

<section id=why-choose-us class=section>
    <div class="container">
        <header class=section-heading>
            <span>Чому варто звернутися саме в нашу компанію?</span>
        </header>
        <div class="section-content">
            <p class="text-justify">Куплю волосся - в мережі можна знайти тисячі оголошень , але далеко не всі продавці
                працюють чесно. Ми є Європейською компанією, яка співпрацює з клієнтами по всьому світу. Наша компанія є
                прямим скупником локонів, тому пропонуємо найвищі ціни. Цінуємо визнання і довіру наших клієнтів,
                гарантуємо приємну співпрацю і гідну оплату Вашого товару. Здійснюємо скупку волосся по Україні і
                відбираємо якісні, живі зрізи. Після покупки, всі зрізи проходять обробку і надходять в подальший
                продаж, а також використовуються у виробництві перук.</p>
        </div>
    </div>
</section>

<section class="section why-choose-us">
    <div class=container>

        <header class=section-heading>
            <span>Звертаючись в нашу компанію з бажанням продати волосся, ви гарантовано отримуєте</span>
        </header>

        <div class=section-content>
            <div class=row>
                <div class="col-sm-4 why-explain-wrap"><h4>Індивідуальність</h4>
                    <div class="why-explain top top-1">
                        <p>Окремий та індивідуальний підхід для кожного нашого покупця</p>
                    </div>
                </div>
                <div class="col-sm-4 why-explain-wrap"><h4>Вигоду</h4>
                    <div class="why-explain top top-2">
                        <p>Найвигідніші для Вас умови співпраці. Ми зацікавлені в цьому</p>
                    </div>
                </div>
                <div class="col-sm-4 why-explain-wrap"><h4>Зручність</h4>
                    <div class="why-explain top top-3">
                        <p>Обговорена грошова виплата в зручний для Вас час та спосіб</p>
                    </div>
                </div>
            </div>

            <figure class=why-us-image>
                <?= Html::img('@web/frontend/web/images/why-choose-us/1.png', ['class' => 'img-responsive center-block hidden-xs']) ?>
            </figure>

            <div class=row>
                <div class="col-sm-4 why-explain-wrap">
                    <div class="why-explain bottom bottom-1"><h4>Швидкість</h4></div>
                    <p>Моментальна оплата після оцінки та відправки Вашой шевелюри</p>
                </div>
                <div class="col-sm-4 why-explain-wrap">
                    <div class="why-explain bottom bottom-2"><h4>Інформативність</h4></div>
                    <p>Відправляйте по вайберу фото Вашого волосся і наш спеціаліст оголосить ціну</p>
                </div>
                <div class="col-sm-4 why-explain-wrap last">
                    <div class="why-explain bottom bottom-3"><h4>Стиль</h4></div>
                    <p class=last>З радістю запропонуємо Вам стильну та модну стрижку в подарунок</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id=funfacts class="section dark-bg funfacts">
    <div class="color-overlay" style="opacity: 0.5"></div>
    <div class=container>
        <header class=section-heading><h2>Do You Know</h2><span>Some cool facts about our company</span></header>
        <div class=section-content>
            <div class=row>
                <div class=col-sm-4>
                    <div class=counter-box>
                        <div class=counter-icon><span class=ion-ios-contact></span></div>
                        <div class="count number">704</div>
                        <div class=count-description>Довольных клиента</div>
                    </div>
                </div>
                <div class=col-sm-4>
                    <div class=counter-box>
                        <div class=counter-icon><span class=ion-ios-clock-outline></span></div>
                        <div class="count number">10</div>
                        <div class=count-description>Лет на рынке услуг</div>
                    </div>
                </div>
                <div class=col-sm-4>
                    <div class="counter-box last">
                        <div class=counter-icon><span class=ion-ios-infinite-outline></span></div>
                        <div class=count>Infinite</div>
                        <div class=count-description>Coffees Were Consumed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section services">
    <div class=container>
        <header class=section-heading><h2>Скупка волосся</h2>
            <span>Як правильно зробити зріз щоб виручити максимальну ціну</span></header>
        <div class=section-content>
            <div class=row>
                <div class=col-sm-4>
                    <div class=service>
                        <div class="service-icon text-center">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <strong class="fa-stack-1x calendar-text">1</strong>
                            </span>
                        </div>
                        <div class=about-service><h4 class=text-center>Миття волосся</h4>
                            <p class=text-center>Попередньо необхідно вимити волосся шампунем</p>
                        </div>
                    </div>
                </div>
                <div class=col-sm-4>
                    <div class=service>
                        <div class="service-icon text-center">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <strong class="fa-stack-1x calendar-text">2</strong>
                            </span>
                        </div>
                        <div class=about-service><h4 class=text-center>Сушка волосся</h4>
                            <p class=text-center>Добре просушити без використання фена, дайте локонам висохнути
                                природним шляхом</p>
                        </div>
                    </div>
                </div>
                <div class=col-sm-4>
                    <div class=service>
                        <div class="service-icon text-center">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <strong class="fa-stack-1x calendar-text">3</strong>
                            </span>
                        </div>
                        <div class=about-service><h4 class=text-center>Розчісування</h4>
                            <p class=text-center>Добре розчешіть пасма, щоб позбутися від ковтунів (якщо такі є), а
                                також запобігти подальшому заплутування</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row secondrow">
                <div class=col-sm-4>
                    <div class=service>
                        <div class="service-icon text-center">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <strong class="fa-stack-1x calendar-text">4</strong>
                            </span>
                        </div>
                        <div class=about-service><h4 class=text-center>Поділ волосся</h4>
                            <p class=text-center>Розділіть волосся на кілька пасом, в залежності від густоти, туго
                                перетягніть кожну гумкою, обмотавши її кілька разів</p>
                        </div>
                    </div>
                </div>
                <div class=col-sm-4>
                    <div class=service>
                        <div class="service-icon text-center">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <strong class="fa-stack-1x calendar-text">5</strong>
                            </span>
                        </div>
                        <div class=about-service><h4 class=text-center>Зріз волосся</h4>
                            <p class=text-center>Далі робимо зріз, відступивши кілька сантиметрів трохи вище кріплення
                                та заплітаємо зрізане волосся в косу</p>
                        </div>
                    </div>
                </div>
                <div class=col-sm-4>
                    <div class=service>
                        <div class="service-icon text-center">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                <strong class="fa-stack-1x calendar-text">6</strong>
                            </span>
                        </div>
                        <div class=about-service><h4 class=text-center>Оцінка волосся</h4>
                            <p class=text-center>Для оцінювання волосся нам необхідно побачити фотографію зрізу біля
                                сантиметра і взнати точну його вагу</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="text-uppercase"><?= Ion::icon('ios-information-outline', ['style' => 'font-size:60px;line-height:0;', 'class' => 'pull-right']) ?>
                        Не намагайтеся обдурити оцінювача, використовуючи прийоми, щоб поліпшити якість волосся,
                        або розтягувати пасмо щоб візуально збільшити довжину. Наш фахівець обов'язково розпізнає
                        обман.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=funfacts class="section dark-bg funfacts">
    <div class="color-overlay" style="opacity: 0.5"></div>
    <div class=container>
        <header class=section-heading><h2>Як відправити свій зріз?</h2><span>Відправити свій зріз можна за допомогою Послуг Нової Пошти</span>
        </header>
        <div class=section-content>
            <div class=row>
                <div class="col-sm-6">
                    <ul class="nova-poshta">
                        <li>
                            <span class="nova-poshta-item">
                                <span class="fa-stack fa-1x">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fa-stack-1x calendar-text">1</strong>
                                </span>Насамперед Ви повинні обумовити деталі з нашим менеджером.
                            </span>
                        </li>
                        <li>
                            <span class="nova-poshta-item">
                                <span class="fa-stack fa-1x">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fa-stack-1x calendar-text">2</strong>
                                </span>Кладемо біля волосся сантиметр і робимо фото, після чого зважуємо їх.
                            </span>
                        </li>
                        <li>
                            <span class="nova-poshta-item">
                                <span class="fa-stack fa-1x">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fa-stack-1x calendar-text">3</strong>
                                </span>Надсилаємо фотографію на наш вайбер, а оцінювач встановлює точну вартість зрізу.
                            </span>
                        </li>
                        <li>
                            <span class="nova-poshta-item">
                                <span class="fa-stack fa-1x">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fa-stack-1x calendar-text">4</strong>
                                </span>Коли локони надійно упаковані, їх можна відправляти поштою в нашу компанію.
                            </span>
                        </li>
                        <li>
                            <span class="nova-poshta-item">
                                <span class="fa-stack fa-1x">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fa-stack-1x calendar-text">5</strong>
                                </span>Відправка волосся проводиться післяплатою, через послуги Нової Пошти.
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="nova-poshta-info"><?= Ion::icon('ios-information', ['style' => 'font-size:40px;line-height:0', 'class' => 'pull-right']) ?>
                        При відправці ви вказуєте встановлену нашим оцінювачем вартість, а при отриманні ми оплачуємо
                        дану суму, плюс вартість доставки. Гроші ви зможете забрати в своєму відділенні Нової Пошти.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=why-choose-us class=section>
    <div class="container">
        <header class=section-heading>
            <h4>Продати волосся або все ж зберегти довжину?</h4>
            <span>Міняйтеся і заробляйте на новому образі гроші</span>
        </header>
        <div class="section-content">
            <p class="text-justify">
                Якщо ви досі не вирішили, то завжди можете звернутися до нас з питаннями, що цікавлять. Ми
                готові дати детальну інформацію про продажі покупку, провести повну консультацію, щоб кожен клієнт міг
                зробити для себе остаточні висновки. Наші контактні менеджери завжди на зв'язку з клієнтами, що робить
                наш сервіс кращим в. Гарна густа шевелюра – це справжнє багатство будь-якої жінки. Стильна зачіска
                завжди прикрашає образ, робить його більш ніжним, акуратним, жіночним і природним. Але така краса,
                забирає багато часу, сил і терпіння. Тривалі укладання, дорогий догляд, все це вимагає не тільки
                грошових, але і вкладень, а в сучасному світі, де кожна хвилина на рахунку, іноді просто немає
                можливості займатися тривалої укладанням. Якщо ви зважилися щось змінити, змінити образ, надати йому
                родзинку і відчути небувалу легкість, то пропонуємо вам продати волосся. Якщо ви думаєте про продаж
                волосся але ніяк не зважитеся, то уявіть, скільки вільного часу у вас з'явиться. Ви зможете присвятити
                цінні години улюбленій справі, приділити увагу близьким, а не витрачати час на укладання. Свіжий образ
                надихне вас на нові справи, подарує впевненість, а компліменти на вашу адресу будуть сипатися звідусіль.
                Змінюючи себе, свій образ і стиль, ви можете заробити хороші гроші в свій сімейний бюджет! Ще ніколи
                зміна образу не була такою прибутковою. Пам'ятайте, що ваші локони можуть принести радість іншим людям,
                які в силу різних причин не мають можливості відростити красиву довжину. Вся продукція надходить в
                салони, для процедур нарощування, а також на виробництво перук, накладних кіс і шиньйонів. Що потрібно
                знати, перш ніж зважитися на продаж волосся Купівля волосся нашою компанією здійснюється тільки після їх
                оцінки. Вартість формується індивідуально в кожному випадку. Що б озвучити точну ціну нам необхідно
                побачити фотографію зрізу біля сантиметра і знати точну вагу. Ми гарантуємо чесну оцінку, без заниження
                ціни. Купуємо жіночі, чоловічі та дитячі коси від 40 сантиметрів, в будь-яких відтінках. Найвищу ціну
                готові запропонувати за шовковисті, м'які зрізи, без сивини, що не піддавалися фарбуванню, а також
                хімічній завивці. Натуральні слов'янські волосся-це дуже цінний товар, який не може коштувати мало. Ми
                готові запропонувати дійсно високі ціни, так як цінуємо Вашу працю, витрачений на догляд за такою
                шевелюрою. Щоб збільшити вартість, можна попередньо підготувати волосся. Пропийте курс вітамін,
                використовуйте натуральні масла, пийте більше рідини, стежте за кінчиками, постійно оновлюючи їх і
                позбавляючись від посічених кінців. Нас цікавлять живі, здорові, блискучі пасма.</p>
        </div>
    </div>
</section>

<section id="subscribe" class="section subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="subscribe-text">
                    <h2>Підписка</h2>
                    <span>Будьте в курсі наших новин</span>
                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <?= Subscribers::widget() ?>
                <div id="subscription-response"></div>
                <p class="spam-text subscriber-info-message">* Ми не розсилаємо спам і не передаємо Ваші дані іншим особам</p>
            </div>
        </div>
    </div>
</section>

<section id=our-process class="section our-process">
    <div class=container>
        <header class=section-heading><h2>Покупка волосся</h2><span>Які чинники впливають на вартість</span></header>
        <div class=section-content>
            <div class=process>
                <div class=our-process-image><span class=ion-ios-barcode-outline></span></div>
                <div class=our-process-text><h4>Довжина зрізу</h4>
                    <p>Ми купуємо зрізи від 40 сантиметрів. Якщо ваші локони коротші, то рекомендуємо ненадовго
                        відкласти продаж, кожен сантиметр здатний сильно відбитися на вартості. Забарвлене і сиве
                        волосся приймається від 50 сантиметрів.</p>
                </div>
            </div>
            <div class="divider divider-right hidden-xs"></div>
            <div class=process>
                <div class="our-process-image left"><span class=ion-ios-color-filter-outline></span></div>
                <div class="our-process-text right"><h4>Структура локонів</h4>
                    <p>Вища вартість пропонується за пасма м'які і гладкі на дотик.</p>
                </div>
            </div>
            <div class="divider divider-left hidden-xs"></div>
            <div class=process>
                <div class=our-process-image><span class=ion-ios-color-wand-outline></span></div>
                <div class=our-process-text><h4>Стан пучка</h4>
                    <p>Срез должен производится по правилам, фиксироваться сверху резинкой, не иметь колунов. Продавать
                        лучше сразу, свежесрезанные косы стоят гораздо дороже. Лежалые пряди теряют свой естественный
                        блеск и содержащиеся в них натуральные масла.</p>
                </div>
            </div>
            <!--            -->
            <div class="divider divider-right hidden-xs"></div>
            <div class=process>
                <div class="our-process-image left"><span class=ion-ios-flask-outline></span></div>
                <div class="our-process-text right"><h4>Хімічний вплив</h4>
                    <p>Ми не приймаємо ламкі та сухі локони, а також волосся із завивкою.</p>
                </div>
            </div>
            <div class="divider divider-left hidden-xs"></div>
            <div class=process>
                <div class=our-process-image><span class=ion-ios-lightbulb-outline></span></div>
                <div class=our-process-text><h4>Колір волосся</h4>
                    <p>Пофарбовані пасма будуть коштувати набагато дешевше натуральних. Скупка волосся здійснюється
                        будь-якому кольорі, але більш висока ціна встановлюється на світлі натуральні тони.</p>
                </div>
            </div>
            <div class="divider divider-right hidden-xs"></div>
            <div class=process>
                <div class="our-process-image left"><span class=ion-ios-analytics-outline></span></div>
                <div class="our-process-text right"><h4>Наявність сивини</h4>
                    <p>Більш цінними для нас є зрізи без сивини, але навіть і такі пасма теж підлягають купівлі.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div id=cta-2 class="cta-2 text-center">
    <div class=container>
        <span class=cta-text>Ви маєте довге волосся яке відповідає нашим вимогам і Ви хотіли б заробити?</span>
        <?= Html::a('Продати волосся', Url::to('order'), ['class' => 'btn btn-default-o']) ?>
    </div>
</div>

<section id=services class="section our-process">
    <div class=container>
        <header class=section-heading><h2>Купівля волосся в містах</h2><span>Знайдіть Ваше місто</span></header>
        <div class=section-content>

            <!-- <?php include Yii::getAlias('@app') . '/views/includes/cities-list.html' ?> -->

            <ul class="city-list">

                <?php foreach($cities as $city) : ?>

                    <li><a href="<?= $city['alias']; ?>" class="btn btn-default btn-round"><?= $city['name']; ?></a></li>

                <?php endforeach; ?>

            </ul>

        </div>
    </div>
</section>
