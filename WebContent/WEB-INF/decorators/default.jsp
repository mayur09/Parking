<!DOCTYPE html>
<%@ include file="../views/common/taglibs.jsp"%>
<html>
<head>
<title><sitemesh:write property='title' /><spring:message
		code="webapp.name" /></title>
</head>
<body>

	<div id="ajaxProcessingImage" class="page-loading-overlay loaded">
		<div class="loader-2"></div>
	</div>

	<div id="ajaxProcessingDiv" class="load_circle_wrapper loaded">
		<div class="loading_spinner">
			<div id="wrap_spinner">
				<div class="loading outer">
					<div class="loading inner"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Includes the header page. -->
	<jsp:include page="../views/common/header.jsp" />

	<!-- Includes the body page. -->
	<div class="main-page">
		
		<div class="right-cont">

			<span id="tradingregionOrStoreId" class="hide"><spring:message
					code='all.value' /></span> <span class="hide"
				id="tradingregionOrStoreName"><spring:message code='all' /></span>
			<span class="hide" id="selectStore"><spring:message
					code='please.select.store' /></span> <span class="hide" id="selectDrawer"><spring:message
					code='please.select' /></span> <span class="hide" id="noDataError"><spring:message
					code='error.data.not.found' /></span> <span class="hide" id="projectRoot"><spring:message
					code='root' /></span>

			<sitemesh:write property='body' />
			<!-- Includes the footer page. -->
			<jsp:include page="../views/common/footer.jsp" />
		</div>
	</div>
	<a href="#" class="scrollToTop"></a>
 
</body>
</html>