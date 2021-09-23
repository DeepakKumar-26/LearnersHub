<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
    <title>Sample Page</title>
</head>

<body>
    <div class="container">
        <?php include 'navbar.php' ?>
        <?php include 'banner_top.php' ?>
        <div class="LMR-container rounded">
            <div class="inner-container rounded">
                <div class="left d-none">
                    <div class="sticky-top">
                        <p class="sticky-text">Left Banner</p>
                        <div class="floating-ad">
                            <?php include 'ad_topic_left.php'; ?>
                            <?php include 'ad.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="middle">
                    <div class="topics-section sticky-top">
                        <p class="sticky-text">Topics</p>

                        <?php include 'page-content.php' ?>
                    </div>
                </div>
                <div class="right d-none ">
                    <div class="sticky-top">
                        <p class="sticky-text">Right Banner</p>
                        <div class="floating-ad">
                            <?php include 'ad_topic_right.php'; ?>
                            <?php include 'ad.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
        <?php include 'floating_home_btn.php'; ?>
    </div>


</body>

</html>