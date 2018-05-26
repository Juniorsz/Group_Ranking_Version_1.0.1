<!DOCTYPE html>
<!-- Theme was designed by Lê Quang Vỹ -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_name" content="csrf_test_name">
    <meta name="csrf_hash" content="b4493fc81221e608e1d766ca37358500">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dumucer's Ranking System</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css' rel='stylesheet' />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//graph.facebook.com">
    <link rel="dns-prefetch" href="//scontent.xx.fbcdn.net">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://pewrank.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <meta content='http://scei.edu.au/wp-content/uploads/2016/12/IT_3.jpg' property='og:image'/>
    <meta content='Dumucer&#39;s Ranking System v.10 - Hệ thống xếp hạng thành viên nhóm Dumucer ' property='og:description'/>
    <meta content='' property='og:url'/>
    <meta content='Dumucer' name='keywords'/>
    <meta content="Dumucer's Ranking " name='keywords'/>
   <meta content='100012668051362' property='fb:admins'/>
    <meta content='author' name='Sven'/>
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    input {
    border-radius: 0;
    }
      input,
      button {
        font-size: inherit;
        padding: 0.7em;
        /* the following ensures they're all using the same box-model for rendering */
        -moz-box-sizing: content-box;
        /* or `border-box` */
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
      }
      strong{
      font-weight:normal;
      }
      th{
      font-weight:normal;
      }
      * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }
      
      .form-control::-webkit-input-placeholder {
        font-family: 'Roboto', sans-serif;
      }
      
      ..form-control:-moz-placeholder {
        font-family: 'Roboto', sans-serif;
      }
      /* fade image in after load */
      
      .lazyload,
      .lazyloading {
        opacity: 0;
      }
      
      .lazyloaded {
        opacity: 1;
        transition: opacity 300ms;
      }
      
      td.fix {
        text-align: center;
        vertical-align: middle;
      }
      
      .col-3 {
        color: #FF6B6B;
      }
      
      .col-4 {
        color: #e6e63a;
      }
      
      .col-5 {
        color: #2faad0;
      }
      
      .col-6 {
        color: #e08833;
      }
      
      body {
        font-family: 'Roboto', sans-serif;
        background-color: #24313a;
        color: #cecece;
        font-weight: normal;
        background-color: #24292e;
        background-image: url(star-bg.svg),linear-gradient(#191c20, #24292e 15%);
        background-repeat: repeat-x;
        background-position: center 0, 0 0, 0 0;
        background-attachment: fixed;
        background-size: cover;
        background-repeat: repeat-x;
        background-position: center 0, 0 0, 0 0;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
      }
      
      input[type="text"] {
        font-size: inherit;
      }
      
      .table {
        padding: 15px 0px;
      }
      
      td {
        padding: 5px;
      }
      
      td a {
        text-decoration: none;
        color: #cecece;
      }
      
      #notice {
        color: #3ba098;
        margin: 0px 17px;
        margin-bottom: 10px;
      }
      
      td a:hover {
        text-decoration: underline;
      }
      
      tbody:nth-child(odd) {
        background: #30373e;
      }
      
      #table,
      #search {
        border-radius: 0px;
      }
      
      tbody:nth-child(even) {
        background: #293138;
      }
      
      th {
        padding: 15px 0px 10px 0px;
      }
      
      table {
        padding: 15px 0px 0px 0px;
      }
      
      .table {
        border-collapse: collapse;
      } 
      .avatar {
        border-radius: 50%;
      }
      
      th#avatar {
        width: 62px;
      }
      
      table {
        width: 100%;
      }
      
      #space {
        width: 93%;
        height: 2px;
        background: #cecece;
        margin-left: 10px;
        margin-right: 20px;
        margin-bottom: 20px;
        opacity: 0.7;
      }
      
      #table{
        padding: 5px;
        margin-top: 15px;
      }
      
      .panel-title {
        border-bottom: 2p solid #eee;
        padding: 0px 0px 0px 10px;
        margin-bottom: 8px;
        margin-top: 5px;
      }
      
      h2.panel-title {
        margin-left: 8px;
      }
      
      @media all and (min-width: 930px) {
        #table{
          margin: 0 auto;
          width: 900px;
          background-color: rgb(41, 49, 56);
          border-collapse: collapse;
          font-size: 14px;
        }
      #user{
      text-align:left;
      padding-left:15px;
      }
        #name{
          width:200px;
        }
        #search {
          margin: 0 auto;
          width: 900px;
          background-color: rgb(41, 49, 56);
          border-collapse: collapse;
          font-size: 14px;
        }
        #footer {
          margin: 0 auto;
          width: 900px;
          background-color: rgb(41, 49, 56);
          border-collapse: collapse;
          font-size: 14px;
        }
        .avatar {
          border-radius: 50%;
          width: 40px;
          height: 40px;
        }
        td {
        padding: 4px 15px;
        font-weight: 500;
        }
      #searchRank {
        margin: auto;
        width: 80%;
        letter-spacing: -3.5px;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 65%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 930px) {
        #table{
          width: 100%;
          background-color: rgb(41, 49, 56);
          border-collapse: collapse;
          font-size: 12px;
        }
        .avatar {
          border-radius: 50%;
          width: 30px;
          height: 30px;
        }
        #search {
          width: 100%;
          background-color: rgb(41, 49, 56);
          border-collapse: collapse;
          font-size: 12px;
        }
        #footer {
          width: 100%;
          background-color: rgb(41, 49, 56);
          border-collapse: collapse;
          font-size: 12px;
        }
      #user{
      text-align:left;
      padding-left:15px;
      }
        td {
        padding: 4px 15px;
        font-weight: 500;
         }
         #searchRank {
        margin: auto;
        width: 80%;
        letter-spacing: -3.5px;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 65%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 760px) {
        #name {
          width: 100px;
        }
      #user{
      text-align:left;
      padding-left:15px;
      }
        td {
        padding: 4px 15px;
        font-weight: 500;
         }
         .avatar {
          border-radius: 50%;
          width: 25px;
          height: 25px;
        }
         #searchRank {
        margin: auto;
        width: 80%;
        letter-spacing: -3.5px;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 65%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 693px) {
        #cmt {
          display: none;
        }
        .avatar {
          border-radius: 50%;
          width: 25px;
          height: 25px;
        }
      #user{
      text-align:left;
      padding-left:15px;
      }
        .col-6 {
          display: none;
        }
        #fame{
          display:none;
        }
        .col-7{
          display:none;
        }
        td {
        padding: 4px 15px;
        font-weight: 500;
         }
         #searchRank {
        margin: auto;
        width: 80%;
        letter-spacing: -3.5px;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 65%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 558px) {
        #like {
          display: none;
        }
        .avatar {
          border-radius: 50%;
          width: 20px;
          height: 20px;
        }
        .col-5 {
          display: none;
        }
      #user{
      text-align:left;
      padding-left:15px;
      }
        td {
        padding: 4px 15px;
        font-weight: 500;
         }
         #searchRank {
        margin: auto;
        width: 80%;
        letter-spacing: -3.5px;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 65%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 498px) {
        #posts {
          display: none;
        }
        .avatar {
          border-radius: 50%;
          width: 20px;
          height: 20px;
        }
        .col-4 {
          display: none;
        }
      #user{
      text-align:left;
      padding-left:15px;
      }
        td {
        padding: 4px 15px;
        font-weight: 500;
         }
         #searchRank {
        margin: auto;
        width: 80%;
        letter-spacing: -3.5px;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 65%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 358px) {
        .avatar {
          border-radius: 50%;
          width: 20px;
          height: 20px;
        }
      #user{
      text-align:left;
      padding-left:0px;
      }
        td {
        padding: 7px 0px;
        font-weight: 500;
         }
        #searchRank {
        margin: auto;
        width: 90%;
        padding-bottom: 20px;
      }
      
      .form-control {
        width: 55%;
        border: none;
        background: #21252a;
        color: #CECECE;
        border-radius: none;
      }
      }
      
      @media all and (max-width: 350px) {
        .avatar {
          border-radius: 50%;
          width: 20px;
          height: 20px;
        }
      #user{
      text-align:left;
      padding-left:0px;
      }
        th {
          padding: 15px 0px 10px 0px;
          margin-right: 2px;
          padding-right: 2px;
        }
        #searchRank{width:90%;}
      }
      .btn {
        border: none;
        color: #CECECE;
        background: #1a1d21;
      }
      
      .btn:hover {
        cursor: pointer;
        background:#1a1d21;
      }
      
      *:focus {
        outline: none;
      }
      
      #rankResult {
        text-align: center;
        padding-bottom: 5px;
      }
      
      #rankErrors {
        text-align: center;
        padding-bottom: 15px;
        color:#f16d6d;
      }
      
      #count-member {
        padding-top: 13px;
        border-radius: none;
      }
      
      #table{
        margin-top: 15px;
        background:#293138;
      }
      #p1{margin:5px 0px 0px 0px;}#p2 , #p3{margin:3px 0px;}
      #searchRank{letter-spacing:-7px;padding-bottom:10px;}
      #search{padding-bottom:10px;}
      #wrap{margin:20px 0px;}
      #footer p{text-align:center;padding:10px;}
      #footer a{text-decoration:none;color:#cecece;}
      #footer a:hover{text-decoration:underline;}
      .col-0{width:50px;}
      .col-3, .col-4, .col-5, .col-6, .col-7{width:100px};
      .mod{color:#FF4949;};
      .vip{color:#EEDC3F};
    </style>
  </head>

  <body>
    <!--Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91482018-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-91482018-1');

    </script>
<div id="wrap">
    <div id="search">
      <div class="container w6">
        <?php
    $rank = json_decode(file_get_contents("rank.json"), true);
	$rankCount = count($rank);
	
	$rankforNumber = ($rankCount >= 20) ? 50 : $rankCount;
	?>
          <div class="row">
            <div class="col-sm-12">
              <center>
                <p id="count-member" style="padding-top:13px;">Có <strong><?php echo $rankCount ?></strong> thành viên đã được xếp hạng</p>
              </center>
              <div class="panel panel-primary">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                  <form id="searchRank" method="post">
                    <center>
                      <div class="input-group">
                        <input class="form-control" type="text" name="user" placeholder="Nhập Username hoặc ID Facebook">
                        <span class="input-group-btn"><button type="submit" id="searchButton" class="btn btn-default">SEARCH</button></span>
                      </div>
                    </center>
                  </form>
                  <div id="rankResult" style="display: none;">
                    <p id="p1">Dumucer : <span id="name">{{s.name}}</span></p>
                    <p id="p2">Xếp hạng thứ : <span id="rank">{{s.rank}}</span></p>
                    <p id="p3">Pew Point : <span id="point">{{s.point}}</span></p>
                  </div>
                  <div id="rankErrors" style="color: #f16d6d; display: none;text-align:center;padding-bottom:2px;">{{s.message}}</div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div id="table">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-primary">
            <h2 class="panel-title"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> TOP 50 DUMUCER</h2>
            <div id="space"></div>
            <p id="notice"><i class="icon-equalizer icons"></i> Notice : Cập nhật 12-24 tiếng 1 lần
              <i class="fa fa-spinner fa-spin" aria-hidden="true"></i> </p>
            <table class="table table-bordered table-hover table-striped">
              <col class="col0" />
              <col class="col1" />
              <col class="col2" />
              <col class="col3" />
              <col class="col4" />
              <col class="col5" />
              <col class="col6" />
              <col class="col7" />
              <tr class="bg-info">
                <th class="text-center" id="top">#</th>
                <th class="text-center" id="avatar">Avt</th>
                <th class="text-center" id="user">Dumucer</th>
                <th class="text-center" id="pp">Pew Point</th>
                <th class="text-center" id="posts">Posts</th>
                <th class="text-center" id="like">Reaction</th>
                <th class="text-center" id="cmt">Comment</th>
                <th class="text-center" id="fame">Fame</th>
              </tr>
              <tbody>
                <?php for($i = 0; $i < $rankforNumber; $i++): ?>

                  <td class="col-0" style="vertical-align: middle;text-align: center;">
                    <?php echo $i+1 ?>
                  </td>
                  <td class="col-1" style="vertical-align: middle;text-align: center;"><img class="avatar lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://graph.facebook.com/<?php echo $rank[$i]['id'] ?>/picture?width=40&height=40" alt="" width="40px" height="40px">
                    <td class="col-2" style="width:200px;">
                      <a href="https://wwww.facebook.com/<?php echo $rank[$i]['id'] ?>">
                        <?php echo $rank[$i]['name'] ?>
                      </a>
                      <?php
                      // List MOD //
                      if($rank[$i]['id']==100012668051362 || // Lê Quang Vỹ
                         $rank[$i]['id']==100014137744894 || // Thương Minh Lương
                         $rank[$i]['id']==100009774459305 || // Mạnh Quang
                         $rank[$i]['id']==100009739544823 || // Nguyễn Đức Anh
                         $rank[$i]['id']==100009630198300 || // Ngoc Anh Le
                         $rank[$i]['id']==100007505525273 || // Dao Duy Khanh
                         $rank[$i]['id']==100006719284617 || // Thương Minh Lương
                         $rank[$i]['id']==100005123773551 || // Bunny Sunny
                         $rank[$i]['id']==100004022630201 || // Lê Trường
                         $rank[$i]['id']==100003213831266 || // Kiều My Nguyễn
                         $rank[$i]['id']==100001609383635 || // Truc Nguyen
                         $rank[$i]['id']==100008179155895 || // Nguyễn Hương Ly
                         $rank[$i]['id']==100004161184134){
                            echo " <font color='#FF5A5A' title='Admin'> MOD </font>";
                        }
                     // List VIP
                     elseif($rank[$i]['id'] == 100010137913365 || $rank[$i]['id'] == 100013120114890){
                           echo " <font color='#EEDC3F' title='Vip User'> VIP </font>";
                     }
                     // List LEGEND
                        else{echo "";}
                      ?>
                    </td>
                    <td class="col-3" style="vertical-align: middle;text-align: center;">
                      <?php echo $rank[$i]['points'] ?>
                    </td>
                    <td class="col-4" style="vertical-align: middle;text-align: center;">
                      <?php echo $rank[$i]['post'] ?>
                    </td>
                    <td class="col-5" style="vertical-align: middle;text-align: center;">
                      <?php echo $rank[$i]['reaction'] ?>
                    </td>
                    <td class="col-6" style="vertical-align: middle;text-align: center;">
                      <?php echo $rank[$i]['comment'] ?>
                    </td>
                    <td class="col-7" style="vertical-align: middle;text-align: center;">
                      <?php echo $rank[$i]['commented'] + $rank[$i]['reacted']  ?>
                    </td>
              </tbody>
              <?php endfor; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div id="footer">
     <p>Powered by <a href="http://facebook.com/sven812" target="_blank">Dumucer</a></p>
   
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/3.0.0/lazysizes.min.js"></script>
    <script>
      $("#searchRank").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
          url: "rep?to=web",
          type: "POST",
          data: new FormData(this),
          dataType: "json",
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function() {
            $('#searchButton').html('LOADING  <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>').prop('disabled', true)
          },
          success: function(s) {
            $('#searchButton').text('SEARCH').prop('disabled', false)
            if (s.error == false) {
              $("#rankErrors").hide()
              $("#rankResult").show()
              $("#rankResult").find('#name').text(s.name)
              $("#rankResult").find('#rank').text(s.rank)
              $("#rankResult").find('#point').text(s.point)
            } else if (s.error == true) {
              $("#rankResult").hide()
              $("#rankErrors").text(s.message).show()
            }
          },
          error: function() {
            $("#rankErrors").text("Đã xảy ra lỗi !").show()
          }
        });
      }));

    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112101707-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112101707-1');
