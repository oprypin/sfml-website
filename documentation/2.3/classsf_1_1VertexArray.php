<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::VertexArray Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1VertexArray.php">VertexArray</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1VertexArray-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::VertexArray Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Define a set of one or more 2D primitives.  
 <a href="classsf_1_1VertexArray.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="VertexArray_8hpp_source.php">VertexArray.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::VertexArray:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1VertexArray.png" usemap="#sf::VertexArray_map" alt=""/>
  <map id="sf::VertexArray_map" name="sf::VertexArray_map">
<area href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target. " alt="sf::Drawable" shape="rect" coords="0,0,98,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a15729e01df8fc0021f9774dfb56295c1"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a15729e01df8fc0021f9774dfb56295c1">VertexArray</a> ()</td></tr>
<tr class="memdesc:a15729e01df8fc0021f9774dfb56295c1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a15729e01df8fc0021f9774dfb56295c1">More...</a><br /></td></tr>
<tr class="separator:a15729e01df8fc0021f9774dfb56295c1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4bb1c29a0e3354a035075899d84f02f9"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a4bb1c29a0e3354a035075899d84f02f9">VertexArray</a> (<a class="el" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type, std::size_t vertexCount=0)</td></tr>
<tr class="memdesc:a4bb1c29a0e3354a035075899d84f02f9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the vertex array with a type and an initial number of vertices.  <a href="#a4bb1c29a0e3354a035075899d84f02f9">More...</a><br /></td></tr>
<tr class="separator:a4bb1c29a0e3354a035075899d84f02f9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afcf63214ffaf5903c818d7f2bf49970b"><td class="memItemLeft" align="right" valign="top">std::size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#afcf63214ffaf5903c818d7f2bf49970b">getVertexCount</a> () const </td></tr>
<tr class="memdesc:afcf63214ffaf5903c818d7f2bf49970b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the vertex count.  <a href="#afcf63214ffaf5903c818d7f2bf49970b">More...</a><br /></td></tr>
<tr class="separator:afcf63214ffaf5903c818d7f2bf49970b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6006676417d91f42d0278f1abcfe4352"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Vertex.php">Vertex</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a6006676417d91f42d0278f1abcfe4352">operator[]</a> (std::size_t index)</td></tr>
<tr class="memdesc:a6006676417d91f42d0278f1abcfe4352"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get a read-write access to a vertex by its index.  <a href="#a6006676417d91f42d0278f1abcfe4352">More...</a><br /></td></tr>
<tr class="separator:a6006676417d91f42d0278f1abcfe4352"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab41c7768708eb55e8bb13eecce003cc4"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="classsf_1_1Vertex.php">Vertex</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#ab41c7768708eb55e8bb13eecce003cc4">operator[]</a> (std::size_t index) const </td></tr>
<tr class="memdesc:ab41c7768708eb55e8bb13eecce003cc4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get a read-only access to a vertex by its index.  <a href="#ab41c7768708eb55e8bb13eecce003cc4">More...</a><br /></td></tr>
<tr class="separator:ab41c7768708eb55e8bb13eecce003cc4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3654c424aca1f9e468f369bc777c839c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a3654c424aca1f9e468f369bc777c839c">clear</a> ()</td></tr>
<tr class="memdesc:a3654c424aca1f9e468f369bc777c839c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Clear the vertex array.  <a href="#a3654c424aca1f9e468f369bc777c839c">More...</a><br /></td></tr>
<tr class="separator:a3654c424aca1f9e468f369bc777c839c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0c0fe239e8f9a54e64d3bbc96bf548c0"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a0c0fe239e8f9a54e64d3bbc96bf548c0">resize</a> (std::size_t vertexCount)</td></tr>
<tr class="memdesc:a0c0fe239e8f9a54e64d3bbc96bf548c0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Resize the vertex array.  <a href="#a0c0fe239e8f9a54e64d3bbc96bf548c0">More...</a><br /></td></tr>
<tr class="separator:a0c0fe239e8f9a54e64d3bbc96bf548c0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a80c8f6865e53bd21fc6cb10fffa10035"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a80c8f6865e53bd21fc6cb10fffa10035">append</a> (const <a class="el" href="classsf_1_1Vertex.php">Vertex</a> &amp;vertex)</td></tr>
<tr class="memdesc:a80c8f6865e53bd21fc6cb10fffa10035"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a vertex to the array.  <a href="#a80c8f6865e53bd21fc6cb10fffa10035">More...</a><br /></td></tr>
<tr class="separator:a80c8f6865e53bd21fc6cb10fffa10035"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa38c10707c28a97f4627ae8b2f3ad969"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#aa38c10707c28a97f4627ae8b2f3ad969">setPrimitiveType</a> (<a class="el" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type)</td></tr>
<tr class="memdesc:aa38c10707c28a97f4627ae8b2f3ad969"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the type of primitives to draw.  <a href="#aa38c10707c28a97f4627ae8b2f3ad969">More...</a><br /></td></tr>
<tr class="separator:aa38c10707c28a97f4627ae8b2f3ad969"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af2205f76fe98fb3cf1f303f25d43c045"><td class="memItemLeft" align="right" valign="top"><a class="el" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#af2205f76fe98fb3cf1f303f25d43c045">getPrimitiveType</a> () const </td></tr>
<tr class="memdesc:af2205f76fe98fb3cf1f303f25d43c045"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the type of primitives drawn by the vertex array.  <a href="#af2205f76fe98fb3cf1f303f25d43c045">More...</a><br /></td></tr>
<tr class="separator:af2205f76fe98fb3cf1f303f25d43c045"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a741d1b1acbb175289eab37bbf49cbb24"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Rect.php">FloatRect</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VertexArray.php#a741d1b1acbb175289eab37bbf49cbb24">getBounds</a> () const </td></tr>
<tr class="memdesc:a741d1b1acbb175289eab37bbf49cbb24"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the bounding rectangle of the vertex array.  <a href="#a741d1b1acbb175289eab37bbf49cbb24">More...</a><br /></td></tr>
<tr class="separator:a741d1b1acbb175289eab37bbf49cbb24"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Define a set of one or more 2D primitives. </p>
<p><a class="el" href="classsf_1_1VertexArray.php" title="Define a set of one or more 2D primitives. ">sf::VertexArray</a> is a very simple wrapper around a dynamic array of vertices and a primitives type.</p>
<p>It inherits <a class="el" href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target. ">sf::Drawable</a>, but unlike other drawables it is not transformable.</p>
<p>Example: </p><div class="fragment"><div class="line"><a class="code" href="classsf_1_1VertexArray.php">sf::VertexArray</a> lines(<a class="code" href="group__graphics.php#gga5ee56ac1339984909610713096283b1ba5b09910f5d0f39641342184ccd0d1de3">sf::LinesStrip</a>, 4);</div>
<div class="line">lines[0].position = <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(10, 0);</div>
<div class="line">lines[1].position = <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(20, 0);</div>
<div class="line">lines[2].position = <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(30, 5);</div>
<div class="line">lines[3].position = <a class="code" href="classsf_1_1Vector2.php">sf::Vector2f</a>(40, 2);</div>
<div class="line"></div>
<div class="line">window.draw(lines);</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">sf::Vertex</a> </dd></dl>

