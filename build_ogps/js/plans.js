var pCycle="m",allPlans,essentials_m=0,business_m=0,enterprise_m=0,freelancer_m=0,ext="";jQuery(document).ready(function(){var a=window.location.href.split("//")[1].split("/")[0],l=a.lastIndexOf(".");ext=a.substring(l+1),getAllPlans();var s='<div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 np billing-plan-list" id="plans"><ul><li class="cycle-tab active" id="monthly"><a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan(\'m\');">Monthly</a></li><li class="cycle-tab" id="half-yearly"><a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan(\'s\')">Semi-Annual</a></li><li class="cycle-tab" id="annually"><a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan(\'y\')">Annual</a></li></ul></div>',n='<i class="material-icons">person</i><h4>Casual User?</h4><p>Are you a student or a freelancer who wants to explore interactive calculators? We have a limited plan for you to play around with.</p>';jQuery("#plan-cycle").html(s),jQuery("#freePlan").html(n),jQuery(document).on("click",".signupbanners",function(a){var l=jQuery(this),s=l.parent().parent().find(".plan-title").html(),s="LP_Signup_"+s.split(" ").join("_");ga("markettingteam.send","event","Pricing","Click",s)}),jQuery(document).on("click",".starter",function(a){ga("markettingteam.send","event","Signup","Click","LP_Signup_Student_Pricing_Tile")});var t='<a href="http://app.outgrow.'+ext+'" class="params"><button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal mk-animate-element fade-in"><i class="material-icons">view_compact</i>Start Free Trial</button></a><div class="btn-bottominfo mk-animate-element fade-in"></div>';jQuery("#btnBuildCalc").html(t);var i='<a href="http://app.outgrow.'+ext+'" class="params"><button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal mk-animate-element fade-in"><i class="material-icons">view_compact</i>Start Free Trial</button></a><div class="btn-bottominfo mk-animate-element fade-in rs-hide-mb"><label>Plans Start at $25/month</label></div>';var p='<a href="javascript:void(0);" data-toggle="modal" data-target="#video-modal" class="params"><button class="video-btn mk-animate-element fade-in"><i class="material-icons">play_circle_outline</i>Watch Video</button></a><div class="btn-bottominfo mk-animate-element fade-in rs-show-mb"><label>Plans Start at $25/month</label></div></div>';jQuery("#video-link").html(p);jQuery("#btnBuildCalc1").html(i)});var getAllPlans=function(){var a="//api.outgrow."+ext+"/api/v1/plans",l='<div class="col-md-9 col-sm-12 col-xs-12 text-center"><i class="material-icons loader">autorenew</i></div>';jQuery("#plansList").html(l),jQuery.ajax({url:a,success:function(a){allPlans=a,displayPlans()},error:function(a){console.log("err get all plans",a)}})},displayPlans=function(){for(var a="",l="",s="",n=0,t="",i="",e="",p="",r="",c="",o="",d="",u="",m=0;m<allPlans.data.lists.list.length;m++){u="",d="","essentials_m"===allPlans.data.lists.list[m].plan.id&&(essentials_m=allPlans.data.lists.list[m].plan.price/100),"business_m"===allPlans.data.lists.list[m].plan.id&&(business_m=allPlans.data.lists.list[m].plan.price/100),"enterprise_m"===allPlans.data.lists.list[m].plan.id&&(enterprise_m=allPlans.data.lists.list[m].plan.price/100),"freelancer_m"===allPlans.data.lists.list[m].plan.id&&(freelancer_m=allPlans.data.lists.list[m].plan.price/100,u="enterprise-margin",d="enterprise-margin"),s="";var h="",P="",v="",b="",y="",f="",g="",_="";if("starter"!=allPlans.data.lists.list[m].plan.id&&"enterprise"!=allPlans.data.lists.list[m].plan.id.split("_")[0]&&(_=allPlans.data.lists.list[m].plan.id,allPlans.data.lists.list[m].plan.id.split("_")[1]===pCycle)){l="";for(var w=0;w<allPlans.data.plans.length;w++){allPlans.data.plans[w].plan._id==allPlans.data.lists.list[m].plan.id.split("_")[0]&&(i=-1==allPlans.data.plans[w].plan.leads?"Unlimited":allPlans.data.plans[w].plan.leads.toLocaleString(),e=-1==allPlans.data.plans[w].plan.visits?"Unlimited":allPlans.data.plans[w].plan.visits.toLocaleString(),t=-1==allPlans.data.plans[w].plan.users?"Unlimited":allPlans.data.plans[w].plan.users.toLocaleString(),c=1==allPlans.data.plans[w].plan.users?"User":"Users",r=-1==allPlans.data.plans[w].plan.calculators?"Unlimited":allPlans.data.plans[w].plan.calculators.toLocaleString(),o=1==allPlans.data.plans[w].plan.calculators?"Calculator":"Calculators",l='<li><a href="javascript:void(0);" class=""><span class="mat-icon"></span><span class="list-name">&nbsp;'+r+" "+o+'</span></a></li><li><a href="javascript:void(0);" class=""><span class="mat-icon"></span><span class="list-name">&nbsp;'+t+" "+c+'</span></a></li><li><a href="javascript:void(0);" class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;'+i+' Leads</span></a></li><li><a href="javascript:void(0);" class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;'+e+" Visits</span></a></li>");for(var j=0;j<allPlans.data.plans[w].features.length;j++)"starter"!=allPlans.data.plans[w].features[j].plan&&allPlans.data.plans[w].features[j].plan==allPlans.data.lists.list[m].plan.id.split("_")[0]&&(allPlans.data.plans[w].features[j].active?l+='<li><a href="javascript:void(0);" class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;'+allPlans.data.plans[w].features[j].feature.name+"</span></a></li>":allPlans.data.plans[w].features[j].active||(l+='<li class="unselected"><a href="javascript:void(0);" class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;'+allPlans.data.plans[w].features[j].feature.name+"</span></a></li>"));for(var k=0;k<allPlans.data.plans[w].cycles.length;k++)if("starter"!=allPlans.data.plans[w].cycles[k].plan&&allPlans.data.plans[w].cycles[k].coupon_cycle==pCycle&&allPlans.data.plans[w].cycles[k].plan==allPlans.data.lists.list[m].plan.id.split("_")[0]){var C="";"m"!=allPlans.data.lists.list[m].plan.id.split("_")[1]&&("essentials"===allPlans.data.lists.list[m].plan.id.split("_")[0]&&(C='<span class="strike-off strike-price">$'+essentials_m+"/Month</span>"),"business"===allPlans.data.lists.list[m].plan.id.split("_")[0]&&(C='<span class="strike-off strike-price whitebg">$'+business_m+"/Month</span>"),"freelancer"===allPlans.data.lists.list[m].plan.id.split("_")[0]&&(C='<span class="strike-off strike-price">$'+freelancer_m+"/Month</span>")),allPlans.data.plans[w].cycles[k].coupon_active?("PERCENTAGE"==allPlans.data.plans[w].cycles[k].coupon_type?n=allPlans.data.lists.list[m].plan.price/100-allPlans.data.lists.list[m].plan.price/100*allPlans.data.plans[w].cycles[k].coupon_value/100:"FLAT"==allPlans.data.plans[w].cycles[k].coupon_type&&(n=allPlans.data.lists.list[m].plan.price/100-allPlans.data.plans[w].cycles[k].coupon_value),6==allPlans.data.lists.list[m].plan.period&&"month"==allPlans.data.lists.list[m].plan.period_unit&&(s='<br/><h3 class="plan-price">'+C+"<span>$"+Math.ceil(n/6)+"/Month</span></h3>"),1==allPlans.data.lists.list[m].plan.period&&(s='<br/><h3 class="plan-price">'+C+"<span>$"+n+"/Month</span></h3>","year"==allPlans.data.lists.list[m].plan.period_unit&&(s='<br/><h3 class="plan-price">'+C+"<span>$"+Math.ceil(n/12)+"/Month</span></h3>")),s+="<br/><span>Use coupon code:"+allPlans.data.plans[w].cycles[k].coupon_name+"</span>"):6==allPlans.data.lists.list[m].plan.period&&"month"==allPlans.data.lists.list[m].plan.period_unit?s='<br/><h3 class="plan-price">'+C+"<span>$"+Math.ceil(allPlans.data.lists.list[m].plan.price/100/6)+"/Month</span></h3>":1==allPlans.data.lists.list[m].plan.period&&(s='<br/><h3 class="plan-price">'+C+"<span>$"+allPlans.data.lists.list[m].plan.price/100+"/"+allPlans.data.lists.list[m].plan.period_unit+"</h3>","year"===allPlans.data.lists.list[m].plan.period_unit&&(s='<br/><h3 class="plan-price">'+C+"<span>$"+Math.ceil(allPlans.data.lists.list[m].plan.price/100/12)+"/Month</h3>")),"enterprise"===allPlans.data.lists.list[m].plan.id.split("_")[0]&&(s='<br/><span class="contact-pricing">*Contact us for pricing</span>')}}p='<div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.'+ext+'/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params">Start Trial</a></div>',"business"==allPlans.data.lists.list[m].plan.id.split("_")[0]?(P='<span class="ribbon">Most Popular</span>',v="billing-white",b="billing-white-top",h="business-box",f="toggle-dots-grey",g="business-box-xshadow",y="billing-white-bottom"):"enterprise"==allPlans.data.lists.list[m].plan.id.split("_")[0]?(P="",v="billing-grey",b="billing-grey-top",h="enterprise-box",f="toggle-dots-white",y="billing-grey-bottom",p='<div class="col-md-12 col-sm-12 col-xs-12 np"><a href="mailto:randy@outgrow.co" class="btn btn-white-red-outline hvr-sweep-to-right signupbanners">Contact Us</a></div>'):(P="",v="billing-grey",b="billing-grey-top",h="starter-box",f="toggle-dots-white",y="billing-grey-bottom"),a+='<div class="col-md-4 col-sm-4 col-xs-12 np '+h+" "+v+" "+d+'"><div class="col-md-12 col-sm-12 col-xs-12 np text-center '+b+" "+g+'">'+P+'<h3 class="plan-title">'+allPlans.data.lists.list[m].plan.name.split(" ")[0]+"<br/><h4>"+allPlans.data.lists.list[m].plan.name.split(" ")[1]+'</h4></h3><span class="border-center"></span>'+s+"<p>"+allPlans.data.lists.list[m].plan.description+"</p>"+p+'</div><div class="col-md-12 col-sm-12 col-xs-12 np rs-hide '+y+'" id="'+_+'"><ul class="billing-list">'+l+'</ul></div><a href="javascript:void(0);" class="'+f+'" onclick="show(\''+_+'\')"><div><i class="material-icons" id="'+_+'_arrow">keyboard_arrow_down</i><p class="more-info" id="'+_+'_more">More Info</p></div></a></div>'}}jQuery("#plansList").html(a)},showPlan=function(a){pCycle=a,jQuery(".cycle-tab").removeClass("active"),"m"==a?jQuery("#monthly").addClass("active"):"s"==a?jQuery("#half-yearly").addClass("active"):"s"==a&&jQuery("#annually").addClass("active"),displayPlans()},show=function(a){jQuery("#"+a).hasClass("rs-hide")?(jQuery("#"+a).removeClass("rs-hide"),jQuery("#"+a+"_arrow").html("keyboard_arrow_up"),jQuery("#"+a+"_more").html("Less Info")):(jQuery("#"+a).addClass("rs-hide"),jQuery("#"+a+"_arrow").html("keyboard_arrow_down"),jQuery("#"+a+"_more").html("More Info"))};