</script>

<?php 
function timeAgo($time_ago){
  $cur_time     = time();
  $time_elapsed = $cur_time - $time_ago;
  $seconds 		= $time_elapsed ;
  $minutes 		= round($time_elapsed / 60 );
  $hours 		= round($time_elapsed / 3600);
  $days 		= round($time_elapsed / 86400 );
  $weeks 		= round($time_elapsed / 604800);
  $months 		= round($time_elapsed / 2600640 );
  $years 		= round($time_elapsed / 31207680 );
  // Seconds
  if($seconds <= 60){
	return "$seconds giây trước";
  }
  //Minutes
  else if($minutes <=60){
	if($minutes==1){
	  return "1 phút trước";
	}
	else{
	  return "$minutes phút trước";}
  }
  //Hours
  else if($hours <=24){
    if($hours==1){
	  return "1 giờ trước";
	}else{
	  return "$hours giờ trước";
	}
  }
  //Days
  else if($days <= 7){
	if($days==1){
	  return "hôm qua";
	}else{
	  return "$days ngày tước";
	}
  }
  //Weeks
  else if($weeks <= 4.3){
    if($weeks==1){
	  return "1 tuần trước";
	}else{
	  return "$weeks tuần trước";
	}
  }
  //Months
  else if($months <=12){
	if($months==1){
	  return "1 tháng trước";
	}else{
	  return "$months tháng trước";
	}
  }
  //Years
  else{
    if($years==1){
	  return "1 năm trước";
	}else{
	  return "$years năm trước";
	}
  }
}
?>
  </body>

</html>