<p>Definition at line <a class="el" href="VertexArray_8hpp_source.php#l00045">45</a> of file <a class="el" href="VertexArray_8hpp_source.php">VertexArray.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a15729e01df8fc0021f9774dfb56295c1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::VertexArray::VertexArray </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Creates an empty vertex array. </p>

</div>
</div>
<a class="anchor" id="a4bb1c29a0e3354a035075899d84f02f9"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::VertexArray::VertexArray </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>vertexCount</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Construct the vertex array with a type and an initial number of vertices. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">type</td><td>Type of primitives </td></tr>
    <tr><td class="paramname">vertexCount</td><td>Initial number of vertices in the array </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a80c8f6865e53bd21fc6cb10fffa10035"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::VertexArray::append </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vertex.php">Vertex</a> &amp;&#160;</td>
          <td class="paramname"><em>vertex</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add a vertex to the array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">vertex</td><td><a class="el" href="classsf_1_1Vertex.php" title="Define a point with color and texture coordinates. ">Vertex</a> to add </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a3654c424aca1f9e468f369bc777c839c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::VertexArray::clear </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Clear the vertex array. </p>
<p>This function removes all the vertices from the array. It doesn't deallocate the corresponding memory, so that adding new vertices after clearing doesn't involve reallocating all the memory. </p>

