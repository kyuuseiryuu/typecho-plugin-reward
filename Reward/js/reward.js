
(function () {
    if(!window.REWARD_TPL){
        return ;
    }
    $(REWARD_TPL).appendTo("body");
    var REWARD_PLUGIN_STR = {
        UNHAPPY: "唉！～不开心。。。😔",
        DEFAULT: "等待大佬打赏中~",
        ORDER_URL: "/reward/alipay/order",
        QUERY_URL: "/reward/alipay/query"
    };
    var REWARD_ORDER = {
        INTEVAL_ID: '',
        BUYER: '',
        OUT_TRADE_NO: ''
    };
    function prepay(payurl) {
        $("#reward-qrcode-container").children().remove();
        $("#reward-qrcode-container").qrcode({ width: 200, height: 200, correctLevel: 0, text: payurl });
    }
    function setRewardText(text) {
        $("#reward-msg").text(text);
    }
    function getNewOrderRequest(totalAmount) {
        return {
            subject: "赞赏《" + $("title").text() + "》",
            total_amount: totalAmount
        };
    }
    function clearOldOrderQuery() {
        if (REWARD_ORDER.INTEVAL_ID) {
            clearInterval(REWARD_ORDER.INTEVAL_ID);
        }
    }
    function startNewOrderQuery() {
        var isFirstWait = true;
        REWARD_ORDER.INTEVAL_ID = setInterval(function () {
            $.post(REWARD_PLUGIN_STR.QUERY_URL, { out_trade_no: REWARD_ORDER.OUT_TRADE_NO }, function (data) {
                if (data.code == 10000) {
                    if (data.trade_status == "WAIT_BUYER_PAY" && isFirstWait) {
                        setRewardText("紧紧抱住【" + data.buyer_logon_id + "】大佬的大腿！");
                        isFirstWait = false;
                    }
                    if (data.trade_status == "TRADE_SUCCESS") {
                        setRewardText("感谢大佬打赏【" + data.buyer_pay_amount + "】元！🙏");
                        $("#reward-canceld").hide();
                        clearOldOrderQuery();
                        setTimeout(function () { $("#reward-plugin").hide() }, 3000);
                    }
                }
            });
        }, 1000);
    }
    function requestNewOrder(totalAmount) {
        $.post(REWARD_PLUGIN_STR.ORDER_URL, getNewOrderRequest(totalAmount), function (data) {
            if (data.code == 10000) {
                REWARD_ORDER.OUT_TRADE_NO = data.out_trade_no;
                prepay(data.qr_code);
                clearOldOrderQuery();
                startNewOrderQuery();
            }
        });
    }
    
    $("#cancel-pay").attr("class",$("[type='submit']").attr("class"));
    //关闭按钮
    $(".reward-close").click(function () {
        $(".reward_w.endzy-reward-layer").hide();
    });
    //赏按钮
    $("#webo_reward_btn").click(function () {
        $(".reward_w.endzy-reward-layer").show();
    });
    //立即支付按钮
    $(".reward-pay").click(function () {
        var totalAmount = parseFloat($("#endzy-rewardNum").val());
        if (totalAmount) {
            $(".reward_w.endzy-reward-layer").hide();
            $("#reward-plugin").show();
            requestNewOrder(totalAmount);
        }
    });
    //骰子按钮
    $("label.reward-random").click(function () {
        $("#endzy-rewardNum").val((Math.random() * 10).toFixed(2));
    });
    //算了按钮
    $("#cancel-pay").click(function () {
        clearOldOrderQuery();
        setRewardText(REWARD_PLUGIN_STR.UNHAPPY);
        $("#reward-plugin").hide(3000,function(){
            setRewardText(REWARD_PLUGIN_STR.DEFAULT);
        });
    });
})();