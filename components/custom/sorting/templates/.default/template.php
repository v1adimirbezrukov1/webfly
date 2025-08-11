<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<div class="custom-sort">
    <span>Тип сортировки: <b><?= htmlspecialchars($arResult['SORT_TYPE']) ?></b></span>
    <br>
    <span>Направление: <b><?= strtoupper($arResult['SORT_ORDER']) ?></b></span>
    <br>
    <a href="<?= $arResult['SORT_LINK'] ?>">Сменить направление</a>
</div>