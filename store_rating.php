<?php
if(isset($_POST['post_like']))
{
  $host="localhost";
  $username="root";
  $password="";
  $databasename="sample";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

  $update = mysql_query("update ratings set total_votes=total_votes+1,likes=likes+1");
  $select = mysql_query("SELECT * FROM ratings");
  while($row=mysql_fetch_array($select))
  {
	$total_votes=$row['total_votes'];
	$likes=$row['likes'];
	$dislike=$row['dislike'];

    echo "<p id='total_rating'>Total Ratings ( ".$total_votes." )</p>";
    echo "<p id='total_like'><img src='like.png'>".$likes."</p><div id='like_bar'></div>";
    echo "<p id='total_dislike'><img src='dislike.png'>".$dislike."</p><div id='dislike_bar'></div>";
    exit();
  }
}


if(isset($_POST['post_dislike']))
{
  $host="localhost";
  $username="root";
  $password="";
  $databasename="sample";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

  $update = mysql_query("update ratings set total_votes=total_votes+1,dislike=dislike+1");
  $select = mysql_query("SELECT * FROM ratings");
  while($row=mysql_fetch_array($select))
  {
  	$total_votes=$row['total_votes'];
	$likes=$row['likes'];
	$dislike=$row['dislike'];

    echo "<p id='total_rating'>Total Ratings ( ".$total_votes." )</p>";
    echo "<p id='total_like'><img src='like.png'>".$likes."</p><div id='like_bar'></div>";
    echo "<p id='total_dislike'><img src='dislike.png'>".$dislike."</p><div id='dislike_bar'></div>";
    exit();
  }
}
?>
