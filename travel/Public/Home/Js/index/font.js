// 幻灯片效果
    function py(){}
var fadeQc=new Array();
py.fadeS=function(str,time,is,type,rf){
    var fist1024,fistClacr,fistZhong,fistPDfist,slStr=$(str),qc;
    if(slStr.attr('fist1024')==undefined){
        fist1024=0;
        fistClacr;
        fistZhong;
        fistPDfist=true;
        qc=fadeQc.length;
    }
    else{
        fist1024=slStr.attr('fist1024');
        fistClacr=slStr.attr('fistClacr');
        fistZhong=slStr.attr('fistZhong');
        fistPDfist=slStr.attr('fistPDfist');
        qc=slStr.attr('qc');
    }
    clearTimeout(fadeQc[qc]);
    
    fistZhong=$(str+">div").length;
    if(fist1024>=fistZhong)fist1024=0;
    
    if(fistZhong==1){
        $(str+">div").show();
        return true;
    }
    
    $($(str+">div").stop(true,true).fadeOut(600)[fist1024]).fadeIn(600);
    
    
    fist1024++;
    if(is===true){
        var s="<p></p><ul>"
        for(var i=1;i<=fistZhong;i++){
            var titCon=i,ttit=$(str+'>div').eq(i-1).attr('title');
            if(type=='img'){ttit='<img src="'+$(str+'>div img').eq(i-1).attr('src')+'"/>';}
            if(ttit!=undefined){titCon=ttit;}
            if(fist1024==i){
                s+="<li class='xz'>"+ttit+"</li>";
            }
            else{
                s+="<li>"+ttit+"</li>";
            }
        }
        s+="</ul>"
        $(str).append(s)
        is="true";
        
        $(str+" li").mouseover(function(){
            var pdx=$(str+" li").index(this);
            var fist1024=slStr.attr('fist1024')
            if(pdx!=fist1024-1){
                fist1024=pdx;
                slStr.attr('fist1024',fist1024);
                py.fadeS(str,time,is,rf);
            }
        })
    }
    else if(is==="true"){
        $(str+" li.xz").removeClass('xz');
        $(str+" li").eq(fist1024-1).addClass("xz");
    }
    $(str+'>p').html($(str+'>div').eq(fist1024-1).find('img').data('tit'));
    
    fadeQc[qc]=setTimeout(function(){py.fadeS(str,time,is,rf)},time);
    try{
        rf(fist1024,function(){
            py.fadeS(str,time,is,rf);
        })
    }catch(e){}
    
    
    slStr.attr('fist1024',fist1024);
    slStr.attr('fistClacr',fistClacr);
    slStr.attr('fistZhong',fistZhong);
    slStr.attr('fistPDfist',fistPDfist);
    slStr.attr('qc',qc)
}


py.fadeS('.banner_mdd',5000,true,'img');
// if($('.banner_mdd div img').length == 1){
//     $('.banner_mdd').find('ul').hide();
// }
