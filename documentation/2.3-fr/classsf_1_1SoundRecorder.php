<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundRecorder Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundRecorder.php">SoundRecorder</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1SoundRecorder-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundRecorder Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span><div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Abstract base class for capturing sound data.  
 <a href="classsf_1_1SoundRecorder.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundRecorder_8hpp_source.php">SoundRecorder.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::SoundRecorder:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1SoundRecorder.png" usemap="#sf::SoundRecorder_map" alt=""/>
  <map id="sf::SoundRecorder_map" name="sf::SoundRecorder_map">
<area href="classsf_1_1AlResource.php" title="Base class for classes that require an OpenAL context. " alt="sf::AlResource" shape="rect" coords="0,0,152,24"/>
<area href="classsf_1_1SoundBufferRecorder.php" title="Specialized SoundRecorder which stores the captured audio data into a sound buffer. " alt="sf::SoundBufferRecorder" shape="rect" coords="0,112,152,136"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:acc599e61aaa47edaae88cf43f0a43549"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#acc599e61aaa47edaae88cf43f0a43549">~SoundRecorder</a> ()</td></tr>
<tr class="memdesc:acc599e61aaa47edaae88cf43f0a43549"><td class="mdescLeft">&#160;</td><td class="mdescRight">destructor  <a href="#acc599e61aaa47edaae88cf43f0a43549">More...</a><br /></td></tr>
<tr class="separator:acc599e61aaa47edaae88cf43f0a43549"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a715f0fd2f228c83d79aaedca562ae51f"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f">start</a> (unsigned int sampleRate=44100)</td></tr>
<tr class="memdesc:a715f0fd2f228c83d79aaedca562ae51f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start the capture.  <a href="#a715f0fd2f228c83d79aaedca562ae51f">More...</a><br /></td></tr>
<tr class="separator:a715f0fd2f228c83d79aaedca562ae51f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8d9c8346aa9aa409cfed4a1101159c4c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c">stop</a> ()</td></tr>
<tr class="memdesc:a8d9c8346aa9aa409cfed4a1101159c4c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop the capture.  <a href="#a8d9c8346aa9aa409cfed4a1101159c4c">More...</a><br /></td></tr>
<tr class="separator:a8d9c8346aa9aa409cfed4a1101159c4c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1f3726cbe0a2b2b291b36beea57960d7"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a1f3726cbe0a2b2b291b36beea57960d7">getSampleRate</a> () const </td></tr>
<tr class="memdesc:a1f3726cbe0a2b2b291b36beea57960d7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the sample rate.  <a href="#a1f3726cbe0a2b2b291b36beea57960d7">More...</a><br /></td></tr>
<tr class="separator:a1f3726cbe0a2b2b291b36beea57960d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8eb3e473292c16e874322815836d3cd3"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a8eb3e473292c16e874322815836d3cd3">setDevice</a> (const std::string &amp;name)</td></tr>
<tr class="memdesc:a8eb3e473292c16e874322815836d3cd3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the audio capture device.  <a href="#a8eb3e473292c16e874322815836d3cd3">More...</a><br /></td></tr>
<tr class="separator:a8eb3e473292c16e874322815836d3cd3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a911218297b0fb5c050b3e34e6ba1d38e"><td class="memItemLeft" align="right" valign="top">const std::string &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a911218297b0fb5c050b3e34e6ba1d38e">getDevice</a> () const </td></tr>
<tr class="memdesc:a911218297b0fb5c050b3e34e6ba1d38e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the name of the current audio capture device.  <a href="#a911218297b0fb5c050b3e34e6ba1d38e">More...</a><br /></td></tr>
<tr class="separator:a911218297b0fb5c050b3e34e6ba1d38e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a26198c5c11efcd61f426f326fe314afe"><td class="memItemLeft" align="right" valign="top">static std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe">getAvailableDevices</a> ()</td></tr>
<tr class="memdesc:a26198c5c11efcd61f426f326fe314afe"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get a list of the names of all available audio capture devices.  <a href="#a26198c5c11efcd61f426f326fe314afe">More...</a><br /></td></tr>
<tr class="separator:a26198c5c11efcd61f426f326fe314afe"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad1d450a80642dab4b632999d72a1bf23"><td class="memItemLeft" align="right" valign="top">static std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#ad1d450a80642dab4b632999d72a1bf23">getDefaultDevice</a> ()</td></tr>
<tr class="memdesc:ad1d450a80642dab4b632999d72a1bf23"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the name of the default audio capture device.  <a href="#ad1d450a80642dab4b632999d72a1bf23">More...</a><br /></td></tr>
<tr class="separator:ad1d450a80642dab4b632999d72a1bf23"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aab2bd0fee9e48d6cfd449b1cb078ce5a"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#aab2bd0fee9e48d6cfd449b1cb078ce5a">isAvailable</a> ()</td></tr>
<tr class="memdesc:aab2bd0fee9e48d6cfd449b1cb078ce5a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if the system supports audio capture.  <a href="#aab2bd0fee9e48d6cfd449b1cb078ce5a">More...</a><br /></td></tr>
<tr class="separator:aab2bd0fee9e48d6cfd449b1cb078ce5a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a50ebad413c4f157408a0fa49f23212a9"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a50ebad413c4f157408a0fa49f23212a9">SoundRecorder</a> ()</td></tr>
<tr class="memdesc:a50ebad413c4f157408a0fa49f23212a9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a50ebad413c4f157408a0fa49f23212a9">More...</a><br /></td></tr>
<tr class="separator:a50ebad413c4f157408a0fa49f23212a9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a64895b20ed32f0e3cfaf0fa331942de6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a64895b20ed32f0e3cfaf0fa331942de6">setProcessingInterval</a> (<a class="el" href="classsf_1_1Time.php">sf::Time</a> interval)</td></tr>
<tr class="memdesc:a64895b20ed32f0e3cfaf0fa331942de6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the processing interval.  <a href="#a64895b20ed32f0e3cfaf0fa331942de6">More...</a><br /></td></tr>
<tr class="separator:a64895b20ed32f0e3cfaf0fa331942de6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7af418fb036201d3f85745bef78ce77f"><td class="memItemLeft" align="right" valign="top">virtual bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a7af418fb036201d3f85745bef78ce77f">onStart</a> ()</td></tr>
<tr class="memdesc:a7af418fb036201d3f85745bef78ce77f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start capturing audio data.  <a href="#a7af418fb036201d3f85745bef78ce77f">More...</a><br /></td></tr>
<tr class="separator:a7af418fb036201d3f85745bef78ce77f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2670124cbe7a87c7e46b4840807f4fd7"><td class="memItemLeft" align="right" valign="top">virtual bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a2670124cbe7a87c7e46b4840807f4fd7">onProcessSamples</a> (const Int16 *samples, std::size_t sampleCount)=0</td></tr>
<tr class="memdesc:a2670124cbe7a87c7e46b4840807f4fd7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Process a new chunk of recorded samples.  <a href="#a2670124cbe7a87c7e46b4840807f4fd7">More...</a><br /></td></tr>
<tr class="separator:a2670124cbe7a87c7e46b4840807f4fd7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aefc36138ca1e96c658301280e4a31b64"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#aefc36138ca1e96c658301280e4a31b64">onStop</a> ()</td></tr>
<tr class="memdesc:aefc36138ca1e96c658301280e4a31b64"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop capturing audio data.  <a href="#aefc36138ca1e96c658301280e4a31b64">More...</a><br /></td></tr>
<tr class="separator:aefc36138ca1e96c658301280e4a31b64"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Abstract base class for capturing sound data. </p>
<p><a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a> provides a simple interface to access the audio recording capabilities of the computer (the microphone).</p>
<p>As an abstract base class, it only cares about capturing sound samples, the task of making something useful with them is left to the derived class. Note that SFML provides a built-in specialization for saving the captured data to a sound buffer (see <a class="el" href="classsf_1_1SoundBufferRecorder.php" title="Specialized SoundRecorder which stores the captured audio data into a sound buffer. ">sf::SoundBufferRecorder</a>).</p>
<p>A derived class has only one virtual function to override: </p><ul>
<li>onProcessSamples provides the new chunks of audio samples while the capture happens</li>
</ul>
<p>Moreover, two additional virtual functions can be overridden as well if necessary: </p><ul>
<li>onStart is called before the capture happens, to perform custom initializations </li>
<li>onStop is called after the capture ends, to perform custom cleanup</li>
</ul>
<p>A derived class can also control the frequency of the onProcessSamples calls, with the setProcessingInterval protected function. The default interval is chosen so that recording thread doesn't consume too much CPU, but it can be changed to a smaller value if you need to process the recorded data in real time, for example.</p>
<p>The audio capture feature may not be supported or activated on every platform, thus it is recommended to check its availability with the <a class="el" href="classsf_1_1SoundRecorder.php#aab2bd0fee9e48d6cfd449b1cb078ce5a" title="Check if the system supports audio capture. ">isAvailable()</a> function. If it returns false, then any attempt to use an audio recorder will fail.</p>
<p>If you have multiple sound input devices connected to your computer (for example: microphone, external soundcard, webcam mic, ...) you can get a list of all available devices through the <a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices()</a> function. You can then select a device by calling <a class="el" href="classsf_1_1SoundRecorder.php#a8eb3e473292c16e874322815836d3cd3" title="Set the audio capture device. ">setDevice()</a> with the appropriate device. Otherwise the default capturing device will be used.</p>
<p>It is important to note that the audio capture happens in a separate thread, so that it doesn't block the rest of the program. In particular, the onProcessSamples virtual function (but not onStart and not onStop) will be called from this separate thread. It is important to keep this in mind, because you may have to take care of synchronization issues if you share data between threads.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keyword">class </span>CustomRecorder : <span class="keyword">public</span> <a class="code" href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></div>
<div class="line">{</div>
<div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1SoundRecorder.php#a7af418fb036201d3f85745bef78ce77f">onStart</a>() <span class="comment">// optional</span></div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// Initialize whatever has to be done before the capture starts</span></div>
<div class="line">        ...</div>
<div class="line"></div>
<div class="line">        <span class="comment">// Return true to start playing</span></div>
<div class="line">        <span class="keywordflow">return</span> <span class="keyword">true</span>;</div>
<div class="line">    }</div>
<div class="line"></div>
<div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1SoundRecorder.php#a2670124cbe7a87c7e46b4840807f4fd7">onProcessSamples</a>(<span class="keyword">const</span> Int16* samples, std::size_t sampleCount)</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// Do something with the new chunk of samples (store them, send them, ...)</span></div>
<div class="line">        ...</div>
<div class="line"></div>
<div class="line">        <span class="comment">// Return true to continue playing</span></div>
<div class="line">        <span class="keywordflow">return</span> <span class="keyword">true</span>;</div>
<div class="line">    }</div>
<div class="line"></div>
<div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="classsf_1_1SoundRecorder.php#aefc36138ca1e96c658301280e4a31b64">onStop</a>() <span class="comment">// optional</span></div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// Clean up whatever has to be done after the capture ends</span></div>
<div class="line">        ...</div>
<div class="line">    }</div>
<div class="line">}</div>
<div class="line"></div>
<div class="line"><span class="comment">// Usage</span></div>
<div class="line"><span class="keywordflow">if</span> (CustomRecorder::isAvailable())</div>
<div class="line">{</div>
<div class="line">    CustomRecorder recorder;</div>
<div class="line"></div>
<div class="line">    <span class="keywordflow">if</span> (!recorder.start())</div>
<div class="line">        <span class="keywordflow">return</span> -1;</div>
<div class="line"></div>
<div class="line">    ...</div>
<div class="line">    recorder.stop();</div>
<div class="line">}</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBufferRecorder.php" title="Specialized SoundRecorder which stores the captured audio data into a sound buffer. ">sf::SoundBufferRecorder</a> </dd></dl>

