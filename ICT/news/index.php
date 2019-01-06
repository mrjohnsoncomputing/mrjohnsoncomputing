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
    <h1 class="pageTitle">What's new in the world of Technology?</h1>
    <div class="newsfeed">
    <?php @readfile('http://output66.rssinclude.com/output?type=php&id=1203531&hash=f2837cdf93e3f5899848e392a69173bd')?>
    </div>
</center>
<?php include "../footer.php";?>
