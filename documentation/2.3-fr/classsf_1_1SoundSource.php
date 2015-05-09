<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundSource Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundSource.php">SoundSource</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="classsf_1_1SoundSource-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundSource Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Base class defining a sound's properties.  
 <a href="classsf_1_1SoundSource.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundSource_8hpp_source.php">SoundSource.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::SoundSource:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1SoundSource.png" usemap="#sf::SoundSource_map" alt=""/>
  <map id="sf::SoundSource_map" name="sf::SoundSource_map">
<area href="classsf_1_1AlResource.php" title="Base class for classes that require an OpenAL context. " alt="sf::AlResource" shape="rect" coords="57,0,162,24"/>
<area href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. " alt="sf::Sound" shape="rect" coords="0,112,105,136"/>
<area href="classsf_1_1SoundStream.php" title="Abstract base class for streamed audio sources. " alt="sf::SoundStream" shape="rect" coords="115,112,220,136"/>
<area href="classsf_1_1Music.php" title="Streamed music played from an audio file. " alt="sf::Music" shape="rect" coords="115,168,220,192"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:ac43af72c98c077500b239bc75b812f03"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">Status</a> { <a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03adabb01e8aa85b2f54b344890addf764a">Stopped</a>, 
<a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03ac3ca1fcc0394267c9bdbe3dc0a8a7e41">Paused</a>, 
<a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03af07bdea9f70ef7606dfc9f955beeee18">Playing</a>
 }</td></tr>
