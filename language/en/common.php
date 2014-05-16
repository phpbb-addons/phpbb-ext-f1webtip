<?php
/**
*
* @package phpBB Extension - DrDeath F1WebTip
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'F1WEBTIP_PAGE'					=> 'F1 WebTip',
	
	'FORMEL_TITLE'					=> 'Formula 1 WebTip',
	'FORMEL_CURRENT_RACE'			=> 'Current race',
	'FORMEL_CURRENT_QUALI'			=> 'Qualification',
	'FORMEL_CURRENT_RESULT'			=> 'Result',
	'FORMEL_NO_QUALI'				=> 'No qualification found',
	'FORMEL_NO_RESULTS'				=> 'No result found',
	'FORMEL_RACENAME'				=> 'Location',
	'FORMEL_RACELENGTH'				=> 'Lap length',
	'FORMEL_RACEDISTANCE'			=> 'Race length',
	'FORMEL_RACELAPS'				=> 'Laps',
	'FORMEL_RACEDEBUT'				=> 'First race',
	'FORMEL_RACETIME'				=> 'Race begins',
	'FORMEL_RACEDEAD'				=> 'Deadline',
	'FORMEL_NEXT_RACE'				=> 'Next',
	'FORMEL_PREV_RACE'				=> 'Previous',
	'FORMEL_PLACE'					=> 'Place',
	'FORMEL_EDIT'					=> 'Edit',
	'FORMEL_RULES'					=> 'Rules',
	'FORMEL_FORUM'					=> 'Formula 1 Forum',
	'FORMEL_STATISTICS'				=> 'Statistics',
	'FORMEL_CALL_MOD'				=> 'Call moderator',
	'FORMEL_POLE'					=> 'Poleposition',
	'FORMEL_RACE_WINNER'			=> 'Winner',
	'FORMEL_DELETE'					=> 'Delete',
	'FORMEL_PACE'					=> 'Fastest lap',
	'FORMEL_TIRED'					=> 'Tired count',
	'FORMEL_SAFETYCAR'				=> 'Safety Car deployments',
	'FORMEL_NO_TIPP'				=> 'No tip found',
	'FORMEL_YOUR_TIPP'				=> 'Your tip',
	'FORMEL_YOUR_POINTS'			=> 'Your points',
	'FORMEL_GAME_OVER'				=> 'Time is over. No changes possible anymore.',
	'FORMEL_ADD_TIPP'				=> 'Send tip',
	'FORMEL_DEL_TIPP'				=> 'Delete tip',
	'FORMEL_EDIT_TIPP'				=> 'Edit tip',
	'FORMEL_TIPP_DELETED'			=> 'Tip was removed<br /><br />Click %shere%s to go back to the tips overview<br /><br />Click %shere%s to go to forum',
	'FORMEL_DUBLICATE_VALUES'		=> 'Error while sending your tip: You placed a driver twice<br /><br />Click %shere%s to go back to the overview<br /><br />Click %shere%s to go back to forum',
	'FORMEL_ACCEPTED_TIPP'			=> 'You tip was accepted<br /><br />Click %shere%s to place more tips<br /><br />Click %shere%s to go back to forum',
	'FORMEL_RESULTS_TITLE'			=> 'WebTip moderation',
	'FORMEL_RESULTS_TITLE_EXP'		=> 'Here you can add or edit every events results',
	'FORMEL_MOD_BUTTON_TEXT'		=> 'Moderation',
	'FORMEL_RESULTS_DELETED'		=> 'Results deleted<br /><br />Click %shere%s to go back to WebTip moderation<br /><br />Click %shere%s to go back to WebTip',
	'FORMEL_RESULTS_ERROR'			=> 'Error while saving. Please try again<br /><br />Click %shere%s to go back to WebTip moderation<br /><br />Click %shere%s to go back to WebTip',
	'FORMEL_RESULTS_DOUBLE'			=> 'You placed a driver twice. Please try again<br /><br />Click %shere%s to go back to WebTip moderation<br /><br />Click %shere%s to go back to WebTip',
	'FORMEL_RESULTS_ACCEPTED'		=> 'Results saved<br /><br />Click %shere%s to go back to WebTip moderation<br /><br />Click %shere%s to go back to WebTip',
	'FORMEL_RESULTS_ADD'			=> 'Add',
	'FORMEL_RESULTS_QUALI_TITLE'	=> 'Add qualification',
	'FORMEL_RESULTS_RESULT_TITLE'	=> 'Edit race results',
	'FORMEL_TOP_POINTS'				=> 'Points',
	'FORMEL_TOP_NAME'				=> 'Top players',
	'FORMEL_TOP_DRIVER'				=> 'Top drivers',
	'FORMEL_TOP_TEAMS'				=> 'Top teams',
	'FORMEL_NO_TIPPS'				=> 'No tips made',
	'FORMEL_NO_RESULTS'				=> 'No results available',
	'FORMEL_TIPPS_MADE'				=> 'Placed tips: ',
	'FORMEL_BACK_TO_TIPP'			=> 'Back to tip',
	'FORMEL_USER_STATS'				=> 'User',
	'FORMEL_DRIVER_STATS'			=> 'Driver',
	'FORMEL_TEAM_STATS'				=> 'Teams',
	'FORMEL_TOP_MORE'				=> 'Show all',
	'FORMEL_STATS_TITLE'			=> 'Formula 1 statistics',
	'FORMEL_POINTS_WON'				=> 'Points',
	'FORMEL_ALL_POINTS'				=> 'Total points',
	'FORMEL_RULES_TITLE'			=> 'Rules',
	'FORMEL_RULES_GENERAL'			=> 'General',
	'FORMEL_PROFILE_WEBTIPP'		=> 'Formula 1 points',
	'FORMEL_PROFILE_RANK'			=> '%s. Place',
	'FORMEL_PROFILE_NORANK'			=> 'No ranking',
	'FORMEL_PROFILE_TIPSS'			=> '%s of %s races tiped',
	'FORMEL_RULES_GENERAL_EXP'		=> 'Here you can show other community members whos really owns the Formula 1.<br /><br />For every race you can place a tip and collect points. If you are away for a long time, you can now enter your tips for as many races as you want and change it whenever you want. To see the current ranking just visit the statistics page. If you want to know what the other tipers tiped, just click on their usernames on the overview page ( Tips are only shown if the deadline was reached )',
	'FORMEL_RULES_SCORE'			=> 'Points',
	'FORMEL_RULES_SCORE_EXP'		=> 'You can place your tip for the first 10 drivers, such as the fastest lap, the count of tired drivers and the count of safety car deployments.',
	'FORMEL_RULES_MENTIONED'		=> 'For mention a Top 10 driver you can get <strong>%s</strong>.',
	'FORMEL_RULES_PLACED'			=> 'For placing the exact drivers result you can get <strong>%s</strong>.',
	'FORMEL_RULES_FASTEST'			=> 'If you got the fastest driver, you can get <strong>%s</strong>.',
	'FORMEL_RULES_TIRED'			=> 'For the right tired count you can get <strong>%s</strong>.',
	'FORMEL_RULES_SAFETYCAR'		=> 'For the right count of safety car deployments you can get <strong>%s</strong>.',
	'FORMEL_RULES_TOTAL'			=> 'In total you can get <strong>%s</strong>.',
	'FORMEL_RULES_POINT'			=> 'Point',
	'FORMEL_RULES_POINTS'			=> 'Points',
	'FORMEL_DEFINE'					=> 'Not placed',
	'FORMEL_ACCESS_DENIED'			=> 'Access denied. You have to be a certain group member to join this tip.<br /><br />Click %shere%s to ask for membership<br />Click %shere%s to go back to forum',
	'FORMEL_MOD_ACCESS_DENIED'		=> 'Access denied. You have to be a moderator or administrator to access the moderation panel.<br /><br />Click %shere%s to go back to Formular 1 Webtip.<br />Click %shere%s to go back to forum',
	'FORMEL_ERROR_MODE' 			=> 'Error ! Unknown Mode !<br /><br />Click %shere%s to go back to Formular 1 Webtip.<br />Click %shere%s to go back to forum',
	'FORMEL_CLOSE_WINDOW'			=> 'Close window',
	'FORMEL_HIDDEN'					=> 'Hidden till deadline',
	'FORMEL_COUNTDOWN_DEADLINE'		=> 'Countdown till deadline',
	'FORMEL_DEADLINE_REACHED'		=> 'Deadline reached',

	'INSERT_F1_FIRST_FILL'			=> 'Insert rows into the tables formel_config, formel_drivers, formel_teams and formel_races.',
	'INSERT_F1_CONFIG'				=> 'Insert rows into the tables formel_config.',
	'FORMEL_GUESTS_PLACE_NO_TIP'	=> '<strong>Guests cannot place a tip.</strong><br /><br />In order to place a tip you have to be registered and logged in.<br />',
	'FORMEL_RACE_ABORD'				=> 'Race aborted (half points!)',

	'VIEWING_F1WEBTIPP'				=> 'Viewing Formel 1 WebTip',

	'FORMEL_MAIL_ADMIN'				=> 'Formula 1 WebTip - Sent reminder mails for race in %1$s',
	'FORMEL_MAIL_ADMIN_MESSAGE'		=> 'Mail was sent to following users: %1$s',
	'FORMEL_LOG'					=> 'Formula 1 WebTip - Reminder mail sent to: %1$s',
	'FORMEL_LOG_ERROR'				=> '<strong>Formula 1 WebTip - Reminder mail to %1$s was not successful.</strong>',

	'LOG_FORMEL_TIP_GIVEN'			=> 'Formula 1 webtip for race %s added.',
	'LOG_FORMEL_TIP_EDITED'			=> 'Formula 1 webtip for race %s edited.',
	'LOG_FORMEL_TIP_NOT_VALID'		=> 'Formula 1 webtip for race %s not valid. Tip rejected.',
	'LOG_FORMEL_TIP_DELETED'		=> 'Formula 1 webtip for race %s deleted.',
	'LOG_FORMEL_QUALI_DELETED'		=> 'Formula 1 qualifying result for race id %s deleted.',
	'LOG_FORMEL_QUALI_ADDED'		=> 'Formula 1 qualifying result for race id %s added.',
	'LOG_FORMEL_QUALI_NOT_VALID'	=> 'Formula 1 qualifying result for race id %s not valid. Entry rejected.',
	'LOG_FORMEL_RESULT_DELETED'		=> 'Formula 1 race result for race id %s deleted.',
	'LOG_FORMEL_RESULT_ADDED'		=> 'Formula 1 race result for race id %s added.',
	'LOG_FORMEL_RESULT_NOT_VALID'	=> 'Formula 1 race result for race id %s not valid. Entry rejected.',
	'LOG_FORMEL_SAISON_RESET'		=> 'Formula 1 saison reseted.',
	'LOG_FORMEL_SETTINGS'			=> 'Formula 1 settings updated.',
	'LOG_FORMEL_RACE_ADDED'			=> 'Formula 1 race added.',
	'LOG_FORMEL_RACE_EDITED'		=> 'Formula 1 race ID %s edited.',
	'LOG_FORMEL_RACE_DELETED'		=> 'Formula 1 race ID %s deleted',
	'LOG_FORMEL_TEAM_ADDED'			=> 'Formula 1 team added.',
	'LOG_FORMEL_TEAM_EDITED'		=> 'Formula 1 team ID %s edited.',
	'LOG_FORMEL_TEAM_DELETED'		=> 'Formula 1 team ID %s deleted.',
	'LOG_FORMEL_DRIVER_ADDED'		=> 'Formula 1 driver added.',
	'LOG_FORMEL_DRIVER_EDITED'		=> 'Formula 1 driver ID %s edited.',
	'LOG_FORMEL_DRIVER_DELETED'		=> 'Formula 1 driver ID %s deleted.',
	'LOG_FORMEL_CRON'				=> 'Formula 1 WebTip Cronjob was executed.',

	'ACP_FORMEL_SETTINGS'			=> 'F1 Settings',
	'ACP_FORMEL_DRIVERS'			=> 'F1 Drivers',
	'ACP_FORMEL_TEAMS'				=> 'F1 Teams',
	'ACP_FORMEL_RACES'				=> 'F1 Races',

	'ACP_F1WEBTIP_TITLE'			=> 'F1 WebTip Module',
	'ACP_F1WEBTIP'					=> 'Settings',
	'ACP_F1WEBTIP_GOODBYE'			=> 'Should say goodbye?',
	'ACP_F1WEBTIP_SETTING_SAVED'	=> 'Settings have been saved successfully!',

	'ACP_F1_MANAGEMENT'								=> 'Formula 1 WebTip',
	'ACP_F1_SETTINGS'								=> 'Formula 1 Settings',
	'ACP_F1_SETTINGS_EXPLAIN'						=> 'Here you can edit your Formula 1 WebTips settings',
	'ACP_F1_SETTINGS_CONFIG'						=> 'Formula 1 Configuration',
	'ACP_F1_SETTINGS_MODERATOR'						=> 'WebTip moderator',
	'ACP_F1_SETTINGS_MODERATOR_EXPLAIN'				=> 'It must be a member of a moderator group',
	'ACP_F1_SETTINGS_DEACTIVATED'					=> '*** de-activated ***',
	'ACP_F1_SETTINGS_UPDATED'						=> 'Formula 1 Settings succesfully updated',
	'ACP_F1_SETTINGS_ACCESS_GROUP'					=> 'WebTip Group',
	'ACP_F1_SETTINGS_ACCESS_GROUP_EXPLAIN'			=> 'Here you can give permissions to a group for the WebTip',
	'ACP_F1_SETTINGS_OFFSET'						=> 'Deadline Offset',
	'ACP_F1_SETTINGS_OFFSET_EXPLAIN'				=> 'Here you can set the Deadline. (Time in Seconds before the Race Start)',
	'ACP_F1_SETTINGS_RACEOFFSET'					=> 'Race delay',
	'ACP_F1_SETTINGS_RACEOFFSET_EXPLAIN'			=> 'Here you can set when the "actual race" changed. (Time in Seconds from Race Start)',
	'ACP_F1_SETTINGS_FORUM'							=> 'Forum',
	'ACP_F1_SETTINGS_FORUM_EXPLAIN'					=> 'Set the forum where you discuss the WebTip',
	'ACP_F1_SETTINGS_SHOW_PROFILE'					=> 'Display in profile',
	'ACP_F1_SETTINGS_SHOW_PROFILE_EXPLAIN'			=> 'Do you want to display information in users profile?',
	'ACP_F1_SETTINGS_SHOW_VIEWTOPIC'				=> 'Display in postings',
	'ACP_F1_SETTINGS_SHOW_VIEWTOPIC_EXPLAIN'		=> 'Do you want to display information in users prostings?',
	'ACP_F1_SETTINGS_SHOW_COUNTDOWN'				=> 'Display Countdown',
	'ACP_F1_SETTINGS_SHOW_COUNTDOWN_EXPLAIN'		=> 'Do you want to display countdown till deadline in WebTip?',
	'ACP_F1_SETTINGS_POINTS'						=> 'Points',
	'ACP_F1_SETTINGS_POINTS_MENTIONED'				=> 'Mentioned',
	'ACP_F1_SETTINGS_POINTS_MENTIONED_EXPLAIN'		=> 'Points for mention a driver in the Top 10',
	'ACP_F1_SETTINGS_POINTS_PLACED'					=> 'Placed',
	'ACP_F1_SETTINGS_POINTS_PLACED_EXPLAIN'			=> 'Points for the drivers correct place',
	'ACP_F1_SETTINGS_POINTS_FASTEST'				=> 'Fastest',
	'ACP_F1_SETTINGS_POINTS_FASTEST_EXPLAIN'		=> 'Points for the fastest lap',
	'ACP_F1_SETTINGS_POINTS_TIRED'					=> 'Tired',
	'ACP_F1_SETTINGS_POINTS_TIRED_EXPLAIN'			=> 'Points for the correct count of tired cars',
	'ACP_F1_SETTINGS_SAFETY_CAR'					=> 'Safety Car',
	'ACP_F1_SETTINGS_SAFETY_CAR_EXPLAIN'			=> 'Points for the correct count of safety car deployment',
	'ACP_F1_SETTINGS_PICS'							=> 'Pics',
	'ACP_F1_SETTINGS_SHOW_HEADBANNER'				=> 'Show banner',
	'ACP_F1_SETTINGS_SHOW_HEADBANNER_EXPLAIN'		=> 'Here you can define whether to show the headbanners or not',
	'ACP_F1_SETTINGS_SHOW_AVATAR'					=> 'Show avatar',
	'ACP_F1_SETTINGS_SHOW_AVATAR_EXPLAIN'			=> 'Here you can define whether to show the avatar on users´s statistics or not',
	'ACP_F1_SETTINGS_HEADBANNER_IMG_HEIGHT'			=> 'Banner hight',
	'ACP_F1_SETTINGS_HEADBANNER_IMG_HEIGHT_EXPLAIN'	=> 'Here you can define the <strong>height in px</strong> for the banner',
	'ACP_F1_SETTINGS_HEADBANNER_IMG_WIDTH'			=> 'Banner width',
	'ACP_F1_SETTINGS_HEADBANNER_IMG_WIDTH_EXPLAIN'	=> 'Here you can define the <strong>width in px</strong> for the banner',
	'ACP_F1_SETTINGS_HEADBANNER1_IMG'				=> 'Banner Webtip',
	'ACP_F1_SETTINGS_HEADBANNER1_IMG_EXPLAIN'		=> 'Banner for the WebTip overview page',
	'ACP_F1_SETTINGS_HEADBANNER2_IMG'				=> 'Banner rules',
	'ACP_F1_SETTINGS_HEADBANNER2_IMG_EXPLAIN'		=> 'Banner for the WebTip rules page',
	'ACP_F1_SETTINGS_HEADBANNER3_IMG'				=> 'Banner statistics',
	'ACP_F1_SETTINGS_HEADBANNER3_IMG_EXPLAIN'		=> 'Banner for the WebTip statistics page',
	'ACP_F1_SETTINGS_SHOW_GFXR'						=> 'Show race images',
	'ACP_F1_SETTINGS_SHOW_GFXR_EXPLAIN'				=> 'Do you want to display the race images?',
	'ACP_F1_SETTINGS_NO_RACE_IMG'					=> 'Standart race image',
	'ACP_F1_SETTINGS_NO_RACE_IMG_EXPLAIN'			=> 'Here you can define the standard image, for an empty race image entry',
	'ACP_F1_SETTINGS_RACE_IMG_HEIGHT'				=> 'Race image height',
	'ACP_F1_SETTINGS_RACE_IMG_HEIGHT_EXPLAIN'		=> 'Here you can define the <strong>height in px</strong> for the race image',
	'ACP_F1_SETTINGS_RACE_IMG_WIDTH'				=> 'Race image width',
	'ACP_F1_SETTINGS_RACE_IMG_WIDTH_EXPLAIN'		=> 'Here you can define the <strong>width in px</strong> for the race image',
	'ACP_F1_SETTINGS_SHOW_GFX'						=> 'Show extended images',
	'ACP_F1_SETTINGS_SHOW_GFX_EXPLAIN'				=> 'Do you want to display driver, team and car images?',
	'ACP_F1_SETTINGS_NO_CAR_IMG'					=> 'Standard car image',
	'ACP_F1_SETTINGS_NO_CAR_IMG_EXPLAIN'			=> 'Here you can define the standard image, for an empty car image entry',
	'ACP_F1_SETTINGS_CAR_IMG_HEIGHT'				=> 'Car image height',
	'ACP_F1_SETTINGS_CAR_IMG_HEIGHT_EXPLAIN'		=> 'Here you can define the <strong>height in px</strong> for the car image',
	'ACP_F1_SETTINGS_CAR_IMG_WIDTH'					=> 'Car image width',
	'ACP_F1_SETTINGS_CAR_IMG_WIDTH_EXPLAIN'			=> 'Here you can define the <strong>width in px</strong> for the car image',
	'ACP_F1_SETTINGS_NO_DRIVER_IMG'					=> 'Standard driver image',
	'ACP_F1_SETTINGS_NO_DRIVER_IMG_EXPLAIN'			=> 'Here you can define the standard image, for an empty driver image entry',
	'ACP_F1_SETTINGS_DRIVER_IMG_HEIGHT'				=> 'Driver image height',
	'ACP_F1_SETTINGS_DRIVER_IMG_HEIGHT_EXPLAIN'		=> 'Here you can define the <strong>height in px</strong> for the driver image',
	'ACP_F1_SETTINGS_DRIVER_IMG_WIDTH'				=> 'Driver image width',
	'ACP_F1_SETTINGS_DRIVER_IMG_WIDTH_EXPLAIN'		=> 'Here you can define the <strong>width in px</strong> for the driver image',
	'ACP_F1_SETTINGS_NO_TEAM_IMG'					=> 'Standard team image',
	'ACP_F1_SETTINGS_NO_TEAM_IMG_EXPLAIN'			=> 'Here you can define the standard image, for an empty team image entry',
	'ACP_F1_SETTINGS_TEAM_IMG_HEIGHT'				=> 'Team image height',
	'ACP_F1_SETTINGS_TEAM_IMG_HEIGHT_EXPLAIN'		=> 'Here you can define the <strong>height in px</strong> for the team image',
	'ACP_F1_SETTINGS_TEAM_IMG_WIDTH'				=> 'Team image width',
	'ACP_F1_SETTINGS_TEAM_IMG_WIDTH_EXPLAIN'		=> 'Here you can define the <strong>width in px</strong> for the team image',
	'ACP_F1_SETTINGS_SEASON_RESET'					=> 'Reset season',
	'ACP_F1_SETTINGS_SEASON_RESET_EXPLAIN'			=> '<strong>Attention:</strong> If you click the button, all season data will be lost!<br /><br />After resetting the season, you have to update all race start times.',
	'ACP_F1_SETTINGS_SEASON_RESETTED'				=> 'Season resettet. Update race start times!',
	'ACP_F1_SETTING_GUEST_VIEWING'					=> 'WebTip visible for guests',
	'ACP_F1_SETTING_GUEST_VIEWING_EXPLAIN'			=> 'Only possible if permission for a <strong>WebTip Group</strong> is <strong>de-activated</strong>.',
	'ACP_F1_SETTINGS_POINTS_ENABLED'				=> 'Activate Ultimate Point support',
	'ACP_F1_SETTINGS_POINTS_ENABLED_EXPLAIN'		=> 'Here you can define whether to enable giving points for WebTips or not.<br /><strong>Hint: </strong>Only operational if you have installed the Ultimate Points MOD.',
	'ACP_F1_SETTINGS_POINTS_VALUE'					=> 'Points for given WebTips',
	'ACP_F1_SETTINGS_POINTS_VALUE_EXPLAIN'			=> 'Here you can define how much <strong>Points</strong> a given WebTip is worth.',
	'ACP_F1_SETTINGS_REMINDER_ENABLED'				=> 'Activate Cronjob for reminder mails',
	'ACP_F1_SETTINGS_REMINDER_ENABLED_EXPLAIN'		=> 'Here you can specify whether an email reminder to be sent 2-3 days prior to the start of the race.<br /><strong>Hint: </strong>Can only be activated when the WebTip was limited to a particular group.',

	'ACP_F1_DRIVERS'								=> 'Formula 1 Drivers',
	'ACP_F1_DRIVERS_EXPLAIN'						=> 'Here you can add or edit the drivers',
	'ACP_F1_DRIVERS_ADD'							=> 'Send',
	'ACP_F1_DRIVERS_ADD_DRIVER'						=> 'Add driver',
	'ACP_F1_DRIVERS_TITEL_ADD_DRIVER'				=> 'Add Formula 1 driver',
	'ACP_F1_DRIVERS_TITEL_ADD_DRIVER_EXPLAIN'		=> 'Here you can add a new driver',
	'ACP_F1_DRIVERS_DRIVERNAME'						=> 'Driver name',
	'ACP_F1_DRIVERS_DRIVERIMAGE'					=> 'Driver image',
	'ACP_F1_DRIVERS_DRIVERTEAM'						=> 'Driver team',
	'ACP_F1_DRIVERS_DRIVERPOINTS'					=> 'Driver points',
	'ACP_F1_DRIVERS_EDIT_DRIVER'					=> 'Edit',
	'ACP_F1_DRIVERS_TITEL_EDIT_DRIVER'				=> 'Edit Formula 1 driver',
	'ACP_F1_DRIVERS_TITEL_EDIT_DRIVER_EXPLAIN'		=> 'Here you can edit a Formula 1 driver',
	'ACP_F1_DRIVERS_DELETE_DRIVER'					=> 'Delete',
	'ACP_F1_DRIVERS_DRIVER_DELETED'					=> 'The driver entry was removed',
	'ACP_F1_DRIVERS_DRIVER_UPDATED'					=> 'Driver data updated',
	'ACP_F1_DRIVERS_ERROR_IMAGE'					=> 'Please give a driver pic',
	'ACP_F1_DRIVERS_ERROR_DRIVERNAME'				=> 'Please give a drivername',
	'ACP_F1_DRIVERS_PENALTY'						=> 'Penalty',
	'ACP_F1_DRIVERS_DISABLED'						=> 'Selectable',

	'ACP_F1_TEAMS'									=> 'Formula 1 Teams',
	'ACP_F1_TEAMS_EXPLAIN'							=> 'Here you can add or edit the teams',
	'ACP_F1_TEAMS_ADD_TEAM'							=> 'New Team',
	'ACP_F1_TEAMS_ADDTEAM_TITLE'					=> 'Add Formula 1 Team',
	'ACP_F1_TEAMS_ADDTEAM_TITLE_EXPLAIN'			=> 'Here you can add a new team',
	'ACP_F1_TEAMS_ADDTEAM_TEAMNAME'					=> 'Team Name',
	'ACP_F1_TEAMS_ADDTEAM_TEAMIMAGE'				=> 'Team Logo',
	'ACP_F1_TEAMS_ADDTEAM_TEAMCAR'					=> 'Team Car',
	'ACP_F1_TEAMS_ADD'								=> 'Send',
	'ACP_F1_TEAMS_EDITTEAM_TITLE'					=> 'Edit Formula 1 Team',
	'ACP_F1_TEAMS_EDITTEAM_TITLE_EXPLAIN'			=> 'Here you can edit a Formular 1 Team',
	'ACP_F1_TEAMS_DRIVERTEAM'						=> 'Team',
	'ACP_F1_TEAMS_DRIVERPOINTS'						=> 'WM Points',
	'ACP_F1_TEAMS_EDIT_TEAM'						=> 'Edit',
	'ACP_F1_TEAMS_DELETE_TEAM'						=> 'Delete',
	'ACP_F1_TEAMS_TEAM_UPDATED'						=> 'Team data saved',
	'ACP_F1_TEAMS_TEAM_DELETED'						=> 'Team deleted',
	'ACP_F1_TEAMS_ERROR_TEAMNAME'					=> 'Please give a Teamname',
	'ACP_F1_TEAMS_PENALTY'							=> 'Penalty',

	'ACP_F1_RACES'									=> 'Formula 1 Races',
	'ACP_F1_RACES_EXPLAIN'							=> 'Here you can add or edit Races',
	'ACP_F1_RACES_ADD_RACE'							=> 'New Race',
	'ACP_F1_RACES_TITEL_ADD_RACE'					=> 'Add Formula 1 Race',
	'ACP_F1_RACES_TITEL_ADD_RACE_EXPLAIN'			=> 'Here you can add a new Race',
	'ACP_F1_RACES_RACENAME'							=> 'Location',
	'ACP_F1_RACES_RACEIMAGE'						=> 'Logo',
	'ACP_F1_RACES_RACELENGTH'						=> 'Lap Length',
	'ACP_F1_RACES_RACEDISTANCE'						=> 'Distance',
	'ACP_F1_RACES_RACELAPS'							=> 'Laps',
	'ACP_F1_RACES_RACEDEBUT'						=> 'Debut',
	'ACP_F1_RACES_RACETIME'							=> 'Race start',
	'ACP_F1_RACES_RACEDEAD'							=> 'Deadline',
	'ACP_F1_RACES_EDIT_RACE'						=> 'Edit',
	'ACP_F1_RACES_TITEL_EDIT_RACE'					=> 'Edit Formula 1 Race',
	'ACP_F1_RACES_TITEL_EDIT_RACE_EXPLAIN'			=> 'Here you can edit a Formular 1 Race',
	'ACP_F1_RACES_DELETE_RACE'						=> 'Delete',
	'ACP_F1_RACES_ADD'								=> 'Send',
	'ACP_F1_RACES_RACE_UPDATED'						=> 'Race data saved',
	'ACP_F1_RACES_RACE_DELETED'						=> 'Race deleted',
	'ACP_F1_RACES_ERROR_RACENAME'					=> 'Please insert a Race Location',
));
