<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Блог");?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"lists_posts", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "blog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "modern",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "AUTHOR",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "lists_posts"
	),
	false
);?>




<!--	<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . </h3>
				<ul>
				<li><span>Post By Admin on sunday,March 05,2013 with</span></li>
				<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href="singlepage.html"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/1.jpg" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium perspiciatis unde omnis iste natus error sit voluptatem accusantiumdoloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<a href="#">...</a></p>
				<div class="clear"> </div>
			</div>
			<div class="comments">
			<ul>
				<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/views.png" title="view" /></a></li>
				<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/likes.png" title="likes" /></a></li>
				<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/link.png" title="link" /></a></li>
				<li><a class="readmore" href="singlepage.html">ReadMore</a></li>
			</ul>
			</div>
		</div>
		<div class="grid box">
			<div class="grid-header">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . </h3>
				<ul>
					<li><span>Post By Admin on sunday,March 05,2013 with</span></li>
					<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href="singlepage.html"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/2.jpg" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium perspiciatis unde omnis iste natus error sit voluptatem accusantiumdoloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<a href="#">...</a></p>
				<div class="clear"> </div>
			</div>
			<div class="comments">
				<ul>
					<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/views.png" title="view" /></a></li>
					<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/likes.png" title="likes" /></a></li>
					<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/link.png" title="link" /></a></li>
					<li><a class="readmore" href="singlepage.html">ReadMore</a></li>
				</ul>
			</div>
		</div>
		<div class="grid box">
			<div class="grid-header">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . </h3>
				<ul>
					<li><span>Post By Admin on sunday,March 05,2013 with</span></li>
					<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href="singlepage.html"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/3.jpg" /></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium perspiciatis unde omnis iste natus error sit voluptatem accusantiumdoloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<a href="#">...</a></p>
				<div class="clear"> </div>
			</div>
			<div class="comments">
				<ul>
					<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/views.png" title="view" /></a></li>
					<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/likes.png" title="likes" /></a></li>
					<li><a href="#"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/link.png" title="link" /></a></li>
					<li><a class="readmore" href="singlepage.html">ReadMore</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
			<div class="clear"> </div>
	</div>
	<div class="clear"> 
	</div>
	<div class="content-pagenation">
						<li><a href="#">First</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>....</span></a></li>
						<li><a href="#">Last</a></li>
						<div class="clear"> </div>
	</div>
	<div class="clear"> 
	</div>-->
					
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>