<p>Definition at line <a class="el" href="SoundRecorder_8hpp_source.php#l00045">45</a> of file <a class="el" href="SoundRecorder_8hpp_source.php">SoundRecorder.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="acc599e61aaa47edaae88cf43f0a43549"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::SoundRecorder::~SoundRecorder </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>destructor </p>

</div>
</div>
<a class="anchor" id="a50ebad413c4f157408a0fa49f23212a9"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundRecorder::SoundRecorder </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor is only meant to be called by derived classes. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a26198c5c11efcd61f426f326fe314afe"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static std::vector&lt;std::string&gt; sf::SoundRecorder::getAvailableDevices </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get a list of the names of all available audio capture devices. </p>
<p>This function returns a vector of strings, containing the names of all available audio capture devices.</p>
<dl class="section return"><dt>Returns</dt><dd>A vector of strings containing the names </dd></dl>

</div>
</div>
<a class="anchor" id="ad1d450a80642dab4b632999d72a1bf23"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static std::string sf::SoundRecorder::getDefaultDevice </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the name of the default audio capture device. </p>
<p>This function returns the name of the default audio capture device. If none is available, an empty string is returned.</p>
<dl class="section return"><dt>Returns</dt><dd>The name of the default audio capture device </dd></dl>

</div>
</div>
<a class="anchor" id="a911218297b0fb5c050b3e34e6ba1d38e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const std::string&amp; sf::SoundRecorder::getDevice </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the name of the current audio capture device. </p>
<dl class="section return"><dt>Returns</dt><dd>The name of the current audio capture device </dd></dl>