</div>
</div>
<a class="anchor" id="a741d1b1acbb175289eab37bbf49cbb24"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">FloatRect</a> sf::VertexArray::getBounds </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Compute the bounding rectangle of the vertex array. </p>
<p>This function returns the minimal axis-aligned rectangle that contains all the vertices of the array.</p>
<dl class="section return"><dt>Returns</dt><dd>Bounding rectangle of the vertex array </dd></dl>

</div>
</div>
<a class="anchor" id="af2205f76fe98fb3cf1f303f25d43c045"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> sf::VertexArray::getPrimitiveType </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the type of primitives drawn by the vertex array. </p>
<dl class="section return"><dt>Returns</dt><dd>Primitive type </dd></dl>

</div>
</div>
<a class="anchor" id="afcf63214ffaf5903c818d7f2bf49970b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::size_t sf::VertexArray::getVertexCount </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return the vertex count. </p>
<dl class="section return"><dt>Returns</dt><dd>Number of vertices in the array </dd></dl>

</div>
</div>
<a class="anchor" id="a6006676417d91f42d0278f1abcfe4352"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Vertex.php">Vertex</a>&amp; sf::VertexArray::operator[] </td>
          <td>(</td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>index</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get a read-write access to a vertex by its index. </p>
<p>This function doesn't check <em>index</em>, it must be in range [0, <a class="el" href="classsf_1_1VertexArray.php#afcf63214ffaf5903c818d7f2bf49970b" title="Return the vertex count. ">getVertexCount()</a> - 1]. The behavior is undefined otherwise.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">index</td><td>Index of the vertex to get</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Reference to the index-th vertex</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1VertexArray.php#afcf63214ffaf5903c818d7f2bf49970b" title="Return the vertex count. ">getVertexCount</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ab41c7768708eb55e8bb13eecce003cc4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Vertex.php">Vertex</a>&amp; sf::VertexArray::operator[] </td>
          <td>(</td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>index</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get a read-only access to a vertex by its index. </p>
<p>This function doesn't check <em>index</em>, it must be in range [0, <a class="el" href="classsf_1_1VertexArray.php#afcf63214ffaf5903c818d7f2bf49970b" title="Return the vertex count. ">getVertexCount()</a> - 1]. The behavior is undefined otherwise.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">index</td><td>Index of the vertex to get</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Const reference to the index-th vertex</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1VertexArray.php#afcf63214ffaf5903c818d7f2bf49970b" title="Return the vertex count. ">getVertexCount</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a0c0fe239e8f9a54e64d3bbc96bf548c0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::VertexArray::resize </td>
          <td>(</td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>vertexCount</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Resize the vertex array. </p>
<p>If <em>vertexCount</em> is greater than the current size, the previous vertices are kept and new (default-constructed) vertices are added. If <em>vertexCount</em> is less than the current size, existing vertices are removed from the array.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">vertexCount</td><td>New size of the array (number of vertices) </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aa38c10707c28a97f4627ae8b2f3ad969"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::VertexArray::setPrimitiveType </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a>&#160;</td>
          <td class="paramname"><em>type</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the type of primitives to draw. </p>
<p>This function defines how the vertices must be interpreted when it's time to draw them: </p><ul>
<li>As points </li>
<li>As lines </li>
<li>As triangles </li>
<li>As quads The default primitive type is sf::Points.</li>
</ul>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">type</td><td>Type of primitive </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="VertexArray_8hpp_source.php">VertexArray.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
