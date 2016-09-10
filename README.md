/*=============================================================
  Developed by ZOHEB DAUVA(zohebdauva@gmail.com)
=============================================================*/
/*==========================================================================================================================
 |||||||||  |||||||||  ||     ||  ||||||||  ||||||||      |||||||       ||      ||     ||  ||      ||     ||     
      |||   ||     ||  ||     ||  ||        ||     ||     ||    ||     ||||     ||     ||   ||    ||     ||||    
    |||     ||     ||  |||||||||  ||||||||  ||||||||      ||    ||    ||  ||    ||     ||    ||  ||     ||  ||   
  |||       ||     ||  ||     ||  ||        ||     ||     ||    ||   ||||||||   ||     ||     ||||     ||||||||  
 |||||||||  |||||||||  ||     ||  ||||||||  ||||||||      |||||||   ||      ||   |||||||       ||     ||      || 
==========================================================================================================================*/

# Simplefilter
Simple Jquery Filter 
==========================================================================================================================*/
Css Code 
<style>
    @import 'css/ion.rangeSlider.css';
    @import 'css/ion.rangeSlider.skinFlat.css';
    @import 'css/checkboxes.css';
    @import 'css/bootstrap.min.css';
    @import 'css/layout.css'; 
</style>
==========================================================================================================================*/
Use html classes as used in jquery code,otherwise if you need any help regarding this filter you can contact me on my email
==========================================================================================================================*/
JQuery Files and code
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

==========================================================================================================================*/
