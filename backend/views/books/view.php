    <div class="comment-checkbox">
        <div class="checkbox checkbox-replace neon-cb-replacement">
            <label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
        </div>
    </div>

    <div class="comment-details">

        <div class="comment-head">
            <a href="<?=\yii\helpers\Url::to(['books/view','id'=>$model->id])?>"><?=$model->title?></a> categoiyasi <a href="#"><?=$model->category->name?></a>
        </div>

        <p class="comment-text">
            Case oh an that or away sigh do here upon. Acuteness you exquisite ourselves now end forfeited. Enquire ye without it garrets up himself. Interest our nor received followed was. Cultivated an up solicitude mr unpleasant.
        </p>

        <div class="comment-footer">

            <div class="comment-time">
                Friday, 27 February - 04:56
            </div>

            <div class="action-links">

                <a href="<?=\yii\helpers\Url::to(['books/delete','id'=>$model->id])?>" class="delete">
                    <i class="entypo-cancel"></i>
                    O'chirish
                </a>


                <a href="<?=\yii\helpers\Url::to(['books/update','id'=>$model->id])?>" class="edit">
                    <i class="entypo-pencil"></i>
                    o'zgartirish
                </a>

            </div>

        </div>

    </div>
