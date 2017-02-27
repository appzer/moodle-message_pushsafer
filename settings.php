<?php

/**
 *
 * Pushsafer for Moodle is distributed as GPLv3 software, and is provided free of charge without warranty
 * A full copy of this licence can be found @ http://www.gnu.org/licenses/gpl.html
 *
 * @package moodle-message_pushsafer
 * @author Kevin Siml https://www.pushsafer.com
 * @copyright Copyright 2017 Kevin Siml pushsafer.com.
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public Licence v3 (See code header for additional terms)
 */


defined('MOODLE_INTERNAL') || die('File cannot be accessed directly.');

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('privatekey', get_string('privatekey', 'moodle-message_pushsafer'), get_string('setprivatekey', 'moodle-message_pushsafer'), '', PARAM_RAW));
}
