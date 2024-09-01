<?php
class Author
{
    public string $name;
    public string $description;

    public function show($type): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }
}

class Book
{
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPages;
    public string $author;
    public string $publisher;

    public function showAll(): array
    {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPages' => $this->numberOfPages,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN): array
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return [];
        }
    }
}

class Publisher
{
    public string $name;
    public string $address;
    private string $phone;

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}

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
$publisher->address = '123 Main St';
$publisher->setPhone('123-456-7890');

echo "Author: " . $author->show('all') . "\n";
echo "Book: " . print_r($book->showAll(), true) . "\n";
echo "Publisher: " . $publisher->name . " - " . $publisher->address . " - " . $publisher->getPhone() . "\n";