<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <ul class="rd-navbar-nav">
        <li class="rd-navbar-nav-item">
            <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Меню</span></div>
        </li>
        <li class="rd-navbar-nav-item active"><a class="rd-navbar-link" href="/"><span class="rd-navbar-icon fa-home"></span><span class="rd-navbar-link-text">Главная</span></a>
        </li>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
        <li class="rd-navbar-nav-item"><a class="rd-navbar-link <?if ($arItem["SELECTED"]):?>opened<?endif?>" href="<?=$arItem["LINK"]?>"><span class="rd-navbar-icon fa-fire"></span><span class="rd-navbar-link-text"><?=$arItem["TEXT"]?></span></a>
            <ul class="rd-navbar-dropdown">
		<?else:?>
            <li class="rd-navbar-nav-item"><a class="rd-navbar-link <?if ($arItem["SELECTED"]):?>opened<?endif?>" href="<?=$arItem["LINK"]?>"><span class="rd-navbar-icon fa-fire"></span><span class="rd-navbar-link-text"><?=$arItem["TEXT"]?></span></a>
                <ul class="rd-navbar-dropdown">
		<?endif?>
	<?else:?>
		<?if ($arItem["PERMISSION"] > "D"):?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" href="<?=$arItem["LINK"]?>"><span class="rd-navbar-icon fa-cogs"></span><span class="rd-navbar-link-text"><?=$arItem["TEXT"]?></span></a>
                </li>
        	<?else:?>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" href="<?=$arItem["LINK"]?>"><span class="rd-navbar-icon fa-cogs"></span><span class="rd-navbar-link-text"><?=$arItem["TEXT"]?></span></a>
                </li>
            <?endif?>
		<?else:?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
		<?endif?>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
<?endif?>
</ul>