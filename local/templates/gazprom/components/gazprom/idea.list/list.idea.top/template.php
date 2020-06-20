<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>





<div class="panel admin-panel">
    <div class="panel-header d-flex align-items-center">
        <div class="h3 panel-title flex-grow-1">Топ идей</div>

    </div>
    <div class="panel-body p-0">

        <ul class="list-unstyled list-divided">
            <?foreach ($arResult as $item): ?>

                <li class="px-3 py-2 progress-wrap-1">
                    <div class="progress-wrap-content"><span class="fa-circle pr-2 text-primary"></span><a class="text-light" href="/ideas/"><?=$item['NAME']?></a></div>
                    <div class="progress">
                        <div class="progress-bar progress-200" role="progressbar" style="width: <?=$item['PROPERTY_16_VALUE']['VALUE']?>%" aria-valuenow="<?=$item['PROPERTY_16_VALUE']['VALUE']?>" aria-valuemin="0" aria-valuemax="100"><?=$item['PROPERTY_16_VALUE']['VALUE']?></div>
                    </div>
                </li>

                <?endforeach;?>


        </ul>
    </div>
</div>