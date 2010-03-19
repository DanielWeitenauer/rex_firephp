<?php
/**
* FirePHP Addon
*
* FirePHP Lib Copyright (c) 2006-2008, Christoph Dorn, http://firephp.org
* FirePHP Lib v 0.2.1
*
* @author rexdev[at]f-stop[dot]de Jan Camrda
* @author <a href="http://rexdev.f-stop.de">rexdev.f-stop.de</a>
*
* @package redaxo4
* @version 0.3.1
* $Id$: 
*/

// rex_request();

$func = rex_request('func', 'string');
$enabled = rex_request('enabled', 'int');
$dummymode = rex_request('dummymode', 'int');


if ($func == "update")
{

	$REX['ADDON']['firephp']['enabled'] = $enabled;
	$REX['ADDON']['firephp']['dummymode'] = $dummymode;

	$content = '$REX[\'ADDON\'][\'firephp\'][\'enabled\'] = '.$enabled.';
$REX[\'ADDON\'][\'firephp\'][\'dummymode\'] = '.$dummymode.';
';

	$file = $REX['INCLUDE_PATH']."/addons/firephp/config.inc.php";
  rex_replace_dynamic_contents($file, $content);

  echo rex_warning('Konfiguration wurde aktualisiert');
}


if ($REX['ADDON']['firephp']['enabled'] == 1)
{
	$enabled_option = '
		<option value="1" selected="selected">aktiviert</option>
		<option value="0">inaktiv</option>';
	$enabled_msg = 'Daten werden an die FirePHP Console geschickt - <a href="index.php?page=firephp&subpage=help">Sicherheitshinweise</a> beachten!';
}
else
{
	$enabled_option = '
		<option value="1">aktiviert</option>
		<option value="0" selected="selected">inaktiv</option>';
	$enabled_msg = '';

}
if ($REX['ADDON']['firephp']['dummymode'] == 1)
{
	$dummy_option = '
		<option value="1" selected="selected">aktiviert</option>
		<option value="0">inaktiv</option>';
	$dummy_msg = 'Anstatt der Datenübergabe an die FirePHP Console wird im frontend links oben eine kleine Meldung <b>uncaught fb() call</b> ausgegeben.';
}
else
{
	$dummy_option = '
		<option value="1">aktiviert</option>
		<option value="0" selected="selected">inaktiv</option>';
	$dummy_msg =  '';
}

echo '

<div class="rex-addon-output">
  <h2>Settings</h2>
  <div class="rex-addon-content">

<script type="text/javascript">
onload = function(e)
{
	document.getElementById(\'sendit\').style.display = "none";
	document.getElementById(\'enabled\').onchange = function (e)
	{
		document.getElementById(\'sendit\').style.display = "inline";
	};
}
</script> 

  <form action="index.php" method="post">
    <input type="hidden" name="page" value="firephp" />
    <input type="hidden" name="subpage" value="settings" />
    <input type="hidden" name="func" value="update" />

        <fieldset>
          <p>
            <label for="enabled" style="font-weight:bold;">FirePHP Output:</label>
						<select id="enabled" name="enabled">
						'.$enabled_option.'
						</select>
						<input type="submit" style="margin-left:10px;"class="rex-sbmt" id="sendit" name="sendit" value="speichern" />
          </p>
          <!--<p>
            <label for="dummymode">Dummymode:</label>
						<select id="dummymode" name="dummymode">
						'.$dummy_option.'
						</select>
          </p>-->
          <p>
					 '.$enabled_msg.'
            
          </p>
        </fieldset>
  </form>
  </div>
</div>
';
?>