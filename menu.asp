<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />
<meta http-equiv="Content-Type" content="text/html; CHARSET=UTF-8" />
<title>Hattrick</title>
<script type="text/javascript">
<!--
	function openPage(openURL){
		top.frames["main"].location.href=openURL;
	}
	function sf(){
		document.login.loginname.focus();
	}
	/**
	 * Get element name or id in document
	 */
	function GetElement(name){
		var ctrl = document.getElementById(name);
		if(null == ctrl){
			ctrl = document.getElementsByName(name)[0];
		}
		return ctrl;
	}
// -->
</script>

<script type="text/javascript" src="js/flash_detect.js">
//<![CDATA[
function getFlashVersion() { return null; };
//]]>
</script>

<link rel="stylesheet" href="css/menu.css" type="text/css" />

</head>

<body onload="openPage('myHattrick.asp');">
<h1>MENÚ</h1><div class="menu">
	
		<div class="level1"><a href="menu.asp?menyType=loggedIn">Mi Hattrick</a></div>
		<div class="level2">- <a href="myHattrick.asp" target="main">Mi Hattrick</a><br />
		- <a href="Invites.aspx?" target="main">Invitaciones</a><br />
		- <a href="extrainfo.asp?" target="main">Preferencias</a><br />
		- <a href="editorials.aspx" target="main">Editoriales</a><br />
		- <a href="calendar.aspx?" target="main">Calendario</a><br />
		
		<a href="aboutSupporter.aspx" target="main"><img src="images/star10x8.gif" border="0" width="10" height="8" alt="" />Supporter</a><br />
		
		</div>
		
		<div class="level1"><a href="menu.asp?showMenu=iMyTeam" onclick="openPage('teamDetails.asp?TeamID=1369155');">ThePiso &raquo;</a></div>
	
		    <div class="level1"><a href="menu.asp?showMenu=iMyYouthTeam" onclick="openPage('YouthOverView.aspx?');">Juveniles &raquo;</a></div>
	    
		<div class="level1"><a href="menu.asp?showMenu=iSupporter" onclick="openPage('transfers.asp');">Herramientas &raquo;</a></div>
		
		<div class="level1"><a href="menu.asp?showMenu=results" onclick="openPage('leagueSystemDetails.aspx?leagueID=36');">España &raquo;</a></div>				
	
		<div class="level1"><a href="menu.asp?showMenu=WorldCup" onclick="openPage('World/WorldCupStart.aspx');">Internacional &raquo;</a></div>
	
		<div class="level1"><a href="menu.asp?showMenu=about" onclick="openPage('help.aspx');">Ayuda &raquo;</a></div>
	
		<div class="level1"><a href="menu.asp?showMenu=iMobile" onclick="openPage('trackingInfo.aspx');">Móvil &raquo;</a></div>
	
		<div class="level1"><a href="menu.asp?showMenu=iShop" onclick="openPage('shop.asp');">Tienda &raquo;</a></div>
	
	
</div>	



    <h1>COMUNIDAD</h1>
    <div class="menu">
	    
		    <div class="level1"><a href="mail.asp?" target="main">Correo</a>&nbsp;
		        
		    </div>
	    
		<div class="level1"><a href="menu.asp?showMenu=alliances" onclick="openPage('Alliances/alliances.aspx');">Federaciones &raquo;</a></div>
	
		<div class="level1"><a href="menu.asp?showMenu=community" onclick="openPage('community.aspx');">Comunidad &raquo;</a></div>
		
		<div class="level1"><a href="defaultconf.asp" target="_top">Conferencia</a></div>
		<div class="level2">
		- <a href="cnB.asp" target="main">Vistazo rápido</a><br />
		- <a href="SimpleAds.aspx" target="main">Anuncios</a>
		</div>
		<br />
		<div class="level1"><a href="default.asp?actionType=logout" target="_top">Salir</a></div>
</div>

