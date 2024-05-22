<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title" id="tbl_tgs"></h3>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive p-3">
<center>
<?php
$freeDMRlist = file("http://freedmr.cymru/talkgroups/Talkgroups_FreeDMR.csv");

if ($freeDMRlist) {
        $dmrRefList = array();
        $counter = 0;
        foreach($freeDMRlist as $line) {
                if ($counter == 0) {
                        $counter++;
                        continue;
                }
                if (ctype_alpha(substr($line, 0, 1))) {
                        if  (substr_count($line, ",") >= 2)  { $refData = explode(",", $line);  }
                        elseif  (substr_count($line, "\t") >= 2)  { $refData = explode("\t", $line);  }
                        array_push($dmrRefList, $refData[1].";".$refData[2].";".$refData[0]);
                        $counter++;
                }
        }
        natsort($dmrRefList);

        echo '<table width="97%" border="1">'."\n";
        echo '  <tr>'."\n";
        echo '    <th width="12%">&nbsp;TG Number</th><th style="text-align: left;">&nbsp;Talk Group Name</th><th style="text-align: left;">&nbsp;Country</th>'."\n";
        echo '  </tr>'."\n";
        foreach ($dmrRefList as $refData) {
                $fields = explode(";", $refData);
                $tgNum = $fields[0];
                $tgName = $fields[1];
                $tgCountry = $fields[2];
                echo '<tr><td>&nbsp;TG '.$tgNum.'</td><td style="text-align: left;">&nbsp;'.$tgName.'</td><td style="text-align: left;">&nbsp;'.$tgCountry.'</td></tr>'."\n";
        }
        echo '</table>'."\n";
        echo '<br />'."\n";
        echo "Number of Talkgroups&nbsp;:&nbsp;&nbsp;".$counter."\n";
}
else {
        echo '<table>'."\n";
        echo '  <tr>'."\n";
        echo '    <td colspan="3">FreeDMR TG data not available  at this time</td>'."\n";
        echo '  </tr>'."\n";
        echo '</table>'."\n";
        echo '<br />'."\n";
}
?>

<p style="text-align:center;">
<?php
echo "TalkGroup List Generated at: ".date("d F Y H:i");
?>&nbsp;</p>
</center>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