<tr class="memdesc:ac43af72c98c077500b239bc75b812f03"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumeration of the sound source states.  <a href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">More...</a><br /></td></tr>
<tr class="separator:ac43af72c98c077500b239bc75b812f03"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ae0c7728c1449fdebe65749ab6fcb3170"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#ae0c7728c1449fdebe65749ab6fcb3170">SoundSource</a> (const <a class="el" href="classsf_1_1SoundSource.php">SoundSource</a> &amp;copy)</td></tr>
<tr class="memdesc:ae0c7728c1449fdebe65749ab6fcb3170"><td class="mdescLeft">&#160;</td><td class="mdescRight">Copy constructor.  <a href="#ae0c7728c1449fdebe65749ab6fcb3170">More...</a><br /></td></tr>
<tr class="separator:ae0c7728c1449fdebe65749ab6fcb3170"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a77c7c1524f8cb81df2de9375b0f87c5c"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a77c7c1524f8cb81df2de9375b0f87c5c">~SoundSource</a> ()</td></tr>
<tr class="memdesc:a77c7c1524f8cb81df2de9375b0f87c5c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a77c7c1524f8cb81df2de9375b0f87c5c">More...</a><br /></td></tr>
<tr class="separator:a77c7c1524f8cb81df2de9375b0f87c5c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a72a13695ed48b7f7b55e7cd4431f4bb6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a72a13695ed48b7f7b55e7cd4431f4bb6">setPitch</a> (float pitch)</td></tr>
<tr class="memdesc:a72a13695ed48b7f7b55e7cd4431f4bb6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the pitch of the sound.  <a href="#a72a13695ed48b7f7b55e7cd4431f4bb6">More...</a><br /></td></tr>
<tr class="separator:a72a13695ed48b7f7b55e7cd4431f4bb6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2f192f2b49fb8e2b82f3498d3663fcc2"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a2f192f2b49fb8e2b82f3498d3663fcc2">setVolume</a> (float volume)</td></tr>
<tr class="memdesc:a2f192f2b49fb8e2b82f3498d3663fcc2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the volume of the sound.  <a href="#a2f192f2b49fb8e2b82f3498d3663fcc2">More...</a><br /></td></tr>
<tr class="separator:a2f192f2b49fb8e2b82f3498d3663fcc2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0480257ea25d986eba6cc3c1a6f8d7c2"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a0480257ea25d986eba6cc3c1a6f8d7c2">setPosition</a> (float x, float y, float z)</td></tr>
<tr class="memdesc:a0480257ea25d986eba6cc3c1a6f8d7c2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the 3D position of the sound in the audio scene.  <a href="#a0480257ea25d986eba6cc3c1a6f8d7c2">More...</a><br /></td></tr>
<tr class="separator:a0480257ea25d986eba6cc3c1a6f8d7c2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a17ba9ed01925395652181a7b2a7d3aef"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a17ba9ed01925395652181a7b2a7d3aef">setPosition</a> (const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;position)</td></tr>
<tr class="memdesc:a17ba9ed01925395652181a7b2a7d3aef"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the 3D position of the sound in the audio scene.  <a href="#a17ba9ed01925395652181a7b2a7d3aef">More...</a><br /></td></tr>
<tr class="separator:a17ba9ed01925395652181a7b2a7d3aef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac478a8b813faf7dd575635b102081d0d"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#ac478a8b813faf7dd575635b102081d0d">setRelativeToListener</a> (bool relative)</td></tr>
<tr class="memdesc:ac478a8b813faf7dd575635b102081d0d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Make the sound's position relative to the listener or absolute.  <a href="#ac478a8b813faf7dd575635b102081d0d">More...</a><br /></td></tr>
<tr class="separator:ac478a8b813faf7dd575635b102081d0d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a75bbc2c34addc8b25a14edb908508afe"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a75bbc2c34addc8b25a14edb908508afe">setMinDistance</a> (float distance)</td></tr>
<tr class="memdesc:a75bbc2c34addc8b25a14edb908508afe"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the minimum distance of the sound.  <a href="#a75bbc2c34addc8b25a14edb908508afe">More...</a><br /></td></tr>
<tr class="separator:a75bbc2c34addc8b25a14edb908508afe"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa2adff44cd2f8b4e3c7315d7c2a45626"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#aa2adff44cd2f8b4e3c7315d7c2a45626">setAttenuation</a> (float attenuation)</td></tr>
<tr class="memdesc:aa2adff44cd2f8b4e3c7315d7c2a45626"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the attenuation factor of the sound.  <a href="#aa2adff44cd2f8b4e3c7315d7c2a45626">More...</a><br /></td></tr>
<tr class="separator:aa2adff44cd2f8b4e3c7315d7c2a45626"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aedad6aff442aeb6dcd267befd4fdbb59"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#aedad6aff442aeb6dcd267befd4fdbb59">getPitch</a> () const </td></tr>
<tr class="memdesc:aedad6aff442aeb6dcd267befd4fdbb59"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the pitch of the sound.  <a href="#aedad6aff442aeb6dcd267befd4fdbb59">More...</a><br /></td></tr>
<tr class="separator:aedad6aff442aeb6dcd267befd4fdbb59"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aafb0558fce9cbebfc6828d932cbcce2f"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#aafb0558fce9cbebfc6828d932cbcce2f">getVolume</a> () const </td></tr>
<tr class="memdesc:aafb0558fce9cbebfc6828d932cbcce2f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the volume of the sound.  <a href="#aafb0558fce9cbebfc6828d932cbcce2f">More...</a><br /></td></tr>
<tr class="separator:aafb0558fce9cbebfc6828d932cbcce2f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4c3bc60286f488aaf2941ab76476eebc"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Vector3.php">Vector3f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a4c3bc60286f488aaf2941ab76476eebc">getPosition</a> () const </td></tr>
<tr class="memdesc:a4c3bc60286f488aaf2941ab76476eebc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the 3D position of the sound in the audio scene.  <a href="#a4c3bc60286f488aaf2941ab76476eebc">More...</a><br /></td></tr>
<tr class="separator:a4c3bc60286f488aaf2941ab76476eebc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5cb9107e1c47f65ab82c4885436061ef"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a5cb9107e1c47f65ab82c4885436061ef">isRelativeToListener</a> () const </td></tr>
<tr class="memdesc:a5cb9107e1c47f65ab82c4885436061ef"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tell whether the sound's position is relative to the listener or is absolute.  <a href="#a5cb9107e1c47f65ab82c4885436061ef">More...</a><br /></td></tr>
<tr class="separator:a5cb9107e1c47f65ab82c4885436061ef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3379b9f7a0f0e31ab9a4e5fa1762986e"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a3379b9f7a0f0e31ab9a4e5fa1762986e">getMinDistance</a> () const </td></tr>
<tr class="memdesc:a3379b9f7a0f0e31ab9a4e5fa1762986e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the minimum distance of the sound.  <a href="#a3379b9f7a0f0e31ab9a4e5fa1762986e">More...</a><br /></td></tr>
<tr class="separator:a3379b9f7a0f0e31ab9a4e5fa1762986e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac5f5ffef8930bb573f43d47cbc779bf6"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#ac5f5ffef8930bb573f43d47cbc779bf6">getAttenuation</a> () const </td></tr>
<tr class="memdesc:ac5f5ffef8930bb573f43d47cbc779bf6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the attenuation factor of the sound.  <a href="#ac5f5ffef8930bb573f43d47cbc779bf6">More...</a><br /></td></tr>
<tr class="separator:ac5f5ffef8930bb573f43d47cbc779bf6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:aefa4bd4460f387d81a0637d293979436"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#aefa4bd4460f387d81a0637d293979436">SoundSource</a> ()</td></tr>
<tr class="memdesc:aefa4bd4460f387d81a0637d293979436"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#aefa4bd4460f387d81a0637d293979436">More...</a><br /></td></tr>
<tr class="separator:aefa4bd4460f387d81a0637d293979436"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad1995d2888773f47f99b671747609dbb"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">Status</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#ad1995d2888773f47f99b671747609dbb">getStatus</a> () const </td></tr>
<tr class="memdesc:ad1995d2888773f47f99b671747609dbb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current status of the sound (stopped, paused, playing)  <a href="#ad1995d2888773f47f99b671747609dbb">More...</a><br /></td></tr>
<tr class="separator:ad1995d2888773f47f99b671747609dbb"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:a0223cef4b1c587e6e1e17b4c92c4479c"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundSource.php#a0223cef4b1c587e6e1e17b4c92c4479c">m_source</a></td></tr>
<tr class="memdesc:a0223cef4b1c587e6e1e17b4c92c4479c"><td class="mdescLeft">&#160;</td><td class="mdescRight">OpenAL source identifier.  <a href="#a0223cef4b1c587e6e1e17b4c92c4479c">More...</a><br /></td></tr>
<tr class="separator:a0223cef4b1c587e6e1e17b4c92c4479c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Base class defining a sound's properties. </p>
<p><a class="el" href="classsf_1_1SoundSource.php" title="Base class defining a sound&#39;s properties. ">sf::SoundSource</a> is not meant to be used directly, it only serves as a common base for all audio objects that can live in the audio environment.</p>
<p>It defines several properties for the sound: pitch, volume, position, attenuation, etc. All of them can be changed at any time with no impact on performances.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a>, <a class="el" href="classsf_1_1SoundStream.php" title="Abstract base class for streamed audio sources. ">sf::SoundStream</a> </dd></dl>

