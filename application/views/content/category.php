<div id="pages-content">
    <div id="head-content" class="following bar light full column">
        <div class="ui segment">
            <div class="ui grid">
                <div class="row nomargin">
                    <div id="close-detail" class="four wide column">&nbsp;</div>
                    <div class="eight wide column aligncenter">
                        <a class="waves-effect waves-light">
                            <i class="shop icon"></i> &nbsp; Kategori
                        </a>
                    </div>
                    <div id="share-detail" class="four wide column alignright">
                        &nbsp;
                    </div>
                    <div id="share-detail-mobile" class="four wide column">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="body-content" class="full column" ng-controller="categoryController">
        <div id="list-category" class="ui grid nomargin">

            <div class="two wide column item" ng-repeat="row in categories">
                <a href="<?php echo base_url().'home/category_detail/';?>{{row.category_id}}">
                    <img class="ui medium image" src="<?php echo public_url.'category_img/';?>{{row.category_img}}" />
                    <p class="category-name"> {{row.category_name}}</p>
                </a>
            </div>            

        </div>
    </div>
</div>