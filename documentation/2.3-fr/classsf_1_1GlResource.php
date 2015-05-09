<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::GlResource Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1GlResource.php">GlResource</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="#pro-static-methods">Static Protected Member Functions</a> &#124;
<a href="classsf_1_1GlResource-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::GlResource Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Base class for classes that require an OpenGL context.  
 <a href="classsf_1_1GlResource.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="GlResource_8hpp_source.php">GlResource.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::GlResource:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1GlResource.png" usemap="#sf::GlResource_map" alt=""/>
  <map id="sf::GlResource_map" name="sf::GlResource_map">
<area href="classsf_1_1Context.php" title="Class holding a valid drawing context. " alt="sf::Context" shape="rect" coords="0,56,113,80"/>
<area href="classsf_1_1Shader.php" title="Shader class (vertex and fragment) " alt="sf::Shader" shape="rect" coords="123,56,236,80"/>
<area href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. " alt="sf::Texture" shape="rect" coords="246,56,359,80"/>
<area href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering. " alt="sf::Window" shape="rect" coords="369,56,482,80"/>
<area href="classsf_1_1RenderWindow.php" title="Window that can serve as a target for 2D drawing. " alt="sf::RenderWindow" shape="rect" coords="369,112,482,136"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:ad8fb7a0674f0f77e530dacc2a3b0dc6a"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1GlResource.php#ad8fb7a0674f0f77e530dacc2a3b0dc6a">GlResource</a> ()</td></tr>
<tr class="memdesc:ad8fb7a0674f0f77e530dacc2a3b0dc6a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#ad8fb7a0674f0f77e530dacc2a3b0dc6a">More...</a><br /></td></tr>
<tr class="separator:ad8fb7a0674f0f77e530dacc2a3b0dc6a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab99035b67052331d1e8cf67abd93de98"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1GlResource.php#ab99035b67052331d1e8cf67abd93de98">~GlResource</a> ()</td></tr>
<tr class="memdesc:ab99035b67052331d1e8cf67abd93de98"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#ab99035b67052331d1e8cf67abd93de98">More...</a><br /></td></tr>
<tr class="separator:ab99035b67052331d1e8cf67abd93de98"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-static-methods"></a>
Static Protected Member Functions</h2></td></tr>
<tr class="memitem:ae0efa7935241644608ca32ba47b22a33"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1GlResource.php#ae0efa7935241644608ca32ba47b22a33">ensureGlContext</a> ()</td></tr>
<tr class="memdesc:ae0efa7935241644608ca32ba47b22a33"><td class="mdescLeft">&#160;</td><td class="mdescRight">Make sure that a valid OpenGL context exists in the current thread.  <a href="#ae0efa7935241644608ca32ba47b22a33">More...</a><br /></td></tr>
<tr class="separator:ae0efa7935241644608ca32ba47b22a33"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Base class for classes that require an OpenGL context. </p>
<p>This class is for internal use only, it must be the base of every class that requires a valid OpenGL context in order to work.</p>

<p>Definition at line <a class="el" href="GlResource_8hpp_source.php#l00040">40</a> of file <a class="el" href="GlResource_8hpp_source.php">GlResource.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="ad8fb7a0674f0f77e530dacc2a3b0dc6a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::GlResource::GlResource </td>
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

</div>
</div>
<a class="anchor" id="ab99035b67052331d1e8cf67abd93de98"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::GlResource::~GlResource </td>
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

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ae0efa7935241644608ca32ba47b22a33"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::GlResource::ensureGlContext </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Make sure that a valid OpenGL context exists in the current thread. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="GlResource_8hpp_source.php">GlResource.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
