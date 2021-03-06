<!-- alpha plugin -->
<link rel="stylesheet" href="/public/css/slider/slider.css">

        <div class="row">
            <div class="col-md-12 heading text-center">
                <h2 class="title2">行业应用
                   <span class="title-desc">多元化发展， 覆盖航天、航空、电子、兵器、船舶、通讯、汽车、家电等行业</span>
                </h2>
            </div>
        </div><!-- Title row end -->
		
<div class="box">

    <div class="list">
        <ul>
            <li class="p7"><a href="#"><img src="/public/images/slider/slide1.jpg" alt="" /></a></li>
            <li class="p6"><a href="#"><img src="/public/images/slider/slide2.jpg" alt="" /></a></li>
            <li class="p5"><a href="#"><img src="/public/images/slider/slide3.jpg" alt="" /></a></li>
            <li class="p4"><a href="#"><img src="/public/images/slider/slide4.jpg" alt="" /></a></li>
            <li class="p3"><a href="#"><img src="/public/images/slider/slide5.jpg" alt="" /></a></li>
            <li class="p2"><a href="#"><img src="/public/images/slider/slide6.jpg" alt="" /></a></li>
            <li class="p1"><a href="#"><img src="/public/images/slider/slide7.jpg" alt="" /></a></li>
        </ul>
    </div>

    <a href="javascript:;" class="prev btn"><</a>
    <a href="javascript:;" class="next btn">></a>

    <div class="buttons">
        <a href="javascript:;"><span class="blue"></span></a>
        <a href="javascript:;"><span></span></a>
        <a href="javascript:;"><span></span></a>
        <a href="javascript:;"><span></span></a>
        <a href="javascript:;"><span></span></a>
        <a href="javascript:;"><span></span></a>
        <a href="javascript:;"><span></span></a>
    </div>
</div>

<script type="text/javascript">
    var $a = $(".box .buttons a");
    var $s = $(".box .buttons span");
    var cArr = ["p7", "p6", "p5", "p4", "p3", "p2", "p1"];
    var index = 0;
    $(".box .next").click(
            function() {
                nextimg();
            }
    )
    $(".box .prev").click(
            function() {
                previmg();
            }
    )
    //上一张
    function previmg() {
        cArr.unshift(cArr[6]);
        cArr.pop();
        //i是元素的索引，从0开始
        //e为当前处理的元素
        //each循环，当前处理的元素移除所有的class，然后添加数组索引i的class
        $(".box li").each(function(i, e) {
            $(e).removeClass().addClass(cArr[i]);
        })
        index--;
        if (index < 0) {
            index = 6;
        }
        show();
    }

    //下一张
    function nextimg() {
        cArr.push(cArr[0]);
        cArr.shift();
        $(".box li").each(function(i, e) {
            $(e).removeClass().addClass(cArr[i]);
        })
        index++;
        if (index > 6) {
            index = 0;
        }
        show();
    }

    //通过底下按钮点击切换
    $a.each(function() {
        $(this).click(function() {
            var myindex = $(this).index();
            var b = myindex - index;
            if (b == 0) {
                return;
            }
            else if (b > 0) {
                /*
                 * splice(0,b)的意思是从索引0开始,取出数量为b的数组
                 * 因为每次点击之后数组都被改变了,所以当前显示的这个照片的索引才是0
                 * 所以取出从索引0到b的数组,就是从原本的这个照片到需要点击的照片的数组
                 * 这时候原本的数组也将这部分数组进行移除了
                 * 再把移除的数组添加的原本的数组的后面
                 */
                var newarr = cArr.splice(0, b);
                cArr = $.merge(cArr, newarr);
                $(".box li").each(function(i, e) {
                    $(e).removeClass().addClass(cArr[i]);
                })
                index = myindex;
                show();
            }
            else if (b < 0) {
                /*
                 * 因为b<0,所以取数组的时候是倒序来取的,也就是说我们可以先把数组的顺序颠倒一下
                 * 而b现在是负值,所以取出索引0到-b即为需要取出的数组
                 * 也就是从原本的照片到需要点击的照片的数组
                 * 然后将原本的数组跟取出的数组进行拼接
                 * 再次倒序,使原本的倒序变为正序
                 */
                cArr.reverse();
                var oldarr = cArr.splice(0, -b)
                cArr = $.merge(cArr, oldarr);
                cArr.reverse();
                $(".box li").each(function(i, e) {
                    $(e).removeClass().addClass(cArr[i]);
                })
                index = myindex;
                show();
            }
        })
    })

    //改变底下按钮的背景色
    function show() {
        $($s).eq(index).addClass("blue").parent().siblings().children().removeClass("blue");
    }

    //点击class为p2的元素触发上一张照片的函数
    $(document).on("click", ".box .p2", function() {
        previmg();
        return false;//返回一个false值，让a标签不跳转
    });

    //点击class为p4的元素触发下一张照片的函数
    $(document).on("click", ".box .p4", function() {
        nextimg();
        return false;
    });

//			鼠标移入box时清除定时器
    $(".box").mouseover(function() {
        clearInterval(timer);
    })

//			鼠标移出box时开始定时器
    $(".box").mouseleave(function() {
        timer = setInterval(nextimg, 4000);
    })

//			进入页面自动开始定时器
    timer = setInterval(nextimg, 4000);
</script>