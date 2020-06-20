<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>




<div class="panel-body p-0">
    <div class="table-responsive">
        <table class="table table-sm table-borderless table-vertical-align">
            <thead>
            <tr class="border-bottom bg-lighter">
                <th style="min-width: 150px;">Название</th>
                <th>Описание идеи</th>
                <th>Голосовать</th>
            </tr>
            </thead>
            <tbody>
            <?foreach ($arResult as $item): ?>
                <tr>

                    <td><?=$item['NAME']?></td>
                    <td><?=$item['PROPERTY_15_VALUE']['TEXT']?>
                    </td>

                    <td>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btn-success btn-sm" data-toggle="dropdown"><span>Нравится</span>
                            </button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Не нравится</a>

                            </div>
                        </div>
                    </td>
                </tr>


            <?endforeach;?>


            </tbody>
        </table>
    </div>
</div>