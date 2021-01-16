### Remove mysqlind usage.

That is $stmnt->get_result()

mysqlind is causing problems on the live server even thoughy installed.  New SQL syntax will be the procedural mysqli without mysqlind

From:https://stackoverflow.com/questions/10752815/mysqli-get-result-alternative
[code=php]
$Statement = $Database->prepare( 'SELECT x FROM y WHERE z = ?' );
$Statement->bind_param( 's', $z );
$Statement->execute();
$RESULT = get_result( $Statement );
while ( $DATA = array_shift( $RESULT ) ) {
    // Do stuff with the data
}
[/code]


###Install SSL cert.

See SSL.md
