<?php

/**
 * @defgroup plugins_blocks_authorsInstructions
 */
 
/**
 * @file plugins/blocks/authorsInstructions/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * With contributions from:
 * 	- 2014 Instituto Nacional de Investigacion y Tecnologia Agraria y Alimentaria
 *
 * @ingroup plugins_blocks_authorsInstructions
 * @brief Wrapper for "authors instructions" block plugin.
 *
 */

// $Id: index.php,v 1.5.2.1 2009/04/08 19:43:09 asmecher Exp $


require_once('authorsInstructionsBlockPlugin.inc.php');

return new authorsInstructionsBlockPlugin();

?> 
