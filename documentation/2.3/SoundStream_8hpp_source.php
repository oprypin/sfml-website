<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'SoundStream.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">SoundStream.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUNDSTREAM_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SOUNDSTREAM_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/SoundSource.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Thread.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Mutex.hpp&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;cstdlib&gt;</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1SoundStream.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_AUDIO_API <a class="code" href="classsf_1_1SoundStream.php">SoundStream</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="structsf_1_1SoundStream_1_1Chunk.php">   53</a></span>&#160;    <span class="keyword">struct </span><a class="code" href="structsf_1_1SoundStream_1_1Chunk.php">Chunk</a></div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    {</div>
<div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="structsf_1_1SoundStream_1_1Chunk.php#aa3b84d69adbe663a17a7671626076df4">   55</a></span>&#160;        <span class="keyword">const</span> Int16* <a class="code" href="structsf_1_1SoundStream_1_1Chunk.php#aa3b84d69adbe663a17a7671626076df4">samples</a>;     </div>
<div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="structsf_1_1SoundStream_1_1Chunk.php#af47f5d94012acf8b11f056ba77aff97a">   56</a></span>&#160;        std::size_t  <a class="code" href="structsf_1_1SoundStream_1_1Chunk.php#af47f5d94012acf8b11f056ba77aff97a">sampleCount</a>; </div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    };</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1SoundStream.php">SoundStream</a>();</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordtype">void</span> play();</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keywordtype">void</span> pause();</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;    <span class="keywordtype">void</span> stop();</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getChannelCount() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getSampleRate() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;    Status getStatus() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;    <span class="keywordtype">void</span> setPlayingOffset(<a class="code" href="classsf_1_1Time.php">Time</a> timeOffset);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a> getPlayingOffset() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;    <span class="keywordtype">void</span> setLoop(<span class="keywordtype">bool</span> loop);</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keywordtype">bool</span> getLoop() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;</div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;    <a class="code" href="classsf_1_1SoundStream.php">SoundStream</a>();</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    <span class="keywordtype">void</span> initialize(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> channelCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sampleRate);</div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;</div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> onGetData(<a class="code" href="structsf_1_1SoundStream_1_1Chunk.php">Chunk</a>&amp; data) = 0;</div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;</div>
<div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onSeek(<a class="code" href="classsf_1_1Time.php">Time</a> timeOffset) = 0;</div>
<div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;</div>
<div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;</div>
<div class="line"><a name="l00246"></a><span class="lineno">  246</span>&#160;    <span class="keywordtype">void</span> streamData();</div>
<div class="line"><a name="l00247"></a><span class="lineno">  247</span>&#160;</div>
<div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;    <span class="keywordtype">bool</span> fillAndPushBuffer(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> bufferNum);</div>
<div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;</div>
<div class="line"><a name="l00272"></a><span class="lineno">  272</span>&#160;    <span class="keywordtype">bool</span> fillQueue();</div>
<div class="line"><a name="l00273"></a><span class="lineno">  273</span>&#160;</div>
<div class="line"><a name="l00280"></a><span class="lineno">  280</span>&#160;    <span class="keywordtype">void</span> clearQueue();</div>
<div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;</div>
<div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;    <span class="keyword">enum</span></div>
<div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;    {</div>
<div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;        BufferCount = 3 </div>
<div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;    };</div>
<div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;</div>
<div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Thread.php">Thread</a>        m_thread;                  </div>
<div class="line"><a name="l00291"></a><span class="lineno">  291</span>&#160;    <span class="keyword">mutable</span> <a class="code" href="classsf_1_1Mutex.php">Mutex</a> m_threadMutex;             </div>
<div class="line"><a name="l00292"></a><span class="lineno">  292</span>&#160;    Status        m_threadStartState;        </div>
<div class="line"><a name="l00293"></a><span class="lineno">  293</span>&#160;    <span class="keywordtype">bool</span>          m_isStreaming;             </div>
<div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>  m_buffers[BufferCount];    </div>
<div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>  m_channelCount;            </div>
<div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>  m_sampleRate;              </div>
<div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160;    Uint32        m_format;                  </div>
<div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;    <span class="keywordtype">bool</span>          m_loop;                    </div>
<div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;    Uint64        m_samplesProcessed;        </div>
<div class="line"><a name="l00300"></a><span class="lineno">  300</span>&#160;    <span class="keywordtype">bool</span>          m_endBuffers[BufferCount]; </div>
<div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;};</div>
<div class="line"><a name="l00302"></a><span class="lineno">  302</span>&#160;</div>
<div class="line"><a name="l00303"></a><span class="lineno">  303</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;</div>
<div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160;</div>
<div class="line"><a name="l00306"></a><span class="lineno">  306</span>&#160;<span class="preprocessor">#endif // SFML_SOUNDSTREAM_HPP</span></div>
<div class="line"><a name="l00307"></a><span class="lineno">  307</span>&#160;</div>
<div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;</div>
<div class="ttc" id="structsf_1_1SoundStream_1_1Chunk_php"><div class="ttname"><a href="structsf_1_1SoundStream_1_1Chunk.php">sf::SoundStream::Chunk</a></div><div class="ttdoc">Structure defining a chunk of audio data to stream. </div><div class="ttdef"><b>Definition:</b> <a href="SoundStream_8hpp_source.php#l00053">SoundStream.hpp:53</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="structsf_1_1SoundStream_1_1Chunk_php_aa3b84d69adbe663a17a7671626076df4"><div class="ttname"><a href="structsf_1_1SoundStream_1_1Chunk.php#aa3b84d69adbe663a17a7671626076df4">sf::SoundStream::Chunk::samples</a></div><div class="ttdeci">const Int16 * samples</div><div class="ttdoc">Pointer to the audio samples. </div><div class="ttdef"><b>Definition:</b> <a href="SoundStream_8hpp_source.php#l00055">SoundStream.hpp:55</a></div></div>
<div class="ttc" id="classsf_1_1Mutex_php"><div class="ttname"><a href="classsf_1_1Mutex.php">sf::Mutex</a></div><div class="ttdoc">Blocks concurrent access to shared resources from multiple threads. </div><div class="ttdef"><b>Definition:</b> <a href="Mutex_8hpp_source.php#l00047">Mutex.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1SoundStream_php"><div class="ttname"><a href="classsf_1_1SoundStream.php">sf::SoundStream</a></div><div class="ttdoc">Abstract base class for streamed audio sources. </div><div class="ttdef"><b>Definition:</b> <a href="SoundStream_8hpp_source.php#l00045">SoundStream.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1SoundSource_php"><div class="ttname"><a href="classsf_1_1SoundSource.php">sf::SoundSource</a></div><div class="ttdoc">Base class defining a sound&#39;s properties. </div><div class="ttdef"><b>Definition:</b> <a href="SoundSource_8hpp_source.php#l00042">SoundSource.hpp:42</a></div></div>
<div class="ttc" id="structsf_1_1SoundStream_1_1Chunk_php_af47f5d94012acf8b11f056ba77aff97a"><div class="ttname"><a href="structsf_1_1SoundStream_1_1Chunk.php#af47f5d94012acf8b11f056ba77aff97a">sf::SoundStream::Chunk::sampleCount</a></div><div class="ttdeci">std::size_t sampleCount</div><div class="ttdoc">Number of samples pointed by Samples. </div><div class="ttdef"><b>Definition:</b> <a href="SoundStream_8hpp_source.php#l00056">SoundStream.hpp:56</a></div></div>
<div class="ttc" id="classsf_1_1Thread_php"><div class="ttname"><a href="classsf_1_1Thread.php">sf::Thread</a></div><div class="ttdoc">Utility class to manipulate threads. </div><div class="ttdef"><b>Definition:</b> <a href="Thread_8hpp_source.php#l00048">Thread.hpp:48</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
