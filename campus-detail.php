<?php
$campus = "";
if (isset($_GET['campus'])) {
    $campus = htmlentities($_GET['campus'], ENT_QUOTES, "UTF-8");
}
// *** Open data *** //
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

// *** Read Data *** //
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
        $dormDetails[] = fgetcsv($file);
    }

    if ($debug) {
        print '<p>Finished reading data. File closed.</p>';
        print '<p>My data array<p><pre> ';
        print_r($dormDetails);
        print '</pre></p>';
    }
} // ends if file was opened 

fclose($file);
include('top.php');
?>
<article id="dorm">
    <h2><?php if($campus == "CentralCampus"){
                print "Central Campus";
              } else {
                print $campus;
              }
        ?> 
        Dorms</h2>
    <figure class="campus">
            <a class="campus-link" href="room-listings.html">
                <img class="campus-link" alt="<?php print $campus?>" src="images/<?php print $campus . ".jpg"?>">
            </a>
            <figcaption><?php print 'All ';
                              if($campus == "CentralCampus"){
                                print "Central Campus";
                              } else {
                                print $campus;
                              }?>
             Dorms</figcaption>
        </figure>
    <?php
        foreach ($dormDetails as $dormDetail) {
            if ($campus == str_replace(' ', '', $dormDetail[0])) {
                print '<figure class="dorm"><a class="dorm-link" href="room-listings.html">';
                print '<img class="dorm-link" alt="' . $dormDetail[1];
                print '" src="images/' . str_replace(' ', '', $dormDetail[1]);
                print '.jpg">';
                print '</a><figcaption>' . $dormDetail[1];
                print '</figcaption></figure>';
            }
        }   
    ?>
</article>
<?php
include('footer.php');
?>
</body>
</html>
