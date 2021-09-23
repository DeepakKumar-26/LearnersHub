<!DOCTYPE html>
<html lang="en">

<head>
    <title>LECTURE : You can view your course video here.</title>
    <?php include 'header.php'; ?>
</head>

<body >
    <div class="container">
        <?php include 'navbar.php'; ?>

        <div class="LMR-lecture rounded">
            <?php
            if (isset($_POST['table'])) {
                include 'inner-lecture.php';
            } else {
                include 'error-lecture.php';
            }
            ?>
        </div>

        <?php include 'footer.php'; ?>
        <?php include 'floating_home_btn.php'; ?>
    </div>
</body>

</html>