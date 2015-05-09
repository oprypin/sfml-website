<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::InputSoundFile Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1InputSoundFile.php">InputSoundFile</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1InputSoundFile-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::InputSoundFile Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Provide read access to sound files.  
 <a href="classsf_1_1InputSoundFile.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="InputSoundFile_8hpp_source.php">InputSoundFile.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::InputSoundFile:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1InputSoundFile.png" usemap="#sf::InputSoundFile_map" alt=""/>
  <map id="sf::InputSoundFile_map" name="sf::InputSoundFile_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,112,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a3b95347de25d1d93a3230287cf47a077"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a3b95347de25d1d93a3230287cf47a077">InputSoundFile</a> ()</td></tr>
<tr class="memdesc:a3b95347de25d1d93a3230287cf47a077"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a3b95347de25d1d93a3230287cf47a077">More...</a><br /></td></tr>
<tr class="separator:a3b95347de25d1d93a3230287cf47a077"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a326a1a486587038123de0c187bf5c635"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a326a1a486587038123de0c187bf5c635">~InputSoundFile</a> ()</td></tr>
<tr class="memdesc:a326a1a486587038123de0c187bf5c635"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a326a1a486587038123de0c187bf5c635">More...</a><br /></td></tr>
<tr class="separator:a326a1a486587038123de0c187bf5c635"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af68e54bc9bfac19554c84601156fe93f"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#af68e54bc9bfac19554c84601156fe93f">openFromFile</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:af68e54bc9bfac19554c84601156fe93f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open a sound file from the disk for reading.  <a href="#af68e54bc9bfac19554c84601156fe93f">More...</a><br /></td></tr>
<tr class="separator:af68e54bc9bfac19554c84601156fe93f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4e034a8e9e69ca3c33a3f11180250400"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a4e034a8e9e69ca3c33a3f11180250400">openFromMemory</a> (const void *data, std::size_t sizeInBytes)</td></tr>
<tr class="memdesc:a4e034a8e9e69ca3c33a3f11180250400"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open a sound file in memory for reading.  <a href="#a4e034a8e9e69ca3c33a3f11180250400">More...</a><br /></td></tr>
<tr class="separator:a4e034a8e9e69ca3c33a3f11180250400"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a32b76497aeb088a2b46dc6efd819b909"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a32b76497aeb088a2b46dc6efd819b909">openFromStream</a> (<a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;stream)</td></tr>
<tr class="memdesc:a32b76497aeb088a2b46dc6efd819b909"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open a sound file from a custom stream for reading.  <a href="#a32b76497aeb088a2b46dc6efd819b909">More...</a><br /></td></tr>
<tr class="separator:a32b76497aeb088a2b46dc6efd819b909"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a84f32fdf5fa619538506395c3c5a030a"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a84f32fdf5fa619538506395c3c5a030a">openForWriting</a> (const std::string &amp;filename, unsigned int channelCount, unsigned int sampleRate)</td></tr>
<tr class="memdesc:a84f32fdf5fa619538506395c3c5a030a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open the sound file from the disk for writing.  <a href="#a84f32fdf5fa619538506395c3c5a030a">More...</a><br /></td></tr>
<tr class="separator:a84f32fdf5fa619538506395c3c5a030a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0c7d3293a5b0ed6aff674d5c8bcc1cdf"><td class="memItemLeft" align="right" valign="top">Uint64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a0c7d3293a5b0ed6aff674d5c8bcc1cdf">getSampleCount</a> () const </td></tr>
<tr class="memdesc:a0c7d3293a5b0ed6aff674d5c8bcc1cdf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the total number of audio samples in the file.  <a href="#a0c7d3293a5b0ed6aff674d5c8bcc1cdf">More...</a><br /></td></tr>
<tr class="separator:a0c7d3293a5b0ed6aff674d5c8bcc1cdf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3a3d113d0f093c806edeb47a0eb509bd"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a3a3d113d0f093c806edeb47a0eb509bd">getChannelCount</a> () const </td></tr>
<tr class="memdesc:a3a3d113d0f093c806edeb47a0eb509bd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of channels used by the sound.  <a href="#a3a3d113d0f093c806edeb47a0eb509bd">More...</a><br /></td></tr>
<tr class="separator:a3a3d113d0f093c806edeb47a0eb509bd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adfbd1eaaf9fc0b469311fc159f5a3ecb"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#adfbd1eaaf9fc0b469311fc159f5a3ecb">getSampleRate</a> () const </td></tr>
<tr class="memdesc:adfbd1eaaf9fc0b469311fc159f5a3ecb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the sample rate of the sound.  <a href="#adfbd1eaaf9fc0b469311fc159f5a3ecb">More...</a><br /></td></tr>
<tr class="separator:adfbd1eaaf9fc0b469311fc159f5a3ecb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8c5707b202d8785f806bd6604a9e19c5"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a8c5707b202d8785f806bd6604a9e19c5">getDuration</a> () const </td></tr>
<tr class="memdesc:a8c5707b202d8785f806bd6604a9e19c5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the total duration of the sound file.  <a href="#a8c5707b202d8785f806bd6604a9e19c5">More...</a><br /></td></tr>
<tr class="separator:a8c5707b202d8785f806bd6604a9e19c5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaf97be15020a42e159ff88f76f22af20"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#aaf97be15020a42e159ff88f76f22af20">seek</a> (Uint64 sampleOffset)</td></tr>
<tr class="memdesc:aaf97be15020a42e159ff88f76f22af20"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the current read position to the given sample offset.  <a href="#aaf97be15020a42e159ff88f76f22af20">More...</a><br /></td></tr>
<tr class="separator:aaf97be15020a42e159ff88f76f22af20"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8eee7af58ad75ddc61f93ad72e2d66c1"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a8eee7af58ad75ddc61f93ad72e2d66c1">seek</a> (<a class="el" href="classsf_1_1Time.php">Time</a> timeOffset)</td></tr>
<tr class="memdesc:a8eee7af58ad75ddc61f93ad72e2d66c1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the current read position to the given time offset.  <a href="#a8eee7af58ad75ddc61f93ad72e2d66c1">More...</a><br /></td></tr>
<tr class="separator:a8eee7af58ad75ddc61f93ad72e2d66c1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a83d6f64617456601edeb0daf9d14a17f"><td class="memItemLeft" align="right" valign="top">Uint64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputSoundFile.php#a83d6f64617456601edeb0daf9d14a17f">read</a> (Int16 *samples, Uint64 maxCount)</td></tr>
<tr class="memdesc:a83d6f64617456601edeb0daf9d14a17f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Read audio samples from the open file.  <a href="#a83d6f64617456601edeb0daf9d14a17f">More...</a><br /></td></tr>
<tr class="separator:a83d6f64617456601edeb0daf9d14a17f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Provide read access to sound files. </p>
<p>This class decodes audio samples from a sound file.</p>
<p>It is used internally by higher-level classes such as <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a> and <a class="el" href="classsf_1_1Music.php" title="Streamed music played from an audio file. ">sf::Music</a>, but can also be useful if you want to process or analyze audio files without playing them, or if you want to implement your own version of <a class="el" href="classsf_1_1Music.php" title="Streamed music played from an audio file. ">sf::Music</a> with more specific features.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Open a sound file</span></div>
<div class="line"><a class="code" href="classsf_1_1InputSoundFile.php">sf::InputSoundFile</a> file;</div>
<div class="line"><span class="keywordflow">if</span> (!file.<a class="code" href="classsf_1_1InputSoundFile.php#af68e54bc9bfac19554c84601156fe93f">openFromFile</a>(<span class="stringliteral">&quot;music.ogg&quot;</span>))</div>
<div class="line">    <span class="comment">/* error */</span>;</div>
<div class="line"></div>
<div class="line"><span class="comment">// Print the sound attributes</span></div>
<div class="line">std::cout &lt;&lt; <span class="stringliteral">&quot;duration: &quot;</span> &lt;&lt; file.<a class="code" href="classsf_1_1InputSoundFile.php#a8c5707b202d8785f806bd6604a9e19c5">getDuration</a>().<a class="code" href="classsf_1_1Time.php#a7538140d095e48da9d7eee015dd455a9">asSeconds</a>() &lt;&lt; std::endl;</div>
<div class="line">std::cout &lt;&lt; <span class="stringliteral">&quot;channels: &quot;</span> &lt;&lt; file.<a class="code" href="classsf_1_1InputSoundFile.php#a3a3d113d0f093c806edeb47a0eb509bd">getChannelCount</a>() &lt;&lt; std::endl;</div>
<div class="line">std::cout &lt;&lt; <span class="stringliteral">&quot;sample rate: &quot;</span> &lt;&lt; file.<a class="code" href="classsf_1_1InputSoundFile.php#adfbd1eaaf9fc0b469311fc159f5a3ecb">getSampleRate</a>() &lt;&lt; std::endl;</div>
<div class="line">std::cout &lt;&lt; <span class="stringliteral">&quot;sample count: &quot;</span> &lt;&lt; file.<a class="code" href="classsf_1_1InputSoundFile.php#a0c7d3293a5b0ed6aff674d5c8bcc1cdf">getSampleCount</a>() &lt;&lt; std::endl;</div>
<div class="line"></div>
<div class="line"><span class="comment">// Read and process batches of samples until the end of file is reached</span></div>
<div class="line">sf::Int16 samples[1024];</div>
<div class="line">sf::Uint64 count;</div>
<div class="line"><span class="keywordflow">do</span></div>
<div class="line">{</div>
<div class="line">    count = file.<a class="code" href="classsf_1_1InputSoundFile.php#a83d6f64617456601edeb0daf9d14a17f">read</a>(samples, 1024);</div>
<div class="line"></div>
<div class="line">    <span class="comment">// process, analyze, play, convert, or whatever</span></div>
<div class="line">    <span class="comment">// you want to do with the samples...</span></div>
<div class="line">}</div>
<div class="line"><span class="keywordflow">while</span> (count &gt; 0);</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileReader.php" title="Abstract base class for sound file decoding. ">sf::SoundFileReader</a>, <a class="el" href="classsf_1_1OutputSoundFile.php" title="Provide write access to sound files. ">sf::OutputSoundFile</a> </dd></dl>

