jQuery(document).ready(function(){
//	var theForm=$("#form1");
//			theForm.validationEngine({
//				scroll:false,
//				ajaxFormValidation: true,
//				promptPosition: 'topLeft',
//				ajaxFormValidationMethod: 'post',
//				onBeforeAjaxFormValidation: ajaxBeforeCall,
//				onAjaxFormComplete: ajaxValidCallback
//	});


});

function ajaxBeforeCall(form, options){ $("#dosubmit").val("稍等..");return true; }
function ajaxValidCallback(status, form, json, options){
    if (status === true) {
        var sendTips=$("#form-send-tips");
        if(json.sendValid){
            $(":text").val("");$("#dosubmit").val("提交");
            alert("注册成功，谢谢支持！");
        }
        else{ alert(unescape(json.backInfo)); }
    }else{
        alert("注册失败，请重试！");
    }
}


function showInfo(moduleId,infoId,infoTitle){
    //if(!isInteger(infoId)){ return false; }
    $.ajax({
        type: "POST",
        url: "/DataGather/",
        dataType: "html",
        data: {
            "act": "getInfo","moduleId": moduleId,"infoId": infoId
        },
        timeout: 20000,
        success: function(data, textStatus) {
            var d = dialog({
                title: infoTitle,width:800,
                content: data
            });
            d.showModal();
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            dialog({title:'提示', content:'状态：' + textStatus + '；出错提示：' + errorThrown, okValue:'确定', ok:function (){}}).showModal();
        }
    });
}

//加QQ
function addQQ(){
    window.open('tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=741154827');
    //window.open('http://wpa.qq.com/msgrd?v=3&uin=741154827&site=web&menu=yes');
}
//加QQ群
function addQQGroup(){ window.open(''); }

//判断是否为整数
function isInteger(obj) {
    return typeof obj === 'number' && obj%1 === 0
}