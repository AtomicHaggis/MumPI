<?php
	if(SessionManager::getInstance()->isAdmin()){
?>
<div id="footer">
	<?php
		echo 'Server Version: '.ServerInterface::getInstance()->getVersion();
		echo '<br/>Script execution time: '.sprintf('%6.3f', PHPStats::scriptExecTimeGet()).'ms | memory peak: '.(memory_get_peak_usage()/1000).' kByte';
	?>
</div>
<?php } ?>