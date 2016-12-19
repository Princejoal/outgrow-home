var pCycle = 'm', allPlans;
var essentials_m = 0,business_m = 0,enterprise_m = 0, freelancer_m = 0;
var ext = '';
jQuery(document).ready(function() {
    var str = window.location.href.split('//')[1].split('/')[0];
    var p = str.lastIndexOf('.');
    ext = str.substring(p+1);
    getAllPlans();
    var planCycle = '<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 np billing-plan-list" id="plans">'+
        '<ul>'+
        '<li class="cycle-tab active" id="monthly">'+
        '<a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan(\'m\');">'+
        'Monthly'+
        '</a>'+
        '</li>'+
        '<li class="cycle-tab" id="half-yearly">'+
        '<a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan(\'s\')">'+
        'Semi-Annual'+
        '</a>'+
        '</li>'+
        '<li class="cycle-tab" id="annually">'+
        '<a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan(\'y\')">'+
        'Annual'+
        '</a>'+
        '</li>'+
        '</ul>'+
        '</div>';
    //var freePlan = `<i class="material-icons">not_interested</i>
    var freePlan = '<i class="material-icons">person</i>'+
        '<h4>Casual User?</h4>'+
        '<p>Are you a student or a freelancer who wants to explore interactive calculators? We have a limited plan for you to play around with.</p>';
    jQuery('#plan-cycle').html(planCycle);
    jQuery('#freePlan').html(freePlan);
    jQuery(document).on('click', '.signupbanners', function(event) {
        var self = jQuery(this);
        var title = self.parent().parent().find('.plan-title').html();
        var title = 'LP_Signup_'+title.split(' ').join('_');
        ga('markettingteam.send', 'event', 'Pricing', 'Click', title);
    });

    jQuery(document).on('click', '.starter', function(event) {
        ga('markettingteam.send', 'event', 'Signup', 'Click', 'LP_Signup_Student_Pricing_Tile');
    });

    var btn = '<a href="http://app.outgrow.'+ext+'" class="params">'+
        '<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal mk-animate-element fade-in"><i class="material-icons">view_compact</i>Let\'s Build One!</button>'+
        '</a>'+
        '<div class="btn-bottominfo mk-animate-element fade-in"></div>';
    jQuery('#btnBuildCalc').html(btn);

    var btn1 = '<a href="http://app.outgrow.'+ext+'" class="params">'+
        '<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal mk-animate-element fade-in"><i class="material-icons">view_compact</i>Let\'s Build One!</button>'+
        '</a>'+
        '<div class="btn-bottominfo mk-animate-element fade-in">'+
            '<span>15 days Free Trial</span>'+
            '<label>Plan starts at $35</label>'+
        '</div>';
    jQuery('#btnBuildCalc1').html(btn1);

});

var getAllPlans = function () {
    //var plansList = '<img src="./images/logoAnim.gif" alt="loading..." />';
    var u = '//api.outgrow.'+ext+'/api/v1/plans';
    var plansList = '<div class="col-md-9 col-sm-12 col-xs-12 text-center"><i class="material-icons loader">autorenew</i></div>';
    jQuery('#plansList').html(plansList);
    jQuery.ajax({
        url: u,
        success: function(success){
            allPlans = success;
            displayPlans();
        },
        error:function(err){
            console.log('err get all plans',err)
        }
    });
}

