<?php


class Product {


    public $title;
    public $price;
    public $description;
    public $img; 
    protected $category;
    protected $type;

    function __construct(string $title, float $price, string $description, string $img, string|null $category = null, string|null $type = null) {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->img = $img;
        $this->setCategory($category);
        $this->setType($type);

    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory() {

        $categories = [
            'Cani',
            'Gatti'
        ];

        if (is_string($category) 
            &&
            is_array($category, $categories)
            ) {
                $this->category = $category;
        }
        else {
            $this->category = null;

        }
    }

    public function getType() {
        return $this->type;
    }

    public function setType() {

        $types = [
            'Food',
            'Toy',
            'Petbed'
        ];

        if (is_string($type) 
            &&
            is_array($type, $types)
            ) {
                $this->type = $type;
        }
        else {
            $this->type = null;

        }
    }

}










?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
    </head>
    <body>

        <h1>
            ciao
        </h1>
        
    </body>
</html>