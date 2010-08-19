<?php
//
// Created on: <19-Aug-2010 00:00:00 nfrp>
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: projects module for eZ Publish
// SOFTWARE RELEASE: 1.x
// COPYRIGHT NOTICE: Copyright (C) 2010 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   GNU General Public License for more details.
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

$Module = array( 'name' => 'Project Export Module' );

$ViewList = array();
$ViewList['export'] = array(
                            'script' => 'export.php',
                            'ui_context' => 'read',
                            'params' => array( 'projectUnixName' )
                           );

// $FunctionList = array();
// $FunctionList['export'] = array();

?>