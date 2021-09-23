<?php
$table = $_POST['table'];
$course = $_POST['course'];

$frontlink = "https://img.youtube.com/vi/";
$endLink = "/hqdefault.jpg";

$q = "SELECT * FROM `$table`";
$result = mysqli_query($conn, $q);

$i= 1;
while ($row = mysqli_fetch_assoc($result)) {
  
    $vid = $row['vid'];
    $img = $frontlink . $vid . $endLink;
    $topic = $row['topic'];
    $duration = $row['duration'];
    $creator = $row['author'];
    echo '

                    <div class="topic-card">
                        <form class="topic-card" action="lecture.php" method="post">
                            <input type="hidden" name="course" value="' . $course . '">
                            <input type="hidden" name="table" value="' . $table . '">
                            <input type="hidden" name="vid" value="' . $vid . '">
                            <button class="topic" type="submit">
                                <div class="topic-details-section">
                                    <div class="topic-img"
                                        style="background-image:url(' . $img . '); ">
                                        <p class="time">' . $duration . '</p>
                                    </div>
                                    <div class="topic-details">
                                        <h3 class="topic-detail ">' . $course . '</h3>
                                        <h2 class="topic-detail ">Topic : ' . $topic . '</h2>
                                        <h3 class="topic-detail d-none  ">Duration : ' . $duration . '</h3>
                                        <h3 class="topic-detail ">Channel : ' . $creator . '</h3>
                                    </div>
                                </div>
                            </button>
                        </form>
                    </div>


                    ';

                    //  if ($i%10 == 0) {
                    //     include 'ad4.php';
                    // }
                    // $i++;
                    
                 
}
?>
