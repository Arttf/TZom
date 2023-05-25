<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск по Индексу");
?>
    <!--region search.title -->
    			<?if ($curPage != SITE_DIR."index.php"):?>
    				<div class="row mb-4">
    					<div class="col">
    						<?$APPLICATION->IncludeComponent(
							"search.title",
							"bootstrap_v4",
							array(
								"NUM_CATEGORIES" => "1",
								"TOP_COUNT" => "5",
								"CHECK_DATES" => "N",
								"SHOW_OTHERS" => "N",
								"PAGE" => SITE_DIR."catalog/",
								"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS") ,
								"CATEGORY_0" => array(
									0 => "iblock_catalog",
								),
								"CATEGORY_0_iblock_catalog" => array(
									0 => "all",
								),
								"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
								"SHOW_INPUT" => "Y",
								"INPUT_ID" => "title-search-input",
								"CONTAINER_ID" => "search",
								"PRICE_CODE" => array(
									0 => "BASE",
								),
								"SHOW_PREVIEW" => "Y",
								"PREVIEW_WIDTH" => "75",
								"PREVIEW_HEIGHT" => "75",
								"CONVERT_CURRENCY" => "Y"
							),
							false
						);?>
    					</div>
    				</div>
    			<?endif?>
    <!--endregion-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>