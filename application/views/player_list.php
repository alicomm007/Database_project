<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of player</title>
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
    <h3>list of player</h3>
</div>
<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Name</th>
        <th class="text-left">Age</th>
        <th class="text-left">Post</th>
        <th class="text-left">Team</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    foreach ($players as $player) {
        ?>
        <tr>
            <td class="text-left">
            <?= $player['name'] . " " . $player['family'] ?>
            </td>

            <td class="text-left">
            <?= $player['age'] ?>
            </td>

            <td class="text-left">
            <?= $player['post_name'] ?>
            </td>

            <td class="text-left">
                <?php
                if ($player['tname']!=null)
                   echo $player['tname'] ;
                else echo "---";

                ?>
            </td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>


</body>
</html>