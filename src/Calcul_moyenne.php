<html> 
    <head>
        <title>Calcule de la moyenne du BTS</title>
    </head>
    <body>
        <?php
            $notes = [
                ['mat' => 'progammation', 'coeff' => 2 , 'note' => 12],
                ['mat' => 'fondamentaux', 'coeff' => 2 , 'note' => 9],
                ['mat' => 'base de données', 'coeff' => 1 , 'note' => 11,75],
                ['mat' => 'système réseau', 'coeff' => 2 , 'note' => 11]
            ];

            foreach($notes as $key => $note) {
                echo "Matière : " . $note['mat'] . " - Coefficient : " . $note['coeff'] . " - Note : " . $note['note'] . "<br>";
            }
        ?>
    </body>
</html>