<p>Definition at line <a class="el" href="SoundSource_8hpp_source.php#l00042">42</a> of file <a class="el" href="SoundSource_8hpp_source.php">SoundSource.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="ac43af72c98c077500b239bc75b812f03"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">sf::SoundSource::Status</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumeration of the sound source states. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="ac43af72c98c077500b239bc75b812f03adabb01e8aa85b2f54b344890addf764a"></a>Stopped&#160;</td><td class="fielddoc">
<p><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">Sound</a> is not playing. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="ac43af72c98c077500b239bc75b812f03ac3ca1fcc0394267c9bdbe3dc0a8a7e41"></a>Paused&#160;</td><td class="fielddoc">
<p><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">Sound</a> is paused. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="ac43af72c98c077500b239bc75b812f03af07bdea9f70ef7606dfc9f955beeee18"></a>Playing&#160;</td><td class="fielddoc">
<p><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">Sound</a> is playing. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="SoundSource_8hpp_source.php#l00050">50</a> of file <a class="el" href="SoundSource_8hpp_source.php">SoundSource.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="ae0c7728c1449fdebe65749ab6fcb3170"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundSource::SoundSource </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SoundSource.php">SoundSource</a> &amp;&#160;</td>
          <td class="paramname"><em>copy</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Copy constructor. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">copy</td><td>Instance to copy </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a77c7c1524f8cb81df2de9375b0f87c5c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::SoundSource::~SoundSource </td>
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

