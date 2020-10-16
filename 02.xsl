<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
	<html> 
		<head>Xsl ttra</head>
	</html>
	<body>
		<h1>Khoa hoc</h1>
		<h3>Nhung vao</h3>
		<div>
		
	
			<xsl:for-each select="//book[price/real &gt; price/saleoff]">
				<xsl:value-of select="title"/><br/>
				<h3>Tien van chuyyen: <xsl:value-of select="round((weight div 100) * (shipping/US))"/></h3>
			</xsl:for-each>
			<xsl:value-of select="sum(//price/saleoff)"/>
			
		</div>
	</body>	</xsl:template >
	<!--<<xsl:apply-templates />-->
	
	<!--<xsl:template match="book">
		<ul>
			<li>Ten khoa hoc: <xsl:value-of select="title" />
			</li>
			<li>Tac gia: <xsl:value-of select="author" /></li>
			<li>So trang: <xsl:value-of select="pages" /></li>
			<xsl:if test="weight &gt; 400">
			<li>Trong luong: <xsl:value-of select="weight" />
			<xsl:value-of select="weight/@units" />
			</li>
			</xsl:if>
			<li>
				Chu y
				<xsl:choose>
					<xsl:when test="weight &gt; 400">
						Van chuyen co phi
					</xsl:when>
					<xsl:otherwise>
						Van chuyen mien phi
					</xsl:otherwise>
				</xsl:choose>
			</li>
		</ul>
		<hr/>
	</xsl:template>-->
</xsl:stylesheet>