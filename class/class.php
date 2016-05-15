<?php
class Navigation {
					private $chap;
					private $link;

					function __construct ($chap, $link)
					{
						$this -> chap = $chap;
						$this -> link =$link;
					}
					public function get_parts (){
						return $this -> chap;
					}
					public function get_links(){
						return $this -> link;
					}
					}

$select= array( 	
			new Navigation('Новости', 'news'),
			new Navigation('Фотографии', 'photo'),
			new Navigation('Статьи', 'read_text'),
				);


class Post{
	private $filename, $title, $author, $text;
	function __construct ($filename, $title, $author, $text)
	{
		$this -> filename 	=$filename;
		$this -> title  	=$title;
		$this -> author 	=$author;
		$this -> text 		=$text;
	}
	function Get_filename (){
		return $this -> filename;
	}

	function Get_title(){
		return $this -> title;
	}

	function Get_author (){
		return $this -> author;
	}
	function Get_text_long(){
		return $this -> text;
	}
	
	function Get_text_small (){
		$this ->text=mb_substr($this -> text, 0, 340);
		$this ->text=rtrim($this ->text, "!,.-"); 
		$this ->text=mb_substr($this ->text, 0, strrpos($this ->text, ' '));
		$this ->text=$this ->text."...";
		return $this -> text;
	}
}