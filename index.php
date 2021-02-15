<?php

use Terem\AppBundle\Enum\Form;
use Terem\AppBundle\Enum\View;
use Terem\AppBundle\Model\Feature;
use Terem\AppBundle\Tools\Globals;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->SetTitle('Собственное производство');
?>


<link rel="stylesheet" href="style.css">
<section class="home banner-top-padding">
	<div class="wrapper home-title-wrapper">
		<div class="h6">Производство в компании «Теремъ»</div>
		<div class="h1">Собственное производство</div>
	</div>
</section>

<section class="top-img">
	<div class="wrapper">
		<div class="l-l">
			<img class="lazy-img" src="img/25-top.jpg" alt="">

		</div>
		<div class="l-r">
			<img class="lazy-img" src="img/24.jpg" alt="">
		</div>
		<div class="l-clear"></div>
	</div>
</section>

<section class="nav-icons">
	<div class="wrapper">
		<div class="container l-col-3 ">
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<a href="#ninega" class="_img-link" is="anchor-link" data-restrict="bottom">
						<img src="production-icons-img/5.svg" alt="">
					</a>
				</div>
				<div class="nav-icons-item__text ">Производственных и складских помещений</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<a href="#comp" class="_img-link" is="anchor-link" data-restrict="bottom">
						<img src="production-icons-img/7.svg" alt="">
					</a>
				</div>
				<div class="nav-icons-item__text">Компьютеризированная система управления</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<a href="#ever" class="_img-link" is="anchor-link" data-restrict="bottom">
						<img src="production-icons-img/9.svg" alt="">
					</a>
				</div>
				<div class="nav-icons-item__text">Круглогодичная загрузка производственных мощностей</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<a href="#avm" class="_img-link" is="anchor-link" data-restrict="bottom">
						<img src="production-icons-img/6.svg" alt="">
					</a>
				</div>
				<div class="nav-icons-item__text">Автоматизированные процессы производства</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<a href="#krov" class="_img-link" is="anchor-link" data-restrict="bottom">
						<img src="production-icons-img/8.svg" alt="">
					</a>
				</div>
				<div class="nav-icons-item__text =">Собственный<br> кровельный цех</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<a href="#avto" class="_img-link" is="anchor-link" data-restrict="bottom">
						<img src="production-icons-img/10.svg" alt="">
					</a>
				</div>
				<div class="nav-icons-item__text">Собственный автопарк для доставки</div>
			</div>
			<div class="l-clear"></div>
		</div>
	</div>
</section>

<section class="actions control">
	<div class="wrapper">
		<div class="block nine-ga-wrapper" id="ninega">
			<div class="l-r l-wide j-trigger">
				<img src="img/25.jpg" alt="">
				<img src="img/Bitmap.jpg" alt="">
			</div>
			<div class="l-l l-narrow j-trigger">
				<div class="action">
					<div class="tx">
						<div class="nt red">Производство в Бронницах</div>
						<div class="h4 title">Контроль на всех этапах</div>
						<p>Производственно-складской комплекс «Теремъ» находится в городе Бронницы и занимает около 9 га.</p>
						<p>  На складах комплекса всегда лежит достаточное количество пиломатериалов, которое может обеспечить бесперебойную работу в течение трёх месяцев. Такой запас даёт возможность более тщательно работать с поставщиками и поставляемой продукцией.</p>
						<p>Весь материал проходит трёхступенчатую систему проверки качества. Сначала сразу на несколько основных показателей материал проверяют при отгрузке, затем перед тем, как отправить на производство, и третий, заключительный раз, во время формирования домокомплектов к отправке.</p>
					</div>
				</div>
			</div>
			<div class="l-clear"></div>
		</div>

		<div class="nine-ga-mobile">
			<div class="h4 title">Контроль<br> на всех этапах</div>
			<div class="nt red">Производство в Бронницах</div>
			<div class="l-r l-wide j-trigger">
				<img src="img/42.jpg" alt="">
			</div>
			<p><span>Производственная база</span> находится в городе Бронницы и занимает около <span>9 га</span></p>
			<div class="_gray-bg">
				В неё входит современный склад и несколько цехов для производства домокомплектов, комплектующих и
				кровли.
			</div>
		</div>

	</div>
</section>

