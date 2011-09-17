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

/**
 * Vxml Var
 *
 * Names Meta as Var is a reserved word
 *
 * @category PhpVxml
 * @package Vxml
 * @author Bahul Neel Upadhyaya <bahulneel@gmail.com>
 */
class Meta implements Document\Element_Leaf, Structure\VxmlChild
{
	/**
	 * Meta Name
	 *
	 * @var string
	 */
	protected $_name = null;

	/**
	 * Meta content
	 *
	 * @var string
	 */
	protected $_content = null;

	/**
	 * Meta http-equiv
	 *
	 * @var string
	 */
	protected $_httpEquiv = null;

	/**
	 * Sets the vars name
	 *
	 * @param string $name the variable name
	 *
	 * @return void
	 */
	public function setName($name)
	{
		$this->_name = $name;
	}

	/**
	 * Gets the variable name
	 *
	 * @return string The variables name
	 */
	public function getName()
	{
		return $this->_name;
	}

	/**
	 * Sets the content
	 *
	 * @param string $content
	 *
	 * @return void
	 */
	public function setContent($content)
	{
		$this->_content = $content;
	}

	/**
	 * Gets the content
	 *
	 * @return string The ECMAScript contentession
	 */
	public function getContent()
	{
		return $this->_content;
	}

	/**
	 * Sets the http-equiv
	 *
	 * @param string $httpEquiv
	 *
	 * @return void
	 */
	public function setHttpEquiv($httpEquiv)
	{
		$this->_httpEquiv = $httpEquiv;
	}

	/**
	 * Gets the content
	 *
	 * @return string The ECMAScript contentession
	 */
	public function getHttpEquiv()
	{
		return $this->_httpEquiv;
	}
}