</div>
</div>
<a class="anchor" id="a1f3726cbe0a2b2b291b36beea57960d7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundRecorder::getSampleRate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the sample rate. </p>
<p>The sample rate defines the number of audio samples captured per second. The higher, the better the quality (for example, 44100 samples/sec is CD quality).</p>
<dl class="section return"><dt>Returns</dt><dd>Sample rate, in samples per second </dd></dl>

</div>
</div>
<a class="anchor" id="aab2bd0fee9e48d6cfd449b1cb078ce5a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::SoundRecorder::isAvailable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if the system supports audio capture. </p>
<p>This function should always be called before using the audio capture features. If it returns false, then any attempt to use <a class="el" href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. ">sf::SoundRecorder</a> or one of its derived classes will fail.</p>
<dl class="section return"><dt>Returns</dt><dd>True if audio capture is supported, false otherwise </dd></dl>

</div>
</div>
<a class="anchor" id="a2670124cbe7a87c7e46b4840807f4fd7"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual bool sf::SoundRecorder::onProcessSamples </td>
          <td>(</td>
          <td class="paramtype">const Int16 *&#160;</td>
          <td class="paramname"><em>samples</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>sampleCount</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Process a new chunk of recorded samples. </p>
<p>This virtual function is called every time a new chunk of recorded data is available. The derived class can then do whatever it wants with it (storing it, playing it, sending it over the network, etc.).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">samples</td><td>Pointer to the new chunk of recorded samples </td></tr>
    <tr><td class="paramname">sampleCount</td><td>Number of samples pointed by <em>samples</em> </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True to continue the capture, or false to stop it </dd></dl>

<p>Implemented in <a class="el" href="classsf_1_1SoundBufferRecorder.php#a9ceb94de14632ae8c1b78faf603b4767">sf::SoundBufferRecorder</a>.</p>

</div>
</div>
<a class="anchor" id="a7af418fb036201d3f85745bef78ce77f"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual bool sf::SoundRecorder::onStart </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Start capturing audio data. </p>
<p>This virtual function may be overridden by a derived class if something has to be done every time a new capture starts. If not, this function can be ignored; the default implementation does nothing.</p>
<dl class="section return"><dt>Returns</dt><dd>True to start the capture, or false to abort it </dd></dl>

<p>Reimplemented in <a class="el" href="classsf_1_1SoundBufferRecorder.php#a531a7445fc8a48eaf9fc039c83f17c6f">sf::SoundBufferRecorder</a>.</p>

</div>
</div>
<a class="anchor" id="aefc36138ca1e96c658301280e4a31b64"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void sf::SoundRecorder::onStop </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Stop capturing audio data. </p>
<p>This virtual function may be overridden by a derived class if something has to be done every time the capture ends. If not, this function can be ignored; the default implementation does nothing. </p>

<p>Reimplemented in <a class="el" href="classsf_1_1SoundBufferRecorder.php#ab8e53849312413431873a5869d509f1e">sf::SoundBufferRecorder</a>.</p>

</div>
</div>
<a class="anchor" id="a8eb3e473292c16e874322815836d3cd3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundRecorder::setDevice </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>name</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the audio capture device. </p>
<p>This function sets the audio capture device to the device with the given <em>name</em>. It can be called on the fly (i.e: while recording). If you do so while recording and opening the device fails, it stops the recording.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">name</td><td>The name of the audio capture device</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True, if it was able to set the requested device</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices</a>, <a class="el" href="classsf_1_1SoundRecorder.php#ad1d450a80642dab4b632999d72a1bf23" title="Get the name of the default audio capture device. ">getDefaultDevice</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a64895b20ed32f0e3cfaf0fa331942de6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundRecorder::setProcessingInterval </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Time.php">sf::Time</a>&#160;</td>
          <td class="paramname"><em>interval</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the processing interval. </p>
<p>The processing interval controls the period between calls to the onProcessSamples function. You may want to use a small interval if you want to process the recorded data in real time, for example.</p>
<p>Note: this is only a hint, the actual period may vary. So don't rely on this parameter to implement precise timing.</p>
<p>The default processing interval is 100 ms.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">interval</td><td>Processing interval </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a715f0fd2f228c83d79aaedca562ae51f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundRecorder::start </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>sampleRate</em> = <code>44100</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Start the capture. </p>
<p>The <em>sampleRate</em> parameter defines the number of audio samples captured per second. The higher, the better the quality (for example, 44100 samples/sec is CD quality). This function uses its own thread so that it doesn't block the rest of the program while the capture runs. Please note that only one capture can happen at the same time. You can select which capture device will be used, by passing the name to the <a class="el" href="classsf_1_1SoundRecorder.php#a8eb3e473292c16e874322815836d3cd3" title="Set the audio capture device. ">setDevice()</a> method. If none was selected before, the default capture device will be used. You can get a list of the names of all available capture devices by calling <a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sampleRate</td><td>Desired capture rate, in number of samples per second</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True, if start of capture was successful</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c" title="Stop the capture. ">stop</a>, <a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a8d9c8346aa9aa409cfed4a1101159c4c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundRecorder::stop </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stop the capture. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f" title="Start the capture. ">start</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundRecorder_8hpp_source.php">SoundRecorder.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