<section class="slider-big carousel-section" id="avm">
	<div class="wrapper wp-full-width">
		<div class="h4">Главный цех</div>
		<carousel-slider class="carousel" data-perWrapper="1:1:1" data-dots="true">
			<div class="carousel-container">
			<div class="item">
					<img src="img/main-slider/main-ceh-3.jpg" alt="">
					<div class="slider-bg-mobile slider-bg-mobile-3"></div>
					<div class="slider-text">
						<p>
						Линия SuperPush 200 с числовым программным управлением для поперечного раскроя древесины позволяет повысить производительность и обеспечить экономию сырья и трудозатрат.
						</p>
					</div>
					<div class="slider-text-mobile">
						<p>
						Линия SuperPush 200 с числовым программным управлением для поперечного раскроя древесины позволяет повысить производительность и обеспечить экономию сырья и трудозатрат.
						</p>
					</div>
				</div>
				<div class="item">
					<img src="img/main-slider/main-ceh-4.jpg" alt="">
					<div class="slider-bg-mobile slider-bg-mobile-4"></div>
					<div class="slider-text">
						<p>
						Обработанный брус отторцован и промаркирован. Возведение дома на строительной площадке осуществляется из подготовленных и упакованных в заводских условиях комплектующих.
						</p>
					</div>
					<div class="slider-text-mobile">
						<p>
						Обработанный брус отторцован и промаркирован. Возведение дома на строительной площадке осуществляется из подготовленных и упакованных в заводских условиях комплектующих.
						</p>
					</div>
				</div>
				<div class="item">
					<img src="img/main-slider/main-ceh-5.jpg" alt="">
					<div class="slider-bg-mobile slider-bg-mobile-5"></div>
					<div class="slider-text">
						<p>
						После профилирования и обработки клеёный брус проходит обязательные контрольные замеры и проверку качества.
						</p>
					</div>
					<div class="slider-text-mobile">
						<p>
						После профилирования и обработки клеёный брус проходит обязательные контрольные замеры и проверку качества.
						</p>
					</div>
				</div>
				<div class="item">
					<img src="img/main-slider/main-ceh-1.jpg" alt="">
					<div class="slider-bg-mobile slider-bg-mobile-1"></div>
					<div class="slider-text">
						<p>
						Эксплуатационная надёжность материалов будущего дома обеспечивается заводскими условиями производства, оснащённого современным автоматизированным оборудованием.
						</p>
					</div>
					<div class="slider-text-mobile">
						<p>
						Эксплуатационная надёжность материалов будущего дома обеспечивается заводскими условиями производства, оснащённого современным автоматизированным оборудованием.
						</p>
					</div>
				</div>
				<div class="item">
					<img src="img/main-slider/main-ceh-2.jpg" alt="">
					<div class="slider-bg-mobile slider-bg-mobile-2"></div>
					<div class="slider-text">
						<p>
							Автоматизированное высокоточное производство и современное оборудование позволяет исключить
							любые ошибки на всех этапах и гарантировать высокое качество.
						</p>
					</div>
					<div class="slider-text-mobile">
						<p>
							Автоматизированное высокоточное производство и современное оборудование позволяет исключить
							любые ошибки на всех этапах и гарантировать высокое качество.
						</p>
					</div>
				</div>	
				<div class="item">
					<img src="img/main-slider/main-ceh-6.jpg" alt="">
					<div class="slider-bg-mobile slider-bg-mobile-6"></div>
					<div class="slider-text">
						<p>
							Автоматизированное высокоточное производство и современное оборудование позволяет исключить
							любые ошибки на всех этапах и гарантировать высокое качество.
						</p>
					</div>
					<div class="slider-text-mobile">
						<p>
							Автоматизированное высокоточное производство и современное оборудование позволяет исключить
							любые ошибки на всех этапах и гарантировать высокое качество.
						</p>
					</div>
				</div>
			</div>
			<div class="slider-controls carousel-controls"></div>
		</carousel-slider>
	</div>
</section>

