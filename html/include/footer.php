<div class="text-center d-none d-sm-inline">
        <div><?php
        if (isset($config['DASHBOARD']['FOOTER1']) && !empty($config['DASHBOARD']['FOOTER1'])) {
            $footer1Value = $config['DASHBOARD']['FOOTER1'];
            echo $footer1Value . ' | ';
        }
        ?>Copyright © 2016-2023 | The Regents of the <a target="_blank" href=http://k0usy.mystrikingly.com>K0USY Group</a> ® All rights reserved. | Version OA4DOA 2022 with CS8ABG Dash | Copyright © 2024 Modified by <a href="https://www.oz-dmr.network" target="_blank">OZ-DMR NETWORK</a> | Running on the <a href="https://www.freedmr.uk/" target="_blank">FreeDMR Network</a>
        <?php
        if (isset($config['DASHBOARD']['FOOTER2']) && !empty($config['DASHBOARD']['FOOTER2'])) {
            $footer2Value = $config['DASHBOARD']['FOOTER2'];
            echo ' | ' . $footer2Value;
        }
        ?>
                </div>
</div>
<!-- Credits: SP2ONG 2019-2022 -->
<!-- Credits: OA4DOA 2022 -->
<!-- THIS COPYRIGHT NOTICE MUST BE DISPLAYED AS A CONDITION OF THE LICENCE GRANT FOR THIS SOFTWARE. ALL DERIVATEIVES WORKS MUST CARRY THIS NOTICE -->
