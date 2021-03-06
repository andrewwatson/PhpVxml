<?php
/**
* PHP VXML
*
* PHP Version 5.3
*
* Copyright (c) 2011, Bahul Neel Upadhyaya <bahulneel@gmail.com>.
* All rights reserved.
*
* Redistribution and use in source and binary forms, with or without
* modification, are permitted provided that the following conditions
* are met:
*
*   * Redistributions of source code must retain the above copyright
*     notice, this list of conditions and the following disclaimer.
*
*   * Redistributions in binary form must reproduce the above copyright
*     notice, this list of conditions and the following disclaimer in
*     the documentation and/or other materials provided with the
*     distribution.
*
*   * Neither the name of Bahul Neel Upadhyaya nor the names of his
*     contributors may be used to endorse or promote products derived
*     from this software without specific prior written permission.
*
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
* "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
* LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
* FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
* COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
* INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
* BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
* LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
* CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
* LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
* ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
* POSSIBILITY OF SUCH DAMAGE.
*
* @category PhpVxml
* @package Vxml
* @author Bahul Neel Upadhyaya <bahulneel@gmail.com>
* @copyright  2011 Bahul Neel Upadhyaya <bahulneel@gmail.com>
* @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
*/

namespace Vxml;

use Vxml\Document\Structure\VxmlChild;

use Vxml\Menu\ChildList;

/**
 * Vxml Menu
 *
 * @category PhpVxml
 * @package Vxml
 * @author Bahul Neel Upadhyaya <bahulneel@gmail.com>
 */
class Menu extends Node implements VxmlChild
{
	/**
	 * The forms id
	 *
	 * @var string
	 */
	protected $_id = null;

	/**
	 * The form scope
	 *
	 * @var string
	 */
	protected $_scope = null;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->_children = new ChildList();
	}

	/**
	 * Sets the id
	 *
	 * @param string $id The id to set
	 *
	 * @return void
	 */
	public function setId($id)
	{
		$this->_id = $id;
	}

	/**
	 * Gets the Id
	 *
	 * @return string The forms id
	 */
	public function getId()
	{
		return $this->_id;
	}

	/**
	 * Sets the form's scope
	 *
	 * @param string $scope The form's scope
	 */
	public function setScope($scope)
	{
		$this->_scope = $scope;
	}

	/**
	 * Gets the form's scope
	 *
	 * @return string The forms scope
	 */
	public function getScope()
	{
		return $this->_scope;
	}
}