<section class="tool actions" id="comp">
	<div class="wrapper">
		<div class="block tool-wrapper" id="tool">
			<div class="l-l l-wide">
				<img src="img/36.jpg">
				<img src="img/35.jpg">
			</div>
			<div class="l-r l-narrow">
				<div class="action">
					<div class="tx">
						<div class="nt red">Технологичность</div>
						<div class="h4 title">Современные станки Speed Cut</div>
						<p>В арсенале компании «Теремъ» три современных станка Speed Cut SC-3<, с помощью которых
								производятся домокомплекты – полностью готовые для сборки комплекты деталей стен и
								перегородок</p> <p>Помимо станков Speed Cut SC-3, компания «Теремъ» применяет в работе
								четырехсторонние
								строгальные станки WINNER FE 6-26. Склейка бруса и мебельного щита производится при
								помощи
								гидравлических прессов POLZER EHLP и клеенаносящих установок АСД техника LP-3</p>
					</div>
				</div>
			</div>
			<div class="l-clear"></div>
		</div>

		<div class="tool-mobile">
			<div class="h4 title">Современные станки Speed Cut</div>
			<div class="nt red">Технологичность</div>
			<div class="l-l l-wide">
				<!-- <img src="img/40.jpg"> -->
				<img src="img/4.jpg">
				<img src="img/5.jpg">
			</div>
			<p>В арсенале компании три современных станка <span>Speed Cut SC-3</span>, с их помощью производятся –
				полностью готовые
				для сборки комплекты деталей стен и перегородок.</p>
			<div class="_gray-bg">
				Помимо станков Speed Cut SC-3, компания «Теремъ» применяет в работе четырехсторонние строгальные станки
				WINNER FE 6-26. Склейка бруса и мебельного щита производится при помощи гидравлических прессов POLZER
				EHLP и клеенаносящих установок АСД техника LP-3.
			</div>
		</div>
	</div>
</section>

<section class="online">
	<div class="wrapper">
		<div class="block-online">
			<div class="l-r">
				<div class="tx">
					<div class="h4">Онлайн-трансляция производства «Теремъ»</div>
					<div class="nt">Онлайн-экскурсия <span>по производству «Теремъ»</span></div>
					<a class="button" href="/about/video_terem/">Смотреть онлайн</a>
				</div>
			</div>
			<div class="l-l">
				<div class="lg-tx">
					<!-- <img src="production-icons-img/clock.svg">
					<div class="hd">Трансляция временно остановлена</div> -->
					<a href="/about/video_terem/" class="video-button play-mobile" aria-label="видео">
						<img src="production-icons-img/play.svg">
					</a>
				</div>
			</div>
			<div class="l-clear"></div>
		</div>
		<a href="/about/video_terem/" class="button btn-mobile">Смотреть онлайн</a>
	</div>
</section>

<section class="about-production actions">
	<div class="wrapper">
		<div class="workshop" id="krov">
			<div class="block block-workshop" id="workshop">
				<div class="l-r l-wide">
					<img src="img/roof-slider/roof-ceh-1.jpg">
				</div>
				<div class="l-l l-narrow">
					<div class="action">
						<div class="tx">
							<div class="h4 title">Собственный кровельный цех</div>
							<p>Мы производим металлочерепицу с уникальным профилем и полимерным покрытием, специальной краской, обладающей большой прочностью и износостойкостью. Из цеха выходит готовый современный кровельный материал, устойчивый к осадкам, перепадам температур и механическим повреждениям.</p>
						</div>
					</div>
				</div>
				<div class="l-clear"></div>
			</div>
			<div class="workshop-img">
				<div class="l-r">
					<img class="lazy-img" src="img/roof-slider/roof-ceh-3.jpg" alt="">
				</div>
				<div class="l-l">
					<img src="img/roof-slider/roof-ceh-2.jpg" alt="">
				</div>
				<div class="l-clear"></div>
			</div>

			<div class="workshop-mobile">
				<div class="h4">Собственный кровельный цех</div>
				<carousel-slider class="carousel" data-perWrapper="1:1:1" data-dots="true">
					<div class="carousel-container">
						<div class="item item-1">
							<img class="owl-lazy" src="img/roof-slider/roof-ceh-1.jpg" alt="">
						</div>
						<div class="item item-2">
							<img class="owl-lazy" src="img/roof-slider/roof-ceh-2.jpg" alt="">
						</div>
						<div class="item item-3">
							<img class="owl-lazy" src="img/roof-slider/roof-ceh-3.jpg" alt="">
						</div>
					</div>
				</carousel-slider>
				<div class="action">
					<div class="tx">
						<div class="h4 title">Собственный кровельный цех</div>
						<p>Линии по производству металлочерепицы, профнастила и фасонных деталей</p>
					</div>
				</div>
			</div>
		</div>

		<div class="ever" id="ever">
			<div class="block block-ever">
				<div class="h4 _mobile">Участок приёмки и хранения материалов</div>
				<div class="l-r l-wide">
					<img src="img/39.jpg">
				</div>
				<div class="l-l l-narrow">
					<div class="action">
						<div class="tx">
							<div class="h4 title">Участок приёмки<br> и хранения материалов</div>
							<p>На участке четыре крытых склада. Здесь осуществляется учёт и сбор материалов для заказов. На базе размещается более 20 000 куб. м пиломатериалов. Оборот сырья происходит быстро – более тысячи кубометров в день, поэтому срок его хранения не превышает двух месяцев.</p>
						</div>
					</div>
				</div>
				<div class="l-clear"></div>
			</div>
		</div>

		<div class="avto" id="avto">
			<div class="block block-avto">
				<div class="h4 _mobile">Собственный<br> автопарк</div>
				<div class="l-r l-wide">
					<img src="img/41.jpg">
				</div>
				<div class="l-l l-narrow">
					<div class="action">
						<div class="tx">
							<div class="h4 title">Собственный автопарк</div>
							<p>Наличие собственного автопарка позволяет существенно сократить логистическую цепочку и время доставки материалов на строительную площадку. На расстояние до 100 километров от производственной базы в Бронницах доставка строительных материалов осуществляется бесплатно.
							</p>
						</div>
					</div>
				</div>
				<div class="l-clear"></div>
			</div>
		</div>
	</div>
