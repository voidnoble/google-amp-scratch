<!DOCTYPE HTML>
<html amp lang="ko">
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <link rel="canonical" href="{{ $currentUrl }}">
    <!-- 비 AMP 페이지에 <link rel="amphtml" href="http://amp.yourdomain.com/news/{id}"> 선언 -->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    
    <style amp-custom>
        /* any custom style goes here */
        body {
            background-color: white;
        }

        amp-img {
            border: 0;
        }

        /* http://m.yourdomain.com/css/reset.css */
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        html,
        body{
            margin:0;
            font-size:16px;
        }
        * {-webkit-text-size-adjust:none;} /* iphone 글자크기 자동조정 방지 */
        ol, ul{list-style:none;padding:0}
        a{text-decoration:none;color:#000;}
        a:hover,
        a:active,
        a:focus{text-decoration:none;}
        img{border:none;}
        form{display:inline}

        figure{margin:0;padding:0;text-align:center}
        input[type='search']{border:none}
        label{cursor:pointer}
        section{font-size:1em}
        h1{font-size:1.2em; font-weight:bold}
        h2{font-size:1.1em; font-weight:bold}
        h3{font-size:1.0em; font-weight:bold}
        h4{font-size:1.0em}
        p{font-size:1em}
        button{border:none;padding:7px; font-weight:bold; cursor:pointer;border-radius:7px}

        .loading{background:url('/image/indicator.gif') no-repeat 50% 0; text-align:center; font-size:1.1em; margin:20px 0; padding-top:30px; color:#999}
        .on{display:block}
        .off{display:none}

        button{border:none;color:#fff; padding:7px; font-weight:bold; cursor:pointer;border-radius:7px}
        button a{color:#fff}
        .btnContainer{text-align:center; margin-top:7px;}
        .btnContainer a{display:inline-block}
        .button_1{padding:3px 7px; background-color:#999;}
        .button_2{padding:7px 20px; background-color:#3f3e40;  color:#d3d3d3; border:1px solid #333; border-radius:5px}
        .button_2 a{color:#fff; display:block}
        .button_3{padding:5px; background-color:#3f3e40; border-radius:0; margin:0}
        .button_4{padding:5px; background-color:#999; margin-left:5px; color:#fff}
        .button_5{font-size:.9em; border:1px solid #dedede; padding:7px 10px; border-radius:3px; display:inline-block; background-color:#666; color:#fff; font-weight:bold; cursor:pointer}


        /* font size */
        .ft-fa1 {font-size:100%;}
        .ft-fa2 {font-size:88%;}
        .ft-fa3 {font-size:75%;}
        .ft-fa4 {font-size:69%;}

        /* default */
        .border-box {box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; -o-box-sizing:border-box;}

        .no_type{margin:0;padding:0;list-style:none}
        .border_box{box-sizing:border-box;-webkit-box-sizing:border-box;-o-box-sizing:border-box;-moz-box-sizing:border-box;}
        .blind{position:absolute;top:-1000px;visibility:hidden}
        .word_break{word-break:break-all;word-wrap:break-word}
        .textOverflow{display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}

        .errBox{text-align:center;background-color:#f3f3f3;margin:0;padding:20px;}
        .errBox p.msg {font-size:1.2em; font-weight:bold; margin-bottom:10px;}
        .errBox .button a{display:block; color:#fff}
        .textBar{padding:10px;text-align:center;color:#fff;font-weight:bold;border-top:1px solid #dedede;cursor:pointer}


        .textBar p{font-size:.9em; margin:0;}
        .margin_top_5{margin-top:5px}
        .margin_top_10{margin-top:10px}
        .margin_top_15{margin-top:15px}
        .border_top_none{border-top:0}

        .margin_bottom_5{margin-bottom:5px}
        .margin_bottom_10{margin-bottom:10px}
        .margin_bottom_15{margin-bottom:15px}

        .padding_bottom_0{padding-bottom:0}
        .padding_bottom_5{padding-bottom:5px}
        .padding_bottom_10{padding-bottom:10px}
        .padding_bottom_15{padding-bottom:15px}

        .padding_10{padding:10px}

        .clear{clear:both}

        .ui-loader{display:none}

        .hiddenElement{display:none}
        .hiddenText{text-indent:-10000px; height:0; line-height:0;}
        .fLayer{z-index:102000}

        .formRow{background-color:#eee; border:1px solid #dedede; padding:0 10px}
        .formRow > li{padding:10px 0;border-bottom:1px solid #dedede}
        .formRow.big > li{padding:15px 0}
        .formRow > li:last-child{border:0}

        .formColumn{overflow:hidden;}
        .formColumn .field, .formColumn .value{float:left}
        .formColumn .field{width:30%; font-weight:bold;}
        .formColumn .field.block{width:100%; font-weight:bold; margin:5px 0}

        .formColumn .tip{font-size:.9em; color:#777; margin:0}
        .formColumn .tip strong{font-weight:bold; text-decoration:underline}

        .formColumn .value{width:70%}
        .formColumn .value.block{width:100%; margin:5px 0}
        .formColumn .value input[type="text"],.formRow .value select{display:inline-block; width:100%; padding:2px; margin:0; box-sizing:border-box;}
        .formColumn .value strong{font-weight:bold}
        .formColumn .value fieldset{border:1px solid #ddd; margin-bottom:10px; padding:15px;}
        .formColumn .value fieldset legend{padding:0 5px}
        .formColumn .value fieldset strong{display:block; margin:5px}
        .formColumn .value .option dt{display:block; margin-bottom:5px; color:#444}
        .textButton{color:blue; fontloading-weight:bold; cursor:pointer}

        .listBox li{float:left; width:48%; padding:10px; border:1px solid #dedede; margin:15px 1%;}
        .listBox .thumb{float:left; width:200px; height:180px; margin-right:10px;}
        .listBox .thumb img{max-width:100%; max-height:100%}
        .listBox .description strong{font-weight:bold; line-height:1.8em;}

        #onLoadingContainer{z-index:100; position:absolute; top:0 ; left:0; width:100%; height:100%;}
        #onLoadingText, #completeText{z-index:500; width:350px; height:50px; line-height:50px; top: calc(50% - 25px); left: calc(50% - 175px); position:fixed; color:#000; text-align:center; font-size:18px; font-weight:bold; background-color:#000; color:#fff; padding:0 10px}
        #completeText{z-index:700;}
        #onLoadingText i{transform:rotateZ(0deg);}

        /* http://m.yourdomain.com/css/contentSkin.css */
        /* Swipe 2 required styles */
        .swipe {
            overflow: hidden;
            visibility: hidden;
            position: relative;
        }
        .swipe-wrap {
            overflow: hidden;
            position: relative;
        }
        .swipe-wrap > div {
            float:left;
            width:100%;
            position: relative;
        }

        .swipe-controller{
            margin-top:10px;
            text-align:center;
        }

        .swipe-controller .swipe-left, .swipe-controller .swipe-right, .swipe-controller button{
            display:none; cursor:pointer;
        }

        .swipe-controller .counter{
            display:inline-block; text-indent:-10000px; width:8px; height:8px; border-radius:4px; background-color:#aaa;
            vertical-align:middle; margin:0 2px;
        }
        /* END required styles */

        /* 사진 스타일 */
        .cskin-photo1 > div {overflow:hidden; height:15em;}
        .cskin-photo1 > ul > li{position:relative;}
        .cskin-photo1 .thumb{display:block; text-align:center; height:15em; overflow:hidden}
        .cskin-photo1 a{display:block}
        .cskin-photo1 img{width:100%; min-height:100%}
        .cskin-photo1 h3{font-size:1.2em; color:#fff;  text-align:center;  position:absolute; width:90%; padding-left:5%; left:0; bottom:0; line-height:2.4em; height:2.4em; z-index:4000; display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis; opacity:1; }
        .cskin-photo1 h4{font-weight:normal; color:#fff; display:none}
        .cskin-photo1 p{font-size:1.2em; color:#666; text-indent:-100000px; position:absolute; width:100%; left:0; bottom:0; height:2.4em; background-color:#000; opacity:0.8}

        .cskin-photo1.slide {position:relative;}
        .cskin-photo1.slide > .swipe{overflow:hidden; height:15em;}
        .cskin-photo1.slide h3{padding-bottom:1em;}
        .cskin-photo1.slide p{padding-bottom:1em}
        .cskin-photo1.slide .swipe-controller{position:absolute; bottom:.7em; width:100%; height:1em; text-align:center;}
        .cskin-photo1.slide .swipe-controller .counter{background-color:#fff}

        .cskin-photo1.type-2 h3{text-shadow: 1px 1px 1px #333; font-size:1.3em; line-height:1; height:1em; padding-bottom:10px;}
        .cskin-photo1.type-2 p{
            background: #000; /* Old browsers */
            background: -moz-linear-gradient(top, transparent, #000); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0,transparent), color-stop(1,#A1DBFF)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, transparent,#000); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, transparent,#000); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, transparent,#000); /* IE10+ */
            background: linear-gradient(top, transparent,#000); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='transparent', endColorstr='#000',GradientType=0 ); /* IE6-9 */
            opacity:1; height:7em;
        }

        .cskin-photo1.slide.type-2 h3{ bottom:10px }
        .cskin-photo1.slide.type-2 .swipe-controller{position:relative; margin:0; bottom:0; padding:10px 0 ; background:#eee; border-bottom:1px solid #ccc}
        .cskin-photo1.slide.type-2 .swipe-controller .counter{background-color:#999; }
        .cskin-photo1.slide.type-2 .swipe-controller .swipe-left,
        .cskin-photo1.slide.type-2 .swipe-controller .swipe-right{display:block; position:absolute; top:0; padding:10px; color:#4e4e4e; border-left:1px solid #dedede; border-right:1px solid #dedede; }

        .cskin-photo1.slide.type-2 .swipe-controller .swipe-left{left:0; }
        .cskin-photo1.slide.type-2 .swipe-controller .swipe-right{right:0;}

        .cskin-photo2{/*padding:10px;*/ overflow:hidden; }
        .cskin-photo2 .description h3{display:inline-block; max-width:90%; color:#111; font-size:.9em; padding-left:8px; margin-top:5px; line-height:1.2em; height:2.5em; overflow:hidden; font-weight:normal; text-align:left}
        .cskin-photo2 .description h4{display:inline-block; font-weight:normal; color:#666; font-size:0.8em; margin-bottom:10px; padding-left:8px;}
        .cskin-photo2 .description p{display:none}
        .cskin-photo2 a{display:block;}
        .cskin-photo2 li{float:left; box-sizing:border-box; }
        .cskin-photo2 li:first-child{padding-right:1px}

        .cskin-photo2.col2 li{width:50%}
        .cskin-photo2.col2_1 li{width:50%}
        .cskin-photo2.col3 li{width:33%}

        .cskin-photo2.relative-img .thumb {text-align:center; }
        .cskin-photo2.relative-img .thumb img{max-width:100%;height:100px;}

        .cskin-photo2.fixed-img .thumb {position:relative; padding-bottom:60%; overflow:hidden; }
        .cskin-photo2.fixed-img .thumb img{position:absolute; max-width:100%; min-height:100%}

        .cskin-photo2_1{/*padding:10px;*/ overflow:hidden; }
        .cskin-photo2_1 .description h3{display:inline-block; max-width:90%; color:#111; font-size:.9em; padding-left:8px; margin-top:5px; line-height:1.2em; height:2.5em; overflow:hidden; font-weight:normal; text-align:left}
        .cskin-photo2_1 .description h4{display:inline-block; font-weight:normal; color:#666; font-size:0.8em; margin-bottom:10px; padding-left:8px;}
        .cskin-photo2_1 .description p{display:none}
        .cskin-photo2_1 a{display:block;}
        .cskin-photo2_1 li{float:left; box-sizing:border-box;}
        .cskin-photo2_1 li:first-child{padding-right:1px}
        .cskin-photo2_1 li:last-child{padding-left:1px}

        .cskin-photo2_1.col2 li{width:50%}
        .cskin-photo2_1.col2_1 li{width:50%}
        .cskin-photo2_1.col3 li{width:33%}
        .cskin-photo2_1.col4 li{width:50%; height:100%;}

        .cskin-photo2_1.fixed-img .thumb {position:relative; padding-bottom:60%; overflow:hidden; }
        .cskin-photo2_1.fixed-img .thumb img{position:absolute; max-width:100%; min-height:100%;}

        .cskin-photo2_1.relative-img .thumb {position:relative; padding-bottom:60%; overflow:hidden; clear:both; }
        .cskin-photo2_1.relative-img .thumb img{position:absolute; max-width:100%; min-height:100%; clear:both;}

        .cskin-photo2_1.relative-img .swipe-controller {margin-top:0px; margin-bottom:10px;}

        .cskin-photo3{padding:10px; overflow:hidden; border-bottom:1px solid #eeeeee;}
        .cskin-photo3 .description h3{display:inline-block; max-width:90%; color:#111; font-size:1.0em; line-height:1.4em; max-height:2.8em; overflow:hidden; font-weight:normal; text-align:left}
        .cskin-photo3 .description h4{display:none}
        .cskin-photo3 .description p{display:none}
        .cskin-photo3 a{display:block;}
        .cskin-photo3 li{float:left; box-sizing:border-box;}
        .cskin-photo3 li:first-child{padding-right:5px}
        .cskin-photo3 li:last-child{padding-left:5px}

        .cskin-photo3.col2 li{width:50%}
        .cskin-photo3.col3 li{width:33%}

        .cskin-photo3.relative-img .thumb {text-align:center; }
        .cskin-photo3.relative-img .thumb img{max-width:100%;height:100px;}

        .cskin-photo3.fixed-img .thumb {position:relative; padding-bottom:60%; overflow:hidden;}
        .cskin-photo3.fixed-img .thumb img{position:absolute; width:100%; min-height:100%}

        .cskin-photo4{ overflow:hidden; }
        .cskin-photo4 .description {position:absolute; z-index:11; bottom:0px; padding:3px 0px; max-width:100%; background:url('/image/photoBox_Lowbg.png');  }
        .cskin-photo4 .description h3{display:inline-block; width:90%; color:#fff; font-size:.9em; padding-left:8px; margin-top:5px; line-height:1.4em; height:2.8em; overflow:hidden; font-weight:normal; text-align:left}
        .cskin-photo4 .description h4{display:inline-block; font-weight:normal; color:#666; font-size:0.8em; margin-bottom:10px; padding-left:8px;}
        .cskin-photo4 .description p{display:none}
        .cskin-photo4 a{display:block;}
        .cskin-photo4 li{float:left; position:relative; box-sizing:border-box; padding-right:1px}

        .cskin-photo4.col2 li{width:50%}
        .cskin-photo4.col2_1 li{width:50%}
        .cskin-photo4.col3 li{width:33%}

        .cskin-photo4.relative-img .thumb {position:relative; padding-bottom:60%; overflow:hidden; }
        .cskin-photo4.relative-img .thumb img{position:absolute; max-width:100%; min-height:100%}

        .cskin-photo4.fixed-img .thumb {position:relative; padding-bottom:60%; overflow:hidden; }
        .cskin-photo4.fixed-img .thumb img{position:absolute; max-width:100%; min-height:100%}

        .cskin-photo4.relative-img .swipe-controller {display:none;}

        /* 사진+기사 스타일 */
        .cskin-mixed1 a{display:block; padding:15px 10px; border-bottom:1px solid #dedede; overflow:hidden;}
        .cskin-mixed1 ul li:last-child a{border-bottom:0; padding-bottom:0}
        .cskin-mixed1 ul li:after{content: "";clear:both;width:100%;display:block;}
        .cskin-mixed1 .thumb{float:left; width:6em; height:4em; overflow:hidden;  border:1px solid #dedede; margin-right:10px}
        .cskin-mixed1 img{width:100%; /*max-height:100%;*/}
        .cskin-mixed1 .description{height:4em; line-height:1.3em; overflow:hidden; }
        .cskin-mixed1 h3{margin:0; font-weight:normal;}
        .cskin-mixed1 h4{display:none}
        .cskin-mixed1 p.summary{margin-top:5px; color:#666; font-size:.8em; overflow:hidden;}
        .cskin-mixed1 p.info{margin-top:2px; color:#666;}
        .cskin-mixed1 .writer{margin-right:10px; font-size:.9em}
        .cskin-mixed1 .date{font-size:.9em}
        .cskin-mixed1 .relation{display:none}

        .cskin-mixed1.img-right .thumb{margin:0; max-height:4em; overflow:hidden; margin-left:10px; float:right}

        .cskin-mixed1.view-title a{padding:15px 10px}
        .cskin-mixed1.view-title .description{height:auto}
        .cskin-mixed1.view-title h3{font-size:1.2em; font-weight:normal; line-height:1.4em; color:#133f6c}
        .cskin-mixed1.view-title p.summary{display:none}

        .cskin-mixed1.view-top h3{font-weight:bold; font-size:1.33em; padding-bottom:7px; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
        .cskin-mixed1.view-top .thumb{width:8em; height:5em; overflow:hidden}
        .cskin-mixed1.view-top p.summary{font-size:.9em}

        .cskin-mixed1.view-relation-news a{border:0;padding:0}
        .cskin-mixed1.view-relation-news > ul > li{padding:15px 10px; font-size:1em; border-bottom:1px solid #dedede}
        .cskin-mixed1.view-relation-news > ul > li:last-child{border-bottom:0}
        .cskin-mixed1.view-relation-news > ul > li:first-child{border-bottom:1px solid #dedede;}
        .cskin-mixed1.view-relation-news > ul > li .relation a{font-size:.9em}
        .cskin-mixed1.view-relation-news .relation {display:block; margin-top:5px}

        .cskin-mixed1.view-relation-news .relation a{padding:7px 10px; background:url('/image/reply_2.gif') no-repeat 10px .7em; padding-left:20px; display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
        .cskin-mixed1.view-relation-news .relation li:last-child a{padding-bottom:0}
        .cskin-mixed1.view-relation-news .relation li.more a{cursor:pointer; background:none;  text-align:right; color:#777; padding-bottom:0}
        .cskin-mixed1.view-relation-news .relation li.hidden{display:none}

        .cskin-mixed2{}
        .cskin-mixed2 a{display:block;  overflow:hidden;}
        .cskin-mixed2 li{display:relative; padding-left:10px}
        .cskin-mixed2 li:after{content: "";clear:both;width:100%;display:block;}
        .cskin-mixed2 .thumb{float:left; padding:23px 0; width:4em; height:4em; overflow:hidden; margin-right:10px }
        .cskin-mixed2 img{width:100%; height:100%; border-radius:50%; border:1px solid #dedede; box-sizing:border-box;}
        .cskin-mixed2 .description{position:relative; overflow:hidden; min-height:4em; padding:23px 0; padding-right:10px; border-bottom:1px solid #dedede;}
        .cskin-mixed2 li:last-child .description{border-bottom:0}
        .cskin-mixed2 .description .ico{position:absolute; top:calc(50% - .5em); right:10px}
        .cskin-mixed2 .description .etc{font-size:.7em; color:#999}
        .cskin-mixed2 .description .etc span{display:inline-block; margin-right:5px}
        .cskin-mixed2 .description .etc span.writer:before{content:" - "}
        .cskin-mixed2 .ico{color:#133f6c}
        .cskin-mixed2 h3{margin-top:2px; font-size:1.24em; font-weight:normal; line-height:1.4em; color:#133f6c}
        .cskin-mixed2 h4{display:none}
        .cskin-mixed2 p.summary{display:none}

        .cskin-mixed3 a{display:block; padding:0px; /*padding:8px;*/ border-bottom:1px solid #eeeeee; overflow:hidden;}
        .cskin-mixed3 ul li:last-child a{border-bottom:0; padding-bottom:0}
        .cskin-mixed3 ul li:after{content: "";clear:both;width:100%;display:block;}
        .cskin-mixed3 .thumb{float:left; width:8em; height:5em; overflow:hidden;  /*border:1px solid #eeeeee;*/ margin-right:15px}
        .cskin-mixed3 img{width:100%; height:81px;}
        .cskin-mixed3 .description{height:5em; line-height:1.3em; overflow:hidden; font-size:0.9em; padding-right:10px; }
        .cskin-mixed3 h3{max-height:2.5em; overflow:hidden; margin:0; font-weight:normal; margin-top:0.8em; margin-bottom:0.2em;}
        .cskin-mixed3 h4{font-weight:normal; color:#666; font-size:0.8em;}
        .cskin-mixed3 p.summary{margin-top:5px; color:#666; font-size:.8em; overflow:hidden;}
        .cskin-mixed3 p.info{margin-top:2px; color:#666;}
        .cskin-mixed3 .writer{margin-right:10px; font-size:.9em}
        .cskin-mixed3 .date{font-size:.9em}
        .cskin-mixed3 .relation{display:none}

        .cskin-text2-rolling{padding:12px 10px; background-color:#f2f2f2;}
        .cskin-text2-rolling h3{float:left; margin-right:10px; }
        .cskin-text2-rolling h3 > span{cursor:pointer; float:left; font-size:.7em; padding:7px; border-radius:5px; color:#fff }
        .cskin-text2-rolling h3 > span.on{color:yellow;}
        .cskin-text2-rolling p{}
        .cskin-text2-rolling .list.roll { line-height:1.5em; height:1.5em; overflow:hidden}
        .cskin-text2-rolling .list.rollOff{clear:left;}
        .cskin-text2-rolling .list.rollOff li{border-bottom:1px solid #dedede}
        .cskin-text2-rolling .list.rollOff li:last-child{border-bottom:0; margin-bottom:0}
        .cskin-text2-rolling .list li a{display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
        .cskin-text2-rolling .list.rollOff li a{padding:10px}

        /* 줄기사 스타일 */
        .cskin-text1 a{/*padding:10px;*/ display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
        .cskin-text1 .category, .cskin-text1 .category2, .cskin-text1 .category3{display:none; margin-right:5px}
        .cskin-text1 .num{display:none; color:#999; font-style:italic;  margin-right:10px; font-weight:bold;}

        .cskin-text1.view-number .num{display:inline-block;}
        .cskin-text1.view-category .category{display:inline-block; font-size:.9em}
        .cskin-text1.view-category2 .category2{display:inline-block; font-size:.9em}
        .cskin-text1.view-category3 .category3{display:inline-block; font-size:.9em}
        .cskin-text1.view-category li:last-child{border-bottom:1px solid #dedede;}
        .cskin-text1.sub-list li a{padding-left:25px; background:url('/image/reply_2.gif') no-repeat 10px 50%}

        .cskin-text2{}
        .cskin-text2 a{padding:10px; display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
        .cskin-text2 li{border-bottom:1px solid #dedede;}
        .cskin-text2 li:last-child{border-bottom: 1px solid #dedede;}
        .cskin-text2 .category, .cskin-text2 .category2, .cskin-text2 .category3{display:none; margin-right:5px}
        .cskin-text2 .num{display:none; color:#999; font-style:italic;  margin-right:10px; font-weight:bold;}

        .cskin-text2.view-number .num{display:inline-block;}
        .cskin-text2.view-category .category{display:inline-block; font-size:.9em}
        .cskin-text2.view-category2 .category2{display:inline-block; font-size:.9em}
        .cskin-text2.view-category3 .category3{display:inline-block; font-size:.9em}
        .cskin-text2.view-category li:last-child{border-bottom:1px solid #dedede;}
        .cskin-text2.sub-list li a{padding-left:25px; background:url('/image/reply_2.gif') no-repeat 10px 50%}

        /* http://m.yourdomain.com/css/layout.css */
        #wrapper {
            position: relative;
            background-color: #fff;
        }

        #header {
            background: #fff;
        }

        #mainHeader {
            overflow: hidden;
            padding: 10px 7px;
        }

        #footer {
            clear: both;
            padding: 10px;
            background-color: #dcdcdd;
            color: #3f3e40;
        }

        #footer .footerMenu {
            margin-bottom: 5px;
            text-align: center
        }

        #footer .footerInfo {
            overflow: hidden;
            padding: 7px; /*line-height:1.6em; height:1.6em;*/
        }

        #footer .footerInfo .copyRight {
            float: left;
            line-height: 13px
        }

        #footer .footerInfo .power {
            float: right;
            padding: 5px;
            padding-bottom: 0
        }

        .container_left, .container_right{padding:0; /*padding-bottom:10px;*/ position:relative; box-sizing:border-box;}
        .topContainer{overflow:hidden;}

        @media only screen and	(max-width:600px) {
            .container_left{width:100%;float:none; }
            .container_right{width:100%;float:none;}

            #wrapper.spacingWrapper .topContainer{background-color:#dcdcdd;}
            #wrapper.spacingWrapper .topContainer .container_left, #wrapper.spacingWrapper .topContainer .container_right{padding:10px;}
            #wrapper.spacingWrapper .topContainer .container_left{padding-bottom:0}
            #wrapper.spacingWrapper #articleViewContainer .container_left{padding:0; border-bottom:1px solid #a8aaab}
            #wrapper.spacingWrapper .contentBox.bgBox4{border:1px solid #d0d1d2; border-top:0}
        }

        @media only screen and	(max-width:320px) {
            #wrapper.spacingWrapper #articleListContainer .advertisementItem,
            #wrapper.spacingWrapper #mainContainer .advertisementItem{
                width:320px; position:relative; left:-10px;
            }
        }

        @media only screen and	(min-width:601px){
            .container_left{width:55%; padding:15px; float:left;}
            .container_right{width:45%; padding:15px; float:left;}

            .articleList > h2{border:0;}
            .contentBox{}
            .contentBox.bgBox1{background-color:#f6f6f6;}
            .contentBox.bgBox2{background-color:#fff;}
            .contentBox.bgBox3{background-color:#fff;border:0;}
            .contentBox.bgBox4{background-color:#fff;border:1px solid #d0d1d2; border-bottom:0; border-top:0}
            .contentBox.bgBox5{background-color:#fff; border:0;}
            .contentBox.bgBox6{background-color:#fff; padding:0}

            .contentBox > h2{padding:7px;}
            .contentBox h2.bgTitle1{border:0; background-color:#fff}
            .contentBox h2.bgTitle2{border:0; background-color:#fff}
            .contentBox h2.hiddenTitle{height:0; line-height:0; padding:0; text-indent:-10000px}

            /* 경계선 설정을 위한 가상 요소 */
            .container_left:after{
                content:" ";
                position:absolute;
                border-right:1px solid #dedede;
                height:100%;
                top:0; right:0;
            }

            .container_right:after{
                content:" ";
                position:absolute;
                border-left:1px solid #dedede;
                height:100%;
                top:0; left:-1px;
            }
        }

        /* 헤더 */
        .top-nav {display:inline-block; height:21px; margin-top:4px; overflow:hidden; cursor:pointer; background:url(/image/mobile_design.png) no-repeat; background-size:180px 110px; -moz-background-size:180px 110px; -webkit-background-size:180px 110px; line-height:300px;}
        #header.SET_A #menu_button {width:25px; background-position:0px 0px;}
        #header.SET_A #search_button {width:22px; background-position:-30px 0px;}

        #header.SET_B #menu_button {width:25px; background-position:0px -25px;}
        #header.SET_B #search_button {width:22px; background-position:-30px -25px;}

        #mainHeader #logo{	display:block; padding-top: 7px; }
        #mainHeader h1 {display:none}
        #mainHeader p{text-align:right; color:#fff; font-weight:bold; font-size:20px; line-height:44px}
        #mainHeader p i{margin-right:4px}

        #mainHeader .headerList{overflow:hidden}
        #mainHeader .headerList li{float:left}
        #mainHeader .headerList .headerLeft{width:20%; text-align:left;}
        #mainHeader .headerList .headerCenter{width:60%; text-align:center;}
        #mainHeader .headerList .headerRight{width:20%; text-align:right; padding-top:5px;}


        #mainMenuContainer {
            position:absolute; width:280px; height:100%; top:0; left:-290px; z-index:101000; transition:left .4s;
            background-color:#32394b; color:#fff; box-shadow:2px 2px 8px black;
            overflow:hidden;
        }
        #mainMenuContainer .mainMenuContainer-inner {position:relative; transform:translate(0,0); transition:transform 0 ease-out}

        /* close btn
        #mainMenuContainer .mainMenuContainer-inner .closebox {position:absolute; top:0; right:0; z-index:101000; display:block;}
        #mainMenuContainer .mainMenuContainer-inner .closebox a {position:relative; width:48px; height:48px; cursor:pointer; display:block;}
        #mainMenuContainer .mainMenuContainer-inner .closebox a i.close-btn {position:absolute; display:block; overflow:hidden; width:21px; height:21px; left:50%; top:50%; margin-left:-10.5px; margin-top:-10.5px; background:url(/image/mobile_design.png) -120px -25px no-repeat; background-size:180px 110px; -moz-background-size:180px 110px; -webkit-background-size:180px 110px; text-indent:-5000px; z-index:11;}
        */
        #menuClose{position:absolute; padding:9px; top:0; right:0; z-index:102000;color:#fff; cursor:pointer;}

        #mainMenuContainer #news-category-list{overflow:hidden;}
        #mainMenuContainer #news-category-list li {float:left; width:50%; border-bottom:1px solid #474d5d; border-right:1px solid #474d5d; box-sizing:border-box;}
        #mainMenuContainer #news-category-list li a {  color:#fff; padding:15px 10px; display:block; overflow:hidden;white-space:nowrap;text-overflow:ellipsis; border-bottom:1px solid #232937;  border-right:1px solid #232937; }
        #mainMenuContainer #news-category-list li:nth-child(even){border-right:0}
        #mainMenuContainer #news-category-list li:nth-child(even) a{border-right:0}

        #mainMenuContainer #search{background-color:#111; opacity:1; padding:7px}
        #mainMenuContainer p.copy{margin:7px; text-align:center;}
        #mainMenuContainer .menu { overflow:hidden; border-bottom:1px solid #474d5d; background-color:#3d4457; color:#fff;}
        #mainMenuContainer .menu a {overflow:hidden; padding: 15px 10px;  border-bottom:1px solid #232937; display:block; color:#fff; cursor:pointer;}

        #mainMenuContainer .menu a.on{color:#FFE400}
        #mainMenuContainer .menu h2 {float:left;}
        #mainMenuContainer .menu i {float:right;}

        #mainMenuContainer #adminLogin #adminLoginForm{display:block; position:relative; padding:10px; padding-bottom:0}
        #mainMenuContainer #adminLogin #adminLoginForm input{width:90%; margin:5px auto; padding:5px}
        #mainMenuContainer .admin-login-menu{}
        #mainMenuContainer .admin-menu{display:none}

        #mainMenuContainer #wwwAdminLogin, #mainMenuContainer #wwwAdminLogout{display:none}
        #editInventoryFrame {position:fixed; width:1020px; height:650px; overflow-y:auto; background-color:#fff; border-radius:7px; left:0; top:0; color:#333; padding:15px; display:none; }

        #editInventory #closeEditInventory{ position:absolute; top:0; right:0; background:url(/image/mobile_design.png) -150px 0px no-repeat; background-size: 180px 110px; cursor:pointer; width:15px; height:15px; line-height:100px; overflow:hidden; }
        #editInventory > .body{overflow:hidden; margin:10px 0}
        #editInventory .inventoryBox{float:left; width:31%; margin:0 1%; }

        #editInventory .inventoryBox > h3{display:inline-block; padding:7px 10px; background-color:#ddd;}
        #editInventory .inventoryBox .content{border:1px solid #dedede; margin:5px; margin-left:0; margin-top:0; /*padding:7px;*/ font-size:.8em}
        #editInventory .inventoryBox#previewContainer .content{font-size:1em; width:100%}

        #editInventory .inventoryBox #conditionContainer{border:0;}
        #editInventory .inventoryBox #skinContainer{border:0;}
        #editInventory .inventoryBox #skinContainer .item{width:100%; cursor:pointer;}
        #editInventory .inventoryBox #skinContainer .item li{margin-bottom:15px; border:1px solid #dedede; display:none}
        #editInventory .inventoryBox #skinContainer .item li.on{border:2px solid #333}
        #editInventory .inventoryBox #skinContainer .item img{max-width:100%;}
        #editInventory .inventoryBox #skinContainer .skinSummary{background-color:#000;line-height:1; padding:7px; color:#fff}
        #editInventory .inventoryBox #skinContainer .skinSummary h4{margin:0; font-weight:bold;}
        #editInventory .inventoryBox #skinContainer .skinSummary p{margin:0; font-size:.9em; margin-top:5px; letter-spacing:.1em; line-height:1.4em}
        #editInventory .inventoryBox #previewInventory{overflow-y:visible}
        #editInventory .inventoryBox .adModifySubmenu h4{margin-top:7px; font-weight:bold; background-color:#444; color:#fff; display:inline-block; padding:5px;}
        #editInventory .inventoryBox .textareaRezise{width:95%; padding:5px; margin:0}
        #editInventory #sectionBox input{border:0; display:inline; background:transparent}
        #editInventory #sectionBox h3{background-color:#cecece; padding:7px; margin:7px 0; margin-bottom:0}
        #editInventory #sectionBox i{cursor:pointer}
        #editInventory #sectionBox .sectionControl{margin-top:5px; text-align:right}
        #editInventory #sectionBox .sectionControl > span{cursor:pointer}

        /* menu search */
        #mainMenuContainer .mainMenuContainer-inner .menu-search {background-color:#272d3b; padding:7px; position:relative;}
        #mainMenuContainer .mainMenuContainer-inner .menu-search small {display:none;}
        #mainMenuContainer #mainSearchForm {display:block; position:relative; margin-right:40px;}
        #mainMenuContainer #mainSearchForm .keyword {width:100%; height:35px; border:1px solid #212936; color:#fff; background-color:#464f5e; padding:0 12px; padding-right:33px; border-radius:25px;}
        #mainMenuContainer #mainSearchForm .searchButton {position:absolute; right:7px; top:50%; margin-top:-12px; background-color:transparent;  width:22px; height:22px; background:url(/image/mobile_design.png) no-repeat; background-size:180px 110px; -moz-background-size:180px 110px; -webkit-background-size:180px 110px; line-height:300px; background-position:-30px -24px; opacity:.8; overflow:hidden;}
        #mainMenuContainer #mainSearchForm .search{padding:8px 10px 10px 10px; overflow:hidden; display:none;}
        #mainMenuContainer #mainSearchForm .searchForm{position:relative; width:100%; display:block;}

        #subSearchForm{height:0; overflow:hidden; transition:height .5s; padding:0;}
        #subSearchForm .searchForm{display:block; position:relative;margin:6px 15px 10px 15px}
        #subSearchForm .keyword{width:100%; height:25px; border:0; padding:5px; margin:0; border-radius:0; padding-right:50px; box-sizing:border-box;}
        #subSearchForm .searchButton{position:absolute; top:0; right:0; margin:0; height:25px;}

        /* 엔디로고 */
        .power .ndsoft-icon {display:block; overflow:hidden; width:72px; height:8px; margin:0; text-indent:-5000px; background:url(/image/mobile_design.png) 0px -90px no-repeat; background-size:180px 110px; -moz-background-size:180px 110px; -webkit-background-size:180px 110px;}

        #hLayer{position:fixed; width:100%; height:100%; background-color:#111; top:0; z-index:100000; opacity:.6; display:none;}

        /* banner */
        .container_banner {margin-top:15px;}
        .container_banner h2 {display:none;}
        .container_banner p {display:inline-block; overflow:hidden; width:100%; height:50px; line-height:300px; background-position:center center; background-repeat:no-repeat; background-size:350px 40px; -moz-background-size:350px 40px; -webkit-background-size:350px 40px;}
        .container_banner p a {display:block;}

        /*.advertisementItem .imageBanner{overflow:hidden; width:100%; height:40px; text-indent:-10000px; background-position:center center; background-repeat:no-repeat; background-size:350px 40px; -moz-background-size:350px 40px; -webkit-background-size:350px 40px;}*/

        /* banner contents type */
        .container_banner p.ad-type-1 {background-image:url(/banner/mobile_banner1.png); background-color:#d4dde4; border:1px solid #c7d0d7;}
        .container_banner p.ad-type-2 {background-image:url(/banner/mobile_banner2.png); background-color:#1c252c; border:1px solid #131a20;}

        .browserInfo{}
        .browserInfo h1{background-color:#28a6d8; padding:15px; color:#fff}
        .browserInfo ul{font-size:1.4em}
        .browserInfo li{padding:10px}

        /* edit style */
        .inventoryContainer .editBox, .advertisementItem .editAd{display:none}

        .edit .inventoryContainer, .edit .advertisementItem{position:relative; border:1px solid #666; min-height:33px;}
        .edit .inventoryContainer .editBox, .edit .advertisementItem .editAd{
            display:block;
            position:absolute; bottom:0; right:0;
            line-height:33px;
            max-height:33px;
            padding:0 7px;
            background-color:#111;
            color:#000;
            opacity:.9; font-weight:bold;
            font-size:11px;
            cursor:pointer;
            border:1px solid #666; border-right:0; border-bottom:0;
            z-index:99000;
        }

        .edit .inventoryContainer .editBox{background-color:#dcecdd}
        .edit .advertisementItem .editAd{background-color:#fae4e8}

        #adminPreview .inventoryContainer, #previewContainer .inventoryContainer{ outline:0}
        #adminPreview .inventoryContainer .editBox, #previewContainer .inventoryContainer .editBox{display:none}
        h1.previewTitle{background-color:#222; color:#fff; padding:10px}

        .advertisementItem {position:relative; text-align:center;}
        .advertisementItem .networkAd{padding:0; overflow:hidden}
        .advertisementItem .networkAd img{max-width:100%;}
        .advertisementItem .imageBanner{overflow:hidden; display:block;}
        .advertisementItem .imageBanner a{display:block; padding:0; margin:0;}
        .advertisementItem .imageBanner img{max-width:320px; height:auto;  vertical-align:bottom;}

        /* http://m.yourdomain.com/css/content.css?0727 */
        .top-nav {
            background: none;
        }

        #articleHeader {
            position: relative;
            padding: 10px;
            border-bottom: 1px solid #f2f2f2;
        }

        #articleHeader .navigation {
            font-size: .9em;
        }

        #articleHeader .navigation i {
            margin: 0 5px;
        }

        #articleHeader h1 {
            font-size: 1.3em;
            color: #252628;
            line-height: 1.3em;
            margin-top: 10px;
            font-weight: normal;
        }

        #articleHeader .date {
            font-size: .8em;
            color: #9a9b9e;
            margin: 0;
            margin-top: 7px;
        }

        #articleBody {
            position: relative;
            margin: 0;
            padding: 1rem 0;
            line-height: 1.6em;
            font-size: 1em;
            background-color: #fff;
            color: #333;
        }

        #articleBody h2, #articleBody h3 {
            margin: 2rem 0 1rem 10px;
        }

        #articleBody > .body p {
            margin: 0 0 15px 0;
            padding: 0 10px;
        }

        #articleBody > .body .view_r_caption {
            margin: 0;
            margin-top: 0;
            padding: 0 10px;
            color: #666;
            padding-bottom: 12px;
            padding-top: 0;
            font-size: 14px;
            line-height: 1.6em;
            max-width: 320px;
        }

        #articleBody .motor__imgCapDsp {
            color: gray;
        }

        #articleBody .writer {
            text-align: left;
            margin-top: 10px;
            padding: 0 10px;
        }

        #articleBody .copy {
            text-align: left;
            margin-top: 10px;
            padding: 0 10px;
        }

        #wrapper .skin_background {
            background-color: #000000;
            color: #fff
        }

        #wrapper .skin_color {
            color: #000000;
        }

        #wrapper .skin_border {
            border: 2px solid #000000;
        }

        #wrapper .skin_bottom {
            border-bottom: 4px solid #000000;
        }

        .swipe {
            visibility: visible
        }

        .contentBox > h2 {
            padding: 7px;
        }

        /* http://static.yourdomain.com/static/forExtern/ndsoft__yourdomain/common.css */
        ul.rig {
            list-style: none;
            font-size: 0;
            margin-left: -2.5%;
        }

        ul.rig li {
            display: inline-block;
            padding: 10px;
            margin: 0 0 2.5% 2.5%;
            background: #fff;
            border: 1px solid #ddd;
            font-size: 16px;
            font-size: 1rem;
            vertical-align: top;
            box-shadow: 0 0 5px #ddd;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            font-family: "나눔고딕",NanumGothic,"맑은 고딕","Malgun Gothic","돋움",Dotum,"굴림",Gulim,Helvetica,sans-serif;
        }

        ul.rig li img {
            width:100%;
            max-width: 100%;
            height: auto;
            margin: 0 0 10px;
        }

        ul.rig li h3 {
            margin: 0 0 5px;
        }

        @media (max-width: 1199px) {
            .grid-container {
                width: auto;
            }
        }

        ul.rig li {
            width: 22.5%;
        }

        @media (min-width: 768px) and (max-width: 979px) {
            ul.rig li {
                width: 30.83%;
            }
        }

        @media (max-width: 767px) {
            ul.rig li {
                width: 47.5%;
            }
        }

        @media (max-width: 480px) {
            ul.grid-nav li {
                display: block;
                margin: 0 0 5px;
            }

            ul.grid-nav li a {
                display: block;
            }

            ul.rig {
                margin-left: 0;
            }

            ul.rig li {
                width: 100%;
                margin: 0 0 20px;
            }
        }

        /* 겔러리 상단 서브메뉴 */

        #subMenu2 {
            border-bottom:1px solid #A41615;
        }

        #subMenu2 .subMenu2Item {
            cursor:pointer;
        }

        #galleryTitleDsp {
            margin-top:20px;
            margin-bottom:40px;
        }

        #galleryListMoreBtnDsp {
            text-align:center;
        }

        #galleryListMoreBtn {
            -moz-box-shadow:inset 0 1px 0 0 #ffffff;
            -webkit-box-shadow:inset 0 1px 0 0 #ffffff;
            box-shadow:inset 0 1px 0 0 #ffffff;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
            background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
            background-color:#ffffff;
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            border-radius:6px;
            border:1px solid #dcdcdc;
            display:inline-block;
            cursor:pointer;
            color:#666666;
            font-family:arial;
            font-size:15px;
            font-weight:bold;
            padding:6px 24px;
            text-decoration:none;
            text-shadow:0 1px 0 #ffffff;
        }

        #galleryListMoreBtn:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
            background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
            background-color:#f6f6f6;
        }

        #galleryListMoreBtn:active {
            position:relative;
            top:1px;
        }

        .genBl__container {
            width:250px;
            margin-top:1px;
            margin-bottom:1px;
        }

        .genBl__container .genBl__top {
            background-color:#3d3d3d;
            padding-left:12px;
            padding-top:10px;
            padding-bottom:8px;
            text-align:left;
        }

        .genBl__container .genBl__body {
            padding:0;
            margin:0;
            /* margin-top:1px; */ /*20150511*/
        }

        .genBl__container .genBl__body td h3 {
            font-size:12px;
            font-weight:normal;
            color:rgb(64, 64, 64);
            font-family:verdana, 굴림, AppleGothic;
        }

        .genBl__container .genBl__bodyItemBetween {
            padding-top:1px;
        }

        .genBl__container .genBl__bodyItem {
            width:100%;
            border-collapse:collapse;
            border:0;
            background-color:rgb(221, 221, 221);
        }

        .genBl__container .genBl__bodyItem td {
            border-collapse:collapse;
            line-height:150%;
        }

        .genBl__container .genBl__bodyItem td.txt {
            text-align:left;
            vertical-align:top;
            padding:5px 5px;
            color:rgb(64, 64, 64);
            letter-spacing:-1px;
        }

        .genBl__container .genBl__bodyItem a:hover {
            color: #d3231a;
            text-decoration: underline;
        }

        table.noBorderTable {
            border-spacing: 0;
            border-collapse: collapse;
        }

        table.noBorderTable td {
            padding:0;
        }

        /* snsTop 관련 */
        #snsTopDspWrap {
            position:relative;
            z-index:1;
            margin:0 auto;
            width:1px;
        }

        #snsTopDsp {
            width:500px;
            position:absolute;
            z-index:2;
            top:-90px;
            left:235px;
        }

        #snsTopDsp .menuItemDsp {
            float:left;
            width:41px;
            margin-right:10px;
            height:90px;
            position:relative;
            cursor:pointer;
        }

        #snsTopDsp .menuItemDsp img {
            position:absolute;
            top:0;
            left:0;
            width:41px;
        }

        #snsTopDsp .menuItemDsp div.menuItemDspOver {
            position:absolute;
            top:0;
            left:0;
            cursor:pointer;
            width:41px;
            height:90px;
            background-image:url(http://file.osen.co.kr/web2/images/bg/bg_white_tran_100_per.png);
        }

        #snsTopDsp .menuItemDsp img.onImg {
            display:none;
            height:90px;
        }

        table.bodyBottom {
            border-spacing: 0;
            border-collapse: collapse;
            margin:20px auto 0 auto;
        }

        table.bodyBottom td {
            padding:0;
        }

        #aside2 {
            display: none;
        }

        /* http://static.yourdomain.com/static/forExtern/ndsoft__yourdomain/common__mobile.css */
        #galleryTitleDsp {
            margin-left:10px;
        }

        #subMenu2 {
            height:23px;
        }

        #ae20d36a {
            border-bottom: 1px solid #dbdbdb;
        }

        /* customize */
        .footerInfo .tel {
            color: #363636;
        }

        .footerInfo .copyright {
            padding-top: 5px;
        }
    </style>

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage":{
            "@type":"WebPage",
            "@id":"{{ $currentUrl }}"
        },
        "headline": "{{ $title }}",
        "image": {
            "@type": "ImageObject",
            "url": "{{ $image['url'] }}",
            "height": {{ $image['height'] }},
            "width": {{ $image['width'] }}
        },
        "datePublished": "{{ $dateModified }}",
        "dateModified": "{{ $dateModified }}",
        "author": {
            "@type": "Person",
            "name": "{{ $author }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "yourdomain",
            "logo": {
              "@type": "ImageObject",
              "url": "http://static.yourdomain.com/static/img/logo/logo_for_light_background.png",
              "width": 188,
              "height": 21
            }
        }
    }
    </script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
</head>
<body>
    <!--
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43825484-1', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

        ga('create', 'UA-71884324-1', 'auto', {'name':'yourdomainTracker'});
        ga('require', 'displayfeatures');
        ga('yourdomainTracker.send', 'pageview');
    -->
    <amp-analytics type="googleanalytics" id="analytics1">
        <script type="application/json">
                {
                    "vars": {
                        "account": "UA-71884324-1"
                    },
                    "triggers": {
                        "trackPageview": {
                            "on": "visible",
                            "request": "pageview"
                        },
                        "trackPageviewWithAmpdocUrl": {
                            "on": "visible",
                            "request": "pageview",
                            "vars": {
                                "title": "{{ $title }}",
                                "ampdocUrl": "http://amp.yourdomain.com/news/{{ $article->externUid }}"
                            }
                        },
                        "trackClickOnTwitterLink" : {
                            "on": "click",
                            "selector": "#tweet-link",
                            "request": "social",
                            "vars": {
                                "socialNetwork": "twitter",
                                "socialAction": "tweet",
                                "socialTarget": "{{ $currentUrl }}"
                            }
                        }
                    }
                }
            </script>
    </amp-analytics>

    <div id="wrapper">
        <section class="advertisment">
            <div id="default_top_notch" class="advertisementItem">
                <div class="editAd">default_top_notch</div>
            </div>
        </section>

        <header id="header" class="SET_B">
            <!-- 메인 헤더 -->
            <div id="mainHeader" class="skin_background">
                <ul class="headerList">
                    <li class="headerLeft">
                        <span id="menu_button" class="top-nav"><!--메뉴--></span>
                    </li>
                    <li class="headerCenter">
                        <a href="{{ $baseUrl }}/" id="logo" target="_blank">
                            <amp-img src="http://static.yourdomain.com/static/img/logo/logo_for_dark_background.png" width="188" height="21" alt="로고"></amp-img>
                        </a>
                    </li>
                    <li class="headerRight">
                        <span id="search_button" class="top-nav"><!--검색--></span>
                    </li>
                </ul>
            </div>
            <!-- 메인 헤더 -->

            <!-- 사이드 메뉴 -->
            <aside id="mainMenuContainer" class="border-box">
                <nav class="mainMenuContainer-inner">
                    <!-- AMP <form> 금지 (https://github.com/ampproject/amphtml/blob/master/spec/amp-html-format.md)
                    <section class="menu-search">
                        <h2 class="hiddenText">검색</h2>
                        <form name="searchForm" method="get" action="/news/articleList.html" id="mainSearchForm">
                            <input type="hidden" name="sc_area" value="A">
                            <input type="search" name="sc_word" placeholder="검색어를 입력하세요"
                                   class="keyword border-box menu-sch-input ft-fa2">
                            <button class="searchButton">검색</button>
                        </form>
                        <a id="menuClose"><i class="fa fa-times fa-2x"></i></a>
                    </section>
                    -->
                    <section class="menu border-box">
                        <a href="{{ $baseUrl }}/">
                            <h2 class="ft-fa1">메인화면으로 이동</h2>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </section>
                    <section class="menu border-box">
                        <a>
                            <h2 class="ft-fa1">카테고리</h2>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </section>
                    <ul id="news-category-list">

                        <li class="border-box ft-fa2"><a href="{{ $baseUrl }}/news/articleList.html" class="border-box"
                                                         title="{{ $baseUrl }}/news/articleList.html | 전체글목록">전체글</a>
                        </li>
                        <li class="border-box ft-fa2"><a class="border-box">&nbsp;</a></li>
                    </ul>
                    <section class="menu border-box">
                        <a href="http://www.yourdomain.com/mobile/cooking.php" target="_blank" title="PC버전">
                            <h2 class="ft-fa1">PC버전으로 보기</h2>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </section>
                    <p class="copy ft-fa3">copyright &copy; YourCorp all rights reserved.</p>
                </nav>
            </aside>
            <!-- 사이드 메뉴 -->

            <!-- 검색바 --
            <div id="subSearchForm" class="skin_background">
                <form name="searchForm" class="searchForm" method="get" action="/news/articleList.html">
                    <input type="hidden" name="sc_area" value="A">
                    <input type="text" name="sc_word" class="keyword">
                    <button class="button_3 searchButton">검색</button>
                </form>
            </div>
            <!-- /검색바 -->
            <section class="advertisment">
                <div id="default_top" class="advertisementItem">
                    <div class="editAd">default_top</div>
                </div>
            </section>
        </header>

        <!--<section class = "advertisment">
            <div id = "default_news_top" class = "advertisementItem">
                <div class = "editAd">default_news_top</div>
            </div></section>-->