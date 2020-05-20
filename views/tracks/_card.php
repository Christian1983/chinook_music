<div class="card mb-5 shadow" style="min-width: 400px !important">
    <img class="card-img-top" src="https://picsum.photos/400/200" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" >
            <?php 
                echo $track->name;
            ?>
        </h5>
        <h5 class="card-title small" >
            <?php 
                echo $track->composer;
            ?>
        </h5>        
    </div>
    <div class="card-footer">
        <h5 class="float-right small" style="color: red" >
            <?php 
                echo $track->unit_price . '€';
            ?>
        </h5>
    </div>    
</div>