<p>Definition at line <a class="el" href="InputSoundFile_8hpp_source.php#l00046">46</a> of file <a class="el" href="InputSoundFile_8hpp_source.php">InputSoundFile.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a3b95347de25d1d93a3230287cf47a077"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::InputSoundFile::InputSoundFile </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a class="anchor" id="a326a1a486587038123de0c187bf5c635"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::InputSoundFile::~InputSoundFile </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a3a3d113d0f093c806edeb47a0eb509bd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::InputSoundFile::getChannelCount </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the number of channels used by the sound. </p>
<dl class="section return"><dt>Returns</dt><dd>Number of channels (1 = mono, 2 = stereo) </dd></dl>

</div>
</div>
<a class="anchor" id="a8c5707b202d8785f806bd6604a9e19c5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Time.php">Time</a> sf::InputSoundFile::getDuration </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the total duration of the sound file. </p>
<p>This function is provided for convenience, the duration is deduced from the other sound file attributes.</p>
<dl class="section return"><dt>Returns</dt><dd>Duration of the sound file </dd></dl>

</div>
</div>
<a class="anchor" id="a0c7d3293a5b0ed6aff674d5c8bcc1cdf"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint64 sf::InputSoundFile::getSampleCount </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the total number of audio samples in the file. </p>
<dl class="section return"><dt>Returns</dt><dd>Number of samples </dd></dl>

