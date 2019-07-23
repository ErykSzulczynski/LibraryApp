<div class="card bg-light mb-5" style="min-width: 20rem;">
    <div class="card-header">
        Notifications
    </div>
    <div class="card-body">
        <p class="card-text">
            <?php
                $sth = $db_connect->prepare("SELECT title, date_end FROM borrows WHERE user = ?");
                $sth->execute([$user]);

                while($row = $sth->fetch(PDO::FETCH_ASSOC)){
                    if($row['date_end'] < date('Y-m-d')){
                        echo "<p>You're late with giving back: ".$row['title']."</p>";
                    }
                }
            ?>
        </p>
    </div>
</div>