<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <title>Document</title>
</head>
<body>
<div class="table">
 <table class="table">
    <thead>
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
            <th>Grade</th>
            <th>Credit</th>
        </tr>
    </thead>
    <tbody>
        <?php 
           
            $subid = array();
            $subname = array();
            $grade = array();
            $credit = array();
            $file = fopen($_POST['upload'],"r");
            $i = 0;
            while(($row = fgetcsv($file,0,","))!== FALSE) {
                if($i !== 0){
                    $subid[] = $row[0];
                    $subname[] = $row[1];
                    $grade[] = $row[2];
                    $credit[] = $row[3];
                }
                $i++;

            }
            for($j = 0 ; $j < $i-1 ; $j++){
                echo"<tr>";
                echo"<th> $subid[$j]";
                echo"<th> $subname[$j]";
                echo"<th> $grade[$j]";
                echo"<th> $credit[$j]";
                echo "</th></tr>";
            }
            fclose($file);
            ?>
        </tbody>
    </table>
</div>
</body>
</html>