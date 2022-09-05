<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php 
      class Movie{
         private $title;
         private $genre;
         private $director;

         function __construct($_title, $_genre, $_director) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
         }

         public function getTitle() {
            return $this->title;
         }

         public function getGenre() {
            return $this->genre;
         }  

         public function getDirector() {
            return $this->director;
         }
      }
   ?>
</body>
</html>