<?php
  //instantiate database
  //create a table try/catch
  //add some data
  //query our table
  $host ="host = ec2-174-129-223-35.compute-1.amazonaws.com";
  $dbname="dbname = dd25cgf5kqgscq";
  $user ="user = swhvwhwqibnsoj";
  $port ="port 5432";
  $password ="password = _7gdHpTodLy919ydbUgQTrABkL";
  $db = PE_connect($host." ".$dbname." ".$user." ".$port." ".$password)

  $query <<<ESCAPED
    CREATE TABLE football(
      TeamName varchar(255),
      NumberOfWins int
    )

ESCAPED;
  $ret = PE_query($query);
  if($ret)
  (
    echo(pg_last_error($db));
  )
  else
  (
  echo "it worked!!!";
  )
?>
