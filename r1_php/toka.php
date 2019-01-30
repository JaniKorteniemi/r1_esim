<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Luoka ja Olio</title>
  </head>
  <body>
    <h1>Luoka ja olio</h1>
    <?php
      class CatClass{
        private $name;
        public function SetNameFunction($value){
          $this->name=$value;
        }
        public function GetNameFunction(){
          return $this->name;
        }
      }
     ?>
     <p>
       Edellä luotiin luokka nimeltä CatClass. Luodaan olio
       nimeltä myCatObject.<br>
       <?php
        $myCatObject = new CatClass();
        $myCatObject->SetNameFunction('Karvinen');
        echo 'Kissan nimi on '.$myCatObject->GetNameFunction();
        ?>
     </p>
  </body>
</html>