<p>Destructor. </p>

</div>
</div>
<a class="anchor" id="aefa4bd4460f387d81a0637d293979436"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundSource::SoundSource </td>
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
<p>This constructor is meant to be called by derived classes only. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ac5f5ffef8930bb573f43d47cbc779bf6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::SoundSource::getAttenuation </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the attenuation factor of the sound. </p>
<dl class="section return"><dt>Returns</dt><dd>Attenuation factor of the sound</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#aa2adff44cd2f8b4e3c7315d7c2a45626" title="Set the attenuation factor of the sound. ">setAttenuation</a>, <a class="el" href="classsf_1_1SoundSource.php#a3379b9f7a0f0e31ab9a4e5fa1762986e" title="Get the minimum distance of the sound. ">getMinDistance</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a3379b9f7a0f0e31ab9a4e5fa1762986e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::SoundSource::getMinDistance </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the minimum distance of the sound. </p>
<dl class="section return"><dt>Returns</dt><dd>Minimum distance of the sound</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a75bbc2c34addc8b25a14edb908508afe" title="Set the minimum distance of the sound. ">setMinDistance</a>, <a class="el" href="classsf_1_1SoundSource.php#ac5f5ffef8930bb573f43d47cbc779bf6" title="Get the attenuation factor of the sound. ">getAttenuation</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aedad6aff442aeb6dcd267befd4fdbb59"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::SoundSource::getPitch </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the pitch of the sound. </p>
<dl class="section return"><dt>Returns</dt><dd>Pitch of the sound</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a72a13695ed48b7f7b55e7cd4431f4bb6" title="Set the pitch of the sound. ">setPitch</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a4c3bc60286f488aaf2941ab76476eebc"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Vector3.php">Vector3f</a> sf::SoundSource::getPosition </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the 3D position of the sound in the audio scene. </p>
<dl class="section return"><dt>Returns</dt><dd>Position of the sound</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a0480257ea25d986eba6cc3c1a6f8d7c2" title="Set the 3D position of the sound in the audio scene. ">setPosition</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ad1995d2888773f47f99b671747609dbb"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">Status</a> sf::SoundSource::getStatus </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current status of the sound (stopped, paused, playing) </p>
<dl class="section return"><dt>Returns</dt><dd>Current status of the sound </dd></dl>

