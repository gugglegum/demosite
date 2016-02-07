<?php

namespace app\controllers;

use app\HttpException;

class PizzaController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $result = $this->db->query('SELECT * FROM `pizzas` ORDER BY `name` ASC');
        while (($item = $result->fetch_assoc()) !== null) {
            $this->view->subMenu[] = [
                'name' => $item['name'],
                'route' => ['pizza/item', 'id' => $item['id']],
            ];
        }
    }

    public function actionIndex()
    {
        $result = $this->db->query('SELECT * FROM `pizzas` ORDER BY `name` ASC');

        $items = [];
        while (($item = $result->fetch_assoc()) !== null) {
            $items[] = $item;
        }

        return $this->render('pizza/index', [
            'items' => $items,
        ]);
    }

    public function actionItem($params)
    {
        $result = $this->db->query('SELECT * FROM `pizzas` WHERE id = ' . $this->db->quote($params['id']));

        $pizza = $result->fetch_assoc();

        if ($pizza === null) {
            throw new HttpException(404);
        }

        return $this->render('pizza/item', [
            'pizza' => $pizza,
        ]);
    }
}
