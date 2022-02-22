<?php

use Bitrix\Main\Engine\Contract\Controllerable;

class OrderComments extends \CBitrixComponent implements Controllerable
{

    public function executeComponent() {
        $this->includeComponentTemplate();
    }

    public function configureActions()
    {
        return [
            'add' => [
                'prefilters' => [
                    new ActionFilter\Csrf(),
                    new ActionFilter\HttpMethod(['POST']),
                    new ActionFilter\Authentication(),
                ],
            ],
        ];
    }

    public function addAction($data)
    {

    }
}