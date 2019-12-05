<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="footer">
						<p>&#169 2013 Feedlive . All Rights Reserved | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
					</div>
					<div class="clear"> </div>
					
			</div>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cats", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
		"IBLOCK_ID" => "3",	// Инфоблок
		"IBLOCK_TYPE" => "blog",	// Тип инфоблока
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"VIEW_MODE" => "TEXT",	// Вид списка подразделов
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>	
		<!--	<div class="right-sidebar">
				<div class="search-bar">
					<form>
			    		<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" />
			    		<input type="submit" value="" />
			    	</form>
				</div>
				<div class="clear"> </div>
				<div class="featured-Videos">
					<h3>Featured Videos</h3>
					<a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="videos" /></a>
				</div>
				<div class="popular-post">
					<h3>popular-posts</h3>
					<div class="post-grid">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="post1">
						<p>Lorem ipsum dolor sit ametconsectetur dolor,<a href="#">...</p>
						<div class="clear"> </div>
					</div>
					<div class="post-grid">
						<img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="post1">
						<p>Lorem ipsum dolor sit ametconsectetur dolor,<a href="#">...</p>
						<div class="clear"> </div>
					</div>
					<div class="view-all">
						<a href="#">ViewAll</a>
					</div>
				</div>
				<div class="clear"> </div>
				<div class="featured-Videos">
					<h3>Recent Videos</h3>
					<a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="videos" /></a>
				</div>
				<div class="fallowers">
					<h3>Followers</h3>
					<ul>
						<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="name"></a></li>
						<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="name"></a></li>
						<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="name"></a></li>
						<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="name"></a></li>
						<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="name"></a></li>
						<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/videos.jpg" title="name"></a></li>
					</ul>
				</div>
			</div>-->
			<!---end-sidebar---->
		</div>
		<!---end-wrap---->
	</body>
</html>
