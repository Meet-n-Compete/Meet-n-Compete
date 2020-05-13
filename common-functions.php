<?php
// get joined members from event_id
function getJoinedMembers($conn, $event_id){
    $stmt = $conn->prepare('SELECT event_users.user_name, events.event_name, events.user_name AS creator
                            FROM event_users INNER JOIN events
                            ON event_users.event_id = events.event_id
                            WHERE event_users.event_id = ?');
    $stmt->bindValue(1,$event_id,PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
// get All Preferences from database
function getPreferences($conn){
    $stmt = $conn->query('SELECT `preference` FROM `preferences`');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
// If there is no event, then print this message
function printNoEventMessage(){
    echo'
    <br>
    <p>There is no event to show</p>
    <br>';
}
// Convert int month to string
function monthConvert($month){
    switch ($month){
        case 1:
            return "Jan";
            break;
        case 2:
            return "Feb";
            break;
        case 3:
            return "Mar";
            break;
        case 4:
            return "Apr";
            break;
        case 5:
            return "May";
            break;
        case 6:
            return "Jun";
            break;
        case 7:
            return "Jul";
            break;
        case 8:
            return "Aug";
            break;
        case 9:
            return "Sep";
            break;
        case 10:
            return "Oct";
            break;
        case 11:
            return "Nov";
            break;
        case 12:
            return "Dec";
            break;
        default:
    }
}
?>