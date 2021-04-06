<style>
#info div{
    display: flex;
    flex-direction: row;
    font-size: 18px;
}
#info div h4{
    padding-right: 40px;
}
</style>
<?php $user = get_user(); ?>
<div style="margin:50px 0px 75px 170px; color:dodgerblue">
    <h1>Hello <span style="color:black;"><?php echo $user['CAFTERIA_USERNAME'] ?></span>, hope you're having a nice day <span style="color:black;">♥️<span></h1>
</div>

<div class="container">
    <div class="row m-5 p-5" style="border: 1px dashed black;">
        <div class="col-6">
            <img height="330px" width="400px" src="images/profile.png">
        </div>

        <div id='info' style="display:flex; flex-direction: column; justify-content: space-around; padding-left:20px;">
            <div>
                <h4>id: </h4> <?php echo $user['CAFETERIA_ID'] ?>
            </div>
            <div>
                <h4>username:</h4><?php echo $user['CAFTERIA_USERNAME'] ?>
            </div>
            <div>
                <h4>email:</h4><?php echo $user['CAFTERIA_EMAIL'] ?>
            </div>
            <div>
                <h4>phone:</h4><?php echo $user['CAFTERIA_PHONE'] ?>
            </div>
            <div>
                <h4>address:</h4><?php echo $user['CAFTERIA_ADDRESS'] ?>
            </div>
        </div>
    </div>
</div>