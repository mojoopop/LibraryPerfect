<?php
  $g_employees = array();
  $g_elem = null;
  
  function startElement( $parser, $name, $attrs ) 
  {
  global $g_employees, $g_elem;
  if ( $name == 'BOOK' ) $g_employees []= array();
  $g_elem = $name;
  }
  
  function endElement( $parser, $name ) 
  {
  global $g_elem;
  $g_elem = null;
  }
  
  function textData( $parser, $text )
  {
  global $g_employees, $g_elem;
  if ( $g_elem == 'AUTHOR' ||
  $g_elem == 'PUBLISHER' ||
  $g_elem == 'TITLE' )
  {
  $g_employees[ count( $g_employees ) - 1 ][ $g_elem ] = $text;
  }
  }
  
  $parser = xml_parser_create();
  
  xml_set_element_handler( $parser, "startElement", "endElement" );
  xml_set_character_data_handler( $parser, "textData" );
  
  $f = fopen( 'books.xml', 'r' );
  
  while( $data = fread( $f, 4096 ) )
  {
  xml_parse( $parser, $data );
  }
  
  xml_parser_free( $parser );
  
  foreach( $g_employees as $book )
  {
  echo $book['TITLE']." - ".$book['AUTHOR']." - ";
  echo $book['PUBLISHER']."\n";
  }
  ?>