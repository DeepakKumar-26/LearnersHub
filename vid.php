<?php 
 include 'connection.php';
 $course = $_POST['course'];
 $vid = trim($_POST['vid']);

 $q = "SELECT * FROM `c++` WHERE `vid` = '$vid' ";
 $result = mysqli_query($conn, $q);
 $row = mysqli_fetch_array($result);

 $topic = $row['topic'];
 $duration = $row['duration'];
 $creator = $row['author'];
 $link1 = $row['link1'];
 $linktxt1 = $row['linktxt1'];


 $link = 'https://www.youtube.com/embed/';
 $vlink = $link . $vid;

 echo '  
               <div class="inner-vid">
                        <div class="vid-container" style="background-color: rgba(0, 0, 0, 0.678);">
                        
                                <iframe width="100%" src="  '.$vlink.'  " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="vid-details-section">
                                <div class="vid-details">
                                        <h3 class="topic-detail">'.$course.'</h3>
                                        <h2 class="topic-detail">Topic : '.$topic.'</h2>
                                        <h5 class="topic-detail">Duration : '.$duration.'</h5>
                                        <h5 class="topic-detail">YT channel: '.$creator.'</h5>
                                </div>
                        </div>
               </div>
 ';

?>