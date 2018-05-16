<?php if ($this->session->flashdata('success')) {
	echo '<div class="modal modal-second" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          Dziękujemy za wiadomość.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-secondary--close" data-dismiss="modal">Zamknij</button>
        </div>
      </div>
    </div>
  </div>';
} ?>
<div class="navigation" id="navbar">
	<!-- HEADER START -->
<button class="navbar-toggler navigation__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
	<nav class="navigation__navbar navbar-expand-sm navbar container">
		<div class="collapse navbar-collapse navigation__body no-transition" id="navbarSupportedContent">
			<ul class="navbar-nav navigation__primary">
				<li class="nav-item navigation__item">
					<a class="nav-item navigation__item navigation__item--first" href="#start">
						<img class="navigation__logo img-rsponsive" src="./assets/images/logo.1.png" alt="SKN Logo"> </a>
				</li>
				<li class="nav-item navigation__item">
					<a class="nav-link" href="#projekty">projekty
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item navigation__item">
					<a class="nav-link" href="#partnerzy">partnerzy</a>
				</li>
				<li class="nav-item navigation__item">
					<a class="nav-link" href="#zespol">zespół</a>
				</li>
				<li class="nav-item navigation__item">
					<a class="nav-link" href="#referencje">referencje</a>
				</li>
				<li class="nav-item navigation__item">
					<a class="nav-link" href="#kontakt">kontakt</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<div id="fullpage">
	<div class="section">
		<header class="d-flex justify-content-center align-items-center header">

			<div class="container header__content">

				<img src="./assets/images/logo2.png" alt="Logo koła SKN łącznie z nazwą">

				<p></p>

				<h1>realizujemy</h1>

				<p>
					<span>wizję nowatorskich</span>
					<span>projektów</span>
				</p>

				<p class="header__description">
					<span>Jesteśmy grupą studentów z Politechniki Warszawskiej,</span>
					<span> chcącą realizować ambitne projekty z zakresu IT</span>
					<span> i biznesu, które łączą ludzi i wpływają na otoczenie.</span>
				</p>

				<p class="header__description">
					<span>Celem koła jest kreowanie możliwości rozwoju jakich</span>
					<span> często nie daje praca i studia. Uczymy technologii</span>
					<span> frontendowych, data science, frameworku SCRUM,</span>
					<span> metodyk Agile, strategii IT.</span>
				</p>

			</div>

		</header>

		<!-- HEADER END -->

	</div>
	<div class="section">
		<!-- PROJECTS SECTION START -->

		<section id="projects" class="projects pt-4">
			<div class="projects_container">
			<div class="container container1">
				<div class="row  projects__first-row">
					<div id="devhouse" class="col-sm-12 col-md-4 pb-4 singular-project-container devhouse">
							<div class="project-paragraphs">
									<p class="project_title">DevHouse</p>
									<p class="project-about-mini">Programowanie</p>
									<p class="project-about">
										Celem projektu DevHouse jest współpraca członków SKN-u z firmami i organizacjami przy budowie prostych stron internetowych
										i aplikacji.
									</p>
								</div>
									<a href="devhouse">
						<div id="lead-shape" class="projects-shape-1">

						</div>
						</a>

					</div>
					<div id="thinkit" class="col-sm-12 col-md-4 pb-4 singular-project-container thinkit">
							<div class="project-paragraphs">
									<p class="project_title">ThinkIT</p>
									<p class="project-about-mini">IT i biznes</p>
									<p class="project-about">
										ThinkIT to konferencja dla studentów, którzy interesują się nowymi technologiami oraz biznesem i chcieliby rozwijać się w
										tych dziedzinach.
									</p>
								</div>
								<a href="thinkIt">
						<div id="startup-shape" class="projects-shape-2">
						</div>
						</a>
					</div>
					<div id="lead" class="col-sm-12 col-md-4 pb-4 singular-project-container lead">
							<div class="project-paragraphs">
									<p class="project_title">LEAD</p>
									<p class="project-about-mini">program
										<br>menagerski</p>
									<p class="project-about">
										Celem projektu kształcenie kompetencji technicznych oraz organizacyjnych niezbędnych liderom technologii XXI wieku. Projekt
										łączy wiedzę teoretyczną z praktyczną poprzez realizowane wspólnie z firmami warsztaty oraz projekty IT.
									</p>
								</div>
						<div id="thinkit-shape" class="projects-shape-3">
						</div>
					</div>
				</div>
				<div class="row  projects__second-row">
					<div id="startup" class="col-sm-12 col-md-4 pb-4 one singular-project-container startup">
							<div class="project-paragraphs">
									<p class="project_title">StartUp
										<br>game</p>
									<p class="project-about-mini">edukacyjna gra
										<br>mobilna</p>
									<p class="project-about">
										Start-up Game to projekt, w którym członkowie SKN-u tworzą aplikację webową będącą symulatorem prowadzenia startupu.
									</p>
								</div>
						<div id="devhouse-shape" class="projects-shape-4">
						</div>
					</div>
					<div id="boot-camp" class="col-sm-12 col-md-4 pb-4 singular-project-container boot-camp">
						<div class="project-paragraphs">
							<p class="project_title">Boot Camp</p>
							<p class="project-about-mini">Programowanie</p>
							<p class="project-about">
								Niedługo odbędzie się BootCamp. Podczas niego uczestnicy będą doskonalić umiejetności programowania pod okiem doświadczonych
								deweloperów.
							</p>
						</div>
						<div id="bootcamp-shape" class="projects-shape-5">
						</div>
					</div>
					<div id="twoj-projekt" class="col-sm-12 col-md-4 pb-4 singular-project-container twoj-projekt">
						<div class="project-paragraphs">
							<p id="twoj-projekt-title" class="project_title">Twój
								<br>Projekt</p>
							<p class="project-about-mini">Zrealizuj Swój
								<br>pomysł!</p>
							<p class="project-about">
								Tutaj jest miejsce na Twój pomysł - na pewno docenimy Twoją kreatywność Wiele z naszych wcześniejszych projektów narodziło
								się dzięki ludziom takim jak Ty.

							</p>
							<a href="#">
								<div class="button-more-about-project">
									więcej
								</div>
							</a>
						</div>
						<div class="projects-shape-6">
						</div>
					</div>
				</div>
				<div class="section-projects-background">
					<div class="giant-header-projects">
						PROJEKTY
					</div>

					<svg class="svg-1" width="600" height="600">

				<path class="path-1" d="M75,50 70,5 330,5 540,220 540,490 100,420 75,50" stroke-width="1.2px" style="stroke: #ffffff; fill: none; "
				/>

			</svg>

		 <svg class="svg-2" width="300" height="300">

				<path class="path-2" d="M60,55 250,55 250,220 190,270 20,270 20,100" stroke-width="1.2px" style="stroke: #ffffff; fill: none; "
				/>

			</svg>

				</div>
			</div>
			</div>
		</section>

		<!-- PROJECTS SECTION END -->


	</div>
	<div class="section">

		<!-- PARTNERS SECTION START -->

		<section id="partners" class="partners">
			<div class="partners_container container">
				<div class="row">
					<div class="navy_bg col-12">
						<p>
							SKN Konsultingu IT zaufało już sześć organizacji i każda z nich planuje dalszą
							</br>
							współpracę z naszym kołem. Łącząc siły, tworzymy projekty wartościowe
							</br>
							zarówno dla studentów, jak i dla prestiżowych firm.
							</br>
							</br>
							To dzięki Wam z każdym rokiem rośniemy.
							</br>
							</br>
							Dziękujemy!
						</p>
					</div>
				</div>
			</div>
			<div>
				<div class="row d-flex justify-content-center">
					<img class="img" src="./assets/images/skn_partnerzy_dlonie_tlo1.png">

					<div class="col-12">
						<div class="third">PARTNERZY</div>

					</div>
				</div>
			</div>

			<div class="white_bg d-flex justify-content-center">

				<div class="row second">
					<div class="col-2" rel="partner1">
						<img src="./assets/images/Microsoft.png" width="150">
					</div>
					<div class="col-2" rel="partner2">
						<img src="./assets/images/PG.png" width="75" height="75">
					</div>
					<div class="col-2" rel="partner3">
						<img src="./assets/images/pwc.png" width="75" height="75">
					</div>
					<div class="col-2" rel="partner4">
						<img src="./assets/images/McKinsey.png" width="150" height="75">
					</div>
					<div class="col-4">
						<div id="partner1">
							<p>
								Znane na całym świecie przedsiębiorstwo z branży technologii informacyjnych. Jego sztandarowy produkt - Windows, jest używany
								przez półtora miliarda użytkowników na świecie.
							</p>
						</div>
						<div id="partner2" style="display:none">
							<p>
								Największa firma z branży produktów szybkozbywalnych na świecie, która działa już ponad 180 lat. Wśród jej marek warto wymienić
								Pampers, Pantene czy Gillette.
							</p>
						</div>
						<div id="partner3" style="display:none">
							<p>
								Globalna organizacja oferująca usługi doradcze na najwyższym poziomie. Zakres jej działania to doradztwo biznesowe, podatkowe
								i prawne oraz audyt.
							</p>
						</div>
						<div id="partner4" style="display:none">
							<p>
								Amerykańska spółka zajmująca się doradztwem strategicznym, aktywna na rynku od ponad 90 lat. W Polsce działa od 1993 roku
								i jest to największa tego typu firma w naszym kraju.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- PARTNERS SECTION END -->
	</div>


	<div class="section">
		<!-- TEAM SECTION START -->

		<section id="team" class="flex-column d-flex align-items-center team-section-container">
			<div class="container">
				<div class="flex-row members">
					<div class=" container max-member-container">
						<h3 class="giant-header-members">
							ZESPÓŁ
						</h3>
						<div class="max-photo">
							<p class="wybierz-osobe">Wybierz osobę</p>
						</div>
						<div class="flex-column max-member-paragraphs">
						</div>
						<svg class="members-bg-line-container">
							<path class="members-bg-line" stroke="#ffffff" stroke-width="1px" d="M20 40 L1100 40 L1130 900" fill="none" />
						</svg>
					</div>
					<div class="thumbnails-projects-container">
						<div id="projekty-btns-container">
							<h3 id="team-section-projekty-header">PROJEKTY</h3>
							<div class="projects-buttons">
								<button id="team-devhouse" class="project-btn">DevHouse</button>
								<button id="team-startup" class="project-btn">StartUp</button>
								<button id="team-lead" class="project-btn">LEAD</button>
								<button id="team-thinkit" class="project-btn">ThinkIT</button>
								<button id="team-bootcamp" class="project-btn">BootCamp</button>
							</div>
						</div>
						<div class="justify-content-start members-thumbnails-container">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- TEAM SECTION END-->


	</div>
	<div class="section">




		<!-- REFERENCES SECTION START-->

		<section class="container d-flex justify-content-center align-items-center section__reference">

			<div class="col-5">

				<div class="section__reference__box-left d-flex">

					<!-- CAROUSEL START -->

					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">

							<div class="carousel-item active">

								<img src="./assets/images/lukasz.jpg" alt="Łukasz Foretek">

								<p>
									<span>Program Menadżerski LEAD organizowany przez SKN Konsultingu IT na</span>
									<span>Politechnice Warszawskiej to bardzo cenna inicjatywa pozwalająca</span>
									<span>na połączenie świata technologii, biznesu i nauki.</span>
									<span>Uczestnicy i organizatorzy reprezentują bardzo wysoki poziom</span>
									<span>zaangażowania, organizacji oraz innowacji w zakresie poszerzania</span>
									<span>oferty edukacyjnej na uczelni o umiejętności niezbędne do aktywnego</span>
									<span>rozpoczęcia swojej profesjonalnej kariery w branży IT.</span>
								</p>

								<p>
									<span>Łukasz Foretek</span>
									<span>Senior IT Manager</span>
									<span>Procter and Gamble</span>
								</p>

								<img src="./assets/images/pg-small.png" alt="Małe logo PG">

							</div>

							<div class="carousel-item">

								<img src="./assets/images/tomek.jpg" alt="Tomasz Kowalczyk">

								<p>
									<span>SKN Konsultingu IT zorganizowało dla Britenet rekrutację stażystów.</span>
									<span>W ramach współpracy Koło przestawiło kompleksowy plan, a następnie</span>
									<span>przeprowdziło akcję marketingową i zaproponowało program oraz</span>
									<span>kryteria oceny kandydatów. Całość została przeprowadzona szybko</span>
									<span>i sprawnie. Dzięki pomocy i zaangażowaniu Koła w cały proces</span>
									<span>rekrutacyjny udało nam się zatrudnić 3 stażystów, którzy pracują u nas do</span>
									<span>dzisiaj jako analitycy i kierownicy projektów."</span>
								</p>

								<p>
									<span>Tomasz Kowalczyk</span>
									<span>Head of PMO</span>
									<span>Britenet</span>
								</p>

								<img src="./assets/images/britenet-small.png" alt="Małe logo Britenes">

							</div>

							<div class="carousel-item">

								<img src="./assets/images/cyryl.jpg" alt="Cyryl Kocięcki">

								<p>
									<span>SKN Konsultingu IT jako organizator programu Lead in IT wykazało się</span>
									<span>pełnym profesjonalizmem i odpowiedzialnością. Na pochwałę zasługuje</span>
									<span>współpraca pomiędzy naszą firmą a członkami koła, którzy wykazywali się</span>
									<span>zaangażowaną postawą, chęcią do działania i zorientowaniem na cele,</span>
									<span>które wcześniej wspólnie określiliśmy. Jesteśmy bardzo zadowoleni</span>
									<span>z możliwości współtworzenia tego programu i z niecierpliwością czekamy</span>
									<span>na kolejne wspólne inicjatywy</span>
								</p>

								<p>
									<span>Cyryl Kocięcki</span>
									<span>Consulting IT- Digital Transformation, Business Analyst</span>
									<span>Britenet</span>
								</p>

								<img src="./assets/images/microsoft-small.png" alt="Małe logo Microsoft">

							</div>

						</div>

					</div>

					<!-- CAROUSEL END -->

				</div>

			</div>

			<div class="col-7">

				<div class="section__reference__box-right d-flex">

					<svg class="svg-3" width="600" height="500">

						<path class="path" d="M0,498 L430,499 530,385 530,20 160,20 0,150" style="stroke-width: 2; stroke: #ffffff; fill: none; "
						/>

					</svg>

					<!-- CAROUSEL START-->

					<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">

							<div class="carousel-item active">

								<img src="./assets/images/student.png" alt="Student reference of LEAD prorgam">

								<p>
									<span>Z punktu widzenia uczestnika programu LEAD, to projekt wyjątkowy,</span>
									<span>w którym można się nauczyć umiejętności miękkich, biznesowych</span>
									<span>jak i technicznych realizując realne projekty, wspólnie z topowymi</span>
									<span>firmami. Wartość dodaną, tworzą też swietni uczestnicy jak i pełen</span>
									<span>profesjonalizm SKN Konsultingu IT. Serdecznie zachęcam do</span>
									<span>udziału w kolejnych edycjach.</span>
								</p>

								<p>
									<span>Kuba Czajkowski</span>
									<span>Uczestnik programu SkillTrade</span>
								</p>

							</div>

							<div class="carousel-item">

								<img src="./assets/images/zuza.jpg" alt="Student reference of LEAD prorgam">

								<p>
									<span>Uczestniczyłam w konferencji ThinkIT i polecam ją każdemu,</span>
									<span>kto poszukuje swojej ścieżki kariery w branży IT. SKN Konsultingu</span>
									<span>IT zadbało o odpowiedni dobór prelegentów i świetną</span>
									<span>organizację wydarzenia. Szczególnie podobało mi się </span>
									<span>zróżnicowanie przedstawianych stanowisk, dzięki czemu każdy,</span>
									<span>uczestnik mógł dowiedzieć się jaki kierunek jest dla niego odpowiedni.</span>
								</p>

								<p>
									<span>Zuzanna Walkiewicz</span>
									<span>Uczestniczka konferencji ThinkIT</span>
								</p>

							</div>

							<div class="carousel-item">

								<img src="./assets/images/piotr.jpg" alt="Student reference of LEAD prorgam">

								<p>
									<span>W rozwoju osobistym szczególne istotne jest dla mnie jednoczesne</span>
									<span>rozwijanie umiejętności miękkich, jak również technicznych.</span>
									<span>Program LEAD in IT zapewnił mi to w stu procentach!</span>
									<span>Czuję, że owocnie spędziłem czas, słuchając wartościowych prelekcji,</span>
									<span>oraz realizując realne projekty, co pozwoliło mi spojrzeć</span>
									<span>na problemy z praktycznego punktu widzenia.</span>
								</p>

								<p>
									<span>Piotr Filarski</span>
									<span>Uczestnik programu SkillTrade</span>
								</p>

							</div>

						</div>

					</div>

					<!-- CAROUSEL END -->

				</div>

			</div>

		</section>

		<!-- REFERENCES SECTION END -->


	</div>
	<div class="section">
		<!-- CONTACT SECTION START -->

		<section class="container d-flex justify-content-center align-items-center section__contact">

			<div class="section__contact__text col flex-column d-flex align-items-center">

				<svg class="svg-4" width="1000" height="570">

					<path class="path" d="M0,560 L600,500 755,375 765,0" style="stroke-width: 3; stroke: #ffffff; fill: none; " />

				</svg>

				<p>
					<span>Już dziś masz szansę dołączyć do jednego z najbardziej</span>
					<span>aktywnych kół naukowych!</span>
					<span>Jesteśmy grupą ambitnych ludzi, którzy nie tylko mają wiele</span>
					<span>świetnych pomysłów, ale przede wszystkim z konsekwencją</span>
					<span>wcielają je w życie,</span>
					<span>It's not about great ideas, it's about making ideas happen!</span>
					<span>To właśnie tym się kierujemy, łącząc obszar IT z biznesem.</span>
					<span>Dołącz do nas, zdobądź wartościowe umiejętności i bądź</span>
					<span>atrakcyjnym kandydatem dla najbardziej prestiżowych firm.</span>
					<span>Już teraz wypełnij krótki formularz, spotkaj się z nami</span>
					<span>i razem zacznijmy kształtować Twoją przyszłość.</span>
				</p>


				<button id="click3" data-toggle="modal" data-target="#exampleModalCenter" name="submit" type="submit">Rekrutacja</button>

			</div>

			<div class="col">

				<div class="section__box d-flex">

					<img src="./assets/images/cezary.png" alt="Zdjęcie sylwetki opiekuna partnerstwa" />

					<div class="section__box__text">

						<h4>Opiekun partnerstwa</h4>

						<p>
							<span>Cezary Zajkowski</span>
							<span>e-mail: cezary.zajkowski@skn.pl</span>
							<span>nr. tel: 235 645 334</span>
						</p>

					</div>

				</div>

				<div class="section__form">

					<h4>Skontaktuj się z nami:</h4>

					<h5>Kim jesteś?</h5>

					<button id="private-button" name="submit" type="submit">Osoba prywatna</button>
					<button id="company-button" name="submit" type="submit">Przedstawiciel firmy</button>

					<!-- CONTACT FORM START -->

					<form id="form-object"class="form d-flex form-modal" action="<?php echo base_url() ?>index.php/contact/postEmail" method="post">

						<fieldset id="form-contact" class="form__items-left">

							<div class="form-item">
								<label for="imie">Imie</label>
								<input id="formName" type="text" name="formName" placeholder="Imię" required class="validationField" />
							</div>

							<div class="form-item">
								<label for="surname">Nazwisko</label>
								<input id="formSurname" type="text" name="formSurname" placeholder="Nazwisko" required class="validationField" />

							</div>

							<div class="form-item">
								<label for="scholl">Uczelnia</label>
								<input id="formSchool" type="text" name="formSchool" placeholder="Uczelnia" required class="validationField" />

							</div>

							<div class="form-item">
								<label for="department">Wydział</label>
								<input id="formDepartment" type="text" name="formDepartment" placeholder="Wydział" required class="validationField" />

							</div>

							<div class="form-item">
								<label for="formEmail">E-mail</label>
								<input id="email" type="email" name="formEmail" placeholder="E-mail" required class="validationField" />

							</div>

						</fieldset>

						<fieldset id="form-content" class="form__items-right">

							<div class="form-item">

								<textarea id="formMessage" name="formMessage" placeholder="Treść wiadomości" class="textarea validateObjectTextArea"></textarea>

							</div>

							<div class="form-item">

								<input class="form-submit form-submit--modal form-item--submit" type="submit" value="Wyślij"
								/>

							</div>

						</fieldset>

					</form>

					<!-- CONTACT FORM END -->

				</div>

			</div>

		</section>

		<!-- CONTACT SECTION END -->

	</div>
