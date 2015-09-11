<!doctype html>
<html lang="en">
	<head>
		<title>2014 Illinois School Report Cards</title>
		<meta charset="utf-8">
		<meta name="keywords" content="newspaper, chicago, suburbs, Illinois, school, report cards, ISAT, PSAE, ACT" />
		<meta name="description" content="The vital data, the vital stats from the Illinois School Report Cards." />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="content-language" content="en" />
		<meta property="og:site_name" content="Daily Herald 2013-2014 School Report Cards" />
		<meta property="og:image" content="http://reportcards.dailyherald.com/images/DH2013RC.jpg">
		<meta property="og:url" content="http://reportcards.dailyherald.com">
	
		<link rel="stylesheet" href="../styles/main-3rd-party.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../styles/reportcards.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../styles/styleSort.css" type="text/css" media="screen" />
		<link href="../styles/smoothness/jquery-ui-1.10.3.customRC.css" rel="stylesheet">

		<script src="../scripts/jquery-1.9.1.min.js"></script>
		<script src="../scripts/global_v2.js?updated=20120907"></script>
		<script>var $ = jQuery;</script>
		<script src="../scripts/jquery-ui-1.10.3.customRC.min.js"></script>
		<script src="../scripts/RC14search.js"></script>
		<script src="../scripts/highcharts.js"></script>
		<script src="../scripts/jquery.table.js"></script>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&'></script>

		<script type="text/javascript">
					var getCOUNTY = '<?php echo filter_var($_GET["COUNTYlist"], FILTER_SANITIZE_STRING); ?>';
					var getCITY = '<?php echo filter_var($_GET["CITYlist"], FILTER_SANITIZE_STRING); ?>';
					var getDIST = '<?php echo filter_var($_GET["district-name"], FILTER_SANITIZE_STRING); ?>';
					var getISAT = '<?php echo filter_var($_GET["ISAT"], FILTER_SANITIZE_STRING); ?>';
					var getGROW = '<?php echo filter_var($_GET["GROW"], FILTER_SANITIZE_STRING); ?>';
					var getPSAE = '<?php echo filter_var($_GET["PSAE"], FILTER_SANITIZE_STRING); ?>';
					var getACT = '<?php echo filter_var($_GET["ACT"], FILTER_SANITIZE_STRING); ?>';
					var getAll = '<?php echo filter_var($_GET["schoolsAll"], FILTER_SANITIZE_STRING); ?>';
					var getAlldist = '<?php echo filter_var($_GET["districtsAll"], FILTER_SANITIZE_STRING); ?>';
		</script>

		<script type="text/javascript" src="../scripts/SCHOOLS14script.js"></script>

</head>
<body>
	
<div style="padding:0 16px 0 10px;">

<?php include '../RC2014/schools14.php'; ?>

</div>

</body>
</html>