<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'SoundFileReader.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_985e7cc4f3a776db56f3b932018351f7.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">SoundFileReader.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUNDFILEREADER_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SOUNDFILEREADER_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">class </span>InputStream;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php">   43</a></span>&#160;<span class="keyword">class </span>SFML_AUDIO_API <a class="code" href="classsf_1_1SoundFileReader.php">SoundFileReader</a></div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php">   51</a></span>&#160;    <span class="keyword">struct </span><a class="code" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a></div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    {</div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">   53</a></span>&#160;        Uint64       <a class="code" href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">sampleCount</a>;  </div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">   54</a></span>&#160;        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">channelCount</a>; </div>
<div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">   55</a></span>&#160;        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">sampleRate</a>;   </div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    };</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">   62</a></span>&#160;    <span class="keyword">virtual</span> <a class="code" href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">~SoundFileReader</a>() {}</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> open(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream, Info&amp; info) = 0;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> seek(Uint64 sampleOffset) = 0;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;    <span class="keyword">virtual</span> Uint64 read(Int16* samples, Uint64 maxCount) = 0;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;};</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;<span class="preprocessor">#endif // SFML_SOUNDFILEREADER_HPP</span></div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="structsf_1_1SoundFileReader_1_1Info_php_a06ef71c19e7de190b294ae02c361f752"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">sf::SoundFileReader::Info::sampleRate</a></div><div class="ttdeci">unsigned int sampleRate</div><div class="ttdoc">Samples rate of the sound, in samples per second. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00055">SoundFileReader.hpp:55</a></div></div>
<div class="ttc" id="structsf_1_1SoundFileReader_1_1Info_php"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php">sf::SoundFileReader::Info</a></div><div class="ttdoc">Structure holding the audio properties of a sound file. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00051">SoundFileReader.hpp:51</a></div></div>
<div class="ttc" id="classsf_1_1SoundFileReader_php_a34163297f302d15818c76b54f815acc8"><div class="ttname"><a href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">sf::SoundFileReader::~SoundFileReader</a></div><div class="ttdeci">virtual ~SoundFileReader()</div><div class="ttdoc">Virtual destructor. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00062">SoundFileReader.hpp:62</a></div></div>
<div class="ttc" id="structsf_1_1SoundFileReader_1_1Info_php_ac748bb30768d1a3caf329e95d31d6d2a"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">sf::SoundFileReader::Info::channelCount</a></div><div class="ttdeci">unsigned int channelCount</div><div class="ttdoc">Number of channels of the sound. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00054">SoundFileReader.hpp:54</a></div></div>
<div class="ttc" id="structsf_1_1SoundFileReader_1_1Info_php_a74b40b4693d7000571484736d1367167"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">sf::SoundFileReader::Info::sampleCount</a></div><div class="ttdeci">Uint64 sampleCount</div><div class="ttdoc">Total number of samples in the file. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00053">SoundFileReader.hpp:53</a></div></div>
<div class="ttc" id="classsf_1_1SoundFileReader_php"><div class="ttname"><a href="classsf_1_1SoundFileReader.php">sf::SoundFileReader</a></div><div class="ttdoc">Abstract base class for sound file decoding. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00043">SoundFileReader.hpp:43</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
