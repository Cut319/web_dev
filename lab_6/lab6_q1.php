<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table, td{
            border: 1px solid black;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td{
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php
        $name = "Wong You Min";
        $matricNo = "AI220257";
        $course = "BIT21503";
        $yearStudy = 2;
        $address = "No 31, Jalan Keembong 42, Taman Johor Jaya, 81100, Johor Bahru. Johor";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo "$matricNo" ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course" ?></td>
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$yearStudy" ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address" ?></td>
        </tr>
    </table>
</body>

</html>