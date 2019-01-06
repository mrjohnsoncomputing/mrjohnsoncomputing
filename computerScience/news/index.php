<?php include "../navigation.php";?>
<style>
    tbody tr:hover {
        background-color: none;
    }

    tbody tr:hover td {
        outline: none;
    }
    tr:hover {
        outline:none;
        background-color:none;
    }
    tr .rssincl-entry:hover {
        background-color:#d4f0fc;
    }
    .newsfeed {
        margin-bottom:30px;
    }
</style>
<center>
    <h1 class="pageTitle">What's new in Computer Science?</h1>
    <div class="newsfeed">
    <?php @readfile('http://output24.rssinclude.com/output?type=php&id=1203532&hash=6be204d76ee17afdc13815e8ffce00ed')?>
    </div>
</center>
<?php include "../footer.php";?>