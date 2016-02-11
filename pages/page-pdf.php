<?php
/*
	Template name: Schedule - PDF
*/
?>

<style media="print">
	h1 {
		display: none;
	}

	td {
		vertical-align: top;
	}

	td, td li, td a, th {
		font-size: 11pt;
		line-height: 1.1;
	}

	.table > tbody > tr > td {
		padding: 4px !important;
	}

	tr td:first-child {
		font-weight: bold;
		width: 50px;
	}

	td a {
		display: inline-block;
		padding-bottom: 5px;

		font-style: normal;;
	}

	td .schedule-item {
		padding-bottom: 5px;
		margin-bottom: 5px;

		font-style: italic;
	}

	td .schedule-item:last-child {
		margin-bottom: 0;
		padding-bottom: 0;
	}

	table {
		page-break-after: always;
		/*padding: 30px;*/
	}

	a[href]:after {
		display: none;
	}
</style>

<?php $is_pdf = true; ?>

<?php include(locate_template( 'pages/page-tuesday.php' ) ); ?>
<?php include(locate_template( 'pages/page-wednesday.php' ) ); ?>
<?php include(locate_template( 'pages/page-thursday.php' ) ); ?>
