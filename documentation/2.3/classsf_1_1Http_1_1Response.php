<?php
    $version = '2.3'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Http::Response Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Http.php">Http</a></li><li class="navelem"><a class="el" href="classsf_1_1Http_1_1Response.php">Response</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1Http_1_1Response-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Http::Response Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Define a HTTP response.  
 <a href="classsf_1_1Http_1_1Response.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Http_8hpp_source.php">Http.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a663e071978e30fbbeb20ed045be874d8"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8">Status</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a0158f932254d3f09647dd1f64bd43832">Ok</a> = 200, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a0a6e8bafa9365a0ed10b8a9cbfd0649b">Created</a> = 201, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8ad328945457bd2f0d65107ba6b5ccd443">Accepted</a> = 202, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8aefde9e4abf5682dcd314d63143be42e0">NoContent</a> = 204, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a77327cc2a5e34cc64030b322e61d12a8">ResetContent</a> = 205, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a0cfae3ab0469b73dfddc54312a5e6a8a">PartialContent</a> = 206, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8add95cbd8fa27516821f763488557f96b">MultipleChoices</a> = 300, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a2f91651db3a09628faf68cbcefa0810a">MovedPermanently</a> = 301, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a05c50d7b17c844e0b909e5802d5f1587">MovedTemporarily</a> = 302, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a060ebc3af266e6bfe045b89e298e2545">NotModified</a> = 304, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a3f88a714cf5483ee22f9051e5a3c080a">BadRequest</a> = 400, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8ab7a79b7bff50fb1902c19eecbb4e2a2d">Unauthorized</a> = 401, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a64492842e823ebe12a85539b6b454986">Forbidden</a> = 403, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8affca8a8319a62d98bd3ef90ff5cfc030">NotFound</a> = 404, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a12533d00093b190e6d4c0076577e2239">RangeNotSatisfiable</a> = 407, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8adae2b2a936414349d55b4ed8c583fed1">InternalServerError</a> = 500, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a6920ba06d7e2bcf0b325da23ee95ef68">NotImplemented</a> = 501, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8aad0cbad4cdaf448beb763e86bc1f747c">BadGateway</a> = 502, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8ac4fffba9d5ad4c14171a1bbe4f6adf87">ServiceNotAvailable</a> = 503, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a215935d823ab44694709a184a71353b0">GatewayTimeout</a> = 504, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8aeb32a1a087d5fcf1a42663eb40c3c305">VersionNotSupported</a> = 505, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a0af0090420e60bf54da4860749345c95">InvalidResponse</a> = 1000, 
<a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a7f307376f13bdc06b24fc274ecd2aa60">ConnectionFailed</a> = 1001
<br />
 }</td></tr>
