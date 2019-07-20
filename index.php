<?php
    require_once('./view/header.php');
?>
<body>
<div class="container">
    <div class="sidebar__wrapper pt-4">
        <?php
            require_once('./view/sidebar.php');
        ?>
    </div>
    <div class="content__wrapper p-5">
        <div class="row1 m-5">
            <div class="card bg-light mb-3" style="min-width: 55rem;">
                <div class="card-header">Wypożyczenia</div>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row2 my-5">
            <div class="card bg-light mb-5" style="min-width: 20rem;">
                <div class="card-header">Powiadomienia</div>
                <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card bg-light" style="min-width: 20rem;">
                <div class="card-header">Rezerwacje</div>
                <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>