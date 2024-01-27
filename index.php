<?php

class Book
{
    public $title;
    public $price;
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function get_Title()
    {
        $str = "Назва книжки: {$this->title}  Ціна книжки:  {$this->price}";
        return $str;
    }
}
class Big_Book extends Book
{
    public $pages;
    public function __construct($title, $price, $pages)
    {
        // викликаємо метод-конструктор батьківського класу
        parent::__construct($title, $price);

        // ініціалізуємо властивість, визначену у підкласі
        $this->pages = $pages;
    }
    public function get_Title() {
		$str = parent::get_Title ();
		$str .= "\t  Сторінки: {$this->pages}";
		return $str;
	}
}

class Dictionary extends Book
{
    public $size;
    public function __construct($title, $price, $size)
    {
        // викликаємо метод-конструктор батьківського класу
        parent::__construct($title, $price);

        // ініціалізуємо властивість, визначену у підкласі
        $this->size = $size;
    }
    public function get_Title() {
		$str = parent::get_Title ();
		$str .= "\t  Розмір: {$this->size}";
		return $str;
	}
}

$big_book = new Big_Book("Book Title", 20, 300);
$dictionary = new Dictionary("Dictionary", 30, "10x8");

echo $big_book->title . "\t";
echo $big_book->price . "\t";
echo $big_book->pages . "\t";

echo $big_book->get_Title() . "\t";
echo "\n";

echo $dictionary->title . "\t";
echo $dictionary->price . "\t";
echo $dictionary->size . "\t";
echo $dictionary->get_Title() . "\t";