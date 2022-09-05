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

      $_1stMovie = new Movie('Django - Unchained', 'Western', 'Quentin Tarantino');
      $_2ndMovie = new Movie('Kill Bill vol.1', 'azione', 'Quentin Tarantino');
   ?>

   <h3>1st Movie</h3>
   <ul>
      <li>Title - <?php echo $_1stMovie->getTitle() ?></li>
      <li>Genre - <?php echo $_1stMovie->getGenre() ?></li>
      <li>Director - <?php echo $_1stMovie->getDirector() ?></li>
   </ul>

   <h3>2nd Movie</h3>
   <ul>
      <li>Title - <?php echo $_2ndMovie->getTitle() ?></li>
      <li>Genre - <?php echo $_2ndMovie->getGenre() ?></li>
      <li>Director - <?php echo $_2ndMovie->getDirector() ?></li>
   </ul>
</body>
</html>