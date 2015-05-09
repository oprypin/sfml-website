<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::BlendMode Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="structsf_1_1BlendMode.php">BlendMode</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="#related">Related Functions</a> &#124;
<a href="classsf_1_1BlendMode-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::BlendMode Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Blending modes for drawing.  
 <a href="structsf_1_1BlendMode.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:afb9852caf356b53bb0de460c58a9ebbb"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> { <br />
&#160;&#160;<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">Zero</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">One</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">SrcColor</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">OneMinusSrcColor</a>, 
<br />
&#160;&#160;<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">DstColor</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">OneMinusDstColor</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">SrcAlpha</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">OneMinusSrcAlpha</a>, 
<br />
&#160;&#160;<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">DstAlpha</a>, 
<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbab4e5c63f189f26075e5939ad1a2ce4e4">OneMinusDstAlpha</a>
<br />
 }</td></tr>
<tr class="memdesc:afb9852caf356b53bb0de460c58a9ebbb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumeration of the blending factors.  <a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">More...</a><br /></td></tr>
<tr class="separator:afb9852caf356b53bb0de460c58a9ebbb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7bce470e2e384c4f9c8d9595faef7c32"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> { <a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">Add</a>, 
<a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0">Subtract</a>
 }</td></tr>
<tr class="memdesc:a7bce470e2e384c4f9c8d9595faef7c32"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumeration of the blending equations.  <a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">More...</a><br /></td></tr>
<tr class="separator:a7bce470e2e384c4f9c8d9595faef7c32"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a7faef75eae1fb47bbe93f45f38e3d345"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a7faef75eae1fb47bbe93f45f38e3d345">BlendMode</a> ()</td></tr>
<tr class="memdesc:a7faef75eae1fb47bbe93f45f38e3d345"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a7faef75eae1fb47bbe93f45f38e3d345">More...</a><br /></td></tr>
<tr class="separator:a7faef75eae1fb47bbe93f45f38e3d345"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a23c7452cc8e9eb943c3aea6234ce4297"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a23c7452cc8e9eb943c3aea6234ce4297">BlendMode</a> (<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> sourceFactor, <a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> destinationFactor, <a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> blendEquation=<a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">Add</a>)</td></tr>
<tr class="memdesc:a23c7452cc8e9eb943c3aea6234ce4297"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the blend mode given the factors and equation.  <a href="#a23c7452cc8e9eb943c3aea6234ce4297">More...</a><br /></td></tr>
<tr class="separator:a23c7452cc8e9eb943c3aea6234ce4297"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a69a12c596114e77126616e7e0f7d798b"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a69a12c596114e77126616e7e0f7d798b">BlendMode</a> (<a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> colorSourceFactor, <a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> colorDestinationFactor, <a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> colorBlendEquation, <a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> alphaSourceFactor, <a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> alphaDestinationFactor, <a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> alphaBlendEquation)</td></tr>
<tr class="memdesc:a69a12c596114e77126616e7e0f7d798b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the blend mode given the factors and equation.  <a href="#a69a12c596114e77126616e7e0f7d798b">More...</a><br /></td></tr>
<tr class="separator:a69a12c596114e77126616e7e0f7d798b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a32d1a55dbfada86a06d9b881dc8ccf7b"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">colorSrcFactor</a></td></tr>
<tr class="memdesc:a32d1a55dbfada86a06d9b881dc8ccf7b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Source blending factor for the color channels.  <a href="#a32d1a55dbfada86a06d9b881dc8ccf7b">More...</a><br /></td></tr>
<tr class="separator:a32d1a55dbfada86a06d9b881dc8ccf7b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adee68ee59e7f1bf71d12db03d251104d"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">colorDstFactor</a></td></tr>
<tr class="memdesc:adee68ee59e7f1bf71d12db03d251104d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destination blending factor for the color channels.  <a href="#adee68ee59e7f1bf71d12db03d251104d">More...</a><br /></td></tr>
<tr class="separator:adee68ee59e7f1bf71d12db03d251104d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aed12f06eb7f50a1b95b892b0964857b1"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">colorEquation</a></td></tr>
<tr class="memdesc:aed12f06eb7f50a1b95b892b0964857b1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Blending equation for the color channels.  <a href="#aed12f06eb7f50a1b95b892b0964857b1">More...</a><br /></td></tr>
<tr class="separator:aed12f06eb7f50a1b95b892b0964857b1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa94e44f8e1042a7357e8eff78c61a1be"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">alphaSrcFactor</a></td></tr>
<tr class="memdesc:aa94e44f8e1042a7357e8eff78c61a1be"><td class="mdescLeft">&#160;</td><td class="mdescRight">Source blending factor for the alpha channel.  <a href="#aa94e44f8e1042a7357e8eff78c61a1be">More...</a><br /></td></tr>
<tr class="separator:aa94e44f8e1042a7357e8eff78c61a1be"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaf85b6b7943181cc81745569c4851e4e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">alphaDstFactor</a></td></tr>
<tr class="memdesc:aaf85b6b7943181cc81745569c4851e4e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destination blending factor for the alpha channel.  <a href="#aaf85b6b7943181cc81745569c4851e4e">More...</a><br /></td></tr>
<tr class="separator:aaf85b6b7943181cc81745569c4851e4e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a68f5a305e0912946f39ba6c9265710c4"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">alphaEquation</a></td></tr>
<tr class="memdesc:a68f5a305e0912946f39ba6c9265710c4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Blending equation for the alpha channel.  <a href="#a68f5a305e0912946f39ba6c9265710c4">More...</a><br /></td></tr>
<tr class="separator:a68f5a305e0912946f39ba6c9265710c4"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="related"></a>
Related Functions</h2></td></tr>
<tr><td class="ititle" colspan="2"><p>(Note that these are not member functions.) </p>
</td></tr>
<tr class="memitem:a20d1be06061109c3cef58e0cc38729ea"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#a20d1be06061109c3cef58e0cc38729ea">operator==</a> (const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;left, const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;right)</td></tr>
<tr class="memdesc:a20d1be06061109c3cef58e0cc38729ea"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the == operator.  <a href="#a20d1be06061109c3cef58e0cc38729ea">More...</a><br /></td></tr>
<tr class="separator:a20d1be06061109c3cef58e0cc38729ea"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee6169f8983f5e92298c4ad6829563ba"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1BlendMode.php#aee6169f8983f5e92298c4ad6829563ba">operator!=</a> (const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;left, const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;right)</td></tr>
<tr class="memdesc:aee6169f8983f5e92298c4ad6829563ba"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the != operator.  <a href="#aee6169f8983f5e92298c4ad6829563ba">More...</a><br /></td></tr>
<tr class="separator:aee6169f8983f5e92298c4ad6829563ba"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Blending modes for drawing. </p>
<p><a class="el" href="structsf_1_1BlendMode.php" title="Blending modes for drawing. ">sf::BlendMode</a> is a class that represents a blend mode.</p>
<p>A blend mode determines how the colors of an object you draw are mixed with the colors that are already in the buffer.</p>
<p>The class is composed of 6 components, each of which has its own public member variable: </p><ul>
<li>Color Source Factor (<a class="el" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">colorSrcFactor</a>) </li>
<li>Color Destination Factor (<a class="el" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">colorDstFactor</a>) </li>
<li>Color Blend Equation (<a class="el" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">colorEquation</a>) </li>
<li>Alpha Source Factor (<a class="el" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">alphaSrcFactor</a>) </li>
<li>Alpha Destination Factor (<a class="el" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">alphaDstFactor</a>) </li>
<li>Alpha Blend Equation (<a class="el" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">alphaEquation</a>)</li>
</ul>
<p>The source factor specifies how the pixel you are drawing contributes to the final color. The destination factor specifies how the pixel already drawn in the buffer contributes to the final color.</p>
<p>The color channels RGB (red, green, blue; simply referred to as color) and A (alpha; the transparency) can be treated separately. This separation can be useful for specific blend modes, but most often you won't need it and will simply treat the color as a single unit.</p>
<p>The blend factors and equations correspond to their OpenGL equivalents. In general, the color of the resulting pixel is calculated according to the following formula (<em>src</em> is the color of the source pixel, <em>dst</em> the color of the destination pixel, the other variables correspond to the public members, with the equations being + or - operators): </p><div class="fragment"><div class="line">dst.rgb = <a class="code" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">colorSrcFactor</a> * src.rgb (<a class="code" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">colorEquation</a>) <a class="code" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">colorDstFactor</a> * dst.rgb</div>
<div class="line">dst.a   = <a class="code" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">alphaSrcFactor</a> * src.a   (<a class="code" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">alphaEquation</a>) <a class="code" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">alphaDstFactor</a> * dst.a</div>
</div><!-- fragment --><p> All factors and colors are represented as floating point numbers between 0 and 1. Where necessary, the result is clamped to fit in that range.</p>
<p>The most common blending modes are defined as constants in the sf namespace:</p>
<div class="fragment"><div class="line"><a class="code" href="structsf_1_1BlendMode.php">sf::BlendMode</a> alphaBlending          = sf::BlendAlpha;</div>
<div class="line"><a class="code" href="structsf_1_1BlendMode.php">sf::BlendMode</a> additiveBlending       = sf::BlendAdd;</div>
<div class="line"><a class="code" href="structsf_1_1BlendMode.php">sf::BlendMode</a> multiplicativeBlending = sf::BlendMultipy;</div>
<div class="line"><a class="code" href="structsf_1_1BlendMode.php">sf::BlendMode</a> noBlending             = sf::BlendNone;</div>
</div><!-- fragment --><p>In SFML, a blend mode can be specified every time you draw a <a class="el" href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target. ">sf::Drawable</a> object to a render target. It is part of the <a class="el" href="classsf_1_1RenderStates.php" title="Define the states used for drawing to a RenderTarget. ">sf::RenderStates</a> compound that is passed to the member function <a class="el" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39" title="Draw a drawable object to the render target. ">sf::RenderTarget::draw()</a>.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1RenderStates.php" title="Define the states used for drawing to a RenderTarget. ">sf::RenderStates</a>, <a class="el" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...) ">sf::RenderTarget</a> </dd></dl>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00041">41</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="a7bce470e2e384c4f9c8d9595faef7c32"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">sf::BlendMode::Equation</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumeration of the blending equations. </p>
<p>The equations are mapped directly to their OpenGL equivalents, specified by glBlendEquation() or glBlendEquationSeparate(). </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966"></a>Add&#160;</td><td class="fielddoc">
<p>Pixel = Src * SrcFactor + Dst * DstFactor. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0"></a>Subtract&#160;</td><td class="fielddoc">
<p>Pixel = Src * SrcFactor - Dst * DstFactor. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00069">69</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">sf::BlendMode::Factor</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumeration of the blending factors. </p>
<p>The factors are mapped directly to their OpenGL equivalents, specified by glBlendFunc() or glBlendFuncSeparate(). </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba"></a>Zero&#160;</td><td class="fielddoc">
<p>(0, 0, 0, 0) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181"></a>One&#160;</td><td class="fielddoc">
<p>(1, 1, 1, 1) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188"></a>SrcColor&#160;</td><td class="fielddoc">
<p>(src.r, src.g, src.b, src.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e"></a>OneMinusSrcColor&#160;</td><td class="fielddoc">
<p>(1, 1, 1, 1) - (src.r, src.g, src.b, src.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a"></a>DstColor&#160;</td><td class="fielddoc">
<p>(dst.r, dst.g, dst.b, dst.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2"></a>OneMinusDstColor&#160;</td><td class="fielddoc">
<p>(1, 1, 1, 1) - (dst.r, dst.g, dst.b, dst.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41"></a>SrcAlpha&#160;</td><td class="fielddoc">
<p>(src.a, src.a, src.a, src.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8"></a>OneMinusSrcAlpha&#160;</td><td class="fielddoc">
<p>(1, 1, 1, 1) - (src.a, src.a, src.a, src.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7"></a>DstAlpha&#160;</td><td class="fielddoc">
<p>(dst.a, dst.a, dst.a, dst.a) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="afb9852caf356b53bb0de460c58a9ebbbab4e5c63f189f26075e5939ad1a2ce4e4"></a>OneMinusDstAlpha&#160;</td><td class="fielddoc">
<p>(1, 1, 1, 1) - (dst.a, dst.a, dst.a, dst.a) </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00049">49</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a7faef75eae1fb47bbe93f45f38e3d345"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::BlendMode::BlendMode </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Constructs a blending mode that does alpha blending. </p>

</div>
</div>
<a class="anchor" id="a23c7452cc8e9eb943c3aea6234ce4297"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::BlendMode::BlendMode </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td>
          <td class="paramname"><em>sourceFactor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td>
          <td class="paramname"><em>destinationFactor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a>&#160;</td>
          <td class="paramname"><em>blendEquation</em> = <code><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">Add</a></code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the blend mode given the factors and equation. </p>
<p>This constructor uses the same factors and equation for both color and alpha components. It also defaults to the Add equation.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sourceFactor</td><td>Specifies how to compute the source factor for the color and alpha channels. </td></tr>
    <tr><td class="paramname">destinationFactor</td><td>Specifies how to compute the destination factor for the color and alpha channels. </td></tr>
    <tr><td class="paramname">blendEquation</td><td>Specifies how to combine the source and destination colors and alpha. </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a69a12c596114e77126616e7e0f7d798b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::BlendMode::BlendMode </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td>
          <td class="paramname"><em>colorSourceFactor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td>
          <td class="paramname"><em>colorDestinationFactor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a>&#160;</td>
          <td class="paramname"><em>colorBlendEquation</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td>
          <td class="paramname"><em>alphaSourceFactor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>&#160;</td>
          <td class="paramname"><em>alphaDestinationFactor</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a>&#160;</td>
          <td class="paramname"><em>alphaBlendEquation</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the blend mode given the factors and equation. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">colorSourceFactor</td><td>Specifies how to compute the source factor for the color channels. </td></tr>
    <tr><td class="paramname">colorDestinationFactor</td><td>Specifies how to compute the destination factor for the color channels. </td></tr>
    <tr><td class="paramname">colorBlendEquation</td><td>Specifies how to combine the source and destination colors. </td></tr>
    <tr><td class="paramname">alphaSourceFactor</td><td>Specifies how to compute the source factor. </td></tr>
    <tr><td class="paramname">alphaDestinationFactor</td><td>Specifies how to compute the destination factor. </td></tr>
    <tr><td class="paramname">alphaBlendEquation</td><td>Specifies how to combine the source and destination alphas. </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a class="anchor" id="aee6169f8983f5e92298c4ad6829563ba"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator!= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of the != operator. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand </td></tr>
    <tr><td class="paramname">right</td><td>Right operand</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if blending modes are different, false if they are equal </dd></dl>

</div>
</div>
<a class="anchor" id="a20d1be06061109c3cef58e0cc38729ea"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of the == operator. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand </td></tr>
    <tr><td class="paramname">right</td><td>Right operand</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if blending modes are equal, false if they are different </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="aaf85b6b7943181cc81745569c4851e4e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> sf::BlendMode::alphaDstFactor</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destination blending factor for the alpha channel. </p>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00118">118</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a68f5a305e0912946f39ba6c9265710c4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> sf::BlendMode::alphaEquation</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Blending equation for the alpha channel. </p>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00119">119</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="aa94e44f8e1042a7357e8eff78c61a1be"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> sf::BlendMode::alphaSrcFactor</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Source blending factor for the alpha channel. </p>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00117">117</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="adee68ee59e7f1bf71d12db03d251104d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> sf::BlendMode::colorDstFactor</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destination blending factor for the color channels. </p>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00115">115</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="aed12f06eb7f50a1b95b892b0964857b1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> sf::BlendMode::colorEquation</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Blending equation for the color channels. </p>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00116">116</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a32d1a55dbfada86a06d9b881dc8ccf7b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> sf::BlendMode::colorSrcFactor</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Source blending factor for the color channels. </p>

<p>Definition at line <a class="el" href="BlendMode_8hpp_source.php#l00114">114</a> of file <a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="BlendMode_8hpp_source.php">BlendMode.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
