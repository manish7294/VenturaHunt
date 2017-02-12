<?php 
  $leaderboard = mysql_query("select name, round1, tym, current, college,thint from profile order by round1 desc, tym asc,current asc,thint asc");
?>

<!-- Leaderboard Page Contents -->

<div class="" id="leaderboardContent">
<div class="  "  >	
<div  style="overflow:scroll; height:500px; "  >
	<table class="span9 title  " >

  <thead >
    <tr class="" style="background-color:rgb(102,102,102);">
      <th style="padding:10px;">Rank</th>
      <th style="padding:10px;">Name</th>
      <th style="padding:10px;">Score</th>
      <th style="padding:10px;">Submission Time</th>
      <th style="padding:10px;">Questions Attempted</th>
      <th style="padding:10px;">College</th>
    </tr>
  </thead>

  <tbody >
  <?php $i=1; ?>
  <?php while($row = mysql_fetch_assoc($leaderboard)) { ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row['name'] ?></td>
      
      <td><?php echo $row['round1'] ?></td>
      <td><?php echo date("F j, Y, g:i a", $row['tym']); ?></td>
      <td><?php echo intval($row['current'])-1 ?></td>
      <td><?php echo $row['college'] ?></td>
    </tr>
  <?php  } ?>
  </tbody>
</table>
</div>
</div>

</div>