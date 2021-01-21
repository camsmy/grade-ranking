<?php
$grade = 75;
$name = "JaeHyung Park";
switch ($grade) {
    case ($grade >= 93 && $grade <=100):
        $rank = "A";
    break;
    case  ($grade >= 90 && $grade<=92);
         $rank = "A-";
    break;
    case ($grade >= 87 && $grade<=89):
        $rank = "B+";
    break;
    case ($grade >= 83 && $grade<=86);
    $rank = "B";
    break;
    case  ($grade >= 80 && $grade<=82);
    $rank = "B-";
    break;
    case ($grade >= 77 && $grade<=79);
    $rank = "C+";
    break;
    case ($grade >= 73 && $grade<=76);
    $rank = "C";
    break;
    case  ($grade >= 70 && $grade<=72);
    $rank = "C-";
    break;
    case ($grade >= 67 && $grade<=69);
    $rank = "D+";
    break;
    case ($grade >= 63 && $grade <=66);
    $rank = "D";
    break;
    case  ($grade >= 60 && $grade<=62);
    $rank = "D-";
    break;
    case ($grade < 60);
    $rank = "F";
    break;
    case ($grade >= 101);
    $rank = "Grades cannot exceed 100";
    break;
    default:
    $rank = "Your grade is invalid!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glass Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/style.css" />
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <main>
        <section class="glass">
            <div class="container">
                <div class="row column justify-content p-2">
                    <?php
                    echo "<h1>Grade Ranking</h1>";
                    ?>
                </div>
                <div class="row m-2">
                    <div class="col-lg-6 p-2">
                        <div class="row square3 d-flex align-items-center justify-content">
                            <?php
                            echo "<h2>Name: $name</h2>";
                        ?>
                        </div>
                        <div class="row m-1">
                            <div class="col-lg-6 square1 m-1 center">
                               <?php
                                echo "<h1>Rank</h1>";
                                echo "<br>";
                                echo "<h1>$rank</h1>";
                             ?>
                            </div>
                            <div class="col-lg-6 square2 m-1 center">
                            <?php
                                echo "<h1>Grade</h1>";
                                echo "<br>";
                                echo "<h1>$grade</h1>";
                             ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 id-photo d-flex align-items-center justify-content">
                        <img src="https://i.pinimg.com/originals/37/41/9e/37419ecf47a383ff740486a7eb7d977d.jpg"
                            alt="Id picture">
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>