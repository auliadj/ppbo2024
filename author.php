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