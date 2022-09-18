<div class="nk-social-profile nk-social-profile-container-offset">
    <div class="row">
        <div class="col-md-5 col-lg-3">
            <div class="nk-social-profile-avatar">
                <a href="#">
                    <img src="<?php echo $steamprofile['avatarfull'];?>" alt="<?php echo $steamprofile['personaname'];?>">
                </a>
            </div>
        </div>
        <div class="col-md-7 col-lg-9">
            <div class="nk-social-profile-info">
                <div class="nk-gap-2"></div>
                <h1 class="nk-social-profile-info-name"><?php echo $steamprofile['personaname'];?></h1>
                <div class="nk-social-profile-info-username">http://steamcommunity.com/profiles/<?php echo $steamprofile['steamid'];?></div>
            </div>
        </div>
    </div>
</div>