</div>
</div>
<a class="anchor" id="adfbd1eaaf9fc0b469311fc159f5a3ecb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::InputSoundFile::getSampleRate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the sample rate of the sound. </p>
<dl class="section return"><dt>Returns</dt><dd>Sample rate, in samples per second </dd></dl>

</div>
</div>
<a class="anchor" id="a84f32fdf5fa619538506395c3c5a030a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::InputSoundFile::openForWriting </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>channelCount</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>sampleRate</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Open the sound file from the disk for writing. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file to write </td></tr>
    <tr><td class="paramname">channelCount</td><td>Number of channels in the sound </td></tr>
    <tr><td class="paramname">sampleRate</td><td>Sample rate of the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a class="anchor" id="af68e54bc9bfac19554c84601156fe93f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::InputSoundFile::openFromFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Open a sound file from the disk for reading. </p>
<p>The supported audio formats are: WAV, OGG/Vorbis, FLAC.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file to load</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a class="anchor" id="a4e034a8e9e69ca3c33a3f11180250400"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::InputSoundFile::openFromMemory </td>
          <td>(</td>
          <td class="paramtype">const void *&#160;</td>
          <td class="paramname"><em>data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>sizeInBytes</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Open a sound file in memory for reading. </p>
<p>The supported audio formats are: WAV, OGG/Vorbis, FLAC.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Pointer to the file data in memory </td></tr>
    <tr><td class="paramname">sizeInBytes</td><td>Size of the data to load, in bytes</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a class="anchor" id="a32b76497aeb088a2b46dc6efd819b909"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::InputSoundFile::openFromStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;&#160;</td>
          <td class="paramname"><em>stream</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Open a sound file from a custom stream for reading. </p>
<p>The supported audio formats are: WAV, OGG/Vorbis, FLAC.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>Source stream to read from</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a class="anchor" id="a83d6f64617456601edeb0daf9d14a17f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint64 sf::InputSoundFile::read </td>
          <td>(</td>
          <td class="paramtype">Int16 *&#160;</td>
          <td class="paramname"><em>samples</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint64&#160;</td>
          <td class="paramname"><em>maxCount</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Read audio samples from the open file. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">samples</td><td>Pointer to the sample array to fill </td></tr>
    <tr><td class="paramname">maxCount</td><td>Maximum number of samples to read</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Number of samples actually read (may be less than <em>maxCount</em>) </dd></dl>

</div>
</div>
<a class="anchor" id="aaf97be15020a42e159ff88f76f22af20"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::InputSoundFile::seek </td>
          <td>(</td>
          <td class="paramtype">Uint64&#160;</td>
          <td class="paramname"><em>sampleOffset</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change the current read position to the given sample offset. </p>
<p>This function takes a sample offset to provide maximum precision. If you need to jump to a given time, use the other overload.</p>
<p>If the given offset exceeds to total number of samples, this function jumps to the end of the sound file.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sampleOffset</td><td>Index of the sample to jump to, relative to the beginning </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a8eee7af58ad75ddc61f93ad72e2d66c1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::InputSoundFile::seek </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td>
          <td class="paramname"><em>timeOffset</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change the current read position to the given time offset. </p>
<p>Using a time offset is handy but imprecise. If you need an accurate result, consider using the overload which takes a sample offset.</p>
<p>If the given time exceeds to total duration, this function jumps to the end of the sound file.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">timeOffset</td><td><a class="el" href="classsf_1_1Time.php" title="Represents a time value. ">Time</a> to jump to, relative to the beginning </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="InputSoundFile_8hpp_source.php">InputSoundFile.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
