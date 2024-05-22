<?php
// Path to the configuration file
$file_path = '/opt/fdmr-monitor-freedmr-network/fdmr-mon.cfg';

// Initialize the variable to hold the extracted title
$dashTitle = '';

// Read the file line by line
if (file_exists($file_path)) {
    $file = fopen($file_path, 'r');
    if ($file) {
        while (($line = fgets($file)) !== false) {
            // Check if the line starts with "DASHTITLE"
            if (strpos($line, 'DASHTITLE') === 0) {
                // Extract the text between the quotes
                preg_match('/DASHTITLE\s*=\s*"(.*?)"/', $line, $matches);
                if (isset($matches[1])) {
                    $dashTitle = $matches[1];
                }
                break; // Exit the loop once the line is found
            }
        }
        fclose($file);
    } else {
        echo "FreeDMR Network Server";
    }
} else {
    echo "FreeDMR Network Server";
}
?>
<div class="text-center d-none d-sm-inline">
        <div><?php
        if (isset($config['DASHBOARD']['FOOTER1']) && !empty($config['DASHBOARD']['FOOTER1'])) {
            $footer1Value = $config['DASHBOARD']['FOOTER1'];
            echo $footer1Value . ' | ';
        }
        ?>Copyright © 2016-2023 | The Regents of the K0USY Group ® All rights reserved. | Version OA4DOA 2022 with CS8ABG Dash | Copyright © 2024 Modified by <a href="https://www.oz-dmr.network/" target="_blank">OZ-DMR NETWORK</a> | <?php echo htmlspecialchars($dashTitle); ?> : Part of the <a href="https://www.freedmr.uk/" target="_blank">FreeDMR Network</a>
        <?php
        if (isset($config['DASHBOARD']['FOOTER2']) && !empty($config['DASHBOARD']['FOOTER2'])) {
            $footer2Value = $config['DASHBOARD']['FOOTER2'];
            echo ' | ' . $footer2Value;
        }
        ?>
                </div>
</div>
<!-- Credits: M0GLJ 2024 -->
<!-- Credits: SP2ONG 2019-2022 -->
<!-- Credits: OA4DOA 2022 -->
<!-- THIS COPYRIGHT NOTICE MUST BE DISPLAYED AS A CONDITION OF THE LICENCE GRANT FOR THIS SOFTWARE. ALL DERIVATEIVES WORKS MUST CARRY THIS NOTICE -->
