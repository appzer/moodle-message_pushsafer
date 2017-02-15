<?php
/**
 *
 * Pushsafer for Moodle is distributed as GPLv3 software, and is provided free of charge without warranty
 * A full copy of this licence can be found @ http://www.gnu.org/licenses/gpl.html
 *
 * @package message_pushsafer
 * @author Kevin Siml https://www.pushsafer.com
 * @copyright Copyright &copy; 2016 Kevin Siml pushsafer.com.
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public Licence v3 (See code header for additional terms)
 */

defined('MOODLE_INTERNAL') || die('File cannot be accessed directly.');


function xmldb_message_pushsafer_install() {
    global $DB;

    // Register the provider
    $provider = new stdClass();
    $provider->name = 'pushsafer';
    $DB->insert_record('message_processors', $provider);
    return false;
}
?>
