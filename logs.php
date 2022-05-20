
<?php
$logs['miner'] = shell_exec('tail -300 /home/pi/hnt/miner/log/console.log | tac');
$logs['witnesses'] = shell_exec('tac /home/pi/hnt/miner/log/console.log | grep -E "witness|client sending data"');
$logs['validators'] = shell_exec('tac /home/pi/hnt/miner/log/console.log | grep -E "connect_validator|setup|handle_down_event"');
$logs['other'] = shell_exec('tac /home/pi/hnt/miner/log/console.log | grep -E "miner_poc_grpc_client_statem|grpc_client_stream_custom|send_grpc_unary_req|rxpk"');
$logs['errors'] = shell_exec('tail -100 /home/pi/hnt/miner/log/error.log | tac');
$connectedvalidator = shell_exec('netstat -atn | grep 8080');
$connectedvalidator = substr($connectedvalidator, -36);
$logs['beacon'] = shell_exec('tac /home/pi/hnt/miner/log/console.log | grep -E "tx_power_corrected|tx_power|TX_POWER"');
?>
<h1>Pisces P100 Outdoor Miner Dashboard - Information - By AHMET RIZA KORKUT</h1>


<div class="log_container">
        <h2>Miner Logs</h2>
        <div class="wrapper"><textarea class="log_output" wrap="off"><?php echo $logs['miner']; ?></textarea></div>
</div>

<div class="log_container">
        <h2>Witness Logs</h2>
        <div class="wrapper"><textarea class="log_output" wrap="off"><?php echo $logs['witnesses']; ?></textarea></div>
</div>

<div class="log_container">
        <h2>Beacon Logs</h2>
        <div class="wrapper"><textarea class="log_output" wrap="off"><?php echo $logs['beacon']; ?></textarea></div>
</div>

<div class="log_container">
        <h2>Validators Logs (Connected to <?php echo $connectedvalidator; ?>)</h2>
        <div class="wrapper"><textarea class="log_output" wrap="off"><?php echo $logs['validators']; ?></textarea></div>
</div>

<div class="log_container">
        <h2>Other Logs</h2>
        <div class="wrapper"><textarea class="log_output" wrap="off"><?php echo $logs['other']; ?></textarea></div>
</div>


<div class="log_container">
        <h2>Error Logs</h2>
        <div class="wrapper"><textarea class="log_output" wrap="off"><?php echo $logs['errors']; ?></textarea></div>
</div>


