<?php
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ publish projects extension
// SOFTWARE RELEASE: 0.x
// COPYRIGHT NOTICE: Copyright (C) 2006-2011 Nicolas Pastorino <nfrp@ez.no>
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//


class IsGithubRepo
{
    /*!
     Constructor
    */
    function IsGithubRepo( $name = "isgithubrepo" )
    {
        $this->Operators = array( $name );
    }
        /*!
     Returns the template operators.
    */
    function &operatorList()
    {
        return $this->Operators;
    }

    /*!
     See eZTemplateOperator::namedParameterList()
    */
    function namedParameterList()
    {
    }

    function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
    {
        try
        {
            $url = new githubFeedUrl( $operatorValue );
            $operatorValue = true;
        }
        catch ( Exception $e )
        {
            $operatorValue = false;
        }
    }

    var $Operators;
}

?>
