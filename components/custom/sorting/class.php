<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

class SortComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $sortType = $this->arParams['SORT_TYPE'];

        if (!empty($_GET['sort_order']) && in_array(strtolower($_GET['sort_order']), ['asc', 'desc'])) {
            $sortOrder = strtolower($_GET['sort_order']);
        } else {
            $sortOrder = 'asc';
        }

        $toggleOrder = ($sortOrder === 'asc') ? 'desc' : 'asc';

        $this->arResult = [
            'SORT_TYPE' => $sortType,
            'SORT_ORDER' => $sortOrder,
            'TOGGLE_ORDER' => $toggleOrder,
            'SORT_LINK' => $this->getSortLink($toggleOrder)
        ];

        $this->includeComponentTemplate();
    }

    private function getSortLink($order)
    {
        $params = $_GET;
        $params['sort_order'] = $order;
        return '?' . http_build_query($params);
    }
}
