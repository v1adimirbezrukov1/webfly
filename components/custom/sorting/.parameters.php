<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    "PARAMETERS" => [
        "SORT_TYPE" => [
            "PARENT" => "BASE",
            "NAME" => "Тип сортировки",
            "TYPE" => "LIST",
            "VALUES" => [
                "name" => "По названию",
                "price" => "По цене",
                "date" => "По дате"
            ],
            "DEFAULT" => "name",
        ],
    ],
];
