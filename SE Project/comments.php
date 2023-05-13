<?php
function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        $content = $_POST['content'];
        $sql = "INSERT INTO comments (content) VALUES ('$content')";
        $res = $conn->query($sql);
    }
}

function getComments($conn)
{
    $sql = "SELECT * FROM comments";
    $res = $conn->query($sql);
    if($res->num_rows>0)
    {
        while($row = $res->fetch_assoc()){
            echo "<div style='background-color: whitesmoke;'>";
                echo $row["content"]."<br>";
            echo"</div>";
        }
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
}
