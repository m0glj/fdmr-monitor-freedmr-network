<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title" id="tbl_bridges"></h3>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive p-3 mt-0">

<center>
<?php
$freeDMRlist = file("https://freedmr.cymru/talkgroups/Talkgroups_Bridges.csv");

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
        echo '    <th>&nbsp;TG Number</th><th style="text-align: left;">&nbsp;Bridge Name</th><th style="text-align: left;">&nbsp;Country</th>'."\n";
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
        echo "Number of Bridge Talkgroups: ".$counter."\n";
}
else {
        echo '<table>'."\n";
        echo '  <tr>'."\n";
        echo '    <td colspan="3">FreeDMR data not available from FreeDMR.uk</td>'."\n";
        echo '  </tr>'."\n";
        echo '</table>'."\n";
        echo '<br />'."\n";
}
?>

<p style="text-align:center;">
<?php
echo "Bridge List Generated at: ".date("d F Y H:i");
?>&nbsp;</p>
</center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