</div>
</div>
<a class="anchor" id="aafb0558fce9cbebfc6828d932cbcce2f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::SoundSource::getVolume </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the volume of the sound. </p>
<dl class="section return"><dt>Returns</dt><dd>Volume of the sound, in the range [0, 100]</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a2f192f2b49fb8e2b82f3498d3663fcc2" title="Set the volume of the sound. ">setVolume</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a5cb9107e1c47f65ab82c4885436061ef"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundSource::isRelativeToListener </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Tell whether the sound's position is relative to the listener or is absolute. </p>
<dl class="section return"><dt>Returns</dt><dd>True if the position is relative, false if it's absolute</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#ac478a8b813faf7dd575635b102081d0d" title="Make the sound&#39;s position relative to the listener or absolute. ">setRelativeToListener</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aa2adff44cd2f8b4e3c7315d7c2a45626"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setAttenuation </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>attenuation</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the attenuation factor of the sound. </p>
<p>The attenuation is a multiplicative factor which makes the sound more or less loud according to its distance from the listener. An attenuation of 0 will produce a non-attenuated sound, i.e. its volume will always be the same whether it is heard from near or from far. On the other hand, an attenuation value such as 100 will make the sound fade out very quickly as it gets further from the listener. The default value of the attenuation is 1.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">attenuation</td><td>New attenuation factor of the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#ac5f5ffef8930bb573f43d47cbc779bf6" title="Get the attenuation factor of the sound. ">getAttenuation</a>, <a class="el" href="classsf_1_1SoundSource.php#a75bbc2c34addc8b25a14edb908508afe" title="Set the minimum distance of the sound. ">setMinDistance</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a75bbc2c34addc8b25a14edb908508afe"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setMinDistance </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>distance</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the minimum distance of the sound. </p>
<p>The "minimum distance" of a sound is the maximum distance at which it is heard at its maximum volume. Further than the minimum distance, it will start to fade out according to its attenuation factor. A value of 0 ("inside the head
of the listener") is an invalid value and is forbidden. The default value of the minimum distance is 1.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">distance</td><td>New minimum distance of the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a3379b9f7a0f0e31ab9a4e5fa1762986e" title="Get the minimum distance of the sound. ">getMinDistance</a>, <a class="el" href="classsf_1_1SoundSource.php#aa2adff44cd2f8b4e3c7315d7c2a45626" title="Set the attenuation factor of the sound. ">setAttenuation</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a72a13695ed48b7f7b55e7cd4431f4bb6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setPitch </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>pitch</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the pitch of the sound. </p>
<p>The pitch represents the perceived fundamental frequency of a sound; thus you can make a sound more acute or grave by changing its pitch. A side effect of changing the pitch is to modify the playing speed of the sound as well. The default value for the pitch is 1.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">pitch</td><td>New pitch to apply to the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#aedad6aff442aeb6dcd267befd4fdbb59" title="Get the pitch of the sound. ">getPitch</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a0480257ea25d986eba6cc3c1a6f8d7c2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setPosition </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>z</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the 3D position of the sound in the audio scene. </p>
<p>Only sounds with one channel (mono sounds) can be spatialized. The default position of a sound is (0, 0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of the position of the sound in the scene </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of the position of the sound in the scene </td></tr>
    <tr><td class="paramname">z</td><td>Z coordinate of the position of the sound in the scene</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a4c3bc60286f488aaf2941ab76476eebc" title="Get the 3D position of the sound in the audio scene. ">getPosition</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a17ba9ed01925395652181a7b2a7d3aef"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setPosition </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;&#160;</td>
          <td class="paramname"><em>position</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the 3D position of the sound in the audio scene. </p>
<p>Only sounds with one channel (mono sounds) can be spatialized. The default position of a sound is (0, 0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">position</td><td>Position of the sound in the scene</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a4c3bc60286f488aaf2941ab76476eebc" title="Get the 3D position of the sound in the audio scene. ">getPosition</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ac478a8b813faf7dd575635b102081d0d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setRelativeToListener </td>
          <td>(</td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>relative</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Make the sound's position relative to the listener or absolute. </p>
<p>Making a sound relative to the listener will ensure that it will always be played the same way regardless of the position of the listener. This can be useful for non-spatialized sounds, sounds that are produced by the listener, or sounds attached to it. The default value is false (position is absolute).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">relative</td><td>True to set the position relative, false to set it absolute</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#a5cb9107e1c47f65ab82c4885436061ef" title="Tell whether the sound&#39;s position is relative to the listener or is absolute. ">isRelativeToListener</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a2f192f2b49fb8e2b82f3498d3663fcc2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundSource::setVolume </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>volume</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the volume of the sound. </p>
<p>The volume is a value between 0 (mute) and 100 (full volume). The default value for the volume is 100.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">volume</td><td>Volume of the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundSource.php#aafb0558fce9cbebfc6828d932cbcce2f" title="Get the volume of the sound. ">getVolume</a> </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="a0223cef4b1c587e6e1e17b4c92c4479c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundSource::m_source</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>OpenAL source identifier. </p>

<p>Definition at line <a class="el" href="SoundSource_8hpp_source.php#l00264">264</a> of file <a class="el" href="SoundSource_8hpp_source.php">SoundSource.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundSource_8hpp_source.php">SoundSource.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