<tr class="memdesc:a663e071978e30fbbeb20ed045be874d8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Enumerate all the valid status codes for a response.  <a href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8">More...</a><br /></td></tr>
<tr class="separator:a663e071978e30fbbeb20ed045be874d8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a2e51c89356fe6a007c448a841a9ec08c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a2e51c89356fe6a007c448a841a9ec08c">Response</a> ()</td></tr>
<tr class="memdesc:a2e51c89356fe6a007c448a841a9ec08c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a2e51c89356fe6a007c448a841a9ec08c">More...</a><br /></td></tr>
<tr class="separator:a2e51c89356fe6a007c448a841a9ec08c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a25d7cf86538a1045d31e0b601090b8f0"><td class="memItemLeft" align="right" valign="top">const std::string &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a25d7cf86538a1045d31e0b601090b8f0">getField</a> (const std::string &amp;field) const </td></tr>
<tr class="memdesc:a25d7cf86538a1045d31e0b601090b8f0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the value of a field.  <a href="#a25d7cf86538a1045d31e0b601090b8f0">More...</a><br /></td></tr>
<tr class="separator:a25d7cf86538a1045d31e0b601090b8f0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a542e9856b1dd260a83940eb982b7f19a"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8">Status</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a542e9856b1dd260a83940eb982b7f19a">getStatus</a> () const </td></tr>
<tr class="memdesc:a542e9856b1dd260a83940eb982b7f19a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the response status code.  <a href="#a542e9856b1dd260a83940eb982b7f19a">More...</a><br /></td></tr>
<tr class="separator:a542e9856b1dd260a83940eb982b7f19a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3da9c689318b945dd12cbe7167161dc6"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a3da9c689318b945dd12cbe7167161dc6">getMajorHttpVersion</a> () const </td></tr>
<tr class="memdesc:a3da9c689318b945dd12cbe7167161dc6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the major HTTP version number of the response.  <a href="#a3da9c689318b945dd12cbe7167161dc6">More...</a><br /></td></tr>
<tr class="separator:a3da9c689318b945dd12cbe7167161dc6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1c2217a6a848695875380a70d060b239"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a1c2217a6a848695875380a70d060b239">getMinorHttpVersion</a> () const </td></tr>
<tr class="memdesc:a1c2217a6a848695875380a70d060b239"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the minor HTTP version number of the response.  <a href="#a1c2217a6a848695875380a70d060b239">More...</a><br /></td></tr>
<tr class="separator:a1c2217a6a848695875380a70d060b239"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6b74ef73051a16ebb20041495c758e22"><td class="memItemLeft" align="right" valign="top">const std::string &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php#a6b74ef73051a16ebb20041495c758e22">getBody</a> () const </td></tr>
<tr class="memdesc:a6b74ef73051a16ebb20041495c758e22"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the body of the response.  <a href="#a6b74ef73051a16ebb20041495c758e22">More...</a><br /></td></tr>
<tr class="separator:a6b74ef73051a16ebb20041495c758e22"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:aba95e2a7762bb5df986048b05d03a22e"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aba95e2a7762bb5df986048b05d03a22e"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>Http</b></td></tr>
<tr class="separator:aba95e2a7762bb5df986048b05d03a22e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Define a HTTP response. </p>

