<!doctype html>
<html>
<head>
<meta charset="utf-8">
@yield('title')

<body>
<header>
  <div class="profile">
    <div class="avatar fl"><img src="./style/images/avatar.jpg"></div>
    <div class="guanzhu fl">
      <ul>
        <li><img src="./style/images/nianling.png">
          <span> 
            <script language="javascript">
               function ages(str)   
                {   
                      var r = str.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);     
                      if(r==null)return false;     
                      var d= new Date(r[1],  r[3]-1,  r[4]);     
                      if(d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4])   
                      {   
                            var Y = new Date().getFullYear();   
                            return("年龄 "+ (Y-r[1]) +" 周岁");   
                      }   
                      return("日期格式错误！");   
                }   
                document.write(ages("1994-07-22"));   
    
            </script>
          </span>
        </li>
        <li><img src="./style/images/weizhi.png"><span>中国·河南</span></li>
        <li><img src="./style/images/qq.png"><span>QQ：951305586</span></li>
        <li><img src="./style/images/weixin.png"><span><img src="./style/images/wxewm.png"></span></li>
      </ul>
    </div>
    <div class="username">my的小家</div>
  </div>
  <nav>
    <ul id="starlist">
      <li><a href="{{url('/')}}">首页</a></li>
      <li><a href="{{url('time')}}">新鲜事儿</a></li>
      <li><a href="{{url('list')}}">我的日记</a></li>
      <li><a href="{{url('share')}}">我的相册</a></li>
      <li><a href="{{url('info')}}">微记录</a></li>
      <li><a href="{{url('infopic')}}">视频</a></li>
      <li><a href="{{url('about')}}">关于我</a></li>
    </ul>
  </nav>
</header>
@yield('content')
<aside class="l_box">
    <div class="wdxc">
      <h2>我的相册</h2>
      <ul>
        <li><a href="/tuseday/photo/21.html" title="古典个人博客模板《青砖屋檐》"><img src="http://www.yangqq.com/skin/850/images/text02.jpg"></a></li>
        <li><a href="/tuseday/photo/20.html" title="个人博客模板《早安》"><img src="http://www.yangqq.com/skin/850/images/b02.jpg"></a></li>
        <li><a href="/tuseday/photo/7.html" title="简单手工纸玫瑰"><img src="http://www.yangqq.com/d/file/news/s/2014-01-29/15e613795b6fe3ad00e917556b6b76c6.jpg"></a></li>
        <li><a href="/tuseday/photo/6.html" title="房前种菜，屋后栽花"><img src="http://www.yangqq.com/d/file/news/read/2014-05-28/f805e33f1266f2504739c740084faac7.jpg"></a></li>
        <li><a href="/tuseday/photo/5.html" title="陌上花开，可缓缓归矣"><img src="http://www.yangqq.com/d/file/news/s/2013-07-09/d353fb4c75965aef35182a7875186b79.jpg"></a></li>
        <li><a href="/tuseday/photo/4.html" title="云南之行——丽江古镇玉龙雪山"><img src="http://www.yangqq.com/d/file/news/s/2014-01-04/6bccfe64820d609bcd0ab7ca7a7fa5dd.jpg"></a></li>
      </ul>
    </div>
    <div class="search">
      <form action="/tuseday/e/search/index.php" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字词" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字词'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字词'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <div class="tuijian">
      <h2>最近更新</h2>
      <ul>
        <li><a href="/tuseday/diary/8.html" title="个人博客，属于我的小世界！">个人博客，属于我的小世界！</a></li>
        <li><a href="/tuseday/diary/19.html" title="一个三十而立的男程序员真实讲述：代码搅乱我的生活">一个三十而立的男程序员真实讲述：代码搅乱我的生活</a></li>
        <li><a href="/tuseday/diary/1.html" title="《寻之旅》一个关于旅游，游记的个人博客">《寻之旅》一个关于旅游，游记的个人博客</a></li>
        <li><a href="/tuseday/diary/16.html" title="个人博客从简不繁">个人博客从简不繁</a></li>
        <li><a href="/tuseday/diary/17.html" title="抄袭门过后——丢掉心结，重拾自己">抄袭门过后——丢掉心结，重拾自己</a></li>
        <li><a href="/tuseday/diary/12.html" title="个人博客，我为什么要用帝国cms？">个人博客，我为什么要用帝国cms？</a></li>
        <li><a href="/tuseday/photo/21.html" title="古典个人博客模板《青砖屋檐》">古典个人博客模板《青砖屋檐》</a></li>
        <li><a href="/tuseday/photo/7.html" title="简单手工纸玫瑰">简单手工纸玫瑰</a></li>
      </ul>
    </div>
    <div class="tuijian">
      <h2>点击排行</h2>
      <ul>
        <li><a href="/tuseday/diary/8.html" title="个人博客，属于我的小世界！">个人博客，属于我的小世界！</a></li>
        <li><a href="/tuseday/diary/19.html" title="一个三十而立的男程序员真实讲述：代码搅乱我的生活">一个三十而立的男程序员真实讲述：代码搅乱我的生活</a></li>
        <li><a href="/tuseday/diary/1.html" title="《寻之旅》一个关于旅游，游记的个人博客">《寻之旅》一个关于旅游，游记的个人博客</a></li>
        <li><a href="/tuseday/diary/16.html" title="个人博客从简不繁">个人博客从简不繁</a></li>
        <li><a href="/tuseday/diary/17.html" title="抄袭门过后——丢掉心结，重拾自己">抄袭门过后——丢掉心结，重拾自己</a></li>
        <li><a href="/tuseday/diary/12.html" title="个人博客，我为什么要用帝国cms？">个人博客，我为什么要用帝国cms？</a></li>
        <li><a href="/tuseday/photo/21.html" title="古典个人博客模板《青砖屋檐》">古典个人博客模板《青砖屋檐》</a></li>
        <li><a href="/tuseday/photo/7.html" title="简单手工纸玫瑰">简单手工纸玫瑰</a></li>
      </ul>
    </div>
    <div class="fenlei">
      <h2>分类</h2>
      <ul>
        <li><a href="/">新鲜事儿（13）</a></li>
        <li><a href="/">我的日记（8）</a></li>
        <li><a href="/">我的相册（8）</a></li>
        <li><a href="/">微记录（8）</a></li>
        <li><a href="/">视频（8）</a></li>
      </ul>
    </div>
    <div class="links">
      <h2>友情链接</h2>
      <ul>
        <li><a href="http://www.yangqq.com" title="李志鹏个人博客">李志鹏个人博客</a></li>
      </ul>
    </div>
  </aside>
</article>
<div class="blank"></div>
<footer>
  <p>Design by <a href="http://www.yangqq.com" target="_blank">李志鹏个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>
