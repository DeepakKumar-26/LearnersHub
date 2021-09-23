<?php
        $table = $_POST['table'];
        $course = $_POST['course'];
        $frontlink = "https://img.youtube.com/vi/";
        $endLink = "/hqdefault.jpg";

        $q = "SELECT * FROM `$table`";
        $result = mysqli_query($conn, $q);
$i=1;
        while ($row = mysqli_fetch_assoc($result)) {
            $vid = $row['vid'];
            $img = $frontlink . $vid . $endLink;
            $topic = $row['topic'];
            $duration = $row['duration'];
            $creator = $row['author'];

            echo '
                    <div class="topic-card">
                        <form class="topic-card" action="lecture.php" method="post">
                            <input type="hidden" name="table" value="' . $table . '">
                            <input type="hidden" name="course" value="' . $course . '">
                            <input type="hidden" name="vid" value="' . $vid . '">
                            <button class="topic" type="submit">
                                <h3 class="topic-detail p5"> ' . $topic . ' </h3>
                            </button>
                        </form>
                    </div>
                    ';

                    // if ($i%10 == 0) {
                    //     include 'ad4.php';
                    // }
                    // $i++;
        }

?>