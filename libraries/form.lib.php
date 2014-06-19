<?php

/**
*	
*	Form creation class
*
*	usage   : Static
*	@version : 1
*	@author  : Nick Sheffield
*
*/

class Form{

	
	/**
	*   Creates a <form> open tag
	*
	*	@param   string $action   The url for the form to post to
	*	@param   string $method   Either "post" or "get"
	*
	*	@return  string $html     The completed <form> tag
	*	
	*/
	public static function open($action = '', $method = 'post'){
		$html = "<form action='$action' method='$method'>";
		return $html;
	}

	
	/**
	*   
	*	
	*/
	public static function open_multipart($action = ''){
		$html = "<form action='$action' method='post' enctype='multipart/form-data'>";
		return $html;
	}

	
	/**
	*   Closes the <form>  tag
	*
	*	@return  string $html     The completed <form> tag
	*	
	*/
	public static function close(){
		$html = '</form>';
		return $html;
	}

	

	/**
	*   Creates a <input> tag
	*
	*	@param   string $type     The type of data that can be put in the input field
	*	@param   string $name     Name of the input 
	*   @param   string $value    Value of input
	*
	*	@return  string $html     The completed <input> tag
	*	
	*/
	public static function input($type, $name, $value = '', $extras = ''){
		$html = "<input type='$type' id='$name' name='$name' value='$value' $extras>";
		return $html;
	}

	

	/**
	*   Creates a <label> tag
	*
	*	@param   string $for      The type of data that can be put in the input field
	*	@param   string $text     Name of the input 
	*
	*	@return  string $html     The completed <label> teg
	*	
	*/
	public static function label($for, $text){
		$html = "<label for='$for'>$text</label>";
		return $html;
	}

	

	/**
	*   Creates a <textarea> tag
	*
	*	@param   string $name     The name of textarea tag
	*	@param   string $value    Input of textarea
	*
	*	@return  string $html     The completed <textarea> teg
	*	
	*/
	public static function textarea($name, $value = ''){
		$html = "<textarea id='$name' name='$name'>$value</textarea>";
		return $html;
	}

	

	/**
	*   Creates  a <options> tag
	*
	*	@param   string $value          The type of data that can be put in the input field
	*	@param   string $pre_selected   Name of the input 
	*
	*	@return  string $html           The completed <options> teg
	*	
	*/
	public static function options($values, $pre_selected){
		$html = '';
		foreach($values as $value => $text){
			
			$selected = $pre_selected == $value ? 'selected' : '';
			
			$html .= "<option value='$value' $selected>$text</option>";
		}
		return $html;
	}

	public static function select($name, $values, $pre_selected){
		$html = "<select name='$name' id='$name'>";
		$html .= self::options($values. $pre_selected);
		$html .= '</select>';
		return $html;
	}

	/* Shortcut functions for common input types */

	public static function hidden($name, $value){
		$html = self::input('hidden', $name, $value);
		return $html;
	}

	public static function text($name, $value = ''){
		$html = self::input('text', $name, $value);
		return $html;
	}

	public static function password($name, $value = ''){
		$html = self::input('password', $name, $value);
		return $html;
	}

	public static function file($name = 'file'){
		$html = self::input('file', $name.'[]', '', 'multiple');
		return $html;
	}

	public static function submit($text = 'Submit'){
		$html = self::input('submit', '', $text);
		return $html;
	}

	public static function max_file_size($size = '4194304'){
		$html = self::hidden('MAX_FILE_SIZE', $size);
		return $html;
	}

	public static function number($name, $value = '', $extras = ''){
		$html = self::input('number', $name, $value, $extras);
		return $html;
	}
}