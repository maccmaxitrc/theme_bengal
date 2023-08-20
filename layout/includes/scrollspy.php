<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Bengal - scrollspy include.
 *
 * @package   theme_bengal
 * @copyright 2023 Max MacCluer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$scrollspy = get_config('theme_bengal', 'scrollspy');

// Add scroll-spy AMD module if the feature is enabled.
if ($scrollspy == THEME_BENGAL_SETTING_SELECT_YES) {
    $PAGE->requires->js_call_amd('theme_bengal/scrollspy', 'init');
}
