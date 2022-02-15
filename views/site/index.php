<?php

use modules\citation\widgets\RandomCitation;

$this->title = 'ИЯТШ';
?>

<div class="site-index">

    <?= RandomCitation::widget([]); ?>
    <br><hr/>
    <!-- Верхнее меню -->
    <!--?= MenuClassic::widget(['tipMenuId' => TipMenu::TIP_MENU_TOP]); ?--> 

	<div class = "top-section1">
			<div class = "search" >
				<div class = "electron_resource active_button" id = "tab1"> Поиск по электронным ресурсам </div>
				<div class = "electron_resource" id = "tab2"> Поиск по сайту </div>
				
				<div id = "block1">
					<form action="" method="post">
					  <input type = "search" placeholder="Введите название, автора, ключевые слова" class="input"/>
					  <input type = "submit" value="Найти" class = "submit"/>
					</form>
					
					<p> Новости </p>
					
					<ul>
						<li> 
						<span class = "news"> Важно: из перечня РИНЦ исключено 43 журнала</span>
						<span class = "date"> 16.04.2019 </span>
						</li>
						
						<li> 
						<span class = "news"> Важно: из перечня РИНЦ исключено 43 журнала</span>
						<span class = "date"> 16.04.2019 </span>
						</li>
						
						<li> 
						<span class = "news"> Важно: из перечня РИНЦ исключено 43 журнала</span>
						<span class = "date"> 16.04.2019 </span>
						</li>
						
					</ul>
				</div>
				<div id = "block2">
					<form action="" method="post">
					  <input type = "search" placeholder="Введите" class="input"/>
					  <input type = "submit" value="Найти" class = "submit"/>
					</form>
				</div>
			</div>
			

		</div>
		
		<div class = "menu">
			<div class = "columns">
				<div class = "column">
					<dl>
						<dt> О библиотеке  </dt>
						<dd> Миссия НТБ </dd>
						<dd> История </dd>
						<dd> Библиотека сегодня</dd>
						<dd> Структура </dd>
						<dd> Телефонный справочник </dd>
						<dd> Наши партнеры </dd>
					</dl>
				</div>
				
				<div class = " column">
					<dl>
						<dt> Авторам </dt>
						<dd> Scopus </dd>
						<dd> Web of Science (WOS) </dd>
						<dd> Журналы ВАК </dd>
						<dd> Перечни журналов в индексах цитирования </dd>
						<dd> Регистрация и размещение публикаций в РИНЦ </dd>
					</dl>
				</div>
				
				<div class = " column">
					<dl>
						<dt> Читателям  </dt>
						<dd> Как стать читателем </dd>
						<dd> Расписание работы </dd>
					</dl>
				</div>
				
				<div class = " column">
					<dl>
						<dt> Ресурсы  </dt>
						<dd> Электронный каталог </dd>
						<dd> Труды ученых ТПУ </dd>
						<dd> Электронная библиотека</dd>
						<dd> Российские электронные журналы </dd>
						<dd> Электронные-библиотечные системы (ЭБС) </dd>
					</dl>
				</div>
				
				<div class = " column"> <dl>
						<dt> Услуги  </dt>
						<dd> Библиотекарь-эксперт</dd>
						<dd> Комплектование фонда </dd>
						<dd> Узнать УДК и ББК </dd>
						<dd> Доставка документов </dd>
						<dd> Компьютеры для читателей </dd>
						<dd> WiFi </dd>
						<dd> Платные услуги </dd>
					</dl> </div>
					
				<div class = " column">
					<dl>
						<dt> Базы данных  </dt>
						<dd> Удаленный доступ </dd>
						<dd> Полнотекстовые и реферативные базы данных </dd>	
					</dl>
				</div>
			</div>		
		</div>
</div>



