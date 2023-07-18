<?php
session_start();

$old_session_id = session_id();

session_regenerate_id(true);

$new_session_id = session_id();

echo '古いセッション:' . $old_session_id . '<br />';
echo '新しいセッション:' . $new_session_id . '<br />';
