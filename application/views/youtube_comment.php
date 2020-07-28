<?php
function showYouTubeVideoComments() {
	
	$url = $_POST["url"];
	$id_video = substr($url, 32);
    $videoUrl = file_get_contents("https://www.googleapis.com/youtube/v3/commentThreads?part=snippet&videoId=$id_video&key=AIzaSyAoXXywwvb2Y9VBCUkVhJ4ajkn38rCzu9Y");
    $jsonStuff = json_decode($videoUrl, true);

    if (empty($jsonStuff)) { echo "No comments were found."; } //If there are no comments, tell the user.

/* Display each comment 'item' in array */
    foreach($jsonStuff['items'] as $val) {

      $commentName = $val['snippet']['topLevelComment']['snippet']['authorDisplayName']; 
      $commentPic = $val['snippet']['topLevelComment']['snippet']['authorProfileImageUrl']; 
      $comment = $val['snippet']['topLevelComment']['snippet']['textDisplay']; 


    echo '<tbody>
            <tr>
                <td>'.$commentName.'</td>
                <td><img src="'.$commentPic.'" width="64" /></td>
                <td>'.$comment.'</td>
            </tr>
        </tbody>';
    }

}
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<?php $this->load->view('modul template/head'); ?>
</head>

<body>
	<?php $this->load->view('modul template/navbar'); ?>

	<button onclick="sortTable()">Shuffle</button><br>

	<div class="body">
	    <div class="table-responsive">
	        <table id="myTable" class="table table-striped table-bordered">
	           <thead>
	                <tr>
	                    <th>Name</th>
	                    <th>Picture</th>
	                    <th>Comment</th>
	                </tr>
	            </thead>
	            <?php showYouTubeVideoComments(); ?>
	            <!--<tbody>
	                <?php
	                $MAX_RESULTS = 10;
	                $url = $_POST["url"];
	                $id_video = substr($url, 32);
	                // $urlCommentList ='https://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=-u-YTpZyh80&maxResults=' . $MAX_RESULTS . '&key=AIzaSyDLADKdbDEL1pShayqZryLoZAIR07psbzE';

	                $urlCommentList ='https://www.googleapis.com/youtube/v3/commentThreads?part=snippet&videoId='. $id_video . '&key=AIzaSyAoXXywwvb2Y9VBCUkVhJ4ajkn38rCzu9Y';
	                    $curl = curl_init();
	                    curl_setopt($curl, CURLOPT_URL, $urlCommentList);
	                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	                    curl_setopt($curl, CURLOPT_HEADER, 0);
	                    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	                    curl_setopt($curl, CURLOPT_VERBOSE, 0);
	                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	                    $result = curl_exec($curl);
	                    curl_close($curl);

	                    $data = json_decode($result);
	                    $value = json_decode(json_encode($data), true);
	                ?>
	                <?php
	                //Comments List
	                    for ($i = 0; $i <= $MAX_RESULTS; $i++) {        
	                        $commentPict = $value['items'][$i]['snippet']['topLevelComment']['snippet']['authorProfileImageUrl'];
	                        $commentName = $value['items'][$i]['snippet']['topLevelComment']['snippet']['authorDisplayName'];
	                        $comment = $value['items'][$i]['snippet']['topLevelComment']['snippet']['textDisplay'];
	                ?>
	                <tr>
	                    <td><?=$commentName;?></td>
	                    <td><img src="<?= $commentPict; ?>" width="64" /></td>
	                    <td><?=$comment;?></td>
	                </tr>
	                <?php } ?>
	            </tbody> -->
	        </table>
	    </div>
	</div>

	<script type="text/javascript">
		function sortTable() {
		  //get tabel id
		  let table = document.getElementById("myTable");
		  //1. get semua rows
		  let rowsCollection = table.querySelectorAll("tr");
		  //2. convert kedalam array
		  let rows = Array.from(rowsCollection)
		    .slice(1); //skip header row

		  //3. shuffle
		  shuffleArray(rows);

		  //4. tambahkan kembali ke DOM
		  for (const row of rows) {
		    table.appendChild(row);
		  }
		}


		// Randomize array element order in-place.
		function shuffleArray(array) {
		  for (var i = array.length - 1; i > 0; i--) {
		    var j = Math.floor(Math.random() * (i + 1));
		    var temp = array[i];
		    array[i] = array[j];
		    array[j] = temp;
		  }
		}
	</script>

	<?php $this->load->view('modul template/footer'); ?>
</body>

</html>