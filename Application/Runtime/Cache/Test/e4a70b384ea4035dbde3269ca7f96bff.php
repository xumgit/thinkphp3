<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Index</title>
<link type="text/css" rel="stylesheet" href="/thinkphp3/Public/Test/JqueryBoot/css/bootstrap.min.css" />
<script type="text/javascript" src="/thinkphp3/Public/Test/JqueryBoot/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="/thinkphp3/Public/Test/JqueryBoot/js/bootstrap.min.js"></script>

<link type="text/css" rel="stylesheet" href="/thinkphp3/Public/Test/JqueryBoot/css/jquery.bootgrid.min.css" />
<script type="text/javascript" src="/thinkphp3/Public/Test/JqueryBoot/js/jquery.bootgrid.min.js"></script>

<script type="text/javascript" src="/thinkphp3/Public/Test/JqueryBoot/js/index.js"></script>
</head>
<body>
<div style="display: none;"><button id="button">测试</button></div>
<table id="grid-data" class="table table-condensed table-hover table-striped">
    <thead>
        <tr>
            <th data-column-id="id" data-type="numeric">ID</th>
            <th data-column-id="sender">Sender</th>
            <th data-column-id="received" data-order="desc">Received</th>
            <th data-column-id="link" data-formatter="link" data-sortable="false">Link</th>
        </tr>
    </thead>
</table>
</body>
</html>