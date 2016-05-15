
img.usr {
	padding:		0 !important;
	margin:			0 !important;
	border:			none !important;
	display:		inline !important;
	height:			16px !important;
	vertical-align:	baseline;
}

a.tooltip {
	outline: none;
}
a.tooltip strong {
	line-height: 30px;
}
a.tooltip:hover {
	text-decoration: none;
} 
a.tooltip span.tooltip {
    z-index:		10;
    display:		none;
    padding:		14px 20px;
    margin-top:		-12px;
	margin-left:	28px;
    width:			30;
    line-height:	16px;
}
a.tooltip:hover span.tooltip{
    display:	inline;
	position:	absolute;
	color:		#111;
    border:		1px solid #DCA;
    background:	#fffAF0;
}
img.callout {
	z-index:	20;
	position:	absolute;
	top:		12px;
	border:		0;
	left:		-12px;
}

/*CSS3 extras*/
a.tooltip span.tooltip
{
    border-radius:	4px;
    box-shadow:		5px 5px 8px #CCC;
}

table.usr {
	border: none;
}

span.usr, div.usr {
	display: inline !important;
}

#usrFooter {
	text-align: center;
	color: #888888;
	background-color: #FFFFFC;
	padding: 5px 0;
	margin: 20px 2px 0px;
	border-style: solid;
	border-color: #dadada;
	border-width: 1px 0;
}