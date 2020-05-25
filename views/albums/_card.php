<div class="card mb-5 shadow" style="min-width: 400px !important">
    <img class="card-img-top" src="https://picsum.photos/400/200" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" >
            <?php 
                echo $album->Title;
            ?>
        </h5>
        <table class="table table-striped">
            <?php 
                foreach($album->tracks() as $track) {
                    include "_row.php";
                }
            ?>
        </table>
    </div>
    <div class="card-footer">
        <h5 class="float-right small" style="color: red" >
            <?php 
                echo $album->ArtistId;
            ?>
        </h5>
    </div>    
</div>