<h1>ENLACES</h1><div class="menu">
	<table>
	
	<tr style="height:26px; vertical-align:bottom;">
	<td>
		<span style="padding:2px; padding-left:4px;"><a href="Tools/notebook.aspx" target="main"><img src="img.axd?res=Icons&img=notes.gif" width="12" height="18" alt="Bloc de notas" border="0" title="Bloc de notas" /></a></span>
		<span style="padding:2px;"><a href="bookmarks.aspx" target="main"><img src="img.axd?res=Icons&img=bookmarks.gif" border="0" alt="Favoritos" title="Favoritos" /></a></span>
		<span style="padding:2px;"><a href="Tools/reminder.aspx" target="main"><img src="img.axd?res=Icons&img=reminder.gif" width="17" height="18" alt="Recordatorios" border="0" title="Recordatorios" /></a></span>
		<span style="padding:2px;"><a href="live.aspx" target="main"><img src="img.axd?res=Icons&img=live.gif" width="17" height="18" alt="HT Live" border="0" title="HT Live" /></a></span>
		<span style="padding:1px;"><a href="search.asp" target="main"><img src="img.axd?res=Icons&img=search.gif" width="16" height="18" alt="Buscar" border="0" title="Buscar" /></a></span>
	</td>
	</tr>
	
	<tr>
	<td>
		&nbsp;<b>Estás en:</b><br />
		<form name="ChangeLeagueSystem" style="margin-top:2px; margin-bottom:5px" action="">
		&nbsp;<select name="leagueSystemID" onchange="location.href='menu.asp?action=changeLeagueSystem&amp;leagueSystemID=' + document.ChangeLeagueSystem.leagueSystemID.options[document.ChangeLeagueSystem.leagueSystemID.selectedIndex].value;">
		<option value="128">Al Iraq</option>
		<option value="118">Al Jazair</option>
		<option value="127">Al Kuwayt</option>
		<option value="77">Al Maghrib</option>
		<option value="106">Al Urdun</option>
		<option value="133">Al Yaman</option>
		<option value="105">Andorra</option>
		<option value="130">Angola</option>
		<option value="7">Argentina</option>
		<option value="129">Azərbaycan</option>
		<option value="123">Bahrain</option>
		<option value="132">Bangladesh</option>
		<option value="124">Barbados</option>
		<option value="91">Belarus</option>
		<option value="44">België</option>
		<option value="139">Benin</option>
		<option value="74">Bolivia</option>
		<option value="69">Bosna i Herc</option>
		<option value="16">Brasil</option>
		<option value="136">Brunei</option>
		<option value="62">Bulgaria</option>
		<option value="126">C. d’Ivoire</option>
		<option value="125">Cabo Verde</option>
		<option value="17">Canada</option>
		<option value="52">Česká rep.</option>
		<option value="18">Chile</option>
		<option value="60">Chin. Taipei</option>
		<option value="34">China</option>
		<option value="19">Colombia</option>
		<option value="81">Costa Rica</option>
		<option value="131">Crna Gora</option>
		<option value="61">Cymru</option>
		<option value="89">Cyprus</option>
		<option value="11">Danmark</option>
		<option value="3">Deutschland</option>
		<option value="73">Ecuador</option>
		<option value="56">Eesti</option>
		<option value="100">El Salvador</option>
		<option value="2">England</option>
		<option value="36" selected="selected">España</option>
		<option value="76">Føroyar</option>
		<option value="5">France</option>
		<option value="137">Ghana</option>
		<option value="107">Guatemala</option>
		<option value="30">Hanguk</option>
		<option value="122">Hayastan</option>
		<option value="50">Hellas</option>
		<option value="99">Honduras</option>
		<option value="59">Hong Kong</option>
		<option value="58">Hrvatska</option>
		<option value="20">India</option>
		<option value="54">Indonesia</option>
		<option value="85">Iran</option>
		<option value="21">Ireland</option>
		<option value="38">Ísland</option>
		<option value="63">Israel</option>
		<option value="4">Italia</option>
		<option value="94">Jamaica</option>
		<option value="138">Kampuchea</option>
		<option value="112">Kazakhstan</option>
		<option value="95">Kenya</option>
		<option value="102">Kyrgyzstan</option>
		<option value="53">Latvija</option>
		<option value="84">Lëtzebuerg</option>
		<option value="117">Liechtenst.</option>
		<option value="66">Lietuva</option>
		<option value="120">Lubnan</option>
		<option value="51">Magyarország</option>
		<option value="97">Makedonija</option>
		<option value="45">Malaysia</option>
		<option value="144">Maldives</option>
		<option value="101">Malta</option>
		<option value="6">México</option>
		<option value="33">Misr</option>
		<option value="135">Moçambique</option>
		<option value="103">Moldova</option>
		<option value="119">Mongol Uls</option>
		<option value="93">N. Ireland</option>
		<option value="14">Nederland</option>
		<option value="111">Nicaragua</option>
		<option value="75">Nigeria</option>
		<option value="22">Nippon</option>
		<option value="9">Norge</option>
		<option value="15">Oceania</option>
		<option value="134">Oman</option>
		<option value="39">Österreich</option>
		<option value="71">Pakistan</option>
		<option value="96">Panamá</option>
		<option value="72">Paraguay</option>
		<option value="23">Perú</option>
		<option value="55">Philippines</option>
		<option value="24">Polska</option>
		<option value="25">Portugal</option>
		<option value="31">Prathet Thai</option>
		<option value="141">Qatar</option>
		<option value="88">Rep. Dom.</option>
		<option value="37">România</option>
		<option value="35">Rossiya</option>
		<option value="104">Sakartvelo</option>
		<option value="79">Saudi Arabia</option>
		<option value="46">Schweiz</option>
		<option value="26">Scotland</option>
		<option value="121">Sénégal</option>
		<option value="98">Shqiperia</option>
		<option value="47">Singapore</option>
		<option value="64">Slovenija</option>
		<option value="67">Slovensko</option>
		<option value="27">South Africa</option>
		<option value="57">Srbija</option>
		<option value="12">Suomi</option>
		<option value="113">Suriname</option>
		<option value="140">Suriyah</option>
		<option value="1">Sverige</option>
		<option value="142">Tanzania</option>
		<option value="80">Tounes</option>
		<option value="110">Trinidad/T.</option>
		<option value="32">Türkiye</option>
		<option value="83">U.A.E.</option>
		<option value="143">Uganda</option>
		<option value="68">Ukraina</option>
		<option value="28">Uruguay</option>
		<option value="8">USA</option>
		<option value="29">Venezuela</option>
		<option value="70">Vietnam</option>
		
		</select>
		</form>
		
	</td>
	</tr>
	</table>
</div>


	<div class="intel">
	<img src="images/intel/intel_menu.gif" border="0" height="30" width="106" alt="Official Partner: Intel" title="Official Partner: Intel" />
	</div>

    <br />
    <div class="level2">
	<a href="Agreements/Agreement.aspx?actionType=privacy" target="main">Privacidad</a>
    </div>
</body>
</html>
