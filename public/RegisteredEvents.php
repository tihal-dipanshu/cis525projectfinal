<?php
require_once 'utils/header.php';
require_once 'utils/styles.php';

$usn=$_POST['usn'];


include_once 'classes/db1.php';

$result = mysqli_query($conn, "
    SELECT *
    FROM registered r
    JOIN events e ON r.event_id = e.event_id
    JOIN staff_coordinator s ON e.event_id = s.event_id
    JOIN event_info ef ON e.event_id = ef.event_id
    JOIN student_coordinator st ON e.event_id = st.event_id
    WHERE r.usn = '$usn'
");
?>

<div class = "content">
            <div class = "container">
            <h1> Registered Events</h1>
             <?php
if (mysqli_num_rows($result) > 0) {
?> 
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            
                            <th>Event_name</th>             
                           <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
                           
                            <th>Date</th>
                        
                            <th>Time</th>
                            <th>location </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {

                            echo '<tr>';
                            echo '<td>' . $row['event_title'] . '</td>';                    
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                           
                            echo '<td>'.$row['Date'].'</td>';
                            echo '<td>'.$row['time'].'</td>';
                            echo '<td>'.$row['location'].'</td>';
                            
                         
                            echo '</tr>';  

                            $i++;
                        }
                      
                        ?>
                    </tbody>
                </table>
                    <?php }
                    else{
                    echo 'Not Yet Rgistered any events';
                    
                    }?>
                
               
            </div>
        </div>
        <?php
    
        // $result = mysqli_query($conn, );
        ?>
        <div class = "content">
            <div class = "container">
            <h1>Not Registered Events</h1>
             <?php
if (mysqli_num_rows($result) > 0) {
?> 
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            
                            <th>Event_name</th>             
                           <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
                           
                            <th>Date</th>
                        
                            <th>Time</th>
                            <th>location </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {

                            echo '<tr>';
                            echo '<td>' . $row['event_title'] . '</td>';                    
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                           
                            echo '<td>'.$row['Date'].'</td>';
                            echo '<td>'.$row['time'].'</td>';
                            echo '<td>'.$row['location'].'</td>';
                            
                         
                            echo '</tr>';  

                            $i++;
                        }
                      
                        ?>
                    </tbody>
                </table>
                    <?php }
                    else{
                    echo 'NOT able fetch';
                    
                    }?>
                
               
            </div>
        </div>
        <?php include 'utils/footer.php'; ?> 