</section>

<section class="video-section">
	<div class="bg">
		<div class="img"></div>
	</div>
	<div class="wrapper l-v-center">
		<div class="video-container">
			<img src="production-icons-img/logo.svg" alt="">
			<button is="video-button" data-src="SXDaVJb0RL0" data-auto="true" class="video-button" aria-label="видео">
				<svg xmlns="production-icons-img/play.svg" width="100" height="100" viewBox="0 0 140 140">
					<g class="circles">
						<circle class="outer-circle" cx="70" cy="70" r="69" />
						<circle class="inner-circle" cx="70" cy="70" r="39" />
					</g>
					<path class="triangle"
						d="M80.728,67.957L64.683,57.879c-1.687-1.069-2.674-1.466-2.674.672v21.5c0,2.138.987,2.413,2.674,1.344l16.046-10.75C82.416,69.575,82.416,69.026,80.728,67.957Z"
						transform="translate(1 1)" />
				</svg>
			</button>
			<div class="hd">Посмотрите видео о производстве «ТеремЪ»</div>
		</div>
	</div>
</section>

<section class="nav-icons-bottom">
	<div class="wrapper">
		<div class="h4 title">Технологичность и качество – основные принципы работы компании</div>
		<div class="container l-col-4">
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<img src="production-icons-img/4.svg" alt="">
				</div>
				<div class="_txt">
					<!-- <div class="nav-icons-item__text _title">Высокое качество материалов</div> -->
					<div class="nav-icons-item__text">Мы закупаем материалы только у крупных и проверенных
						производителей</div>
				</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<img src="production-icons-img/2.svg" alt="">
				</div>
				<div class="_txt">
					<!-- <div class="nav-icons-item__text _title">Соблюдение условий хранения</div> -->
					<div class="nav-icons-item__text">Готовые деревянные изделия хранятся на специально оборудованных
						складах с вентиляцией воздуха</div>
				</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<img src="production-icons-img/6.svg" alt="">
				</div>
				<div class="_txt">
					<!-- <div class="nav-icons-item__text _title">Подготовка деталей на стадии изготовления</div> -->
					<div class="nav-icons-item__text">Рабочие собирают дом, подобно конструктору, в среднем, 45 дней
					</div>
				</div>
			</div>
			<div class="nav-icons-item item">
				<div class="nav-icons-item__img">
					<img src="production-icons-img/calc.svg" alt="">
				</div>
				<div class="_txt">
					<!-- <div class="nav-icons-item__text _title">Точный расчет проектов ни каких остатков</div> -->
					<div class="nav-icons-item__text">Автоматизированные станки позволяют изготавливать детали с
						точностью до десятых долей миллиметра</div>
				</div>
			</div>
		</div>
		<div class="l-clear"></div>
	</div>
</section>
<style>
@media screen and (max-width: 1000px){
	footer .wrapper .container.l-col-3>.item.footer-copyright {
		width: 100%;
	}
}
</style>


<?php
$APPLICATION->IncludeComponent('terem:slider.blocks', 'slider.promotion', [
	'CODE' => 'promotion',
	'CACHE_TYPE' => 'Y',
	'CACHE_TIME' => 3600000
], false, ['HIDE_ICONS' => 'Y']);

$APPLICATION->IncludeComponent('terem:standard.blocks', 'taxi.red', [
	'CODE' => 'request_taxi_red',
	'CACHE_TYPE' => 'Y',
	'CACHE_TIME' => 3600000
], false, ['HIDE_ICONS' => 'Y']);
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>