<p>Definition at line <a class="el" href="Http_8hpp_source.php#l00193">193</a> of file <a class="el" href="Http_8hpp_source.php">Http.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="a663e071978e30fbbeb20ed045be874d8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8">sf::Http::Response::Status</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Enumerate all the valid status codes for a response. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a0158f932254d3f09647dd1f64bd43832"></a>Ok&#160;</td><td class="fielddoc">
<p>Most common code returned when operation was successful. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a0a6e8bafa9365a0ed10b8a9cbfd0649b"></a>Created&#160;</td><td class="fielddoc">
<p>The resource has successfully been created. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8ad328945457bd2f0d65107ba6b5ccd443"></a>Accepted&#160;</td><td class="fielddoc">
<p>The request has been accepted, but will be processed later by the server. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8aefde9e4abf5682dcd314d63143be42e0"></a>NoContent&#160;</td><td class="fielddoc">
<p>The server didn't send any data in return. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a77327cc2a5e34cc64030b322e61d12a8"></a>ResetContent&#160;</td><td class="fielddoc">
<p>The server informs the client that it should clear the view (form) that caused the request to be sent. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a0cfae3ab0469b73dfddc54312a5e6a8a"></a>PartialContent&#160;</td><td class="fielddoc">
<p>The server has sent a part of the resource, as a response to a partial GET request. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8add95cbd8fa27516821f763488557f96b"></a>MultipleChoices&#160;</td><td class="fielddoc">
<p>The requested page can be accessed from several locations. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a2f91651db3a09628faf68cbcefa0810a"></a>MovedPermanently&#160;</td><td class="fielddoc">
<p>The requested page has permanently moved to a new location. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a05c50d7b17c844e0b909e5802d5f1587"></a>MovedTemporarily&#160;</td><td class="fielddoc">
<p>The requested page has temporarily moved to a new location. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a060ebc3af266e6bfe045b89e298e2545"></a>NotModified&#160;</td><td class="fielddoc">
<p>For conditional requests, means the requested page hasn't changed and doesn't need to be refreshed. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a3f88a714cf5483ee22f9051e5a3c080a"></a>BadRequest&#160;</td><td class="fielddoc">
<p>The server couldn't understand the request (syntax error) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8ab7a79b7bff50fb1902c19eecbb4e2a2d"></a>Unauthorized&#160;</td><td class="fielddoc">
<p>The requested page needs an authentication to be accessed. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a64492842e823ebe12a85539b6b454986"></a>Forbidden&#160;</td><td class="fielddoc">
<p>The requested page cannot be accessed at all, even with authentication. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8affca8a8319a62d98bd3ef90ff5cfc030"></a>NotFound&#160;</td><td class="fielddoc">
<p>The requested page doesn't exist. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a12533d00093b190e6d4c0076577e2239"></a>RangeNotSatisfiable&#160;</td><td class="fielddoc">
<p>The server can't satisfy the partial GET request (with a "Range" header field) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8adae2b2a936414349d55b4ed8c583fed1"></a>InternalServerError&#160;</td><td class="fielddoc">
<p>The server encountered an unexpected error. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a6920ba06d7e2bcf0b325da23ee95ef68"></a>NotImplemented&#160;</td><td class="fielddoc">
<p>The server doesn't implement a requested feature. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8aad0cbad4cdaf448beb763e86bc1f747c"></a>BadGateway&#160;</td><td class="fielddoc">
<p>The gateway server has received an error from the source server. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8ac4fffba9d5ad4c14171a1bbe4f6adf87"></a>ServiceNotAvailable&#160;</td><td class="fielddoc">
<p>The server is temporarily unavailable (overloaded, in maintenance, ...) </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a215935d823ab44694709a184a71353b0"></a>GatewayTimeout&#160;</td><td class="fielddoc">
<p>The gateway server couldn't receive a response from the source server. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8aeb32a1a087d5fcf1a42663eb40c3c305"></a>VersionNotSupported&#160;</td><td class="fielddoc">
<p>The server doesn't support the requested HTTP version. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a0af0090420e60bf54da4860749345c95"></a>InvalidResponse&#160;</td><td class="fielddoc">
<p><a class="el" href="classsf_1_1Http_1_1Response.php" title="Define a HTTP response. ">Response</a> is not a valid HTTP one. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a663e071978e30fbbeb20ed045be874d8a7f307376f13bdc06b24fc274ecd2aa60"></a>ConnectionFailed&#160;</td><td class="fielddoc">
<p>Connection with server failed. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Http_8hpp_source.php#l00201">201</a> of file <a class="el" href="Http_8hpp_source.php">Http.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a2e51c89356fe6a007c448a841a9ec08c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Http::Response::Response </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Constructs an empty response. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a6b74ef73051a16ebb20041495c758e22"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const std::string&amp; sf::Http::Response::getBody </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the body of the response. </p>
<p>The body of a response may contain: </p><ul>
<li>the requested page (for GET requests) </li>
<li>a response from the server (for POST requests) </li>
<li>nothing (for HEAD requests) </li>
<li>an error message (in case of an error)</li>
</ul>
<dl class="section return"><dt>Returns</dt><dd>The response body </dd></dl>

</div>
</div>
<a class="anchor" id="a25d7cf86538a1045d31e0b601090b8f0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const std::string&amp; sf::Http::Response::getField </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>field</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the value of a field. </p>
<p>If the field <em>field</em> is not found in the response header, the empty string is returned. This function uses case-insensitive comparisons.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">field</td><td>Name of the field to get</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Value of the field, or empty string if not found </dd></dl>

</div>
</div>
<a class="anchor" id="a3da9c689318b945dd12cbe7167161dc6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::Http::Response::getMajorHttpVersion </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the major HTTP version number of the response. </p>
<dl class="section return"><dt>Returns</dt><dd>Major HTTP version number</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Http_1_1Response.php#a1c2217a6a848695875380a70d060b239" title="Get the minor HTTP version number of the response. ">getMinorHttpVersion</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a1c2217a6a848695875380a70d060b239"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::Http::Response::getMinorHttpVersion </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the minor HTTP version number of the response. </p>
<dl class="section return"><dt>Returns</dt><dd>Minor HTTP version number</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Http_1_1Response.php#a3da9c689318b945dd12cbe7167161dc6" title="Get the major HTTP version number of the response. ">getMajorHttpVersion</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a542e9856b1dd260a83940eb982b7f19a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8">Status</a> sf::Http::Response::getStatus </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the response status code. </p>
<p>The status code should be the first thing to be checked after receiving a response, it defines whether it is a success, a failure or anything else (see the Status enumeration).</p>
<dl class="section return"><dt>Returns</dt><dd>Status code of the response </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Http_8hpp_source.php">Http.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
