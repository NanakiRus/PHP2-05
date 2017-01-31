<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\Article::findOneById(1);

$article->title = 'Тестовый заголовок';

$article->update();