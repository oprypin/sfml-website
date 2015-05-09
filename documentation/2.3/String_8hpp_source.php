<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'String.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_e77bc78cd1600c86c90e2a8e6a2ca7d9.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">String.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_STRING_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_STRING_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Utf.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;locale&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="classsf_1_1String.php">   44</a></span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API <a class="code" href="classsf_1_1String.php">String</a></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="comment">// Types</span></div>
<div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">   51</a></span>&#160;<span class="comment"></span>    <span class="keyword">typedef</span> std::basic_string&lt;Uint32&gt;::iterator       <a class="code" href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">Iterator</a>;      </div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">   52</a></span>&#160;    <span class="keyword">typedef</span> std::basic_string&lt;Uint32&gt;::const_iterator <a class="code" href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">ConstIterator</a>; </div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00057"></a><span class="lineno"><a class="line" href="classsf_1_1String.php#abaadecaf12a6b41c54d725c75fd28527">   57</a></span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> std::size_t <a class="code" href="classsf_1_1String.php#abaadecaf12a6b41c54d725c75fd28527">InvalidPos</a>; </div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>();</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keywordtype">char</span> ansiChar, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keywordtype">wchar_t</span> wideChar);</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(Uint32 utf32Char);</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> <span class="keywordtype">char</span>* ansiString, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> std::string&amp; ansiString, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> <span class="keywordtype">wchar_t</span>* wideString);</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> std::wstring&amp; wideString);</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> Uint32* utf32String);</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> std::basic_string&lt;Uint32&gt;&amp; utf32String);</div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; copy);</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1String.php">String</a> fromUtf8(T begin, T end);</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1String.php">String</a> fromUtf16(T begin, T end);</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1String.php">String</a> fromUtf32(T begin, T end);</div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;</div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;    <span class="keyword">operator</span> std::string() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;</div>
<div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;    <span class="keyword">operator</span> std::wstring() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;</div>
<div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;    std::string toAnsiString(<span class="keyword">const</span> std::locale&amp; locale = std::locale()) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;</div>
<div class="line"><a name="l00265"></a><span class="lineno">  265</span>&#160;    std::wstring toWideString() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;</div>
<div class="line"><a name="l00275"></a><span class="lineno">  275</span>&#160;    std::basic_string&lt;Uint8&gt; toUtf8() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;</div>
<div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;    std::basic_string&lt;Uint16&gt; toUtf16() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;</div>
<div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;    std::basic_string&lt;Uint32&gt; toUtf32() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;</div>
<div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00309"></a><span class="lineno">  309</span>&#160;</div>
<div class="line"><a name="l00318"></a><span class="lineno">  318</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>&amp; operator +=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00319"></a><span class="lineno">  319</span>&#160;</div>
<div class="line"><a name="l00331"></a><span class="lineno">  331</span>&#160;    Uint32 operator [](std::size_t index) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00332"></a><span class="lineno">  332</span>&#160;</div>
<div class="line"><a name="l00344"></a><span class="lineno">  344</span>&#160;    Uint32&amp; operator [](std::size_t index);</div>
<div class="line"><a name="l00345"></a><span class="lineno">  345</span>&#160;</div>
<div class="line"><a name="l00354"></a><span class="lineno">  354</span>&#160;    <span class="keywordtype">void</span> clear();</div>
<div class="line"><a name="l00355"></a><span class="lineno">  355</span>&#160;</div>
<div class="line"><a name="l00364"></a><span class="lineno">  364</span>&#160;    std::size_t getSize() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00365"></a><span class="lineno">  365</span>&#160;</div>
<div class="line"><a name="l00374"></a><span class="lineno">  374</span>&#160;    <span class="keywordtype">bool</span> isEmpty() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00375"></a><span class="lineno">  375</span>&#160;</div>
<div class="line"><a name="l00386"></a><span class="lineno">  386</span>&#160;    <span class="keywordtype">void</span> erase(std::size_t position, std::size_t count = 1);</div>
<div class="line"><a name="l00387"></a><span class="lineno">  387</span>&#160;</div>
<div class="line"><a name="l00398"></a><span class="lineno">  398</span>&#160;    <span class="keywordtype">void</span> insert(std::size_t position, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; str);</div>
<div class="line"><a name="l00399"></a><span class="lineno">  399</span>&#160;</div>
<div class="line"><a name="l00412"></a><span class="lineno">  412</span>&#160;    std::size_t find(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; str, std::size_t start = 0) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;</div>
<div class="line"><a name="l00426"></a><span class="lineno">  426</span>&#160;    <span class="keywordtype">void</span> replace(std::size_t position, std::size_t length, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; replaceWith);</div>
<div class="line"><a name="l00427"></a><span class="lineno">  427</span>&#160;</div>
<div class="line"><a name="l00438"></a><span class="lineno">  438</span>&#160;    <span class="keywordtype">void</span> replace(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; searchFor, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; replaceWith);</div>
<div class="line"><a name="l00439"></a><span class="lineno">  439</span>&#160;</div>
<div class="line"><a name="l00455"></a><span class="lineno">  455</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a> substring(std::size_t position, std::size_t length = InvalidPos) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00456"></a><span class="lineno">  456</span>&#160;</div>
<div class="line"><a name="l00468"></a><span class="lineno">  468</span>&#160;    <span class="keyword">const</span> Uint32* getData() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00469"></a><span class="lineno">  469</span>&#160;</div>
<div class="line"><a name="l00478"></a><span class="lineno">  478</span>&#160;    Iterator begin();</div>
<div class="line"><a name="l00479"></a><span class="lineno">  479</span>&#160;</div>
<div class="line"><a name="l00488"></a><span class="lineno">  488</span>&#160;    ConstIterator begin() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00489"></a><span class="lineno">  489</span>&#160;</div>
<div class="line"><a name="l00502"></a><span class="lineno">  502</span>&#160;    Iterator end();</div>
<div class="line"><a name="l00503"></a><span class="lineno">  503</span>&#160;</div>
<div class="line"><a name="l00516"></a><span class="lineno">  516</span>&#160;    ConstIterator end() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00517"></a><span class="lineno">  517</span>&#160;</div>
<div class="line"><a name="l00518"></a><span class="lineno">  518</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00519"></a><span class="lineno">  519</span>&#160;</div>
<div class="line"><a name="l00520"></a><span class="lineno">  520</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00521"></a><span class="lineno">  521</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00522"></a><span class="lineno">  522</span>&#160;</div>
<div class="line"><a name="l00524"></a><span class="lineno">  524</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00526"></a><span class="lineno">  526</span>&#160;<span class="comment"></span>    std::basic_string&lt;Uint32&gt; m_string; </div>
<div class="line"><a name="l00527"></a><span class="lineno">  527</span>&#160;};</div>
<div class="line"><a name="l00528"></a><span class="lineno">  528</span>&#160;</div>
<div class="line"><a name="l00539"></a><span class="lineno">  539</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00540"></a><span class="lineno">  540</span>&#160;</div>
<div class="line"><a name="l00551"></a><span class="lineno">  551</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00552"></a><span class="lineno">  552</span>&#160;</div>
<div class="line"><a name="l00563"></a><span class="lineno">  563</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00564"></a><span class="lineno">  564</span>&#160;</div>
<div class="line"><a name="l00575"></a><span class="lineno">  575</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &gt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00576"></a><span class="lineno">  576</span>&#160;</div>
<div class="line"><a name="l00587"></a><span class="lineno">  587</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00588"></a><span class="lineno">  588</span>&#160;</div>
<div class="line"><a name="l00599"></a><span class="lineno">  599</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &gt;=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00600"></a><span class="lineno">  600</span>&#160;</div>
<div class="line"><a name="l00611"></a><span class="lineno">  611</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1String.php">String</a> operator +(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div>
<div class="line"><a name="l00612"></a><span class="lineno">  612</span>&#160;</div>
<div class="line"><a name="l00613"></a><span class="lineno">  613</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.inl&gt;</span></div>
<div class="line"><a name="l00614"></a><span class="lineno">  614</span>&#160;</div>
<div class="line"><a name="l00615"></a><span class="lineno">  615</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00616"></a><span class="lineno">  616</span>&#160;</div>
<div class="line"><a name="l00617"></a><span class="lineno">  617</span>&#160;</div>
<div class="line"><a name="l00618"></a><span class="lineno">  618</span>&#160;<span class="preprocessor">#endif // SFML_STRING_HPP</span></div>
<div class="line"><a name="l00619"></a><span class="lineno">  619</span>&#160;</div>
<div class="line"><a name="l00620"></a><span class="lineno">  620</span>&#160;</div>
<div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00044">String.hpp:44</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1String_php_a8e18efc2e8464f6eb82818902d527efa"><div class="ttname"><a href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">sf::String::ConstIterator</a></div><div class="ttdeci">std::basic_string&lt; Uint32 &gt;::const_iterator ConstIterator</div><div class="ttdoc">Read-only iterator type. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00052">String.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1String_php_ac90f2b7b28f703020f8d027e98806235"><div class="ttname"><a href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">sf::String::Iterator</a></div><div class="ttdeci">std::basic_string&lt; Uint32 &gt;::iterator Iterator</div><div class="ttdoc">Iterator type. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00051">String.hpp:51</a></div></div>
<div class="ttc" id="classsf_1_1String_php_abaadecaf12a6b41c54d725c75fd28527"><div class="ttname"><a href="classsf_1_1String.php#abaadecaf12a6b41c54d725c75fd28527">sf::String::InvalidPos</a></div><div class="ttdeci">static const std::size_t InvalidPos</div><div class="ttdoc">Represents an invalid position in the string. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00057">String.hpp:57</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