var displayPlans = function(){
    var plansList = '';
    var featureList = '';
    var fe = '';
    var pricetag = '';
    var price = 0;
    var ulUsers = '',ulLeads = '',ulVisits = '', cta = '',ulCalculators = '';
    var userText = '',calcText == '';
    var freelancer = '';
    var enterprise = '';
    for(var i = 0; i<allPlans.data.lists.list.length;i++){
        enterprise = '';
        freelancer = '';
        if(allPlans.data.lists.list[i].plan.id === 'essentials_m')
            essentials_m = allPlans.data.lists.list[i].plan.price/100;
        if(allPlans.data.lists.list[i].plan.id === 'business_m')
            business_m = allPlans.data.lists.list[i].plan.price/100;
        if(allPlans.data.lists.list[i].plan.id === 'enterprise_m')
            enterprise_m = allPlans.data.lists.list[i].plan.price/100;
        if(allPlans.data.lists.list[i].plan.id === 'freelancer_m'){
            freelancer_m  = allPlans.data.lists.list[i].plan.price/100;
            enterprise = 'enterprise-margin';
            freelancer = 'enterprise-margin';
        }


        pricetag = '';
        var box = '',mostPopular = '',bil_grey_white = '',bil_top = '',bil_bottom = '', dots = '', period = '', boxShadow = '',planId = '';
        if(allPlans.data.lists.list[i].plan.id != 'starter' && allPlans.data.lists.list[i].plan.id.split('_')[0] != 'enterprise'){
            planId = allPlans.data.lists.list[i].plan.id;

            if(allPlans.data.lists.list[i].plan.id.split('_')[1] === pCycle){
                featureList = '';
                for(var j = 0; j < allPlans.data.plans.length;j++){
                    if(allPlans.data.plans[j].plan._id == allPlans.data.lists.list[i].plan.id.split('_')[0]){
                        if(allPlans.data.plans[j].plan.leads == -1)
                            ulLeads = 'Unlimited';
                        else
                            ulLeads = allPlans.data.plans[j].plan.leads.toLocaleString();

                        if(allPlans.data.plans[j].plan.visits == -1)
                            ulVisits = 'Unlimited';
                        else
                            ulVisits = allPlans.data.plans[j].plan.visits.toLocaleString();

                        if(allPlans.data.plans[j].plan.users == -1)
                            ulUsers = 'Unlimited';
                        else
                            ulUsers = allPlans.data.plans[j].plan.users.toLocaleString();

                        if(allPlans.data.plans[j].plan.users == 1)
                            userText = 'User';
                        else
                            userText = 'Users';

                        if(allPlans.data.plans[j].plan.calculators == -1)
                            ulCalculators = 'Unlimited';
                        else
                            ulCalculators = allPlans.data.plans[j].plan.calculators.toLocaleString();

                        if(allPlans.data.plans[j].plan.users == 1)
                            calcText = 'Calculator';
                        else
                            calcText = 'Calculators';

                        featureList =
                            '<li>'+
                            '<a href="javascript:void(0);" class="">'+
                            '<span class="mat-icon"></span>'+
                            '<span class="list-name">&nbsp;'+ulCalculators+
                            ' '+calcText+
                            '</span>'+
                            '</a>'+
                            '</li>'+
                            '<li>'+
                            '<a href="javascript:void(0);" class="">'+
                            '<span class="mat-icon"></span>'+
                            '<span class="list-name">&nbsp;'+ulUsers+
                            ' '+userText+
                            '</span>'+
                            '</a>'+
                            '</li>'+
                            '<li>'+
                            '<a href="javascript:void(0);" class="">'+
                            '<span class="mat-icon"></span>'+
                            '<span class="list-name capitalize">&nbsp;'+
                            ulLeads+' Leads'+
                            '</span>'+
                            '</a>'+
                            '</li>'+
                            '<li>'+
                            '<a href="javascript:void(0);" class="">'+
                            '<span class="mat-icon"></span>'+
                            '<span class="list-name capitalize">&nbsp;'+
                            ulVisits+' Visits'+
                            '</span>'+
                            '</a>'+
                            '</li>';
                    }
                    for(var k = 0;k<allPlans.data.plans[j].features.length; k++){
                        if(allPlans.data.plans[j].features[k].plan != 'starter' && allPlans.data.plans[j].features[k].plan == allPlans.data.lists.list[i].plan.id.split('_')[0]){
                            if(allPlans.data.plans[j].features[k].active){
                                featureList +=
                                    '<li>'+
                                    '<a href="javascript:void(0);" class="">'+
                                    '<span class="mat-icon"></span>'+
                                    '<span class="list-name capitalize">&nbsp;'+
                                    allPlans.data.plans[j].features[k].feature.name+
                                    '</span>'+
                                    '</a>'+
                                    '</li>';
                            }
                            else if(!allPlans.data.plans[j].features[k].active){
                                featureList +=
                                    '<li class="unselected">'+
                                    '<a href="javascript:void(0);" class="">'+
                                    '<span class="mat-icon"></span>'+
                                    '<span class="list-name capitalize">&nbsp;'+
                                    allPlans.data.plans[j].features[k].feature.name+
                                    '</span>'+
                                    '</a>'+
                                    '</li>';
                            }
                        }
                    }
                    for(var l = 0;l<allPlans.data.plans[j].cycles.length; l++){
                        if(allPlans.data.plans[j].cycles[l].plan != 'starter' && allPlans.data.plans[j].cycles[l].coupon_cycle == pCycle)
                            if(allPlans.data.plans[j].cycles[l].plan == allPlans.data.lists.list[i].plan.id.split('_')[0]){
                                var strikeOff = '';
                                if(allPlans.data.lists.list[i].plan.id.split('_')[1] != 'm'){
                                    if(allPlans.data.lists.list[i].plan.id.split('_')[0] === 'essentials')
                                        strikeOff = '<span class="strike-off strike-price">$'+essentials_m+'/Month</span>';
                                    if(allPlans.data.lists.list[i].plan.id.split('_')[0] === 'business')
                                        strikeOff = '<span class="strike-off strike-price whitebg">$'+business_m+'/Month</span>';
                                    if(allPlans.data.lists.list[i].plan.id.split('_')[0] === 'freelancer')
                                        strikeOff = '<span class="strike-off strike-price">$'+freelancer_m+'/Month</span>';
                                }
                                if(allPlans.data.plans[j].cycles[l].coupon_active){


                                    if(allPlans.data.plans[j].cycles[l].coupon_type =='PERCENTAGE'){
                                        price = allPlans.data.lists.list[i].plan.price/100 - (allPlans.data.lists.list[i].plan.price/100)*allPlans.data.plans[j].cycles[l].coupon_value/100;
                                    }
                                    else if(allPlans.data.plans[j].cycles[l].coupon_type =='FLAT'){
                                        price = allPlans.data.lists.list[i].plan.price/100 - allPlans.data.plans[j].cycles[l].coupon_value;
                                    }

                                    if(allPlans.data.lists.list[i].plan.period == 6 && allPlans.data.lists.list[i].plan.period_unit == 'month'){
                                        pricetag = '<br/>'+
                                            '<h3 class="plan-price">'+strikeOff+
                                            //'<span class="strike-off">$'+Math.ceil((allPlans.data.lists.list[i].plan.price/100)/6)+'/Month</span>'+

                                            '<span>$'+Math.ceil(price/6)+'/Month</span>'+
                                            '</h3>';
                                    }
                                    if(allPlans.data.lists.list[i].plan.period == 1){
                                        pricetag = '<br/>'+
                                            '<h3 class="plan-price">'+strikeOff+
                                            //'<span class="strike-off">$'+allPlans.data.lists.list[i].plan.price/100+'/Month</span>'+
                                            '<span>$'+price+'/Month</span>'+
                                            '</h3>';
                                        if(allPlans.data.lists.list[i].plan.period_unit == 'year'){
                                            pricetag = '<br/>'+
                                                '<h3 class="plan-price">'+strikeOff+
                                                //'<span class="strike-off">$'+Math.ceil((allPlans.data.lists.list[i].plan.price/100)/12)+'/Month</span>'
                                                '<span>$'+Math.ceil(price/12)+'/Month</span>'+
                                                '</h3>';
                                        }
                                    }

                                    pricetag += '<br/><span>Use coupon code:'+allPlans.data.plans[j].cycles[l].coupon_name+'</span>';
                                }
                                else{
                                    if(allPlans.data.lists.list[i].plan.period == 6 && allPlans.data.lists.list[i].plan.period_unit == 'month'){
                                        pricetag ='<br/>'+
                                            '<h3 class="plan-price">'+strikeOff+
                                            '<span>$'+Math.ceil((allPlans.data.lists.list[i].plan.price/100)/6) +
                                            '/Month</span>'+
                                            '</h3>';
                                    }
                                    else if(allPlans.data.lists.list[i].plan.period == 1){
                                        pricetag ='<br/>'+
                                            '<h3 class="plan-price">'+strikeOff+
                                            '<span>$'+allPlans.data.lists.list[i].plan.price/100+'/'+allPlans.data.lists.list[i].plan.period_unit+
                                            '</h3>';
                                        if(allPlans.data.lists.list[i].plan.period_unit === 'year'){
                                            pricetag = '<br/>'+
                                                '<h3 class="plan-price">'+strikeOff+
                                                '<span>$'+Math.ceil((allPlans.data.lists.list[i].plan.price/100)/12)+'/Month'+
                                                '</h3>';
                                        }
                                    }
                                }
                                if(allPlans.data.lists.list[i].plan.id.split('_')[0] === 'enterprise')
                                    pricetag = '<br/><span class="contact-pricing">*Contact us for pricing</span>';
                            }
                    }
                }
                cta = '<div class="col-md-12 col-sm-12 col-xs-12 np">'+
                    '<a href="http://app.outgrow.'+ext+'/signup" target="_blank" class="btn btn-white-red-outline hvr-sweep-to-right signupbanners params">Sign up</a>'+
                    '</div>';
                if(allPlans.data.lists.list[i].plan.id.split('_')[0] == 'business'){
                    mostPopular = '<span class="ribbon">Most Popular</span>';
                    bil_grey_white = 'billing-white';
                    bil_top = 'billing-white-top';
                    box = 'business-box';
                    dots = 'toggle-dots-grey';
                    boxShadow = 'business-box-xshadow';
                    bil_bottom = 'billing-white-bottom';
                }
                else if(allPlans.data.lists.list[i].plan.id.split('_')[0] == 'enterprise'){
                    mostPopular = '';
                    bil_grey_white = 'billing-grey';
                    bil_top = 'billing-grey-top';
                    box = 'enterprise-box';
                    dots = 'toggle-dots-white';
                    bil_bottom = 'billing-grey-bottom'
                    cta = '<div class="col-md-12 col-sm-12 col-xs-12 np">'+
                        '<a href="mailto:randy@outgrow.co" class="btn btn-white-red-outline hvr-sweep-to-right signupbanners">Contact Us</a>'+
                        '</div>';
                }
                else{
                    mostPopular = '';
                    bil_grey_white = 'billing-grey';
                    bil_top = 'billing-grey-top';
                    box = 'starter-box';
                    dots = 'toggle-dots-white';
                    bil_bottom = 'billing-grey-bottom'
                }
                plansList +=
                    '<div class="col-md-4 col-sm-4 col-xs-12 np '+box+' '+bil_grey_white+' '+freelancer+'">'+
                    '<div class="col-md-12 col-sm-12 col-xs-12 np text-center '+bil_top+' '+boxShadow+'">'+
                    mostPopular+
                    '<h3 class="plan-title">'+allPlans.data.lists.list[i].plan.name.split(' ')[0]+'<br/><h4>'+allPlans.data.lists.list[i].plan.name.split(' ')[1]+'</h4></h3>'+
                    '<span class="border-center"></span>'+pricetag+
                    '<p>'+allPlans.data.lists.list[i].plan.description+'</p>'+cta+
                    '</div>'+
                    '<div class="col-md-12 col-sm-12 col-xs-12 np rs-hide '+bil_bottom+'" id="'+planId+'">'+
                    '<ul class="billing-list">'+featureList+'</ul>'+
                    '</div>'+
                    '<a href="javascript:void(0);" class="'+dots+'" onclick="show(\''+planId+'\')">'+
					'<div>'+
					'<i class="material-icons" id="'+planId+'_arrow">keyboard_arrow_down</i>'+
					'<p class="more-info" id="'+planId+'_more">More Info</p>'+
					'</div>'+
					'</a>'+
                    '</div>';
            }
        }
    }
    jQuery('#plansList').html(plansList);
}
var showPlan = function(plan) {
    pCycle = plan;
    jQuery('.cycle-tab').removeClass('active');
    if(plan == 'm')
        jQuery('#monthly').addClass('active');
    else if(plan == 's')
        jQuery('#half-yearly').addClass('active');
    else if(plan == 's')
        jQuery('#annually').addClass('active');
    displayPlans();
}

var show = function(id) {
    if(jQuery('#'+id).hasClass('rs-hide')) {
        jQuery('#' + id).removeClass('rs-hide');
        jQuery('#' + id + '_arrow').html('keyboard_arrow_up');
        jQuery('#' + id + '_more').html('Less Info');
    }
    else {
        jQuery('#' + id).addClass('rs-hide');
        jQuery('#' + id + '_arrow').html('keyboard_arrow_down');
        jQuery('#' + id + '_more').html('More Info');
    }
}
