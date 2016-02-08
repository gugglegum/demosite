<?php

namespace app\controllers;

use app\HttpException;

class PizzaController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();

        $result = $this->db->query('SELECT * FROM `topics` ORDER BY `id` ASC');
        while (($item = $result->fetch_assoc()) !== null) {
            $this->view->subMenu[] = [
                'name' => $item['name'],
                'route' => ['pizza/topic', 'topic' => $item['urlPart']],
            ];
        }
    }

    public function actionIndex()
    {
        $result = $this->db->query('SELECT `p`.*, `t`.`urlPart` `topicUrlPart` FROM `pizzas` `p`
            INNER JOIN `topics` `t` ON `t`.`id` = `p`.`topicId`
            ORDER BY `p`.`name` ASC');

        $items = [];
        while (($item = $result->fetch_assoc()) !== null) {
            $items[] = $item;
        }

        return $this->render('pizza/index', [
            'items' => $items,
            'title' => 'Все пиццы',
        ]);
    }

    public function actionTopic(array $params)
    {
        $result = $this->db->query('SELECT * FROM `topics` WHERE `urlPart` = ' . $this->db->quote($params['topic']));
        if (! $topic = $result->fetch_assoc()) {
            throw new HttpException(404);
        }

        $result = $this->db->query('SELECT `p`.*, `t`.`urlPart` `topicUrlPart` FROM `pizzas` `p`
            INNER JOIN `topics` `t` ON `t`.`id` = `p`.`topicId`
            WHERE `t`.`urlPart` = ' . $this->db->quote($params['topic']) . '
            ORDER BY `p`.`name` ASC');

        $items = [];
        while (($item = $result->fetch_assoc()) !== null) {
            $items[] = $item;
        }

        return $this->render('pizza/index', [
            'items' => $items,
            'title' => $topic['title'],
        ]);
    }

    public function actionItem($params)
    {
        $result = $this->db->query('SELECT * FROM `topics` WHERE `urlPart` = ' . $this->db->quote($params['topic']));
        if (! $topic = $result->fetch_assoc()) {
            throw new HttpException(404);
        }

        $result = $this->db->query('SELECT * FROM `pizzas` WHERE id = ' . $this->db->quote($params['id']));
        if (! $pizza = $result->fetch_assoc()) {
            throw new HttpException(404);
        }

        return $this->render('pizza/item', [
            'pizza' => $pizza,
        ]);
    }
}
