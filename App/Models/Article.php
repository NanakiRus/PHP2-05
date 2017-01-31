<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @package App\Models
 * @property string $title
 * @property string $text
 * @property int $author_id
 */
class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $text;
    public $author_id;

    public function __get($name)
    {
        if ('author' === $name) {
            if (!empty($this->author_id)) {
                return Author::findOneById($this->author_id);
            } else {
                return false;
            }
        }
    }

}