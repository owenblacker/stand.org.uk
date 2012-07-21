<?
$errors= array( );
if ( empty( $error_marker ) )
	$error_marker = " * ";

function check_data( $required, $custom, $submit_flag, $success_page ) {
	global $errors;
	if ( empty( $GLOBALS[$submit_flag] ) )
		return 1;

	reset( $required );
	while ( list( $key, $val ) = each( $required ) ) {
		if ( empty( $GLOBALS[$key] ))
			$errors[$key] = $val;
	}
	while ( list( $key, $val ) = each( $custom ) ) {
		$ret = $val( $key );
		if ( is_string( $ret ) )
			$errors[$key] = $ret;
	}
	if ( ! count( $errors ) ) {
		$errors = array();
		return 0;
	}
	return 1;
}

function mark_error( $field, $txt ) {
	global $errors;
	global $error_marker;
	
	if ( ! empty( $errors[$field] ))
		print ereg_replace("%text%", $txt, $error_marker );
	else
		print $txt;
}

function report_errors( $template ) {
	global $errors;
	$str="";
	if ( ! count( $errors ) )
		return 0;
	reset( $errors );
	while ( list( $key, $val ) = each ( $errors ) ) {
		$str .= "$val<br>";
	}
	$template = ereg_replace("%error_report%", $str, $template );
	print "$template";
}

// custom check function: accepts fieldname -- returns string on error and 1 on success
function validate_mail( $field ) {
	// quick and dirty mail check nicked from phil gyford
	if ( ! eregi( "[-0-9=?.A-Z&\'*+\\/^_`a-z{|}!#$%~]+@[-0-9=?A-Z&\'*+\\/^_`a-z{|}!#$%~]+\.[-0-9=?A-Z&\'*+\\/^_`a-z{|}!#.$%~]+", $GLOBALS[$field] ) ) {
		return "<LI>email address";
	}
	return 1;
}



?>
