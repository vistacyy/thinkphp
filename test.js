// 去掉弹窗
function openTishi(second) {
    if (second == randomTime) //随机时间提示
    {
        setRandomTipTime();
        updateStudyTime(0);
    }
}

// 提示保存时间
function DoConverseCallTimer() {
    if (isClose == 1) {
        return;
    }
    if (document.form2.thzt.value == "") {
        //alert("请输入倒计时开始的秒数！");
    } else {
        var minute = "0";
        var second = "0";
        if (videoifplayFlag) {
            begintime = parseInt(begintime) + 1; 
        }
        minute = parseInt(begintime / 60);
        second = begintime % 60;
        if (minute < "21") {
            document.form2.thzt.value = minute + "分" + second + "秒";
            jQuery("#benci").html(minute + "分" + second + "秒" + " " + (randomTime - begintime)+"秒后存时间");
        } else {
            document.form2.thzt.value = minute + "分" + second + "秒";
            return;
        }
        timer1 = window.setTimeout("DoConverseCallTimer()", 1000);
        document.form2.passedtime.value = begintime;
        openTishi(begintime);
    }
}