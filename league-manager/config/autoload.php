<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package League-manager
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'leaguemanager',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'leaguemanager\lm_fixes'                    => 'system/modules/league-manager/classes/lm_fixes.php',

	// Modules
	'leaguemanager\lm_contestreader_basic'      => 'system/modules/league-manager/modules/lm_contestreader_basic.php',
	'leaguemanager\lm_contestreader_crosstable' => 'system/modules/league-manager/modules/lm_contestreader_crosstable.php',
	'leaguemanager\lm_contestreader_matches'    => 'system/modules/league-manager/modules/lm_contestreader_matches.php',
	'leaguemanager\lm_contestreader_rounds'     => 'system/modules/league-manager/modules/lm_contestreader_rounds.php',
	'leaguemanager\lm_contestreader_table'      => 'system/modules/league-manager/modules/lm_contestreader_table.php',
	'leaguemanager\lm_contestreader_teams'      => 'system/modules/league-manager/modules/lm_contestreader_teams.php',
	'leaguemanager\lm_matchreader_basic'        => 'system/modules/league-manager/modules/lm_matchreader_basic.php',
	'leaguemanager\lm_matchreader_events'       => 'system/modules/league-manager/modules/lm_matchreader_events.php',
	'leaguemanager\lm_matchreader_reports'      => 'system/modules/league-manager/modules/lm_matchreader_reports.php',
	'leaguemanager\lm_playerreader_basic'       => 'system/modules/league-manager/modules/lm_playerreader_basic.php',
	'leaguemanager\lm_teamreader_basic'         => 'system/modules/league-manager/modules/lm_teamreader_basic.php',
	'leaguemanager\lm_teamreader_matches'       => 'system/modules/league-manager/modules/lm_teamreader_matches.php',
	'leaguemanager\lm_teamreader_nextmatch'     => 'system/modules/league-manager/modules/lm_teamreader_nextmatch.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'lm_contestreader_basic'         => 'system/modules/league-manager/templates',
	'lm_contestreader_crosstable'    => 'system/modules/league-manager/templates',
	'lm_contestreader_matches'       => 'system/modules/league-manager/templates',
	'lm_contestreader_matches_table' => 'system/modules/league-manager/templates',
	'lm_contestreader_rounds'        => 'system/modules/league-manager/templates',
	'lm_contestreader_table'         => 'system/modules/league-manager/templates',
	'lm_contestreader_teams'         => 'system/modules/league-manager/templates',
	'lm_contestreader_teams_table'   => 'system/modules/league-manager/templates',
	'lm_matchreader_basic'           => 'system/modules/league-manager/templates',
	'lm_matchreader_events'          => 'system/modules/league-manager/templates',
	'lm_matchreader_events_table'    => 'system/modules/league-manager/templates',
	'lm_matchreader_reports'         => 'system/modules/league-manager/templates',
	'lm_playerreader_basic'          => 'system/modules/league-manager/templates',
	'lm_teamreader_basic'            => 'system/modules/league-manager/templates',
	'lm_teamreader_matches'          => 'system/modules/league-manager/templates',
	'lm_teamreader_matches_table'    => 'system/modules/league-manager/templates',
	'lm_teamreader_nextmatch'        => 'system/modules/league-manager/templates',
));
