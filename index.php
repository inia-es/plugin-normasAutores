<?php

/**
 * @defgroup plugins_blocks_normasAutores
 */
 
/**
 * @file plugins/blocks/normasAutores/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * With contributions from:
 * 	- 2014 Instituto Nacional de Investigacion y Tecnologia Agraria y Alimentaria
 *
 * @ingroup plugins_blocks_normasAutores
 * @brief Wrapper for "normas autores" block plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:09 asmecher Exp $


require_once('normasAutoresBlockPlugin.inc.php');

return new normasAutoresBlockPlugin();

?> 
