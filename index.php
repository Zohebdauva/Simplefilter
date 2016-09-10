<style>
    @import 'css/ion.rangeSlider.css';
    @import 'css/ion.rangeSlider.skinFlat.css';
    @import 'css/checkboxes.css';
    @import 'css/bootstrap.min.css';
    @import 'css/layout.css'; 
</style>
<div class="shopwrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h4 class="filterheading">Featured</h4>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel filter_listpanel panel-default">
                        <div class="panel-heading" role="tab" id="headingzero">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsezero" aria-expanded="false" aria-controls="collapsezero">
                                    Finish<i class="fa fa-caret-down"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapsezero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingzero">
                            <div class="panel-body">
                                <ul class="filter_list">
                                    <li><label class="checkbox"><input type="checkbox" data-value="sweettouch"><span class="checkbox-material"><span class="check"></span></span></label><span>Sweet tOuch      <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="kryloan"><span class="checkbox-material"><span class="check"></span></span></label><span>KRYLOAN          <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="gosh"><span class="checkbox-material"><span class="check"></span></span></label><span>GOSH             <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="femona"><span class="checkbox-material"><span class="check"></span></span></label><span>Femona           <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="bioline"><span class="checkbox-material"><span class="check"></span></span></label><span>Bioline          <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="janseen"><span class="checkbox-material"><span class="check"></span></span></label><span>JANSEEN          <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="framesi"><span class="checkbox-material"><span class="check"></span></span></label><span>Framesi          <i></i></span></li>
                                    <li><label class="checkbox"><input type="checkbox" data-value="restoria"><span class="checkbox-material"><span class="check"></span></span></label><span>REstoria         <i></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel filter_listpanel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                 Formula<i class="fa fa-caret-down"></i>
                             </a>
                         </h6>
                     </div>
                     <div id="collapseone" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingone">
                        <div class="panel-body">
                            <ul class="filter_list">
                                <li><label class="checkbox"><input type="checkbox" data-value="mascara"><span class="checkbox-material"><span class="check"></span></span></label><span>mascara          <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="skincare"><span class="checkbox-material"><span class="check"></span></span></label><span>Skin care        <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="nailscollection"><span class="checkbox-material"><span class="check"></span></span></label><span>Nails Collection <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="lipsices"><span class="checkbox-material"><span class="check"></span></span></label><span>Lips ICES        <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="accessories"><span class="checkbox-material"><span class="check"></span></span></label><span>Accessories      <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="eyes"><span class="checkbox-material"><span class="check"></span></span></label><span>Eyes             <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="lips"><span class="checkbox-material"><span class="check"></span></span></label><span>Lips             <i></i></span></li>
                                <li><label class="checkbox"><input type="checkbox" data-value="face"><span class="checkbox-material"><span class="check"></span></span></label><span>Face             <i></i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingthree">
                        <h6 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                Price<i class="fa fa-caret-down"></i>
                            </a>
                        </h6>
                    </div>
                    <div id="collapsethree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingthree">
                        <div class="panel-body">
                            <div class="range" onclick="checkval(this);">
                                <input id="range_1" type="text" name="range_1" value=""  /> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="productoutterwrap">
                <div class="filterwrap">
                    <div class="clearfix">
                        <span class="sortfilter RT">
                                    <!-- <a href="" class="selected">1</a>
                                    <a href="">2</a> -->
                                    <a href="javascript:void(0);" onclick="showall()">View All</a>
                                </span>
                            </div>
                        </div>
                        <div class="productshopwrap anotherstyle row">
                            <input type="hidden" value="50" id="loadmoreinputhidden">
                            <ul class="products clearfix productsliderlist" id="shopproductlist">
                                <?php  

                                for ($c=1,$i=1; $i<50; $i++) { 
                                    $rc = array('sweettouch','kryloan','gosh','femona','bioline','janseen','framesi','restoria');
                                    $rc1 = array('mascara','skincare','nailscollection','lipsices','accessories','eyes','lips','face');
                                    $sz = sizeof($rc);
                                    $sz2 = sizeof($rc1);
                                    $r = mt_rand(0,($sz - 1));
                                    $r1 = mt_rand(0,($sz2 - 1));
                                    if($c > 4){
                                        $c = 1;
                                    }
                                    ?>
                                    <li class="<?php echo 'col-sm-3 showall '.$rc[$r].' '.$rc1[$r1];?>">
                                        <a href="javascript:void(0);" class="sale">
                                            <div class="img"><img src="<?php echo 'images/pro'.$c.'.jpg';?>" alt=""></div>
                                            <div class="hovertext">
                                                <h5>Lorem ipsum.</h5>
                                                <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                                                <p class="price">Rs. <span><?php echo ($c * 1000) ;?></span></p>
                                            </div>
                                        </a>
                                    </li>
                                    <?php
                                    $c++;
                                }
                                ?>
                            </ul>
                            <div class="loadmore" id="loadmorewrap">
                                <a href="javascript:void(0);" class="btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var clar = [];
        $(document).ready(function() {
            $("#range_1").ionRangeSlider({
                min: 0,
                max: 10000,
                from: 0,
                to: 10000,
                type: 'double',
                step: 1,
                prefix: "",
                prettify: false,
                hasGrid: true
            });
            $('#loadmoreinputhidden').click();
            $('.colorlist li.colorpallet').each(function () {
                $(this).click(function () {
                    $(this).toggleClass('checked');
                })
            });
            $('#accordion .filter_list > li').each(function(){
                var cl = $(this).find('.checkbox input').attr('data-value');
                var l = $('#shopproductlist').find('li.'+cl);
                var ll = $(l).length;
                showall();
                $(this).find('> span i').html('('+ll+')');
                $(this).click(function(){
                    var car = [];
                    var mx = Number($('.range .irs-max').text());
                    var mn = Number($('.range .irs-min').text());
                    var to = Number($('.range .irs-to').text());
                    var from = Number($('.range .irs-from').text());
                    if($(this).hasClass('checked')){  
                        $(l).removeClass('showli');
                        $(this).find('.checkbox input').attr('checked',false);
                        $(this).removeClass('checked');
                        if($('#accordion .filter_list').children('.checked').length == 0){
                            if(to < mx ||  from > mn){
                                checkval();
                            }
                            else {
                                car.push(cl);
                                showall(this);
                            }
                        }
                        else {
                            $('#accordion .filter_listpanel').each(function(){
                                i = $(this).index();
                                car.push({
                                    carc : []
                                });
                                $(this).find('li.checked').each(function(){
                                    var cll = $(this).find('.checkbox input').attr('data-value');
                                    car[i].carc.push(cll);
                                });
                            });
                            arraymerge(car ,ulil );
                            ecloop(clar);
                        }
                    }
                    else {
                        $(this).find('.checkbox input').attr('checked', true);
                        $(this).addClass('checked');
                        uli = $(this).parents('.panel').index();
                        var ulil = $('#accordion .filter_listpanel').length;
                        $('#accordion .filter_listpanel').each(function(){
                            i = $(this).index();
                            car.push({
                                carc : []
                            });
                            $(this).find('li.checked').each(function(){
                                var cll = $(this).find('.checkbox input').attr('data-value');
                                car[i].carc.push(cll);
                            });
                        });
                        arraymerge(car ,ulil ); 
                        console.log(clar);
                        // car = car.join('.');
                        ecloop(clar);
                    }
                })
            })
        });
        function ecloop(car,mx,mn,to,from){
            var mx = Number($('.range .irs-max').text());
            var mn = Number($('.range .irs-min').text());
            var to = Number($('.range .irs-to').text());
            var from = Number($('.range .irs-from').text());
            $('#shopproductlist li').removeClass('showli');
            i = 0;
            var l = $('#shopproductlist > li.'+car[i]);
            $(car).each(function(){
                if(to < mx ||  from > mn){
                    $('#shopproductlist > li.'+car[i]).each(function(){
                        var p = Number($(this).find('.price > span').text());
                        if(from <= p && to >= p){
                            $(this).addClass('showli');
                        }
                    })
                }
                else{
                    $('#shopproductlist > li.'+car[i]).addClass('showli');
                }
                i++;
                // console.log(l);
            })
        }
        function showall(){

            var v = $('#loadmoreinputhidden').val();
            var clil = $('#accordion .filter_list').children('.checked').length;
            $('#accordion .filter_list > li').removeClass('checked').find('.checkbox input').attr('checked',false);
            $('#shopproductlist > li').addClass('showli');
        }
        function checkval() {
            var to = Number($('.range .irs-to').text());
            var from = Number($('.range .irs-from').text());
            $('#shopproductlist > li').each(function(){
                var p = Number($(this).find('.price > span').text());
                if($('#accordion .filter_list').children('.checked').length == 0){
                    if($(this).hasClass('showli')){
                        if(from <= p && to >= p){
                            console.log(p);
                            $(this).addClass('showli');
                        }
                        else {
                            $(this).removeClass('showli');
                        }
                    }
                }
                else {
                    ecloop(clar)
                }
            })
        }
        function arraymerge(car) {
            var coun1 = car[0].carc;
            var coun2 = car[1].carc;
            clar = [];
            if(coun1.length == 0){
                for(var i=0; i < coun2.length; i++){
                    var countt = car[1].carc;
                    clar.push(countt);
                };
            }
            else {
                for(var i=0; i < coun1.length; i++){
                    if(coun2.length == 0){
                        var countt = car[0].carc[i];
                        clar.push(countt);
                    }
                    else {
                        for (var c = 0; c < coun2.length; c++) {   
                            var countt = car[0].carc[i]+'.'+car[1].carc[c];
                            clar.push(countt);
                        };
                    }
                };
            }
        }  
    </script>
</body>
</html>