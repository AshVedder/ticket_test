<?php
  print "<form method = POST = form.php>";
  $AOFA = htmlspecialchars($_REQUEST['amount']);
  echo $AOFA."<p>";
  for($i=0; $i<$_POST['amount'] ; $i++)
  {
      print "<h3>Assignee Name</h3>" ."<input type=text name=txt$i size=10><br><p>";
      print "Assignee Email Address<br>";
      print "<input type=text name=asemail$i size=10><p>";
      print "Soft Skills 1-5<br>";
      print "<input type=range min=1 max=5 step=1 name=softskillsgrade$i><p>";
      print "Soft Skills Comment<br>";
      print "<textarea rows=8 cols=30 name=softscomment$i>Butch Coolidge: Zed's dead baby...Zed's dead</textarea><p>";
      print "Language Skills (Grammar)<br>";
      print "<input type=range min=1 max=5 step=1 name=languageskillsgrade$i><p>";
      print "Language Skills Comment<br>";
      print "<textarea rows=8 cols=30 name=languageskillscomment$i>English mofo, do you speak it?</textarea><p>";
      print "HC Ease of Use - Concision<br>";
      print "<input type=range min=1 max=5 step=1 name=hcgrade$i><p>";
      print "HC Ease of Use Comment<br>";
      print "<textarea rows=8 cols=30 name=hccomment$i></textarea><p>";
      print "Resolution (Friendly Accurate, Timely, Preventative)<br>";
      print "<input type=range min=1 max=5 step=1 name=resgrade$i><p>";
      print "Resolution Comment<br>";
      print "<textarea rows=8 cols=30 name=rescomment$i></textarea><p>";
      print "Timeliness (Follow up frquency, responsiveness)<br>";
      print "<input type=range min=1 max=5 step=1 name=tigrade$i><p>";
      print "Timeliness Comment<br>";
      print "<textarea rows=8 cols=30 name=ticomment$i></textarea><p>";
      print "Macro Usage (Friendly Accurate, Timely, Preventative)<br>";
      print "<input type=range min=1 max=5 step=1 name=magrade$i><p>";
      print "Macro Usage Comment<br>";
      print "<textarea rows=8 cols=30 name=macomment$i></textarea><p>";
      print "Correct Status<br>";
      print "<select name=csgrade$i>
             <option value=yes>Yes</option>
             <option value=no>No</option>
             </select><p>";
      print "Correct Status Comment<br>";
      print "<textarea rows=8 cols=30 name=ctcomment$i></textarea><p>";
      print "Correct Routing<br>";
      print "<select name=crgrade$i>
             <option value=yes>Yes</option>
             <option value=no>No</option>
             </select><p>";
      print "Correct Routing Comment<br>";
      print "<textarea rows=8 cols=30 name=crcomment$i></textarea><p>";
      print "Self-Service Offered<br>";
      print "<select name=ssgrade$i>
             <option value=yes>Yes</option>
             <option value=no>No</option>
             </select><p>";
      print "Self Service Comment<br>";
      print "<textarea rows=8 cols=30 name=sscomment$i></textarea><p>";
    }
    print "<input type=submit name=fuck value=Submit>";
    print "</form>";
    $arr = array();
    if(isset($_POST['txt0']))
    {
      for($i=0; $i<$_POST['amount']; $i++)   //don't know if i actually need this
    {
      $arr[$i] = array(
          $_POST['txt'.$i],
          $_POST['asemail'.$i],
          $_POST['softskillsgrade'.$i],
          $_POST['softscomment'.$i],
          $_POST['languageskillsgrade'.$i],
          $_POST['languageskillscomment'.$i],
          $_POST['hcgrade'.$i],
          $_POST['hccomment'.$i],
          $_POST['resgrade'.$i],
          $_POST['rescomment'.$i],
          $_POST['tigrade'.$i],
          $_POST['ticomment'.$i],
          $_POST['magrade'.$i],
          $_POST['macomment'.$i],
          $_POST['csgrade'.$i],
          $_POST['ctcomment'.$i],
          $_POST['crgrade'.$i],
          $_POST['crcomment'.$i],
          $_POST['ssgrade'.$i],
          $_POST['sscomment'.$i],);
    }
    }
    if(isset($_REQUEST['fuck']))
    {
      $fireitup = true;
      echo $fireitup;
      print "<h2 name=thundercunt>ThunderCunt!</h2>";
    }
      else {
        $fireitup = false;
        echo "0" ."<br>";
        echo "withoutta paddle!";
    }
    if ($fireitup) {
      for ($i=0; $i<$AOFA ; $i++)
      {
      $fh = fopen ("raw.csv", "a");
      $form_data = array(
          $date,
          $_POST['customername'],
          $_POST['ticketid'],
          $_POST['auditor'],
          $_POST['rorigin'],
          $_POST['category'],
          $_POST['subcategory'],
          $_POST['group'],
          $_POST['region'],
          $_POST['country'],
          $_POST['aticketsn'],
          $_POST['aticketsid'],
          $_POST['ireplies'],
          $_POST['ereplies'],
          $AOFA,
          $_POST['txt'.$i],
          $_POST['asemail'.$i],
          $_POST['softskillsgrade'.$i],
          $_POST['softscomment'.$i],
          $_POST['languageskillsgrade'.$i],
          $_POST['languageskillscomment'.$i],
          $_POST['hcgrade'.$i],
          $_POST['hccomment'.$i],
          $_POST['resgrade'.$i],
          $_POST['rescomment'.$i],
          $_POST['tigrade'.$i],
          $_POST['ticomment'.$i],
          $_POST['magrade'.$i],
          $_POST['macomment'.$i],
          $_POST['csgrade'.$i],
          $_POST['ctcomment'.$i],
          $_POST['crgrade'.$i],
          $_POST['crcomment'.$i],
          $_POST['ssgrade'.$i],
          $_POST['sscomment'.$i],);
      fputcsv($fh, $form_data);
      $to = $_POST['asemail'.$i];
      $subject = 'testing this shit';
      $message = '<h1>SHIT IS WORKING!! Test2</h1>';
      $headers = "From: Ashole <ashvedder@me.com>\r\n";
      $headers .= "Reply-To: ashvedder@me.com\r\n";
      $headers .= "Content-type: text/html\r\n";
      mail($to, $subject, $message, $headers);
    }
    header ("Location: success.html");
    //include ('redirector.php');
    }
    print "</form>" ;
    exit();
?>
