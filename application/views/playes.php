<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of Teams</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

        body {
            background-color: #3ac162;
            font-family: "Roboto", helvetica, arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-rendering: optimizeLegibility;
        }

        div.table-title {
            display: block;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
        }

        .table-title h3 {
            color: #fafafa;
            font-size: 30px;
            font-weight: 400;
            font-style:normal;
            font-family: "Roboto", helvetica, arial, sans-serif;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            text-transform:uppercase;
        }


        /*** Table Styles **/

        .table-fill {
            background: white;
            border-radius:3px;
            border-collapse: collapse;
            height: 320px;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: float 5s infinite;
        }

        th {
            color:#D5DDE5;;
            background:#1b1e24;
            border-bottom:4px solid #9ea7af;
            border-right: 1px solid #343a45;
            font-size:23px;
            font-weight: 100;
            padding:24px;
            text-align:center;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            vertical-align:middle;
        }

        th:first-child {
            border-top-left-radius:3px;
        }

        th:last-child {
            border-top-right-radius:3px;
            border-right:none;
        }

        tr {
            border-top: 1px solid #C1C3D1;
            border-bottom-: 1px solid #C1C3D1;
            color:#666B85;
            font-size:16px;
            font-weight:normal;
            text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }

        tr:hover td {
            background:#4E5066;
            color:#FFFFFF;
            border-top: 1px solid #22262e;
        }

        tr:first-child {
            border-top:none;
        }

        tr:last-child {
            border-bottom:none;
        }

        tr:nth-child(odd) td {
            background:#EBEBEB;
        }

        tr:nth-child(odd):hover td {
            background:#4E5066;
        }

        tr:last-child td:first-child {
            border-bottom-left-radius:3px;
        }

        tr:last-child td:last-child {
            border-bottom-right-radius:3px;
        }

        td {
            background:#FFFFFF;
            padding:20px;
            text-align: center;
            text-align:center;
            vertical-align:middle;
            font-weight:300;
            font-size:18px;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            border-right: 1px solid #C1C3D1;
        }

        td:last-child {
            border-right: 0px;
        }



        th.text-center {
            text-align: center;
        }

        th.text-right {
            text-align: right;
        }


        td.text-center {
            text-align: center;
        }

        td.text-right {
            text-align: right;
        }


    </style>
</head>
<body>
<div class="table-title">
    <h3>List of playes</h3>
</div>

<center><h4>1 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==1) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
        <?php
    }}
    ?>
    </tbody>
</table>

<center><h4>2 week</h4></center>

<table class="table-fill">

    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==2) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
        <?php
    }}
    ?>
    </tbody>
</table>

<center><h4>3 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==3) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>4 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==4) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>5 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==5) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>6 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==6) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>7 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==7) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>8 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==8) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>9 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==9) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>

<center><h4>10 week</h4></center>

<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Home</th>
        <th class="text-left">Away</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($competitions as $team) {
        if ($team['week_number']==10) {
            ?>
            <tr>

                <td class="text-left">
                    <?= $team['first'] ?>
                </td>

                <td class="text-left">
                    <?= $team['second'] ?>
                </td>

            </tr>
            <?php
        }}
    ?>
    </tbody>
</table>


</body>
</html>