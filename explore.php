<!DOCTYPE html>
<html>

    <body>
<?php
// *** Open country data *** //
$debug = false;
if (isset($_GET["debug"])) {
    $debug = true;
}

$myFolder = '';
$myFileName = 'dorms';
$fileExt = '.csv';
$filename = $myFolder . $myFileName . $fileExt;

if ($debug)
    print '<p>filename is ' . $filename;

$file = fopen($filename, "r");

if ($debug) {
    if ($file) {
        print '<p>File Opened Succesful.</p>';
    } else {
        print '<p>File Open Failed.</p>';
    }
}

// *** Read country Data *** //
if ($file) {
    if ($debug)
        print '<p>Begin reading data into an array.</p>';

    // read the header row, copy the line for each header row
    // you have.
    $headers[] = fgetcsv($file);

    if ($debug) {
        print '<p>Finished reading headers.</p>';
        print '<p>My header array</p><pre>';
        print_r($headers);
        print '</pre>';
    }

    // read all the data
    while (!feof($file)) {
        $campusDetails[] = fgetcsv($file);
    }

    if ($debug) {
        print '<p>Finished reading data. File closed.</p>';
        print '<p>My data array<p><pre> ';
        print_r($campusDetails);
        print '</pre></p>';
    }
} // ends if file was opened 

fclose($file);
include('top.php');
?>
<article>
    <h2>Campuses</h2>
        <?php
        $lastCampus = "";
        foreach ($campusDetails as $campusDetail) {
            if ($lastCampus != $campusDetail[0]) {
                print '<figure class="campus"><a class="campus-link" href="campus-detail.php?campus=';
                print str_replace('_', ' ', $campusDetail[0]);
                print '">';
                print '<img class="campus-link" alt="'. $campusDetail[0];
                print '" src="images/';
                print str_replace(' ', '', $campusDetail[0]);
                print '.jpg">';
                print '</a></figure>';
                $lastCampus = $campusDetail[0];
            }
        }
        ?>
</article>
<?php
include('footer.php');
?>
</body>
</html>