</div>

<!-- RECRUITMENT Modal START -->

<div class="modal fade modal-first" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<h5 class="modal-title" id="exampleModalLongTitle">Formularz rekrutacyjny</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">

					<span aria-hidden="true">&times;</span>

				</button>

			</div>

			<div class="modal-body">

				<!-- RECRUITMENT FORM START -->

				<?php
			  echo validation_errors();
			   ?>
			  <?php echo form_open('index.php/pages/create'); ?>
				<form class="form-recruitment d-flex" action="index.php/pages/create">
					<fieldset class="form-recruitment __items d-flex flex-column">
						<div class="form-item d-flex flex-column">
							<label for="formNameRecruitment">1. Podaj swoje imię i nazwisko:</label>
							<input id="formNameRecruitment" type="text" name="nazwisko" placeholder="Imię i nazwisko" required />
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formDepartmentRecruitment">2. Co studiujesz i na jakim wydziale:</label>
							<input id="formDepartmentRecruitment" type="text" name="wydzial" placeholder="Kierunek i wydział" required
							/>
						</div>

						<label>
							<?php echo form_radio("rok","I",set_radio("rok","I")) ?>
							I
						</label>
						<label>
							<?php echo form_radio("rok","II",set_radio("rok","II")) ?>
							II
						</label>
						<label>
							<?php echo form_radio("rok","III",set_radio("rok","III")) ?>
							III
						</label>
						<label>
							<?php echo form_radio("rok","IV",set_radio("rok","IV")) ?>
							IV
						</label>
						<label>
							<?php echo form_radio("rok","I rok MGR",set_radio("rok","I rok MGR")) ?>
							I rok MGR
						</label>
						<label>
							<?php echo form_radio("rok","II rok MGR",set_radio("rok","II rok MGR")) ?>
							II rok MGR
						</label>
						<label>
							<?php echo form_radio("rok","absolwent",set_radio("rok","absolwent")) ?>
							Jestem absolwentem
						</label>
						<!-- <div class="form-item d-flex flex-column">
							<label for="formYear">3. Na którym roku jesteś?</label>
							<div class="form-item__row">

								<input type="radio" required name="formYear" value="I" />
								<span>I</span>
								<input type="radio" required name="formYear" value="II" />
								<span>II</span>
								<input type="radio" required name="formYear" value="III" />
								<span>III</span>
								<input type="radio" required name="formYear" value="IV" />
								<span>IV</span>
							</div>
							<div class="form-item__row">
								<input type="radio" required name="formYear" value="I rok MGR" />
								<span>I rok MGR</span>
								<input type="radio" required name="formYear" value="II rok MGR" />
								<span>II rok MGR</span>
								<input type="radio" required name="formYear" value="absolwent" />
								<span>Jestem absolwentem</span>
							</div>
						</div> -->

						<div class="form-item d-flex flex-column">
							<label for="formEmailRecruitment">4. Twój adres e-mail to:</label>
							<input id="formEmailRecruitment" type="email" name="email" placeholder="E-mail" required />
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formPhoneRecruitment">5. Twój numer telefonu to:</label>
							<p>Chcemy mieć możliwość kontaktu z najlepszymi kandydatami. Twoje dane nie zostaną nikomu udostępnione.</p>
							<input id="formPhoneRecruitment" type="number" name="telefon" placeholder="Numer telefonu" required />
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formAboutRecruitment">6. Opowiedz nam coś ciekawego o sobie :)</label>
							<p>To jedyne otwarte pytanie. Zaskocz nas!</p>
							<textarea class="" id="formAboutRecruitment" name="opis" placeholder="Tekst" required></textarea>
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formDepartmentChoiceRecruitment">7. W jakim dziale chciałbyś/chciałabyś spróbować swoich sił:</label>
							<div class="form-item__row-checkbox-departmentChoice">
								<div class="checkbox">
									<label>
										<?php echo form_checkbox("dzial[]",'It',set_checkbox("dzial[]","IT")) ?>
										Partnerstwa i marketingu
									</label>
								</div>
								<div class="checkbox">
									<label>
										<?php echo form_checkbox("dzial[]",'devHouse',set_checkbox("dzial[]","Partnerstwa i marketingu")) ?>
										IT
									</label>
								</div>
								<div class="checkbox">
									<label>
										<?php echo form_checkbox("dzial[]",'Operacyjnym',set_checkbox("dzial[]","Operacyjnym")) ?>
										Operacyjnym
									</label>
								</div>
							</div>
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formProjectRecruitment">8. W tworzenie którego projektu chcesz się zaangażować:</label>
							<p>Wszelkie informacje o projektach znajdziesz na www.sknkonsultingu.it</p>
							<div class="form-item__row-checkbox">
								<div class="form-item__row-checkbox-projectRecruitment">
									<label>
										<?php echo form_checkbox("projekt[]",'ThinkIT',set_checkbox("projekt[]","ThinkIT")) ?>
										Konferencja ThinkIT
									</label>
									<label>
										<?php echo form_checkbox("projekt[]",'Lead',set_checkbox("projekt[]","Lead")) ?>
										Lead in IT
									</label>
									<label>
										<?php echo form_checkbox("projekt[]",'Start-up',set_checkbox("projekt[]","Start-up")) ?>
										Start-up Game
									</label>
								</div>
								<div class="form-item__row-checkbox-projectRecruitment">
									<label>
										<?php echo form_checkbox("projekt[]",'SkillTrade',set_checkbox("projekt[]","SkillTrade")) ?>
										SkillTrade
									</label>
									<label>
										<?php echo form_checkbox("projekt[]",'Devhouse',set_checkbox("projekt[]","Devhouse")) ?>
										DevHouse - Wsparcie na starcie
									</label>
								</div>
								<div class="form-item__row-checkbox-projectRecruitment">
									<label>
										<?php echo form_checkbox("projekt[]",'MyProject',set_checkbox("projekt[]","MyProject"))?>

										Mam swój pomysł na projekt!
									</label>
								</div>
							</div>
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formHoursRecruitment">9. Ile godzin tygodniowo możesz poświęcić na działalność:</label>
							<input id="formHoursRecruitment" type="number" name="godziny" placeholder="Ilość godzin" required />
						</div>
						<div class="form-item d-flex flex-column">
							<label for="formPubRecruitment">10. Jaki jest Twój ulubiony pub/bar w Warszawie? :)</label>
							<input id="formPubRecruitment" type="text" name="pub" placeholder="Pub" required />
						</div>
						<div class="form-item">
							<div class="modal-footer d-flex justify-content-center align-items-center">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
								<button type="submit" class="btn btn-primary">Wyślij</button>
							</div>
						</div>
					</fieldset>
				</form>

				<!-- RECRUITMENT FORM END -->

			</div>

		</div>

	</div>

</div>

<!-- RECRUITMENT Model END -->

<!-- CONTACT MODAL START -->
