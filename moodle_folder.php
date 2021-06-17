<?php
$folderPath = "moodledata";
mkdir("$folderPath");
chmod("$folderPath", 0777);

// Use of "copy()" / "move_uploaded_file()" function here, using some "$targetFile" variable.
// chmod($targetFile, 0777);
?>