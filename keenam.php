<?php
require_once 'author.php';
require_once 'book.php';
require_once 'publisher.php';
echo "Ini file keenam.php\n";

$author = new Author();
$author->name = 'Tereliye';
$author->description = 'Penulis yang sudah memiliki banyak buku';

$book = new Book();
$book->ISBN = 1234567890;
$book->title = 'Bumi';
$book->description = 'Persahabatan dan petualangan';
$book->category = 'Fiksi';
$book->language = 'Indonesia';
$book->numberOfPages = 400;
$book->author = $author->name;
$book->publisher = 'Gramedia';

$publisher = new Publisher();
$publisher->name = 'Gramedia';
$publisher->address = 'Mega Mall Ayani';
$publisher->setPhone('123-456-7890');

print_r($book->showAll());
