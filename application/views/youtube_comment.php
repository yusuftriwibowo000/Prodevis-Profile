<!DOCTYPE html>
<html lang="en" xml:lang="en">

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 12:56:53 GMT -->
<!-- Added by HTTrack -->
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
	            <tbody>
	                <?php
	                $MAX_RESULTS = 10;
	                $url = $_POST["url"];
	                $id_video = substr($url, 32);
	                // $urlCommentList ='https://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=-u-YTpZyh80&maxResults=' . $MAX_RESULTS . '&key=AIzaSyDLADKdbDEL1pShayqZryLoZAIR07psbzE';

	                $urlCommentList ='https://www.googleapis.com/youtube/v3/commentThreads?part=snippet&videoId='. $id_video . '&maxResults=' . $MAX_RESULTS . '&key=AIzaSyDLADKdbDEL1pShayqZryLoZAIR07psbzE';
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
	                    for ($i = 0; $i < $MAX_RESULTS; $i++) {        
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
	            </tbody>
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

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 13:23:56 GMT -->

</html>