<?php

/* qdp

   Copyright (C) 2015 Creative Commons

   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

require_once('cas.php');

if(phpCAS::isAuthenticated()) {
    // If logged in, great! Get the user so the page can use it
    $casuid = phpCAS::getUser();
} else {
    // Not logged in? Eek! Make sure the user logs in!
    $casuid = null;
    header('Location: login.php');
    die();
}
