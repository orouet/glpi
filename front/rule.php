<?php
/*
 * @version $Id: cartridge.form.php 4487 2007-03-01 03:19:20Z jmd $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2006 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file: Walid Nouh
// Purpose of file:
// ----------------------------------------------------------------------


$NEEDED_ITEMS=array("rulesengine","affectentity");

define('GLPI_ROOT', '..');
include (GLPI_ROOT . "/inc/includes.php");

commonHeader($LANG["title"][2],$_SERVER['PHP_SELF'],"admin","rule",$LANG["rulesengine"][17]);

	echo "<div align='center'><table border='0'><tr><td>";
	echo "<img src=\"" . $CFG_GLPI["root_doc"] . "/pics/logoOcs.png\" alt='" . $LANG["ocsng"][0] . "' title='" . $LANG["ocsng"][0] . "' ></td>";
	echo "</tr></table></div>";

	echo "<div align='center'><table class='tab_cadre' cellpadding='5'>";
	echo "<tr><th>" . $LANG["rulesengine"][24] . "</th></tr>";

	echo "<tr class='tab_bg_1'><td  align='center'><a href=\"rule.ocs.php\"><strong>" . $LANG["rulesengine"][18] . "</strong></a></td></tr>";

	echo "<tr class='tab_bg_1'><td align='center'><a href=\"rule.ldap.php\"><strong>" .$LANG["rulesengine"][19] . "</strong></a></td> </tr>";

	echo "<tr class='tab_bg_1'><td  align='center'><a href=\"rule.tracking.php\"><strong>" . $LANG["rulesengine"][28] . "</strong></a></td></tr>";

	echo "</table></div>";

commonFooter();
?>
