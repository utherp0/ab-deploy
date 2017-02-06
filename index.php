 
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="styles/ui.css"/>

  <title>OpenShift Example App for A/B Deployment</title>
</head>
<body class="controller">
<table width="100%" border=0>
<tr>
<td width="40" align=center valign=middle><img src="images/redhat_icon.png" width="35px"/></td>
<td valign=middle><b>PHP App to show A/B Deployments</b></td>
</tr>
</table>

<?php 
 echo "App running at version <b>1</b><br/>";
 echo "IP of Pod serving this App: <b> ".$_SERVER['SERVER_ADDR'] ;
 echo "</b><br/><hr width='1'/>"
 ?>

</body>
</html>
