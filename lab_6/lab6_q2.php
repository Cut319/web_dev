<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q2</title>

    <style>
        table, th, td{
            border: solid black;
        }
    </style>
</head>
<body>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]            
        ];   
    ?>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach($students as $stud): ?>
        <tr>
            <td><?php echo $stud['name']?></td>
            <td><?php echo $stud['program']?></td>
            <td><?php echo $stud['age']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>