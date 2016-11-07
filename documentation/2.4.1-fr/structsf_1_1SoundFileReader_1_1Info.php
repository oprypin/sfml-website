<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundFileReader::Info Struct Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a></li><li class="navelem"><a class="el" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structsf_1_1SoundFileReader_1_1Info-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundFileReader::Info Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Structure holding the audio properties of a sound file.  
 <a href="structsf_1_1SoundFileReader_1_1Info.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a74b40b4693d7000571484736d1367167"><td class="memItemLeft" align="right" valign="top">Uint64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">sampleCount</a></td></tr>
<tr class="memdesc:a74b40b4693d7000571484736d1367167"><td class="mdescLeft">&#160;</td><td class="mdescRight">Total number of samples in the file.  <a href="#a74b40b4693d7000571484736d1367167">More...</a><br /></td></tr>
<tr class="separator:a74b40b4693d7000571484736d1367167"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac748bb30768d1a3caf329e95d31d6d2a"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">channelCount</a></td></tr>
<tr class="memdesc:ac748bb30768d1a3caf329e95d31d6d2a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Number of channels of the sound.  <a href="#ac748bb30768d1a3caf329e95d31d6d2a">More...</a><br /></td></tr>
<tr class="separator:ac748bb30768d1a3caf329e95d31d6d2a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a06ef71c19e7de190b294ae02c361f752"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">sampleRate</a></td></tr>
<tr class="memdesc:a06ef71c19e7de190b294ae02c361f752"><td class="mdescLeft">&#160;</td><td class="mdescRight">Samples rate of the sound, in samples per second.  <a href="#a06ef71c19e7de190b294ae02c361f752">More...</a><br /></td></tr>
<tr class="separator:a06ef71c19e7de190b294ae02c361f752"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Structure holding the audio properties of a sound file. </p>

<p>Definition at line <a class="el" href="SoundFileReader_8hpp_source.php#l00051">51</a> of file <a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>.</p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="ac748bb30768d1a3caf329e95d31d6d2a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundFileReader::Info::channelCount</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Number of channels of the sound. </p>

<p>Definition at line <a class="el" href="SoundFileReader_8hpp_source.php#l00054">54</a> of file <a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a74b40b4693d7000571484736d1367167"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint64 sf::SoundFileReader::Info::sampleCount</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Total number of samples in the file. </p>

<p>Definition at line <a class="el" href="SoundFileReader_8hpp_source.php#l00053">53</a> of file <a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a06ef71c19e7de190b294ae02c361f752"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundFileReader::Info::sampleRate</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Samples rate of the sound, in samples per second. </p>

<p>Definition at line <a class="el" href="SoundFileReader_8hpp_source.php#l00055">55</a> of file <a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
