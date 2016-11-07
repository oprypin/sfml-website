<?php
    $version = '2.4.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Packet.php">Packet</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::Packet Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#a7dd6e429b87520008326c4d71f1cf011">append</a>(const void *data, std::size_t sizeInBytes)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Packet.php#a133ea8b8fe6e93c230f0d79f19a3bf0d">clear</a>()</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#aee3adfca6303f1e6bde3c62be392b945">endOfPacket</a>() const </td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Packet.php#a304ba9ec94c992710f4dfff879c6340e">getData</a>() const </td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#a004b62aa5bafa69df8917171a3fe1fa0">getDataSize</a>() const </td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Packet.php#ab71a31ef0f1d5d856de6f9fc75434128">onReceive</a>(const void *data, std::size_t size)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#a052e955906c9bfd671622cb625380edc">onSend</a>(std::size_t &amp;size)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">virtual</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Packet.php#addcb990cde37859c748273d9de55e628">operator BoolType</a>() const </td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#aa5a465ed02ba29d83ecdafb0ac3fff21">operator&lt;&lt;</a>(bool data)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(Int8 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(Uint8 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(Int16 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(Uint16 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(Int32 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(Uint32 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(Int64 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(Uint64 data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(float data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(double data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(const char *data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(const std::string &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(const wchar_t *data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&lt;&lt;</b>(const std::wstring &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&lt;&lt;</b>(const String &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#af8e26c63ba9bdccd262565ff0d3eeba2">operator&gt;&gt;</a>(bool &amp;data)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(Int8 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(Uint8 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(Int16 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(Uint16 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(Int32 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(Uint32 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(Int64 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(Uint64 &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(float &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(double &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(char *data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(std::string &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(wchar_t *data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>operator&gt;&gt;</b>(std::wstring &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>operator&gt;&gt;</b>(String &amp;data) (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Packet.php#a786e5d4ced83992ceefa1799963ea858">Packet</a>()</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"></td></tr>
  <tr bgcolor="#f0f0f0"><td class="entry"><b>TcpSocket</b> (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"><span class="mlabel">friend</span></td></tr>
  <tr bgcolor="#f0f0f0" class="even"><td class="entry"><b>UdpSocket</b> (defined in <a class="el" href="classsf_1_1Packet.php">sf::Packet</a>)</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"><span class="mlabel">friend</span></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Packet.php#adc0490ca3c7c3d1e321bd742e5213913">~Packet</a>()</td><td class="entry"><a class="el" href="classsf_1_1Packet.php">sf::Packet</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
