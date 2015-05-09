<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Glyph.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_c35206ee16f5142ebcf86ff0b09d4086.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Glyph.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2015 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_GLYPH_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_GLYPH_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div>
<div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="classsf_1_1Glyph.php">   41</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Glyph.php">Glyph</a></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="classsf_1_1Glyph.php#ab15cfc37eb7b40a94b3b3aedf934010b">   49</a></span>&#160;    <a class="code" href="classsf_1_1Glyph.php#ab15cfc37eb7b40a94b3b3aedf934010b">Glyph</a>() : advance(0) {}</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="line" href="classsf_1_1Glyph.php#aeac19b97ec11409147191606b784deda">   54</a></span>&#160;<span class="comment"></span>    <span class="keywordtype">float</span>     <a class="code" href="classsf_1_1Glyph.php#aeac19b97ec11409147191606b784deda">advance</a>;     </div>
<div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1Glyph.php#a6f3c892093167914adc31e52e5923f4b">   55</a></span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> <a class="code" href="classsf_1_1Glyph.php#a6f3c892093167914adc31e52e5923f4b">bounds</a>;      </div>
<div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="classsf_1_1Glyph.php#a0d502d326449f8c49011ed91d2805f5b">   56</a></span>&#160;    <a class="code" href="classsf_1_1Rect.php">IntRect</a>   <a class="code" href="classsf_1_1Glyph.php#a0d502d326449f8c49011ed91d2805f5b">textureRect</a>; </div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;};</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="preprocessor">#endif // SFML_GLYPH_HPP</span></div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div>
<div class="ttc" id="classsf_1_1Glyph_php_ab15cfc37eb7b40a94b3b3aedf934010b"><div class="ttname"><a href="classsf_1_1Glyph.php#ab15cfc37eb7b40a94b3b3aedf934010b">sf::Glyph::Glyph</a></div><div class="ttdeci">Glyph()</div><div class="ttdoc">Default constructor. </div><div class="ttdef"><b>Definition:</b> <a href="Glyph_8hpp_source.php#l00049">Glyph.hpp:49</a></div></div>
<div class="ttc" id="classsf_1_1Glyph_php"><div class="ttname"><a href="classsf_1_1Glyph.php">sf::Glyph</a></div><div class="ttdoc">Structure describing a glyph. </div><div class="ttdef"><b>Definition:</b> <a href="Glyph_8hpp_source.php#l00041">Glyph.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Glyph_php_aeac19b97ec11409147191606b784deda"><div class="ttname"><a href="classsf_1_1Glyph.php#aeac19b97ec11409147191606b784deda">sf::Glyph::advance</a></div><div class="ttdeci">float advance</div><div class="ttdoc">Offset to move horizontally to the next character. </div><div class="ttdef"><b>Definition:</b> <a href="Glyph_8hpp_source.php#l00054">Glyph.hpp:54</a></div></div>
<div class="ttc" id="classsf_1_1Glyph_php_a6f3c892093167914adc31e52e5923f4b"><div class="ttname"><a href="classsf_1_1Glyph.php#a6f3c892093167914adc31e52e5923f4b">sf::Glyph::bounds</a></div><div class="ttdeci">FloatRect bounds</div><div class="ttdoc">Bounding rectangle of the glyph, in coordinates relative to the baseline. </div><div class="ttdef"><b>Definition:</b> <a href="Glyph_8hpp_source.php#l00055">Glyph.hpp:55</a></div></div>
<div class="ttc" id="classsf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; float &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Glyph_php_a0d502d326449f8c49011ed91d2805f5b"><div class="ttname"><a href="classsf_1_1Glyph.php#a0d502d326449f8c49011ed91d2805f5b">sf::Glyph::textureRect</a></div><div class="ttdeci">IntRect textureRect</div><div class="ttdoc">Texture coordinates of the glyph inside the font&#39;s texture. </div><div class="ttdef"><b>Definition:</b> <a href="Glyph_8hpp_source.php#l00056">Glyph.hpp:56</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
