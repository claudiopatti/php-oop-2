<?php


class product {

    protected $category;

    function __construct($category) {
        $this->setCategory($category);
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory() {

        if (is_string($category) 
            &&
            (
                $category == 'Cani'
                ||
                $category == 'Gatti'
            )
            ) {
                $this->category = $category;
        }
        else {
            $this->category = null;

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